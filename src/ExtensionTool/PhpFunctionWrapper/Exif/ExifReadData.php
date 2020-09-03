<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Exif;

/**
 * a wrapper class for function: exif_read_data
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: exif
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ExifReadData
{
    public $filename;
    public $sections_needed;
    public $sub_arrays;
    public $read_thumbnail;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $sections_needed = null, $sub_arrays = null, $read_thumbnail = null)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->sections_needed = $sections_needed;
        $this->sub_arrays = $sub_arrays;
        $this->read_thumbnail = $read_thumbnail;
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
        $this->return = exif_read_data($this->filename);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = exif_read_data($this->filename, $this->sections_needed);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = exif_read_data($this->filename, $this->sections_needed, $this->sub_arrays);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = exif_read_data($this->filename, $this->sections_needed, $this->sub_arrays, $this->read_thumbnail);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
