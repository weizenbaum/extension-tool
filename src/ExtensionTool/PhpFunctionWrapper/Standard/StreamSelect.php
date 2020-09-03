<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: stream_select
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class StreamSelect
{
    public $read_streams;
    public $write_streams;
    public $except_streams;
    public $tv_sec;
    public $tv_usec;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($read_streams, $write_streams, $except_streams, $tv_sec, $tv_usec = null)
    {
        $this->numArgs = func_num_args();
        $this->read_streams = $read_streams;
        $this->write_streams = $write_streams;
        $this->except_streams = $except_streams;
        $this->tv_sec = $tv_sec;
        $this->tv_usec = $tv_usec;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getReadStreams()
    {
        return $this->read_streams;
    }

    public function getWriteStreams()
    {
        return $this->write_streams;
    }

    public function getExceptStreams()
    {
        return $this->except_streams;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
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
        if ($this->numArgs === 4) {
        $this->return = stream_select($this->read_streams, $this->write_streams, $this->except_streams, $this->tv_sec);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = stream_select($this->read_streams, $this->write_streams, $this->except_streams, $this->tv_sec, $this->tv_usec);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
