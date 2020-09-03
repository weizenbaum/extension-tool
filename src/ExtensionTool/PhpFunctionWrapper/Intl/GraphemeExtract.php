<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: grapheme_extract
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class GraphemeExtract
{
    public $arg1;
    public $arg2;
    public $arg3;
    public $arg4;
    public $arg5;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($arg1, $arg2, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $this->numArgs = func_num_args();
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->arg3 = $arg3;
        $this->arg4 = $arg4;
        $this->arg5 = $arg5;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getArg5()
    {
        return $this->arg5;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 2) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = grapheme_extract($this->arg1, $this->arg2);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = grapheme_extract($this->arg1, $this->arg2, $this->arg3);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = grapheme_extract($this->arg1, $this->arg2, $this->arg3, $this->arg4);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = grapheme_extract($this->arg1, $this->arg2, $this->arg3, $this->arg4, $this->arg5);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
