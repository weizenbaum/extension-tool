<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Zlib;

/**
 * a wrapper class for function: zlib_encode
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: zlib
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ZlibEncode
{
    public $data;
    public $encoding;
    public $level;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $encoding, $level = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->encoding = $encoding;
        $this->level = $level;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = zlib_encode($this->data, $this->encoding);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = zlib_encode($this->data, $this->encoding, $this->level);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
