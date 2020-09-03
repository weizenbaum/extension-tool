<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Filter;

/**
 * a wrapper class for function: filter_has_var
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: filter
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FilterHasVar
{
    public $type;
    public $variable_name;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($type, $variable_name)
    {
        $this->numArgs = func_num_args();
        $this->type = $type;
        $this->variable_name = $variable_name;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = filter_has_var($this->type, $this->variable_name);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
