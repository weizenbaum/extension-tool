<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: file_get_contents
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FileGetContents
{
    public $filename;
    public $flags;
    public $context;
    public $offset;
    public $maxlen;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $flags = null, $context = null, $offset = null, $maxlen = null)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->flags = $flags;
        $this->context = $context;
        $this->offset = $offset;
        $this->maxlen = $maxlen;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = file_get_contents($this->filename);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = file_get_contents($this->filename, $this->flags);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = file_get_contents($this->filename, $this->flags, $this->context);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = file_get_contents($this->filename, $this->flags, $this->context, $this->offset);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = file_get_contents($this->filename, $this->flags, $this->context, $this->offset, $this->maxlen);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
