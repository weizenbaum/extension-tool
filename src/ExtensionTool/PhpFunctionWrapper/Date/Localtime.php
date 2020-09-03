<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Date;

/**
 * a wrapper class for function: localtime
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: date
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Localtime
{
    public $timestamp;
    public $associative_array;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($timestamp = null, $associative_array = null)
    {
        $this->numArgs = func_num_args();
        $this->timestamp = $timestamp;
        $this->associative_array = $associative_array;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = localtime();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = localtime($this->timestamp);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = localtime($this->timestamp, $this->associative_array);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
