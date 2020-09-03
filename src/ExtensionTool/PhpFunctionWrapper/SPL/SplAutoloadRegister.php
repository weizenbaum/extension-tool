<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\SPL;

/**
 * a wrapper class for function: spl_autoload_register
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: SPL
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SplAutoloadRegister
{
    public $autoload_function;
    public $throw;
    public $prepend;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($autoload_function = null, $throw = null, $prepend = null)
    {
        $this->numArgs = func_num_args();
        $this->autoload_function = $autoload_function;
        $this->throw = $throw;
        $this->prepend = $prepend;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = spl_autoload_register();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = spl_autoload_register($this->autoload_function);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = spl_autoload_register($this->autoload_function, $this->throw);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = spl_autoload_register($this->autoload_function, $this->throw, $this->prepend);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
