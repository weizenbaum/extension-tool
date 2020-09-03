<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_random_pseudo_bytes
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslRandomPseudoBytes
{
    public $length;
    public $result_is_strong;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($length, $result_is_strong = null)
    {
        $this->numArgs = func_num_args();
        $this->length = $length;
        $this->result_is_strong = $result_is_strong;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getResultIsStrong()
    {
        return $this->result_is_strong;
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
        $this->return = openssl_random_pseudo_bytes($this->length);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = openssl_random_pseudo_bytes($this->length, $this->result_is_strong);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
