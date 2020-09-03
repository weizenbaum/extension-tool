<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: exec
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Exec
{
    public $command;
    public $output;
    public $return_value;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($command, $output = null, $return_value = null)
    {
        $this->numArgs = func_num_args();
        $this->command = $command;
        $this->output = $output;
        $this->return_value = $return_value;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getOutput()
    {
        return $this->output;
    }

    public function getReturnValue()
    {
        return $this->return_value;
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
        $this->return = exec($this->command);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = exec($this->command, $this->output);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = exec($this->command, $this->output, $this->return_value);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
