<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: stream_filter_prepend
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class StreamFilterPrepend
{
    public $stream;
    public $filtername;
    public $read_write;
    public $filterparams;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream, $filtername, $read_write = null, $filterparams = null)
    {
        $this->numArgs = func_num_args();
        $this->stream = $stream;
        $this->filtername = $filtername;
        $this->read_write = $read_write;
        $this->filterparams = $filterparams;
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
        $this->return = stream_filter_prepend($this->stream, $this->filtername);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = stream_filter_prepend($this->stream, $this->filtername, $this->read_write);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = stream_filter_prepend($this->stream, $this->filtername, $this->read_write, $this->filterparams);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
