<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: fsockopen
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Fsockopen
{
    public $hostname;
    public $port;
    public $errno;
    public $errstr;
    public $timeout;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($hostname, $port = null, $errno = null, $errstr = null, $timeout = null)
    {
        $this->numArgs = func_num_args();
        $this->hostname = $hostname;
        $this->port = $port;
        $this->errno = $errno;
        $this->errstr = $errstr;
        $this->timeout = $timeout;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getErrno()
    {
        return $this->errno;
    }

    public function getErrstr()
    {
        return $this->errstr;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = fsockopen($this->hostname);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = fsockopen($this->hostname, $this->port);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = fsockopen($this->hostname, $this->port, $this->errno);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = fsockopen($this->hostname, $this->port, $this->errno, $this->errstr);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = fsockopen($this->hostname, $this->port, $this->errno, $this->errstr, $this->timeout);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
