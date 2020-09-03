<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_reopen
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapReopen
{
    public $stream_id;
    public $mailbox;
    public $options;
    public $n_retries;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream_id, $mailbox, $options = null, $n_retries = null)
    {
        $this->numArgs = func_num_args();
        $this->stream_id = $stream_id;
        $this->mailbox = $mailbox;
        $this->options = $options;
        $this->n_retries = $n_retries;
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
        $this->return = imap_reopen($this->stream_id, $this->mailbox);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = imap_reopen($this->stream_id, $this->mailbox, $this->options);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_reopen($this->stream_id, $this->mailbox, $this->options, $this->n_retries);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
