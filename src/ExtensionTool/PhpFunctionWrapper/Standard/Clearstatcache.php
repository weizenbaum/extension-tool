<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: clearstatcache
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Clearstatcache
{
    public $clear_realpath_cache;
    public $filename;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($clear_realpath_cache = null, $filename = null)
    {
        $this->numArgs = func_num_args();
        $this->clear_realpath_cache = $clear_realpath_cache;
        $this->filename = $filename;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
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
        $this->return = clearstatcache();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = clearstatcache($this->clear_realpath_cache);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = clearstatcache($this->clear_realpath_cache, $this->filename);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
