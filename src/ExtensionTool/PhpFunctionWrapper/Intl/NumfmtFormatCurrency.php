<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: numfmt_format_currency
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class NumfmtFormatCurrency
{
    public $nf;
    public $num;
    public $currency;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($nf, $num, $currency)
    {
        $this->numArgs = func_num_args();
        $this->nf = $nf;
        $this->num = $num;
        $this->currency = $currency;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = numfmt_format_currency($this->nf, $this->num, $this->currency);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
