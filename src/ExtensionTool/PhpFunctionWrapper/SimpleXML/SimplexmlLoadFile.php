<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\SimpleXML;

/**
 * a wrapper class for function: simplexml_load_file
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: SimpleXML
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SimplexmlLoadFile
{
    public $filename;
    public $class_name;
    public $options;
    public $ns;
    public $is_prefix;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $class_name = null, $options = null, $ns = null, $is_prefix = null)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->class_name = $class_name;
        $this->options = $options;
        $this->ns = $ns;
        $this->is_prefix = $is_prefix;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = simplexml_load_file($this->filename);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = simplexml_load_file($this->filename, $this->class_name);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = simplexml_load_file($this->filename, $this->class_name, $this->options);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = simplexml_load_file($this->filename, $this->class_name, $this->options, $this->ns);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = simplexml_load_file($this->filename, $this->class_name, $this->options, $this->ns, $this->is_prefix);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
