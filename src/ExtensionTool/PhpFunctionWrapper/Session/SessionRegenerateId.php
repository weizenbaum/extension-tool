<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Session;

/**
 * a wrapper class for function: session_regenerate_id
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: session
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SessionRegenerateId
{
    public $delete_old_session;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($delete_old_session = null)
    {
        $this->numArgs = func_num_args();
        $this->delete_old_session = $delete_old_session;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 1) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = session_regenerate_id();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = session_regenerate_id($this->delete_old_session);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
