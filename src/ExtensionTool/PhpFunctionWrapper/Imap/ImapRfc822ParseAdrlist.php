<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_rfc822_parse_adrlist
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapRfc822ParseAdrlist
{
    public $address_string;
    public $default_host;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($address_string, $default_host)
    {
        $this->numArgs = func_num_args();
        $this->address_string = $address_string;
        $this->default_host = $default_host;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = imap_rfc822_parse_adrlist($this->address_string, $this->default_host);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
