<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: timezone_transitions_get
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class TimezoneTransitionsGet
{
    public $object;
    public $timestamp_begin;
    public $timestamp_end;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($object, $timestamp_begin = null, $timestamp_end = null)
    {
        $this->numArgs = func_num_args();
        $this->object = $object;
        $this->timestamp_begin = $timestamp_begin;
        $this->timestamp_end = $timestamp_end;
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
        $this->return = timezone_transitions_get($this->object);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = timezone_transitions_get($this->object, $this->timestamp_begin);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = timezone_transitions_get($this->object, $this->timestamp_begin, $this->timestamp_end);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
