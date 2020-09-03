<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gmp;

/**
 * a wrapper class for function: gmp_strval
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gmp
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class GmpStrval
{
    public $gmpnumber;
    public $base;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($gmpnumber, $base = null)
    {
        $this->numArgs = func_num_args();
        $this->gmpnumber = $gmpnumber;
        $this->base = $base;
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
        $this->return = gmp_strval($this->gmpnumber);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = gmp_strval($this->gmpnumber, $this->base);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
