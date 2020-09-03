<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: date_time_set
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DateTimeSet
{
    public $object;
    public $hour;
    public $minute;
    public $second;
    public $microseconds;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($object, $hour, $minute, $second = null, $microseconds = null)
    {
        $this->numArgs = func_num_args();
        $this->object = $object;
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
        $this->microseconds = $microseconds;
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
        $this->return = date_time_set($this->object, $this->hour, $this->minute);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = date_time_set($this->object, $this->hour, $this->minute, $this->second);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = date_time_set($this->object, $this->hour, $this->minute, $this->second, $this->microseconds);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
