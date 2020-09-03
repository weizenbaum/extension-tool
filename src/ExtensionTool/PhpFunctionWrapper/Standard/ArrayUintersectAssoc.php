<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: array_uintersect_assoc
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ArrayUintersectAssoc
{
    public $arr1;
    public $arr2;
    public $callback_data_compare_func;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arr1, $arr2, $callback_data_compare_func)
    {
        $this->numArgs = func_num_args();
        $this->arr1 = $arr1;
        $this->arr2 = $arr2;
        $this->callback_data_compare_func = $callback_data_compare_func;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = array_uintersect_assoc($this->arr1, $this->arr2, $this->callback_data_compare_func);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
