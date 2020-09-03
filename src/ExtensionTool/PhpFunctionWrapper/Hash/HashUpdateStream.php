<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Hash;

/**
 * a wrapper class for function: hash_update_stream
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: hash
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class HashUpdateStream
{
    public $context;
    public $handle;
    public $length;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($context, $handle, $length = null)
    {
        $this->numArgs = func_num_args();
        $this->context = $context;
        $this->handle = $handle;
        $this->length = $length;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = hash_update_stream($this->context, $this->handle);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = hash_update_stream($this->context, $this->handle, $this->length);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
