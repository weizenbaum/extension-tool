<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: ini_get_all
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class IniGetAll
{
    public $extension;
    public $details;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($extension = null, $details = null)
    {
        $this->numArgs = func_num_args();
        $this->extension = $extension;
        $this->details = $details;
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
        $this->return = ini_get_all();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = ini_get_all($this->extension);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = ini_get_all($this->extension, $this->details);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
