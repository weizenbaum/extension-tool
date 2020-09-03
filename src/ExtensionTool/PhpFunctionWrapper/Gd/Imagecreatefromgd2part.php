<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: imagecreatefromgd2part
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Imagecreatefromgd2part
{
    public $filename;
    public $srcX;
    public $srcY;
    public $width;
    public $height;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $srcX, $srcY, $width, $height)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->srcX = $srcX;
        $this->srcY = $srcY;
        $this->width = $width;
        $this->height = $height;
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
        $this->return = imagecreatefromgd2part($this->filename, $this->srcX, $this->srcY, $this->width, $this->height);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
