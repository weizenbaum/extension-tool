<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mysqli;

/**
 * a wrapper class for function: mysqli_fetch_field_direct
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mysqli
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MysqliFetchFieldDirect
{
    public $result;
    public $field_nr;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($result, $field_nr)
    {
        $this->numArgs = func_num_args();
        $this->result = $result;
        $this->field_nr = $field_nr;
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
        $this->return = mysqli_fetch_field_direct($this->result, $this->field_nr);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
