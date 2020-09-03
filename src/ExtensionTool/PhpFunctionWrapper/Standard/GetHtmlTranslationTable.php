<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: get_html_translation_table
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class GetHtmlTranslationTable
{
    public $table;
    public $quote_style;
    public $encoding;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($table = null, $quote_style = null, $encoding = null)
    {
        $this->numArgs = func_num_args();
        $this->table = $table;
        $this->quote_style = $quote_style;
        $this->encoding = $encoding;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs > 3) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 0) {
        $this->return = get_html_translation_table();
        return;
        }
        if ($this->numArgs === 1) {
        $this->return = get_html_translation_table($this->table);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = get_html_translation_table($this->table, $this->quote_style);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = get_html_translation_table($this->table, $this->quote_style, $this->encoding);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
