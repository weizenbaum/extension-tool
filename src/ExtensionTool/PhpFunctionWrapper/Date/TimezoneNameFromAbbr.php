<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: timezone_name_from_abbr
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class TimezoneNameFromAbbr
{
    public $abbr;
    public $gmtoffset;
    public $isdst;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($abbr, $gmtoffset = null, $isdst = null)
    {
        $this->numArgs = func_num_args();
        $this->abbr = $abbr;
        $this->gmtoffset = $gmtoffset;
        $this->isdst = $isdst;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = timezone_name_from_abbr($this->abbr);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = timezone_name_from_abbr($this->abbr, $this->gmtoffset);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = timezone_name_from_abbr($this->abbr, $this->gmtoffset, $this->isdst);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
