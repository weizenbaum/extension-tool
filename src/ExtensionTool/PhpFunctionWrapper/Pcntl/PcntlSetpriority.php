<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcntl;

/**
 * a wrapper class for function: pcntl_setpriority
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcntl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PcntlSetpriority
{
    public $priority;
    public $pid;
    public $process_identifier;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($priority, $pid = null, $process_identifier = null)
    {
        $this->numArgs = func_num_args();
        $this->priority = $priority;
        $this->pid = $pid;
        $this->process_identifier = $process_identifier;
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
        $this->return = pcntl_setpriority($this->priority);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = pcntl_setpriority($this->priority, $this->pid);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = pcntl_setpriority($this->priority, $this->pid, $this->process_identifier);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
