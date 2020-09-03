<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pkcs7_sign
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPkcs7Sign
{
    public $infile;
    public $outfile;
    public $signcert;
    public $signkey;
    public $headers;
    public $flags;
    public $extracertsfilename;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($infile, $outfile, $signcert, $signkey, $headers, $flags = null, $extracertsfilename = null)
    {
        $this->numArgs = func_num_args();
        $this->infile = $infile;
        $this->outfile = $outfile;
        $this->signcert = $signcert;
        $this->signkey = $signkey;
        $this->headers = $headers;
        $this->flags = $flags;
        $this->extracertsfilename = $extracertsfilename;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 5) {
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
        if ($this->numArgs === 5) {
        $this->return = openssl_pkcs7_sign($this->infile, $this->outfile, $this->signcert, $this->signkey, $this->headers);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_pkcs7_sign($this->infile, $this->outfile, $this->signcert, $this->signkey, $this->headers, $this->flags);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = openssl_pkcs7_sign($this->infile, $this->outfile, $this->signcert, $this->signkey, $this->headers, $this->flags, $this->extracertsfilename);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
