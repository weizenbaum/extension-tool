<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Hash;

/**
 * a wrapper class for function: hash_pbkdf2
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: hash
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class HashPbkdf2
{
    public $algo;
    public $password;
    public $salt;
    public $iterations;
    public $length;
    public $raw_output;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($algo, $password, $salt, $iterations, $length = null, $raw_output = null)
    {
        $this->numArgs = func_num_args();
        $this->algo = $algo;
        $this->password = $password;
        $this->salt = $salt;
        $this->iterations = $iterations;
        $this->length = $length;
        $this->raw_output = $raw_output;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 4) {
        $this->return = hash_pbkdf2($this->algo, $this->password, $this->salt, $this->iterations);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = hash_pbkdf2($this->algo, $this->password, $this->salt, $this->iterations, $this->length);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = hash_pbkdf2($this->algo, $this->password, $this->salt, $this->iterations, $this->length, $this->raw_output);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
