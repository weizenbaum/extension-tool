<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Fileinfo;

/**
 * a wrapper class for function: finfo_open
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: fileinfo
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FinfoOpen
{
    public $options;
    public $arg;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($options = null, $arg = null)
    {
        $this->numArgs = func_num_args();
        $this->options = $options;
        $this->arg = $arg;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = finfo_open();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = finfo_open($this->options);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = finfo_open($this->options, $this->arg);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
