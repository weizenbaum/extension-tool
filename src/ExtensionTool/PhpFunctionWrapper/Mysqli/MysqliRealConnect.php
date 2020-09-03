<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mysqli;

/**
 * a wrapper class for function: mysqli_real_connect
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mysqli
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MysqliRealConnect
{
    public $link;
    public $host;
    public $user;
    public $password;
    public $database;
    public $port;
    public $socket;
    public $flags;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($link, $host = null, $user = null, $password = null, $database = null, $port = null, $socket = null, $flags = null)
    {
        $this->numArgs = func_num_args();
        $this->link = $link;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->socket = $socket;
        $this->flags = $flags;
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
        if ($this->numArgs > 8) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = mysqli_real_connect($this->link);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = mysqli_real_connect($this->link, $this->host);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user, $this->password);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user, $this->password, $this->database);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user, $this->password, $this->database, $this->port);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user, $this->password, $this->database, $this->port, $this->socket);
        return;
        }
        if ($this->numArgs === 8) {
        $this->return = mysqli_real_connect($this->link, $this->host, $this->user, $this->password, $this->database, $this->port, $this->socket, $this->flags);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
