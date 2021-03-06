<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: getenv
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Getenv
{
    public $varname;
    public $local_only;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($varname = null, $local_only = null)
    {
        $this->numArgs = func_num_args();
        $this->varname = $varname;
        $this->local_only = $local_only;
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
        $this->return = getenv();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = getenv($this->varname);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = getenv($this->varname, $this->local_only);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
