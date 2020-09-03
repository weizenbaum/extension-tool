<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xmlrpc;

/**
 * a wrapper class for function: xmlrpc_server_call_method
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xmlrpc
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlrpcServerCallMethod
{
    public $server;
    public $xml;
    public $user_data;
    public $output_options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($server, $xml, $user_data, $output_options = null)
    {
        $this->numArgs = func_num_args();
        $this->server = $server;
        $this->xml = $xml;
        $this->user_data = $user_data;
        $this->output_options = $output_options;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
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
        $this->return = xmlrpc_server_call_method($this->server, $this->xml, $this->user_data);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = xmlrpc_server_call_method($this->server, $this->xml, $this->user_data, $this->output_options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
