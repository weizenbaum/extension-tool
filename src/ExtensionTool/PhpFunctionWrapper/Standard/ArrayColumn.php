<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: array_column
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ArrayColumn
{
    public $arg;
    public $column_key;
    public $index_key;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arg, $column_key, $index_key = null)
    {
        $this->numArgs = func_num_args();
        $this->arg = $arg;
        $this->column_key = $column_key;
        $this->index_key = $index_key;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 2) {
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
        if ($this->numArgs === 2) {
        $this->return = array_column($this->arg, $this->column_key);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = array_column($this->arg, $this->column_key, $this->index_key);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
