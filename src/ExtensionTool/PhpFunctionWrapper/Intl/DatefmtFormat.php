<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: datefmt_format
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DatefmtFormat
{
    public $args;
    public $array;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($args = null, $array = null)
    {
        $this->numArgs = func_num_args();
        $this->args = $args;
        $this->array = $array;
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
        $this->return = datefmt_format();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = datefmt_format($this->args);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = datefmt_format($this->args, $this->array);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
