<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: array_keys
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ArrayKeys
{
    public $arg;
    public $search_value;
    public $strict;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arg, $search_value = null, $strict = null)
    {
        $this->numArgs = func_num_args();
        $this->arg = $arg;
        $this->search_value = $search_value;
        $this->strict = $strict;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = array_keys($this->arg);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = array_keys($this->arg, $this->search_value);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = array_keys($this->arg, $this->search_value, $this->strict);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
