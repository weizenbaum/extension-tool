<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: imagecopymerge
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Imagecopymerge
{
    public $dst_im;
    public $src_im;
    public $dst_x;
    public $dst_y;
    public $src_x;
    public $src_y;
    public $src_w;
    public $src_h;
    public $pct;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
    {
        $this->numArgs = func_num_args();
        $this->dst_im = $dst_im;
        $this->src_im = $src_im;
        $this->dst_x = $dst_x;
        $this->dst_y = $dst_y;
        $this->src_x = $src_x;
        $this->src_y = $src_y;
        $this->src_w = $src_w;
        $this->src_h = $src_h;
        $this->pct = $pct;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 9) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 9) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 9) {
        $this->return = imagecopymerge($this->dst_im, $this->src_im, $this->dst_x, $this->dst_y, $this->src_x, $this->src_y, $this->src_w, $this->src_h, $this->pct);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
