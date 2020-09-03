<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mbstring;

/**
 * a wrapper class for function: mb_strimwidth
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mbstring
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MbStrimwidth
{
    public $str;
    public $start;
    public $width;
    public $trimmarker;
    public $encoding;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($str, $start, $width, $trimmarker = null, $encoding = null)
    {
        $this->numArgs = func_num_args();
        $this->str = $str;
        $this->start = $start;
        $this->width = $width;
        $this->trimmarker = $trimmarker;
        $this->encoding = $encoding;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = mb_strimwidth($this->str, $this->start, $this->width);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = mb_strimwidth($this->str, $this->start, $this->width, $this->trimmarker);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = mb_strimwidth($this->str, $this->start, $this->width, $this->trimmarker, $this->encoding);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
