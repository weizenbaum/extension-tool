<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: header
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Header
{
    public $header;
    public $replace;
    public $http_response_code;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($header, $replace = null, $http_response_code = null)
    {
        $this->numArgs = func_num_args();
        $this->header = $header;
        $this->replace = $replace;
        $this->http_response_code = $http_response_code;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = header($this->header);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = header($this->header, $this->replace);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = header($this->header, $this->replace, $this->http_response_code);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
