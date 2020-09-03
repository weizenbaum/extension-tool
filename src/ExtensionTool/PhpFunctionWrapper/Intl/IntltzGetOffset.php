<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: intltz_get_offset
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IntltzGetOffset
{
    public $timeZone;
    public $date;
    public $local;
    public $rawOffset;
    public $dstOffset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($timeZone, $date, $local, $rawOffset, $dstOffset)
    {
        $this->numArgs = func_num_args();
        $this->timeZone = $timeZone;
        $this->date = $date;
        $this->local = $local;
        $this->rawOffset = $rawOffset;
        $this->dstOffset = $dstOffset;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getRawOffset()
    {
        return $this->rawOffset;
    }

    public function getDstOffset()
    {
        return $this->dstOffset;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 5) {
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
        if ($this->numArgs === 5) {
        $this->return = intltz_get_offset($this->timeZone, $this->date, $this->local, $this->rawOffset, $this->dstOffset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
