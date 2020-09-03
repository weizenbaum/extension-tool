<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Bcmath;

/**
 * a wrapper class for function: bcmul
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: bcmath
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Bcmul
{
    public $left_operand;
    public $right_operand;
    public $scale;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($left_operand, $right_operand, $scale = null)
    {
        $this->numArgs = func_num_args();
        $this->left_operand = $left_operand;
        $this->right_operand = $right_operand;
        $this->scale = $scale;
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
        $this->return = bcmul($this->left_operand, $this->right_operand);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = bcmul($this->left_operand, $this->right_operand, $this->scale);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
