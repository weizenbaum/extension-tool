<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xmlwriter;

/**
 * a wrapper class for function: xmlwriter_write_element_ns
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xmlwriter
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlwriterWriteElementNs
{
    public $xmlwriter;
    public $prefix;
    public $name;
    public $uri;
    public $content;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($xmlwriter, $prefix, $name, $uri, $content = null)
    {
        $this->numArgs = func_num_args();
        $this->xmlwriter = $xmlwriter;
        $this->prefix = $prefix;
        $this->name = $name;
        $this->uri = $uri;
        $this->content = $content;
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
        if ($this->numArgs > 5) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 4) {
        $this->return = xmlwriter_write_element_ns($this->xmlwriter, $this->prefix, $this->name, $this->uri);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = xmlwriter_write_element_ns($this->xmlwriter, $this->prefix, $this->name, $this->uri, $this->content);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
