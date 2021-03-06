<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcntl;

/**
 * a wrapper class for function: pcntl_wait
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcntl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PcntlWait
{
    public $status;
    public $options;
    public $rusage;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($status, $options = null, $rusage = null)
    {
        $this->numArgs = func_num_args();
        $this->status = $status;
        $this->options = $options;
        $this->rusage = $rusage;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getRusage()
    {
        return $this->rusage;
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
        $this->return = pcntl_wait($this->status);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = pcntl_wait($this->status, $this->options);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = pcntl_wait($this->status, $this->options, $this->rusage);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
