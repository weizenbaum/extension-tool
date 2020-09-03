<?php

/**
 * This file is auto-generated.
 * 2020-09-03 08:07 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Exif;

/**
 * a wrapper class for function: exif_thumbnail
 * https://github.com/weizenbaum
 * built information
 * php_uname: Linux ingmar-Lenovo-G50-70 4.15.0-112-generic #113-Ubuntu SMP Thu Jul 9 23:41:39 UTC 2020 x86_64
 * phpversion: 7.4.7
 * extension: exif
 * extension phpversion: 7.4.7
 * @todo: define return handling for errors etc.
 */
class ExifThumbnail
{
    public $filename;
    public $width;
    public $height;
    public $imagetype;

    /**
     * main method, encapsulates necessary and comfort actions to prepare and run internal function
     */
    public function run($filename, $width = null, $height = null, $imagetype = null)
    {
        $this->numArgs = func_num_args();
        $this->filename = $filename;
        $this->width = $width;
        $this->height = $height;
        $this->imagetype = $imagetype;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getImagetype()
    {
        return $this->imagetype;
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
        $this->return = exif_thumbnail($this->filename);
        return;
        }
        if ($this->numArgs === 2) {
        $this->return = exif_thumbnail($this->filename, $this->width);
        return;
        }
        if ($this->numArgs === 3) {
        $this->return = exif_thumbnail($this->filename, $this->width, $this->height);
        return;
        }
        if ($this->numArgs === 4) {
        $this->return = exif_thumbnail($this->filename, $this->width, $this->height, $this->imagetype);
        return;
        }
    }

    public function prepareOutput()
    {
    }
}
