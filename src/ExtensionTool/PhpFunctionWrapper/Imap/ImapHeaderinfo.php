<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_headerinfo
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapHeaderinfo
{
    public $stream_id;
    public $msg_no;
    public $from_length;
    public $subject_length;
    public $default_host;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream_id, $msg_no, $from_length = null, $subject_length = null, $default_host = null)
    {
        $this->numArgs = func_num_args();
        $this->stream_id = $stream_id;
        $this->msg_no = $msg_no;
        $this->from_length = $from_length;
        $this->subject_length = $subject_length;
        $this->default_host = $default_host;
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
        $this->return = imap_headerinfo($this->stream_id, $this->msg_no);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = imap_headerinfo($this->stream_id, $this->msg_no, $this->from_length);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_headerinfo($this->stream_id, $this->msg_no, $this->from_length, $this->subject_length);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = imap_headerinfo($this->stream_id, $this->msg_no, $this->from_length, $this->subject_length, $this->default_host);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
