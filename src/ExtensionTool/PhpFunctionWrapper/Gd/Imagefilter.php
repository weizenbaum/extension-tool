<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: imagefilter
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Imagefilter
{
    public $im;
    public $filtertype;
    public $arg1;
    public $arg2;
    public $arg3;
    public $arg4;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($im, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null)
    {
        $this->numArgs = func_num_args();
        $this->im = $im;
        $this->filtertype = $filtertype;
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->arg3 = $arg3;
        $this->arg4 = $arg4;
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
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = imagefilter($this->im, $this->filtertype);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = imagefilter($this->im, $this->filtertype, $this->arg1);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imagefilter($this->im, $this->filtertype, $this->arg1, $this->arg2);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = imagefilter($this->im, $this->filtertype, $this->arg1, $this->arg2, $this->arg3);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = imagefilter($this->im, $this->filtertype, $this->arg1, $this->arg2, $this->arg3, $this->arg4);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
