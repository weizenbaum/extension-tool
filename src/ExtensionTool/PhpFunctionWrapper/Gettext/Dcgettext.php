<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Gettext;

/**
 * a wrapper class for function: dcgettext
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: gettext
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class Dcgettext
{
    public $domain_name;
    public $msgid;
    public $category;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($domain_name, $msgid, $category)
    {
        $this->numArgs = func_num_args();
        $this->domain_name = $domain_name;
        $this->msgid = $msgid;
        $this->category = $category;
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
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 3) {
        $this->return = dcgettext($this->domain_name, $this->msgid, $this->category);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
