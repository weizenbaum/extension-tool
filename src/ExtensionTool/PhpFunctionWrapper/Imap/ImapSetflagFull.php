<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_setflag_full
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapSetflagFull
{
    public $stream_id;
    public $sequence;
    public $flag;
    public $options;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream_id, $sequence, $flag, $options = null)
    {
        $this->numArgs = func_num_args();
        $this->stream_id = $stream_id;
        $this->sequence = $sequence;
        $this->flag = $flag;
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
        if ($this->numArgs > 4) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = imap_setflag_full($this->stream_id, $this->sequence, $this->flag);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_setflag_full($this->stream_id, $this->sequence, $this->flag, $this->options);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
