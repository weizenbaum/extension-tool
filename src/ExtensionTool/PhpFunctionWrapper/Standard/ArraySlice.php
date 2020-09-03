<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: array_slice
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ArraySlice
{
    public $arg;
    public $offset;
    public $length;
    public $preserve_keys;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arg, $offset, $length = null, $preserve_keys = null)
    {
        $this->numArgs = func_num_args();
        $this->arg = $arg;
        $this->offset = $offset;
        $this->length = $length;
        $this->preserve_keys = $preserve_keys;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 2) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = array_slice($this->arg, $this->offset);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = array_slice($this->arg, $this->offset, $this->length);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = array_slice($this->arg, $this->offset, $this->length, $this->preserve_keys);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
