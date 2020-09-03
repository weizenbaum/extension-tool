<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Core;

/**
 * a wrapper class for function: get_loaded_extensions
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: Core
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class GetLoadedExtensions
{
    public $zend_extensions;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($zend_extensions = null)
    {
        $this->numArgs = func_num_args();
        $this->zend_extensions = $zend_extensions;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 1) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = get_loaded_extensions();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = get_loaded_extensions($this->zend_extensions);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
