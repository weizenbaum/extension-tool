<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gettext;

/**
 * a wrapper class for function: dngettext
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gettext
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Dngettext
{
    public $domain;
    public $msgid1;
    public $msgid2;
    public $count;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($domain, $msgid1, $msgid2, $count)
    {
        $this->numArgs = func_num_args();
        $this->domain = $domain;
        $this->msgid1 = $msgid1;
        $this->msgid2 = $msgid2;
        $this->count = $count;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 4) {
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
        if ($this->numArgs === 4) {
        $this->return = dngettext($this->domain, $this->msgid1, $this->msgid2, $this->count);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
