<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mbstring;

/**
 * a wrapper class for function: mb_encode_mimeheader
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mbstring
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MbEncodeMimeheader
{
    public $str;
    public $charset;
    public $transfer;
    public $linefeed;
    public $indent;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($str, $charset = null, $transfer = null, $linefeed = null, $indent = null)
    {
        $this->numArgs = func_num_args();
        $this->str = $str;
        $this->charset = $charset;
        $this->transfer = $transfer;
        $this->linefeed = $linefeed;
        $this->indent = $indent;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
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
        $this->return = mb_encode_mimeheader($this->str);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = mb_encode_mimeheader($this->str, $this->charset);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = mb_encode_mimeheader($this->str, $this->charset, $this->transfer);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = mb_encode_mimeheader($this->str, $this->charset, $this->transfer, $this->linefeed);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = mb_encode_mimeheader($this->str, $this->charset, $this->transfer, $this->linefeed, $this->indent);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
