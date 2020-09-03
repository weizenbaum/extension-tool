<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xmlrpc;

/**
 * a wrapper class for function: xmlrpc_decode_request
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xmlrpc
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlrpcDecodeRequest
{
    public $xml;
    public $method;
    public $encoding;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($xml, $method, $encoding = null)
    {
        $this->numArgs = func_num_args();
        $this->xml = $xml;
        $this->method = $method;
        $this->encoding = $encoding;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 2) {
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
        if ($this->numArgs === 2) {
        $this->return = xmlrpc_decode_request($this->xml, $this->method);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = xmlrpc_decode_request($this->xml, $this->method, $this->encoding);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
