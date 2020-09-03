<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Iconv;

/**
 * a wrapper class for function: iconv_strpos
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: iconv
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IconvStrpos
{
    public $haystack;
    public $needle;
    public $offset;
    public $charset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($haystack, $needle, $offset = null, $charset = null)
    {
        $this->numArgs = func_num_args();
        $this->haystack = $haystack;
        $this->needle = $needle;
        $this->offset = $offset;
        $this->charset = $charset;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = iconv_strpos($this->haystack, $this->needle);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = iconv_strpos($this->haystack, $this->needle, $this->offset);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = iconv_strpos($this->haystack, $this->needle, $this->offset, $this->charset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}