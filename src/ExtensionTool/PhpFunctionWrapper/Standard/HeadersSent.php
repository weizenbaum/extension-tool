<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: headers_sent
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class HeadersSent
{
    public $file;
    public $line;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($file = null, $line = null)
    {
        $this->numArgs = func_num_args();
        $this->file = $file;
        $this->line = $line;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getLine()
    {
        return $this->line;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = headers_sent();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = headers_sent($this->file);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = headers_sent($this->file, $this->line);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
