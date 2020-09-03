<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pkcs12_export
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPkcs12Export
{
    public $x509;
    public $out;
    public $priv_key;
    public $pass;
    public $args;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($x509, $out, $priv_key, $pass, $args = null)
    {
        $this->numArgs = func_num_args();
        $this->x509 = $x509;
        $this->out = $out;
        $this->priv_key = $priv_key;
        $this->pass = $pass;
        $this->args = $args;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getOut()
    {
        return $this->out;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
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
        if ($this->numArgs === 4) {
        $this->return = openssl_pkcs12_export($this->x509, $this->out, $this->priv_key, $this->pass);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_pkcs12_export($this->x509, $this->out, $this->priv_key, $this->pass, $this->args);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
