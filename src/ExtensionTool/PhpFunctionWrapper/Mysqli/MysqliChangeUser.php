<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mysqli;

/**
 * a wrapper class for function: mysqli_change_user
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mysqli
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MysqliChangeUser
{
    public $link;
    public $user;
    public $password;
    public $database;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($link, $user, $password, $database)
    {
        $this->numArgs = func_num_args();
        $this->link = $link;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
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
        if ($this->numArgs === 4) {
        $this->return = mysqli_change_user($this->link, $this->user, $this->password, $this->database);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
