<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Core;

/**
 * a wrapper class for function: define
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: Core
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class DefineFunction
{
    public $constant_name;
    public $value;
    public $case_insensitive;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($constant_name, $value, $case_insensitive = null)
    {
        $this->numArgs = func_num_args();
        $this->constant_name = $constant_name;
        $this->value = $value;
        $this->case_insensitive = $case_insensitive;
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
        $this->return = define($this->constant_name, $this->value);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = define($this->constant_name, $this->value, $this->case_insensitive);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
