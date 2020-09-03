<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Posix;

/**
 * a wrapper class for function: posix_mknod
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: posix
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PosixMknod
{
    public $pathname;
    public $mode;
    public $major;
    public $minor;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($pathname, $mode, $major = null, $minor = null)
    {
        $this->numArgs = func_num_args();
        $this->pathname = $pathname;
        $this->mode = $mode;
        $this->major = $major;
        $this->minor = $minor;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 2) {
        $this->return = posix_mknod($this->pathname, $this->mode);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = posix_mknod($this->pathname, $this->mode, $this->major);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = posix_mknod($this->pathname, $this->mode, $this->major, $this->minor);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
