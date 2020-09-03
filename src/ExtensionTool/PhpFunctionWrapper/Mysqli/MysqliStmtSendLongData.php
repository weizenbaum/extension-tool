<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Mysqli;

/**
 * a wrapper class for function: mysqli_stmt_send_long_data
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: mysqli
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class MysqliStmtSendLongData
{
    public $stmt;
    public $param_nr;
    public $data;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stmt, $param_nr, $data)
    {
        $this->numArgs = func_num_args();
        $this->stmt = $stmt;
        $this->param_nr = $param_nr;
        $this->data = $data;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
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
        if ($this->numArgs === 3) {
        $this->return = mysqli_stmt_send_long_data($this->stmt, $this->param_nr, $this->data);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
