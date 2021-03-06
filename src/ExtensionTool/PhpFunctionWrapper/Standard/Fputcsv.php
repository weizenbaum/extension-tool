<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: fputcsv
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Fputcsv
{
    public $fp;
    public $fields;
    public $delimiter;
    public $enclosure;
    public $escape_char;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($fp, $fields, $delimiter = null, $enclosure = null, $escape_char = null)
    {
        $this->numArgs = func_num_args();
        $this->fp = $fp;
        $this->fields = $fields;
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
        $this->escape_char = $escape_char;
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
        $this->return = fputcsv($this->fp, $this->fields);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = fputcsv($this->fp, $this->fields, $this->delimiter);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = fputcsv($this->fp, $this->fields, $this->delimiter, $this->enclosure);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = fputcsv($this->fp, $this->fields, $this->delimiter, $this->enclosure, $this->escape_char);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
