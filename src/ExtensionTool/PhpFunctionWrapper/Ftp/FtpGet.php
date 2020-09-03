<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Ftp;

/**
 * a wrapper class for function: ftp_get
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: ftp
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FtpGet
{
    public $ftp;
    public $local_file;
    public $remote_file;
    public $mode;
    public $resume_pos;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($ftp, $local_file, $remote_file, $mode = null, $resume_pos = null)
    {
        $this->numArgs = func_num_args();
        $this->ftp = $ftp;
        $this->local_file = $local_file;
        $this->remote_file = $remote_file;
        $this->mode = $mode;
        $this->resume_pos = $resume_pos;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = ftp_get($this->ftp, $this->local_file, $this->remote_file);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = ftp_get($this->ftp, $this->local_file, $this->remote_file, $this->mode);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = ftp_get($this->ftp, $this->local_file, $this->remote_file, $this->mode, $this->resume_pos);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
