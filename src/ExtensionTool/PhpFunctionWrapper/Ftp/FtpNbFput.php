<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Ftp;

/**
 * a wrapper class for function: ftp_nb_fput
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: ftp
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class FtpNbFput
{
    public $ftp;
    public $remote_file;
    public $fp;
    public $mode;
    public $startpos;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($ftp, $remote_file, $fp, $mode = null, $startpos = null)
    {
        $this->numArgs = func_num_args();
        $this->ftp = $ftp;
        $this->remote_file = $remote_file;
        $this->fp = $fp;
        $this->mode = $mode;
        $this->startpos = $startpos;
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
        $this->return = ftp_nb_fput($this->ftp, $this->remote_file, $this->fp);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = ftp_nb_fput($this->ftp, $this->remote_file, $this->fp, $this->mode);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = ftp_nb_fput($this->ftp, $this->remote_file, $this->fp, $this->mode, $this->startpos);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
