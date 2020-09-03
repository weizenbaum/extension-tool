<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xmlrpc;

/**
 * a wrapper class for function: xmlrpc_encode_request
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xmlrpc
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlrpcEncodeRequest
{
    public $method;
    public $params;
    public $output_options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($method, $params, $output_options = null)
    {
        $this->numArgs = func_num_args();
        $this->method = $method;
        $this->params = $params;
        $this->output_options = $output_options;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = xmlrpc_encode_request($this->method, $this->params);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = xmlrpc_encode_request($this->method, $this->params, $this->output_options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
