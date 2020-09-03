<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mysqli;

/**
 * a wrapper class for function: mysqli_poll
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mysqli
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MysqliPoll
{
    public $read;
    public $write;
    public $error;
    public $sec;
    public $usec;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($read, $write, $error, $sec, $usec = null)
    {
        $this->numArgs = func_num_args();
        $this->read = $read;
        $this->write = $write;
        $this->error = $error;
        $this->sec = $sec;
        $this->usec = $usec;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getRead()
    {
        return $this->read;
    }

    public function getWrite()
    {
        return $this->write;
    }

    public function getError()
    {
        return $this->error;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 4) {
        $this->return = mysqli_poll($this->read, $this->write, $this->error, $this->sec);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = mysqli_poll($this->read, $this->write, $this->error, $this->sec, $this->usec);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
