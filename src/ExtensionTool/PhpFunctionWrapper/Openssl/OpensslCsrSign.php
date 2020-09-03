<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_csr_sign
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslCsrSign
{
    public $csr;
    public $x509;
    public $priv_key;
    public $days;
    public $config_args;
    public $serial;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($csr, $x509, $priv_key, $days, $config_args = null, $serial = null)
    {
        $this->numArgs = func_num_args();
        $this->csr = $csr;
        $this->x509 = $x509;
        $this->priv_key = $priv_key;
        $this->days = $days;
        $this->config_args = $config_args;
        $this->serial = $serial;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
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
        $this->return = openssl_csr_sign($this->csr, $this->x509, $this->priv_key, $this->days);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_csr_sign($this->csr, $this->x509, $this->priv_key, $this->days, $this->config_args);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_csr_sign($this->csr, $this->x509, $this->priv_key, $this->days, $this->config_args, $this->serial);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
