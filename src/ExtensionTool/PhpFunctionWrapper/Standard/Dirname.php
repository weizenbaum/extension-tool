<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: dirname
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Dirname
{
    public $path;
    public $levels;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($path, $levels = null)
    {
        $this->numArgs = func_num_args();
        $this->path = $path;
        $this->levels = $levels;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = dirname($this->path);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = dirname($this->path, $this->levels);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
