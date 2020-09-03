<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xml;

/**
 * a wrapper class for function: xml_parse_into_struct
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xml
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlParseIntoStruct
{
    public $parser;
    public $data;
    public $values;
    public $index;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($parser, $data, $values, $index = null)
    {
        $this->numArgs = func_num_args();
        $this->parser = $parser;
        $this->data = $data;
        $this->values = $values;
        $this->index = $index;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 3) {
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
        if ($this->numArgs === 3) {
        $this->return = xml_parse_into_struct($this->parser, $this->data, $this->values);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = xml_parse_into_struct($this->parser, $this->data, $this->values, $this->index);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
