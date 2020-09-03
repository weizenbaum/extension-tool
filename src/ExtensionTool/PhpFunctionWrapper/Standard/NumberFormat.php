<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: number_format
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class NumberFormat
{
    public $number;
    public $num_decimal_places;
    public $dec_separator;
    public $thousands_separator;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($number, $num_decimal_places = null, $dec_separator = null, $thousands_separator = null)
    {
        $this->numArgs = func_num_args();
        $this->number = $number;
        $this->num_decimal_places = $num_decimal_places;
        $this->dec_separator = $dec_separator;
        $this->thousands_separator = $thousands_separator;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = number_format($this->number);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = number_format($this->number, $this->num_decimal_places);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = number_format($this->number, $this->num_decimal_places, $this->dec_separator);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = number_format($this->number, $this->num_decimal_places, $this->dec_separator, $this->thousands_separator);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
