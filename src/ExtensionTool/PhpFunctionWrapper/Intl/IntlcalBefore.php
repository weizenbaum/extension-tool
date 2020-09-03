<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: intlcal_before
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IntlcalBefore
{
    public $calendar;
    public $otherCalendar;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($calendar, $otherCalendar)
    {
        $this->numArgs = func_num_args();
        $this->calendar = $calendar;
        $this->otherCalendar = $otherCalendar;
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
        $this->return = intlcal_before($this->calendar, $this->otherCalendar);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
