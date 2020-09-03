<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: datefmt_create
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DatefmtCreate
{
    public $locale;
    public $date_type;
    public $time_type;
    public $timezone_str;
    public $calendar;
    public $pattern;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($locale, $date_type, $time_type, $timezone_str = null, $calendar = null, $pattern = null)
    {
        $this->numArgs = func_num_args();
        $this->locale = $locale;
        $this->date_type = $date_type;
        $this->time_type = $time_type;
        $this->timezone_str = $timezone_str;
        $this->calendar = $calendar;
        $this->pattern = $pattern;
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
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = datefmt_create($this->locale, $this->date_type, $this->time_type);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = datefmt_create($this->locale, $this->date_type, $this->time_type, $this->timezone_str);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = datefmt_create($this->locale, $this->date_type, $this->time_type, $this->timezone_str, $this->calendar);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = datefmt_create($this->locale, $this->date_type, $this->time_type, $this->timezone_str, $this->calendar, $this->pattern);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
