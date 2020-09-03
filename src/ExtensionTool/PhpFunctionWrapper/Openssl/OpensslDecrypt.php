<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_decrypt
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslDecrypt
{
    public $data;
    public $method;
    public $password;
    public $options;
    public $iv;
    public $tag;
    public $aad;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $method, $password, $options = null, $iv = null, $tag = null, $aad = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->method = $method;
        $this->password = $password;
        $this->options = $options;
        $this->iv = $iv;
        $this->tag = $tag;
        $this->aad = $aad;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 7) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = openssl_decrypt($this->data, $this->method, $this->password);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = openssl_decrypt($this->data, $this->method, $this->password, $this->options);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_decrypt($this->data, $this->method, $this->password, $this->options, $this->iv);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_decrypt($this->data, $this->method, $this->password, $this->options, $this->iv, $this->tag);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = openssl_decrypt($this->data, $this->method, $this->password, $this->options, $this->iv, $this->tag, $this->aad);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
