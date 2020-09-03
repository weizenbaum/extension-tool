<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pkcs7_verify
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPkcs7Verify
{
    public $filename;
    public $flags;
    public $signerscerts;
    public $cainfo;
    public $extracerts;
    public $content;
    public $pk7;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $flags, $signerscerts = null, $cainfo = null, $extracerts = null, $content = null, $pk7 = null)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->flags = $flags;
        $this->signerscerts = $signerscerts;
        $this->cainfo = $cainfo;
        $this->extracerts = $extracerts;
        $this->content = $content;
        $this->pk7 = $pk7;
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
        if ($this->numArgs > 7) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags, $this->signerscerts);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags, $this->signerscerts, $this->cainfo);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags, $this->signerscerts, $this->cainfo, $this->extracerts);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags, $this->signerscerts, $this->cainfo, $this->extracerts, $this->content);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = openssl_pkcs7_verify($this->filename, $this->flags, $this->signerscerts, $this->cainfo, $this->extracerts, $this->content, $this->pk7);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
