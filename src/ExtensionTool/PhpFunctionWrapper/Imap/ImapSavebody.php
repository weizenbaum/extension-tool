<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_savebody
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapSavebody
{
    public $stream_id;
    public $file;
    public $msg_no;
    public $section;
    public $options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream_id, $file, $msg_no, $section = null, $options = null)
    {
        $this->numArgs = func_num_args();
        $this->stream_id = $stream_id;
        $this->file = $file;
        $this->msg_no = $msg_no;
        $this->section = $section;
        $this->options = $options;
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
        $this->return = imap_savebody($this->stream_id, $this->file, $this->msg_no);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_savebody($this->stream_id, $this->file, $this->msg_no, $this->section);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = imap_savebody($this->stream_id, $this->file, $this->msg_no, $this->section, $this->options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
