<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Sockets;

/**
 * a wrapper class for function: socket_recvfrom
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: sockets
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SocketRecvfrom
{
    public $socket;
    public $buf;
    public $len;
    public $flags;
    public $name;
    public $port;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($socket, $buf, $len, $flags, $name, $port = null)
    {
        $this->numArgs = func_num_args();
        $this->socket = $socket;
        $this->buf = $buf;
        $this->len = $len;
        $this->flags = $flags;
        $this->name = $name;
        $this->port = $port;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getBuf()
    {
        return $this->buf;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 5) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 5) {
        $this->return = socket_recvfrom($this->socket, $this->buf, $this->len, $this->flags, $this->name);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = socket_recvfrom($this->socket, $this->buf, $this->len, $this->flags, $this->name, $this->port);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
