<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pkcs7_encrypt
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPkcs7Encrypt
{
    public $infile;
    public $outfile;
    public $recipcerts;
    public $headers;
    public $flags;
    public $cipher;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($infile, $outfile, $recipcerts, $headers, $flags = null, $cipher = null)
    {
        $this->numArgs = func_num_args();
        $this->infile = $infile;
        $this->outfile = $outfile;
        $this->recipcerts = $recipcerts;
        $this->headers = $headers;
        $this->flags = $flags;
        $this->cipher = $cipher;
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
        $this->return = openssl_pkcs7_encrypt($this->infile, $this->outfile, $this->recipcerts, $this->headers);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_pkcs7_encrypt($this->infile, $this->outfile, $this->recipcerts, $this->headers, $this->flags);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_pkcs7_encrypt($this->infile, $this->outfile, $this->recipcerts, $this->headers, $this->flags, $this->cipher);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
