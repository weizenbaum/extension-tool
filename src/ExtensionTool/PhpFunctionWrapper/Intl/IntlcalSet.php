<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: intlcal_set
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IntlcalSet
{
    public $calendar;
    public $fieldOrYear;
    public $valueOrMonth;
    public $dayOfMonth;
    public $hour;
    public $minute;
    public $second;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth = null, $hour = null, $minute = null, $second = null)
    {
        $this->numArgs = func_num_args();
        $this->calendar = $calendar;
        $this->fieldOrYear = $fieldOrYear;
        $this->valueOrMonth = $valueOrMonth;
        $this->dayOfMonth = $dayOfMonth;
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
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
        if ($this->numArgs > 7) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = intlcal_set($this->calendar, $this->fieldOrYear, $this->valueOrMonth);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = intlcal_set($this->calendar, $this->fieldOrYear, $this->valueOrMonth, $this->dayOfMonth);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = intlcal_set($this->calendar, $this->fieldOrYear, $this->valueOrMonth, $this->dayOfMonth, $this->hour);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = intlcal_set($this->calendar, $this->fieldOrYear, $this->valueOrMonth, $this->dayOfMonth, $this->hour, $this->minute);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = intlcal_set($this->calendar, $this->fieldOrYear, $this->valueOrMonth, $this->dayOfMonth, $this->hour, $this->minute, $this->second);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
