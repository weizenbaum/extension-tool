<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Fileinfo;

/**
 * a wrapper class for function: finfo_set_flags
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: fileinfo
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FinfoSetFlags
{
    public $finfo;
    public $options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($finfo, $options)
    {
        $this->numArgs = func_num_args();
        $this->finfo = $finfo;
        $this->options = $options;
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
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = finfo_set_flags($this->finfo, $this->options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
