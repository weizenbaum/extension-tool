<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Imap;

/**
 * a wrapper class for function: imap_search
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: imap
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ImapSearch
{
    public $stream_id;
    public $criteria;
    public $options;
    public $charset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($stream_id, $criteria, $options = null, $charset = null)
    {
        $this->numArgs = func_num_args();
        $this->stream_id = $stream_id;
        $this->criteria = $criteria;
        $this->options = $options;
        $this->charset = $charset;
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
        $this->return = imap_search($this->stream_id, $this->criteria);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = imap_search($this->stream_id, $this->criteria, $this->options);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = imap_search($this->stream_id, $this->criteria, $this->options, $this->charset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
