<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Hash;

/**
 * a wrapper class for function: hash_update_file
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: hash
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class HashUpdateFile
{
    public $context;
    public $filename;
    public $stream_context;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($context, $filename, $stream_context = null)
    {
        $this->numArgs = func_num_args();
        $this->context = $context;
        $this->filename = $filename;
        $this->stream_context = $stream_context;
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
        $this->return = hash_update_file($this->context, $this->filename);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = hash_update_file($this->context, $this->filename, $this->stream_context);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
