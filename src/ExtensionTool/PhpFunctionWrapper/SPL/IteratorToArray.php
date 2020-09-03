<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\SPL;

/**
 * a wrapper class for function: iterator_to_array
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: SPL
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IteratorToArray
{
    public $iterator;
    public $use_keys;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($iterator, $use_keys = null)
    {
        $this->numArgs = func_num_args();
        $this->iterator = $iterator;
        $this->use_keys = $use_keys;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = iterator_to_array($this->iterator);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = iterator_to_array($this->iterator, $this->use_keys);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
