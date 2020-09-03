<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mbstring;

/**
 * a wrapper class for function: mb_parse_str
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mbstring
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MbParseStr
{
    public $encoded_string;
    public $result;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($encoded_string, $result = null)
    {
        $this->numArgs = func_num_args();
        $this->encoded_string = $encoded_string;
        $this->result = $result;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = mb_parse_str($this->encoded_string);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = mb_parse_str($this->encoded_string, $this->result);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
