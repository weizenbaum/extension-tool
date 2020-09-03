<?php
// schon in index script
// require_once __DIR__ . '/../vendor/autoload.php';
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

class CreateClass
{

    /**
     * Class to generate class code and create path/write file
     *
     * @param string $input
     * @param string $separator
     * @return mixed done: optional arguments/parameters,
     *        
     *        
     * @todo: Uncaught ReflectionException: Function [e.g. magic_quotes_runtime()] does not exist
     * typed
     * @xxx: types of parameters
     * @xxx: type(s) of return?
     * https://www.php.net/manual/en/functions.internal.php
     * ------------------------------------------------------
     * Return values:
     * @xxx: Note: If the parameters given to a function are not what it expects, such as passing an array where a string is expected, the return value of the function is undefined. In this case it will likely return NULL but this is just a convention, and cannot be relied upon.
     * dito
     * ---------------------------------------------------------
     * @todo: are there internal functions with variadic parameters?
     * --------------------------------------------------------------
     * @xxx: argument/parameter defaults, necessary to monitor internal state respective to make not given parameters values available?
     * test : in_array ( mixed $needle, array $haystack [, bool $strict = FALSE ] ) : bool
     * ------------------------------------------------------------------
     * done: pass by reference:
     * preg_match ( string $pattern , string $subject [, array &$matches
     * [, int $flags = 0 [, int $offset = 0 ]]] ) : int
     * Class has getter for parameters that are called by reference
     * -----------------------------------------------------------
     * StudlyCaps PSR-1 (Pascal case?)
     * https://stackoverflow.com/questions/2791998/convert-dashes-to-camelcase-in-php
     */
    function studlyCaps($input, $separator = '_')
    {
        // quick: handle func name: gettext, _-function
        if ($input === '_') {
            return 'underscore';
        }
        $out = str_replace($separator, '', ucwords($input, $separator));
        // quick: handle ext name: Zend OPcache
        $out = str_replace(' ', '', $out);

        return $out;
        // return str_replace($separator, '', lcfirst(ucwords($input, $separator)));
    }

    function renameKeywords($input)
    {
        var_dump($input);
        // quick: handle define
        if ($input === 'define') {
            $input .= 'Function';
            return $input;
        } else
            return $input;
    }

    function createFile($functionName, $returnHandling = null)
    {
        // If needed, directories are also made implicitly when writing to a deeper path. In general creating a directory is not required in order to write to it.
        // $adapter = new Local(__DIR__.'/path/to/root/');
        $adapter = new Local('/');
        $filesystem = new Filesystem($adapter);

        $projectVendorNamespace = 'PhpFunctionWrapper';

        $this->returnHandling = $returnHandling;
        $fc = $this->renameKeywords($functionName);
        $fc = $this->studlyCaps($fc);

        $rf = new ReflectionFunction($functionName);
        $params = $rf->getParameters();

        $class1 = new Nette\PhpGenerator\ClassType($fc);

        $m = $class1->addMethod('run');
        $m->addComment('main method, encapsulates necessary and comfort actions to prepare and run internal function');
        $setterString = '';
        $propArray = array();
        $argsNotOptional = 0;
        $isPassedByReference = array();
        /*@var $param ReflectionParameter */
        foreach ($params as $param) {
            $class1->addProperty($param->getName());
            if ($param->isPassedByReference()) {
                $isPassedByReference[] = $param->getName();
            }

            if ($param->isOptional()) {
                $m->addParameter($param->getName(), null);
            } else {
                $m->addParameter($param->getName());
                $argsNotOptional ++;
            }

            $setterString .= '$this->' . $param->getName() . ' = $' . $param->getName() . ';' . "\n";
            $propArray[] = '$this->' . $param->getName();
        }

        foreach ($isPassedByReference as $name) {
            $mGet = $class1->addMethod('get' . $this->studlyCaps($name));
            $code = 'return $this->' . $name . ';' . "\n";
            $mGet->addBody($code);
        }

        $code = '$this->numArgs = func_num_args();' . "\n";
        $code .= $setterString;
        $code .= '$this->prepareInput(); 
$this->execute(); 
$this->prepareOutput();
return $this->return;';
        $m->setBody($code);

        $mp = $class1->addMethod('prepareInput');
        $paramsCount = count($params);

        // too few arguments
        $code = '';
        if ($argsNotOptional > 0) {
            $code .= 'if ($this->numArgs < ' . $argsNotOptional . ') {' . "\n";
            $code .= 'throw new \\Exception(\'too few arguments\');' . "\n";
            $code .= 'return;' . "\n";
            $code .= '}' . "\n";
        }
        // too many arguments
        $code .= 'if ($this->numArgs > ' . $paramsCount . ') {' . "\n";
        $code .= 'throw new \\Exception(\'too many arguments\');' . "\n";
        $code .= 'return;' . "\n";
        $code .= '}' . "\n";
        $mp->setBody($code);

        $me = $class1->addMethod('execute');

        $code = '';
        $propArray2 = array();
        $propString = '';
        if ($paramsCount === 0) {
            // no args
            $code .= '$this->return = ' . "$functionName" . '(' . $propString . ');' . "\n";
        } else {
            for ($i = 0; $i <= count($params); $i ++) {
                if ($i < $argsNotOptional) {} elseif ($i === $argsNotOptional) {
                    // arg is not optional
                    $code .= 'if ($this->numArgs === ' . $i . ') {' . "\n";
                    $code .= '$this->return = ' . "$functionName" . '(' . $propString . ');' . "\n";
                    $code .= 'return;' . "\n";
                    $code .= '}' . "\n";
                } else {
                    // arg is optional
                    $code .= 'if ($this->numArgs === ' . $i . ') {' . "\n";
                    $code .= '$this->return = ' . "$functionName" . '(' . $propString . ');' . "\n";
                    $code .= 'return;' . "\n";
                    $code .= '}' . "\n";
                }
                $propArray2[] = array_shift($propArray);
                $propString = implode(', ', $propArray2);
            }
        }
        $me->setBody($code);

        $mp = $class1->addMethod('prepareOutput');
        $code = $this->getReturnHandlingCode();
        $mp->setBody($code);

        $file = new Nette\PhpGenerator\PhpFile();
        $file->addComment('This file is auto-generated.');
        // Return Date in ISO8601 format
        $file->addComment((new \DateTime())->format('Y-m-d H:i') . ' GMT');
        $file->setStrictTypes(); // adds declare(strict_types=1)

        $extName = $rf->getExtensionName();
        $en = $this->studlyCaps($extName);
        $namespace = $file->addNamespace($projectVendorNamespace . '\\' . $en);
        $namespace->add($class1);

        /**
         * print meta info
         */
        $class1->addComment('a wrapper class for function: ' . $functionName);
        $class1->addComment('https://github.com/weizenbaum');
        $class1->addComment('built information');
        $class1->addComment('php_uname: ' . php_uname());
        $class1->addComment('phpversion: ' . phpversion());
        $class1->addComment('extension: ' . $extName);
        $class1->addComment('extension phpversion: ' . phpversion($extName));
        if ($returnHandling === null) {
            $class1->addComment('@todo: define return handling for errors etc.');
        }

        // $class = $namespace->addClass('A');
        // $class->addMethod('hello');

        // or use PsrPrinter for output compatible with PSR-2 / PSR-12
        // echo (new Nette\PhpGenerator\PsrPrinter)->printFile($file);
        $p = new Nette\PhpGenerator\PsrPrinter();

        $filename = PATH_EXTENSION_TOOL_ROOT . $projectVendorNamespace . '/' . $en . '/' . $fc . '.php';
        if ($filesystem->has($filename))
            $filesystem->delete($filename);
        $response = $filesystem->write($filename, $p->printFile($file));
    }

    private function getReturnHandlingCode()
    {
        $code = '';
        if ($this->returnHandling !== null) {
            foreach ($this->returnHandling as $key => $value) {
                if ($key === 'error') {
                    $code .= 'if ($this->return === ' . $value . ') {
throw new \\Exception(\'' . $key . ': return value is ' . $value . '\');
}';
                }
            }
        }
        return $code;
    }
}