<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gmp;

/**
 * a wrapper class for function: gmp_export
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gmp
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class GmpExport
{
    public $gmpnumber;
    public $word_size;
    public $options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($gmpnumber, $word_size = null, $options = null)
    {
        $this->numArgs = func_num_args();
        $this->gmpnumber = $gmpnumber;
        $this->word_size = $word_size;
        $this->options = $options;
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
        $this->return = gmp_export($this->gmpnumber);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = gmp_export($this->gmpnumber, $this->word_size);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = gmp_export($this->gmpnumber, $this->word_size, $this->options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
