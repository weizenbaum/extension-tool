<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: dns_get_record
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DnsGetRecord
{
    public $hostname;
    public $type;
    public $authns;
    public $addtl;
    public $raw;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($hostname, $type = null, $authns = null, $addtl = null, $raw = null)
    {
        $this->numArgs = func_num_args();
        $this->hostname = $hostname;
        $this->type = $type;
        $this->authns = $authns;
        $this->addtl = $addtl;
        $this->raw = $raw;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getAuthns()
    {
        return $this->authns;
    }

    public function getAddtl()
    {
        return $this->addtl;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = dns_get_record($this->hostname);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = dns_get_record($this->hostname, $this->type);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = dns_get_record($this->hostname, $this->type, $this->authns);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = dns_get_record($this->hostname, $this->type, $this->authns, $this->addtl);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = dns_get_record($this->hostname, $this->type, $this->authns, $this->addtl, $this->raw);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
