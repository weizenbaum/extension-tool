<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: png2wbmp
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Png2wbmp
{
    public $f_org;
    public $f_dest;
    public $d_height;
    public $d_width;
    public $d_threshold;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($f_org, $f_dest, $d_height, $d_width, $d_threshold)
    {
        $this->numArgs = func_num_args();
        $this->f_org = $f_org;
        $this->f_dest = $f_dest;
        $this->d_height = $d_height;
        $this->d_width = $d_width;
        $this->d_threshold = $d_threshold;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 5) {
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
        if ($this->numArgs === 5) {
        $this->return = png2wbmp($this->f_org, $this->f_dest, $this->d_height, $this->d_width, $this->d_threshold);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
