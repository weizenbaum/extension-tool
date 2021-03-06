<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcre;

/**
 * a wrapper class for function: preg_filter
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcre
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PregFilter
{
    public $regex;
    public $replace;
    public $subject;
    public $limit;
    public $count;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($regex, $replace, $subject, $limit = null, $count = null)
    {
        $this->numArgs = func_num_args();
        $this->regex = $regex;
        $this->replace = $replace;
        $this->subject = $subject;
        $this->limit = $limit;
        $this->count = $count;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = preg_filter($this->regex, $this->replace, $this->subject);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = preg_filter($this->regex, $this->replace, $this->subject, $this->limit);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = preg_filter($this->regex, $this->replace, $this->subject, $this->limit, $this->count);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
