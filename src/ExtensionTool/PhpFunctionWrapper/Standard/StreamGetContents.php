<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: stream_get_contents
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class StreamGetContents
{
    public $source;
    public $maxlen;
    public $offset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($source, $maxlen = null, $offset = null)
    {
        $this->numArgs = func_num_args();
        $this->source = $source;
        $this->maxlen = $maxlen;
        $this->offset = $offset;
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
        $this->return = stream_get_contents($this->source);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = stream_get_contents($this->source, $this->maxlen);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = stream_get_contents($this->source, $this->maxlen, $this->offset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
