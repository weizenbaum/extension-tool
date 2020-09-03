<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mbstring;

/**
 * a wrapper class for function: mb_eregi_replace
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mbstring
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MbEregiReplace
{
    public $pattern;
    public $replacement;
    public $string;
    public $option;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($pattern, $replacement, $string, $option = null)
    {
        $this->numArgs = func_num_args();
        $this->pattern = $pattern;
        $this->replacement = $replacement;
        $this->string = $string;
        $this->option = $option;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
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
        if ($this->numArgs === 3) {
        $this->return = mb_eregi_replace($this->pattern, $this->replacement, $this->string);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = mb_eregi_replace($this->pattern, $this->replacement, $this->string, $this->option);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
