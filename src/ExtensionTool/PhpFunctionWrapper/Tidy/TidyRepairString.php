<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Tidy;

/**
 * a wrapper class for function: tidy_repair_string
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: tidy
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class TidyRepairString
{
    public $data;
    public $config_file;
    public $encoding;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($data, $config_file = null, $encoding = null)
    {
        $this->numArgs = func_num_args();
        $this->data = $data;
        $this->config_file = $config_file;
        $this->encoding = $encoding;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = tidy_repair_string($this->data);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = tidy_repair_string($this->data, $this->config_file);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = tidy_repair_string($this->data, $this->config_file, $this->encoding);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
