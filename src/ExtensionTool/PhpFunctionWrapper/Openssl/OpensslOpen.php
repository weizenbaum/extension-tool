<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_open
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslOpen
{
    public $data;
    public $opendata;
    public $ekey;
    public $privkey;
    public $method;
    public $iv;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $opendata, $ekey, $privkey, $method = null, $iv = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->opendata = $opendata;
        $this->ekey = $ekey;
        $this->privkey = $privkey;
        $this->method = $method;
        $this->iv = $iv;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getOpendata()
    {
        return $this->opendata;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
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
        if ($this->numArgs === 4) {
        $this->return = openssl_open($this->data, $this->opendata, $this->ekey, $this->privkey);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_open($this->data, $this->opendata, $this->ekey, $this->privkey, $this->method);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_open($this->data, $this->opendata, $this->ekey, $this->privkey, $this->method, $this->iv);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
