<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Zlib;

/**
 * a wrapper class for function: gzinflate
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: zlib
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Gzinflate
{
    public $data;
    public $max_decoded_len;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $max_decoded_len = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->max_decoded_len = $max_decoded_len;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = gzinflate($this->data);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = gzinflate($this->data, $this->max_decoded_len);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
