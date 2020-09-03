<?php

class CreateFromReflection
{

    public function create()
    {
        $cc = new CreateClass();

        $exts = get_loaded_extensions(null);
        foreach ($exts as $name) {
            $re = new ReflectionExtension($name);
            var_dump($name);
            $funcs = $re->getFunctions();
            var_dump($funcs);
            foreach ($funcs as $func) {
                //var_dump($func);
                // create file without return handling
                $cc->createFile($func->getName());
            }
        }
    }
}