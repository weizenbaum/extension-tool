<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: str_pad
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class StrPad
{
    public $input;
    public $pad_length;
    public $pad_string;
    public $pad_type;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($input, $pad_length, $pad_string = null, $pad_type = null)
    {
        $this->numArgs = func_num_args();
        $this->input = $input;
        $this->pad_length = $pad_length;
        $this->pad_string = $pad_string;
        $this->pad_type = $pad_type;
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
        $this->return = str_pad($this->input, $this->pad_length);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = str_pad($this->input, $this->pad_length, $this->pad_string);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = str_pad($this->input, $this->pad_length, $this->pad_string, $this->pad_type);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
