<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: imagestringup
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Imagestringup
{
    public $im;
    public $font;
    public $x;
    public $y;
    public $str;
    public $col;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($im, $font, $x, $y, $str, $col)
    {
        $this->numArgs = func_num_args();
        $this->im = $im;
        $this->font = $font;
        $this->x = $x;
        $this->y = $y;
        $this->str = $str;
        $this->col = $col;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 6) {
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
        if ($this->numArgs === 6) {
        $this->return = imagestringup($this->im, $this->font, $this->x, $this->y, $this->str, $this->col);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
