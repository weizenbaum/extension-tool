<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Pcre;

/**
 * a wrapper class for function: preg_match
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: pcre
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class PregMatch
{
    public $pattern;
    public $subject;
    public $subpatterns;
    public $flags;
    public $offset;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($pattern, $subject, $subpatterns = null, $flags = null, $offset = null)
    {
        $this->numArgs = func_num_args();
        $this->pattern = $pattern;
        $this->subject = $subject;
        $this->subpatterns = $subpatterns;
        $this->flags = $flags;
        $this->offset = $offset;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getSubpatterns()
    {
        return $this->subpatterns;
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
        $this->return = preg_match($this->pattern, $this->subject);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = preg_match($this->pattern, $this->subject, $this->subpatterns);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = preg_match($this->pattern, $this->subject, $this->subpatterns, $this->flags);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = preg_match($this->pattern, $this->subject, $this->subpatterns, $this->flags, $this->offset);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
