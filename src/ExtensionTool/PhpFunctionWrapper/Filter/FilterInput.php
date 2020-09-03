<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Filter;

/**
 * a wrapper class for function: filter_input
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: filter
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FilterInput
{
    public $type;
    public $variable_name;
    public $filter;
    public $options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($type, $variable_name, $filter = null, $options = null)
    {
        $this->numArgs = func_num_args();
        $this->type = $type;
        $this->variable_name = $variable_name;
        $this->filter = $filter;
        $this->options = $options;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = filter_input($this->type, $this->variable_name);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = filter_input($this->type, $this->variable_name, $this->filter);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = filter_input($this->type, $this->variable_name, $this->filter, $this->options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
