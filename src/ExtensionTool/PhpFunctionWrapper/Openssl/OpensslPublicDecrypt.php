<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_public_decrypt
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPublicDecrypt
{
    public $data;
    public $crypted;
    public $key;
    public $padding;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $crypted, $key, $padding = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->crypted = $crypted;
        $this->key = $key;
        $this->padding = $padding;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getCrypted()
    {
        return $this->crypted;
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
        $this->return = openssl_public_decrypt($this->data, $this->crypted, $this->key);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = openssl_public_decrypt($this->data, $this->crypted, $this->key, $this->padding);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
