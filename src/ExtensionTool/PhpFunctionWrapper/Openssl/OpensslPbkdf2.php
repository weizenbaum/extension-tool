<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Openssl;

/**
 * a wrapper class for function: openssl_pbkdf2
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: openssl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class OpensslPbkdf2
{
    public $password;
    public $salt;
    public $key_length;
    public $iterations;
    public $digest_algorithm;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($password, $salt, $key_length, $iterations, $digest_algorithm = null)
    {
        $this->numArgs = func_num_args();
        $this->password = $password;
        $this->salt = $salt;
        $this->key_length = $key_length;
        $this->iterations = $iterations;
        $this->digest_algorithm = $digest_algorithm;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 4) {
        $this->return = openssl_pbkdf2($this->password, $this->salt, $this->key_length, $this->iterations);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = openssl_pbkdf2($this->password, $this->salt, $this->key_length, $this->iterations, $this->digest_algorithm);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
