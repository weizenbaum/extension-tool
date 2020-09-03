<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Xmlwriter;

/**
 * a wrapper class for function: xmlwriter_write_pi
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: xmlwriter
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class XmlwriterWritePi
{
    public $xmlwriter;
    public $target;
    public $content;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($xmlwriter, $target, $content)
    {
        $this->numArgs = func_num_args();
        $this->xmlwriter = $xmlwriter;
        $this->target = $target;
        $this->content = $content;
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
        $this->return = xmlwriter_write_pi($this->xmlwriter, $this->target, $this->content);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
