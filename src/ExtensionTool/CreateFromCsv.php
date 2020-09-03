<?php

class CreateFromCsv
{

    public function create($file)
    {
        $cc = new CreateClass();
        // preg_match is an example for a bigger generated class and all the features
        // $cc->createFile('preg_match', array('error'=>'false'));

        $row = 1;

        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                // ignore first line (headings)
                if ($row === 1) {
                    $row ++;
                    continue;
                }
                $num = count($data);

                if ($data[3] === '') {
                    // the do not use not column is empty
                    // means no alias etc.
                    // then create Class
                    $cc->createFile($data[1]);
                }
                echo "$num fields in line $row:\n";
                $row ++;
                for ($c = 0; $c < $num; $c ++) {
                    echo $data[$c] . "\n";
                }
            }
            fclose($handle);
        }
    }
}