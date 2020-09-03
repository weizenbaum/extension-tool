<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\SPL;

/**
 * a wrapper class for function: class_uses
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: SPL
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ClassUses
{
    public $what;
    public $autoload;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($what, $autoload = null)
    {
        $this->numArgs = func_num_args();
        $this->what = $what;
        $this->autoload = $autoload;
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
        $this->return = class_uses($this->what);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = class_uses($this->what, $this->autoload);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}