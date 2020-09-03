<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gd;

/**
 * a wrapper class for function: imagegd2
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gd
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Imagegd2
{
    public $im;
    public $to;
    public $chunk_size;
    public $type;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($im, $to = null, $chunk_size = null, $type = null)
    {
        $this->numArgs = func_num_args();
        $this->im = $im;
        $this->to = $to;
        $this->chunk_size = $chunk_size;
        $this->type = $type;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = imagegd2($this->im);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = imagegd2($this->im, $this->to);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = imagegd2($this->im, $this->to, $this->chunk_size);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imagegd2($this->im, $this->to, $this->chunk_size, $this->type);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
