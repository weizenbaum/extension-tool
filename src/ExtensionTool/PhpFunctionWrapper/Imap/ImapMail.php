<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_mail
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapMail
{
    public $to;
    public $subject;
    public $message;
    public $additional_headers;
    public $cc;
    public $bcc;
    public $rpath;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($to, $subject, $message, $additional_headers = null, $cc = null, $bcc = null, $rpath = null)
    {
        $this->numArgs = func_num_args();
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->additional_headers = $additional_headers;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->rpath = $rpath;
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
        if ($this->numArgs > 7) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = imap_mail($this->to, $this->subject, $this->message);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_mail($this->to, $this->subject, $this->message, $this->additional_headers);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = imap_mail($this->to, $this->subject, $this->message, $this->additional_headers, $this->cc);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = imap_mail($this->to, $this->subject, $this->message, $this->additional_headers, $this->cc, $this->bcc);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = imap_mail($this->to, $this->subject, $this->message, $this->additional_headers, $this->cc, $this->bcc, $this->rpath);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
