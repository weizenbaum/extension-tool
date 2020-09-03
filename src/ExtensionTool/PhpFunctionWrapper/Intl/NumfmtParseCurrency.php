<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: numfmt_parse_currency
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class NumfmtParseCurrency
{
    public $formatter;
    public $string;
    public $currency;
    public $position;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($formatter, $string, $currency, $position = null)
    {
        $this->numArgs = func_num_args();
        $this->formatter = $formatter;
        $this->string = $string;
        $this->currency = $currency;
        $this->position = $position;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getPosition()
    {
        return $this->position;
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
        $this->return = numfmt_parse_currency($this->formatter, $this->string, $this->currency);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = numfmt_parse_currency($this->formatter, $this->string, $this->currency, $this->position);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
