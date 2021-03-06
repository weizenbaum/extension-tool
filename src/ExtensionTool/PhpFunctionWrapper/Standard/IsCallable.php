<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: is_callable
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IsCallable
{
    public $var;
    public $syntax_only;
    public $callable_name;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($var, $syntax_only = null, $callable_name = null)
    {
        $this->numArgs = func_num_args();
        $this->var = $var;
        $this->syntax_only = $syntax_only;
        $this->callable_name = $callable_name;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getCallableName()
    {
        return $this->callable_name;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = is_callable($this->var);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = is_callable($this->var, $this->syntax_only);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = is_callable($this->var, $this->syntax_only, $this->callable_name);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
