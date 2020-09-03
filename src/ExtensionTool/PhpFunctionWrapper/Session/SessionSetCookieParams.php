<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Session;

/**
 * a wrapper class for function: session_set_cookie_params
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: session
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SessionSetCookieParams
{
    public $lifetime_or_options;
    public $path;
    public $domain;
    public $secure;
    public $httponly;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($lifetime_or_options, $path = null, $domain = null, $secure = null, $httponly = null)
    {
        $this->numArgs = func_num_args();
        $this->lifetime_or_options = $lifetime_or_options;
        $this->path = $path;
        $this->domain = $domain;
        $this->secure = $secure;
        $this->httponly = $httponly;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = session_set_cookie_params($this->lifetime_or_options);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = session_set_cookie_params($this->lifetime_or_options, $this->path);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = session_set_cookie_params($this->lifetime_or_options, $this->path, $this->domain);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = session_set_cookie_params($this->lifetime_or_options, $this->path, $this->domain, $this->secure);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = session_set_cookie_params($this->lifetime_or_options, $this->path, $this->domain, $this->secure, $this->httponly);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
