<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: levenshtein
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Levenshtein
{
    public $str1;
    public $str2;
    public $cost_ins;
    public $cost_rep;
    public $cost_del;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($str1, $str2, $cost_ins = null, $cost_rep = null, $cost_del = null)
    {
        $this->numArgs = func_num_args();
        $this->str1 = $str1;
        $this->str2 = $str2;
        $this->cost_ins = $cost_ins;
        $this->cost_rep = $cost_rep;
        $this->cost_del = $cost_del;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = levenshtein($this->str1, $this->str2);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = levenshtein($this->str1, $this->str2, $this->cost_ins);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = levenshtein($this->str1, $this->str2, $this->cost_ins, $this->cost_rep);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = levenshtein($this->str1, $this->str2, $this->cost_ins, $this->cost_rep, $this->cost_del);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
