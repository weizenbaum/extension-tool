<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: collator_compare
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class CollatorCompare
{
    public $object;
    public $arg1;
    public $arg2;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($object, $arg1, $arg2)
    {
        $this->numArgs = func_num_args();
        $this->object = $object;
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
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
        $this->return = collator_compare($this->object, $this->arg1, $this->arg2);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
