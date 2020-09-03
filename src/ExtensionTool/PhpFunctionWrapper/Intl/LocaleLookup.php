<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Intl;

/**
 * a wrapper class for function: locale_lookup
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: intl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class LocaleLookup
{
    public $langtag;
    public $locale;
    public $canonicalize;
    public $def;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($langtag, $locale, $canonicalize = null, $def = null)
    {
        $this->numArgs = func_num_args();
        $this->langtag = $langtag;
        $this->locale = $locale;
        $this->canonicalize = $canonicalize;
        $this->def = $def;
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
        $this->return = locale_lookup($this->langtag, $this->locale);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = locale_lookup($this->langtag, $this->locale, $this->canonicalize);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = locale_lookup($this->langtag, $this->locale, $this->canonicalize, $this->def);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
