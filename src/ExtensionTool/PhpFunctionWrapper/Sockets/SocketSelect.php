<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Sockets;

/**
 * a wrapper class for function: socket_select
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: sockets
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SocketSelect
{
    public $read_fds;
    public $write_fds;
    public $except_fds;
    public $tv_sec;
    public $tv_usec;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($read_fds, $write_fds, $except_fds, $tv_sec, $tv_usec = null)
    {
        $this->numArgs = func_num_args();
        $this->read_fds = $read_fds;
        $this->write_fds = $write_fds;
        $this->except_fds = $except_fds;
        $this->tv_sec = $tv_sec;
        $this->tv_usec = $tv_usec;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getReadFds()
    {
        return $this->read_fds;
    }

    public function getWriteFds()
    {
        return $this->write_fds;
    }

    public function getExceptFds()
    {
        return $this->except_fds;
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
        $this->return = socket_select($this->read_fds, $this->write_fds, $this->except_fds, $this->tv_sec);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = socket_select($this->read_fds, $this->write_fds, $this->except_fds, $this->tv_sec, $this->tv_usec);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
