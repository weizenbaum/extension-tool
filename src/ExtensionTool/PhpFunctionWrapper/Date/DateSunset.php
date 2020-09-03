<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: date_sunset
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DateSunset
{
    public $time;
    public $format;
    public $latitude;
    public $longitude;
    public $zenith;
    public $gmt_offset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($time, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null)
    {
        $this->numArgs = func_num_args();
        $this->time = $time;
        $this->format = $format;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->zenith = $zenith;
        $this->gmt_offset = $gmt_offset;
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
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = date_sunset($this->time);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = date_sunset($this->time, $this->format);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = date_sunset($this->time, $this->format, $this->latitude);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = date_sunset($this->time, $this->format, $this->latitude, $this->longitude);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = date_sunset($this->time, $this->format, $this->latitude, $this->longitude, $this->zenith);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = date_sunset($this->time, $this->format, $this->latitude, $this->longitude, $this->zenith, $this->gmt_offset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
