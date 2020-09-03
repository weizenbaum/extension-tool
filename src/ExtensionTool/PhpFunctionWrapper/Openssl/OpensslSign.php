<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_sign
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslSign
{
    public $data;
    public $signature;
    public $key;
    public $method;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $signature, $key, $method = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->signature = $signature;
        $this->key = $key;
        $this->method = $method;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
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
        if ($this->numArgs === 3) {
        $this->return = openssl_sign($this->data, $this->signature, $this->key);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = openssl_sign($this->data, $this->signature, $this->key, $this->method);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
