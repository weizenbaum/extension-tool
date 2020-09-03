<?php

/**
 * This file is auto-generated.
 * 2020-08-22 18:36 GMT
 */

declare(strict_types=1);

namespace PhpFunctionWrapper\Standard;

class Getenv_mod
{
    public function run($varname = null, $local_only = null)
    {
        $this->varname = $varname;
        $this->local_only = $local_only;
        $this->prepareInput();
        $this->execute();
        $this->prepareOutput();
        return $this->return;
    }

    public function prepareInput()
    {
    }

    public function execute()
    {
        if ($this->varname !== null && $this->local_only !== null) {
            $this->return = getenv( $this->varname, $this->local_only);
        } elseif ($this->varname !== null) {
            $this->return = getenv( $this->varname);
        } else {
            $this->return = getenv();
        }
    }

    public function prepareOutput()
    {
        //if ($this->return === NULL) throw Exception('error');
    }
}
