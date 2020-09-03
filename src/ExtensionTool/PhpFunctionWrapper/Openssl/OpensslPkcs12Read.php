<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pkcs12_read
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPkcs12Read
{
    public $PKCS12;
    public $certs;
    public $pass;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($PKCS12, $certs, $pass)
    {
        $this->numArgs = func_num_args();
        $this->PKCS12 = $PKCS12;
        $this->certs = $certs;
        $this->pass = $pass;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getCerts()
    {
        return $this->certs;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
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
        if ($this->numArgs === 3) {
        $this->return = openssl_pkcs12_read($this->PKCS12, $this->certs, $this->pass);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
