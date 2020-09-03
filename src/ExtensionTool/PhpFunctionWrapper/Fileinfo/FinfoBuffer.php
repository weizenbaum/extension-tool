<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Fileinfo;

/**
 * a wrapper class for function: finfo_buffer
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: fileinfo
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FinfoBuffer
{
    public $finfo;
    public $string;
    public $options;
    public $context;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($finfo, $string, $options = null, $context = null)
    {
        $this->numArgs = func_num_args();
        $this->finfo = $finfo;
        $this->string = $string;
        $this->options = $options;
        $this->context = $context;
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
        $this->return = finfo_buffer($this->finfo, $this->string);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = finfo_buffer($this->finfo, $this->string, $this->options);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = finfo_buffer($this->finfo, $this->string, $this->options, $this->context);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
