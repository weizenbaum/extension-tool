<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: error_log
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ErrorLog
{
    public $message;
    public $message_type;
    public $destination;
    public $extra_headers;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($message, $message_type = null, $destination = null, $extra_headers = null)
    {
        $this->numArgs = func_num_args();
        $this->message = $message;
        $this->message_type = $message_type;
        $this->destination = $destination;
        $this->extra_headers = $extra_headers;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = error_log($this->message);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = error_log($this->message, $this->message_type);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = error_log($this->message, $this->message_type, $this->destination);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = error_log($this->message, $this->message_type, $this->destination, $this->extra_headers);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
