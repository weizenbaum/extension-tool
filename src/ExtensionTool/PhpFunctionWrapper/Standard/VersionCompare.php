<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: version_compare
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class VersionCompare
{
    public $ver1;
    public $ver2;
    public $oper;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($ver1, $ver2, $oper = null)
    {
        $this->numArgs = func_num_args();
        $this->ver1 = $ver1;
        $this->ver2 = $ver2;
        $this->oper = $oper;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = version_compare($this->ver1, $this->ver2);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = version_compare($this->ver1, $this->ver2, $this->oper);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
