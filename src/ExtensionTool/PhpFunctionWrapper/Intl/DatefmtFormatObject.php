<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: datefmt_format_object
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DatefmtFormatObject
{
    public $object;
    public $format;
    public $locale;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($object, $format = null, $locale = null)
    {
        $this->numArgs = func_num_args();
        $this->object = $object;
        $this->format = $format;
        $this->locale = $locale;
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
        $this->return = datefmt_format_object($this->object);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = datefmt_format_object($this->object, $this->format);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = datefmt_format_object($this->object, $this->format, $this->locale);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
