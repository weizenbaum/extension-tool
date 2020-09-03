<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Session;

/**
 * a wrapper class for function: session_set_save_handler
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: session
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class SessionSetSaveHandler
{
    public $open;
    public $close;
    public $read;
    public $write;
    public $destroy;
    public $gc;
    public $create_sid;
    public $validate_sid;
    public $update_timestamp;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run(
        $open,
        $close = null,
        $read = null,
        $write = null,
        $destroy = null,
        $gc = null,
        $create_sid = null,
        $validate_sid = null,
        $update_timestamp = null
    ) {
        $this->numArgs = func_num_args();
        $this->open = $open;
        $this->close = $close;
        $this->read = $read;
        $this->write = $write;
        $this->destroy = $destroy;
        $this->gc = $gc;
        $this->create_sid = $create_sid;
        $this->validate_sid = $validate_sid;
        $this->update_timestamp = $update_timestamp;
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
        if ($this->numArgs > 9) {
        throw new \Exception('too many arguments');
        return;
        }
    }

    public function execute()
    {
        if ($this->numArgs === 1) {
        $this->return = session_set_save_handler($this->open);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = session_set_save_handler($this->open, $this->close);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write);
        return;
        }
        if ($this->numArgs === 5) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write, $this->destroy);
        return;
        }
        if ($this->numArgs === 6) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write, $this->destroy, $this->gc);
        return;
        }
        if ($this->numArgs === 7) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write, $this->destroy, $this->gc, $this->create_sid);
        return;
        }
        if ($this->numArgs === 8) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write, $this->destroy, $this->gc, $this->create_sid, $this->validate_sid);
        return;
        }
        if ($this->numArgs === 9) {
        $this->return = session_set_save_handler($this->open, $this->close, $this->read, $this->write, $this->destroy, $this->gc, $this->create_sid, $this->validate_sid, $this->update_timestamp);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
