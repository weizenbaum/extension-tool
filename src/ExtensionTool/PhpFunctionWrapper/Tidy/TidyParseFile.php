<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Tidy;

/**
 * a wrapper class for function: tidy_parse_file
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: tidy
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class TidyParseFile
{
    public $file;
    public $config_options;
    public $encoding;
    public $use_include_path;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($file, $config_options = null, $encoding = null, $use_include_path = null)
    {
        $this->numArgs = func_num_args();
        $this->file = $file;
        $this->config_options = $config_options;
        $this->encoding = $encoding;
        $this->use_include_path = $use_include_path;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
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
        if ($this->numArgs === 1) {
        $this->return = tidy_parse_file($this->file);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = tidy_parse_file($this->file, $this->config_options);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = tidy_parse_file($this->file, $this->config_options, $this->encoding);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = tidy_parse_file($this->file, $this->config_options, $this->encoding, $this->use_include_path);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
