<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: ob_start
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ObStart
{
    public $user_function;
    public $chunk_size;
    public $flags;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($user_function = null, $chunk_size = null, $flags = null)
    {
        $this->numArgs = func_num_args();
        $this->user_function = $user_function;
        $this->chunk_size = $chunk_size;
        $this->flags = $flags;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = ob_start();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = ob_start($this->user_function);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = ob_start($this->user_function, $this->chunk_size);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = ob_start($this->user_function, $this->chunk_size, $this->flags);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
