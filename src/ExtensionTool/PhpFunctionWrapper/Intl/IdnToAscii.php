<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: idn_to_ascii
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IdnToAscii
{
    public $domain;
    public $option;
    public $variant;
    public $idn_info;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($domain, $option = null, $variant = null, $idn_info = null)
    {
        $this->numArgs = func_num_args();
        $this->domain = $domain;
        $this->option = $option;
        $this->variant = $variant;
        $this->idn_info = $idn_info;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getIdnInfo()
    {
        return $this->idn_info;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = idn_to_ascii($this->domain);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = idn_to_ascii($this->domain, $this->option);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = idn_to_ascii($this->domain, $this->option, $this->variant);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = idn_to_ascii($this->domain, $this->option, $this->variant, $this->idn_info);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
