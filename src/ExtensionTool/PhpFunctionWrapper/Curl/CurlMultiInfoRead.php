<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Curl;

/**
 * a wrapper class for function: curl_multi_info_read
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: curl
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class CurlMultiInfoRead
{
    public $mh;
    public $msgs_in_queue;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($mh, $msgs_in_queue = null)
    {
        $this->numArgs = func_num_args();
        $this->mh = $mh;
        $this->msgs_in_queue = $msgs_in_queue;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getMsgsInQueue()
    {
        return $this->msgs_in_queue;
    }

    public function prepareInput()
    {
        if ($this->numArgs < 1) {
        throw new \Exception('too few arguments');
        return;
        }
        if ($this->numArgs > 2) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = curl_multi_info_read($this->mh);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = curl_multi_info_read($this->mh, $this->msgs_in_queue);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
