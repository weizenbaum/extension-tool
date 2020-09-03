<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: mktime
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Mktime
{
    public $hour;
    public $min;
    public $sec;
    public $mon;
    public $day;
    public $year;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($hour = null, $min = null, $sec = null, $mon = null, $day = null, $year = null)
    {
        $this->numArgs = func_num_args();
        $this->hour = $hour;
        $this->min = $min;
        $this->sec = $sec;
        $this->mon = $mon;
        $this->day = $day;
        $this->year = $year;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = mktime();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = mktime($this->hour);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = mktime($this->hour, $this->min);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = mktime($this->hour, $this->min, $this->sec);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = mktime($this->hour, $this->min, $this->sec, $this->mon);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = mktime($this->hour, $this->min, $this->sec, $this->mon, $this->day);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = mktime($this->hour, $this->min, $this->sec, $this->mon, $this->day, $this->year);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
