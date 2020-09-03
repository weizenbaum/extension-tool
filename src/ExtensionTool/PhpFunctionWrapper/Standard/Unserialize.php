<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: unserialize
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Unserialize
{
    public $variable_representation;
    public $allowed_classes;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($variable_representation, $allowed_classes = null)
    {
        $this->numArgs = func_num_args();
        $this->variable_representation = $variable_representation;
        $this->allowed_classes = $allowed_classes;
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
        $this->return = unserialize($this->variable_representation);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = unserialize($this->variable_representation, $this->allowed_classes);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
