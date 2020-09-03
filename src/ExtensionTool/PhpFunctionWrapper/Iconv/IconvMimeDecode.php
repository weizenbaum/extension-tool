<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Iconv;

/**
 * a wrapper class for function: iconv_mime_decode
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: iconv
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IconvMimeDecode
{
    public $encoded_string;
    public $mode;
    public $charset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($encoded_string, $mode = null, $charset = null)
    {
        $this->numArgs = func_num_args();
        $this->encoded_string = $encoded_string;
        $this->mode = $mode;
        $this->charset = $charset;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = iconv_mime_decode($this->encoded_string);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = iconv_mime_decode($this->encoded_string, $this->mode);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = iconv_mime_decode($this->encoded_string, $this->mode, $this->charset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
