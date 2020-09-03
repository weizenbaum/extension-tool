<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mbstring;

/**
 * a wrapper class for function: mb_ereg_search_setpos
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mbstring
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MbEregSearchSetpos
{
    public $position;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($position)
    {
        $this->numArgs = func_num_args();
        $this->position = $position;
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
        if ($this->numArgs > 1) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = mb_ereg_search_setpos($this->position);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
