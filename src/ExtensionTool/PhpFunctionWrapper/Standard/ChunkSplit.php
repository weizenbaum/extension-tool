<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: chunk_split
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ChunkSplit
{
    public $str;
    public $chunklen;
    public $ending;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($str, $chunklen = null, $ending = null)
    {
        $this->numArgs = func_num_args();
        $this->str = $str;
        $this->chunklen = $chunklen;
        $this->ending = $ending;
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
        $this->return = chunk_split($this->str);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = chunk_split($this->str, $this->chunklen);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = chunk_split($this->str, $this->chunklen, $this->ending);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
