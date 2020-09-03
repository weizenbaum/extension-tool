<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: array_multisort
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ArrayMultisort
{
    public $arr1;
    public $sort_order;
    public $sort_flags;
    public $arr2;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arr1, $sort_order = null, $sort_flags = null, $arr2 = null)
    {
        $this->numArgs = func_num_args();
        $this->arr1 = $arr1;
        $this->sort_order = $sort_order;
        $this->sort_flags = $sort_flags;
        $this->arr2 = $arr2;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getArr1()
    {
        return $this->arr1;
    }

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function getSortFlags()
    {
        return $this->sort_flags;
    }

    public function getArr2()
    {
        return $this->arr2;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = array_multisort($this->arr1);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = array_multisort($this->arr1, $this->sort_order);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = array_multisort($this->arr1, $this->sort_order, $this->sort_flags);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = array_multisort($this->arr1, $this->sort_order, $this->sort_flags, $this->arr2);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
