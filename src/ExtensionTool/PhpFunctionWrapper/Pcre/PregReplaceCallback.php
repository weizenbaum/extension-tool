<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcre;

/**
 * a wrapper class for function: preg_replace_callback
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcre
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PregReplaceCallback
{
    public $regex;
    public $callback;
    public $subject;
    public $limit;
    public $count;
    public $flags;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($regex, $callback, $subject, $limit = null, $count = null, $flags = null)
    {
        $this->numArgs = func_num_args();
        $this->regex = $regex;
        $this->callback = $callback;
        $this->subject = $subject;
        $this->limit = $limit;
        $this->count = $count;
        $this->flags = $flags;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 6) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = preg_replace_callback($this->regex, $this->callback, $this->subject);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = preg_replace_callback($this->regex, $this->callback, $this->subject, $this->limit);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = preg_replace_callback($this->regex, $this->callback, $this->subject, $this->limit, $this->count);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = preg_replace_callback($this->regex, $this->callback, $this->subject, $this->limit, $this->count, $this->flags);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
