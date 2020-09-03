<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

/**
 * a wrapper class for function: http_build_query
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: standard
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class HttpBuildQuery
{
    public $formdata;
    public $prefix;
    public $arg_separator;
    public $enc_type;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($formdata, $prefix = null, $arg_separator = null, $enc_type = null)
    {
        $this->numArgs = func_num_args();
        $this->formdata = $formdata;
        $this->prefix = $prefix;
        $this->arg_separator = $arg_separator;
        $this->enc_type = $enc_type;
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
        $this->return = http_build_query($this->formdata);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = http_build_query($this->formdata, $this->prefix);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = http_build_query($this->formdata, $this->prefix, $this->arg_separator);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = http_build_query($this->formdata, $this->prefix, $this->arg_separator, $this->enc_type);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
