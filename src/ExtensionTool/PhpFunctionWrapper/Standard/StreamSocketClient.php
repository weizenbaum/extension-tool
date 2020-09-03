<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: stream_socket_client
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class StreamSocketClient
{
    public $remoteaddress;
    public $errcode;
    public $errstring;
    public $timeout;
    public $flags;
    public $context;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($remoteaddress, $errcode = null, $errstring = null, $timeout = null, $flags = null, $context = null)
    {
        $this->numArgs = func_num_args();
        $this->remoteaddress = $remoteaddress;
        $this->errcode = $errcode;
        $this->errstring = $errstring;
        $this->timeout = $timeout;
        $this->flags = $flags;
        $this->context = $context;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getErrcode()
    {
        return $this->errcode;
    }

    public function getErrstring()
    {
        return $this->errstring;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = stream_socket_client($this->remoteaddress);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = stream_socket_client($this->remoteaddress, $this->errcode);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = stream_socket_client($this->remoteaddress, $this->errcode, $this->errstring);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = stream_socket_client($this->remoteaddress, $this->errcode, $this->errstring, $this->timeout);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = stream_socket_client($this->remoteaddress, $this->errcode, $this->errstring, $this->timeout, $this->flags);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = stream_socket_client($this->remoteaddress, $this->errcode, $this->errstring, $this->timeout, $this->flags, $this->context);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
