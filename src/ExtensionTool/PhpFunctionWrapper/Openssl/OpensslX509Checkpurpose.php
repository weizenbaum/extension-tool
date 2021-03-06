<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_x509_checkpurpose
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslX509Checkpurpose
{
    public $x509cert;
    public $purpose;
    public $cainfo;
    public $untrustedfile;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($x509cert, $purpose, $cainfo = null, $untrustedfile = null)
    {
        $this->numArgs = func_num_args();
        $this->x509cert = $x509cert;
        $this->purpose = $purpose;
        $this->cainfo = $cainfo;
        $this->untrustedfile = $untrustedfile;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 2) {
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
        if ($this->numArgs === 2) {
        $this->return = openssl_x509_checkpurpose($this->x509cert, $this->purpose);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = openssl_x509_checkpurpose($this->x509cert, $this->purpose, $this->cainfo);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = openssl_x509_checkpurpose($this->x509cert, $this->purpose, $this->cainfo, $this->untrustedfile);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
