<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcntl;

/**
 * a wrapper class for function: pcntl_sigtimedwait
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcntl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PcntlSigtimedwait
{
    public $set;
    public $info;
    public $seconds;
    public $nanoseconds;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($set, $info = null, $seconds = null, $nanoseconds = null)
    {
        $this->numArgs = func_num_args();
        $this->set = $set;
        $this->info = $info;
        $this->seconds = $seconds;
        $this->nanoseconds = $nanoseconds;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = pcntl_sigtimedwait($this->set);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = pcntl_sigtimedwait($this->set, $this->info);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = pcntl_sigtimedwait($this->set, $this->info, $this->seconds);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = pcntl_sigtimedwait($this->set, $this->info, $this->seconds, $this->nanoseconds);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
