<?php
// Info functions:
// get_defined_functions
// get_defined_constants
// get_extension_funcs
// Reflection methods:
// ...

// Ich glaube, interessante Books sind:
// https://www.php.net/manual/en/book.info.php: getenv, putenv, getopt, ini_set, ini_get
// https://www.php.net/manual/en/book.misc.php: define, exit, eval, sleep, constant
// https://www.php.net/manual/en/book.var.php: get_resource_type, is_array, settype, unset
// https://www.php.net/manual/en/book.errorfunc.php: set_error_handler, error_log
// https://www.php.net/manual/en/book.funchand.php: call_user_func, register_shutdown_function

$interesting = array('core','standard','mbstring', 'ereg');
foreach ($interesting as $value) {
    $funcs = get_extension_funcs($value);
    var_dump($funcs);
}

die();

$interesting = array('core','standard','mbstring');
$interesting2 = array('calendar', 'date',
'ctype', 'iconv', 'intl', 
'posix', 'readline', 'spl');
/**
 * use SQLite for Application File Format
 * instead of dealing with datasets implemented as arrays or objects
 * instead of CSV, parsers etc.
 * @var SQLite3 $db
 */

//main------------------------------
$db = new SQLite3('mysqlitedb.db');

$extArray1 = array();
$extArray2 = array();

$extPartArray = get_loaded_extensions(false);
foreach ($extPartArray as $ext) {
    $extArray1[]=array('namei'=>strtolower($ext), 'nameRegular'=>$ext, 'isRegular'=>true);
}
$tableName1 = array2tempTable($extArray1, $db);

$extPartArray = get_loaded_extensions(true);
foreach ($extPartArray as $ext) {
    $extArray2[]=array('namei'=>strtolower($ext), 'nameZend'=>$ext, 'isZend'=>true);
}
$tableName2 = array2tempTable($extArray2, $db);

function array2tempTable($array, $db) {
    //create
    $name = createTempTable($db, $array);
    //and insert table
    insertIntoTempTable($db, $name, $array);
    return $name;
}

//array_datasets_merge($extArray1, $extArray2);
fullOuterJoinTables($db, $tableName1, $tableName2);


//main------------------------------


function createTempTable($db, $array) {
    $keysArray = array_keys($array[0]);
    foreach ($keysArray as &$key) {
        //datatype
        $key = $key . ' TEXT';
    }
    $colsString = implode(', ', $keysArray);
    $name = 'tmp' . time();
    $db->exec('CREATE TABLE ' . $name . '(' . $colsString . ')');
    return $name;
}

function insertIntoTempTable($db, $name, $array)
{
    foreach ($array as $dataset) {
        $keysString = implode(', ', array_keys($dataset));
        foreach (array_values($dataset) as &$value) {
            $value = '\'' . $value .  '\'';
            $valuesArray[] = $value;
        }
        $valuesString = implode (', ', $valuesArray);
        
        $db->exec('INSERT INTO ' . $name . '(' . $keysString . ')' . ' VALUES ' . '(' . $valuesString . ')');
        unset($valuesArray);
    }
    
}

//get col names for full outer join
function getColumnNames($db, $tableName) {
    //https://stackoverflow.com/questions/685206/how-to-get-a-list-of-column-names
    $sql = 'PRAGMA table_info( '. $tableName . ');';
    /**
     * 
     * @var SQLite3Result $res
     */
    $res = $db->query($sql);
    $namesArray = array();
    while ($arr = $res->fetchArray()) {
        $namesArray[] = $arr['name'];
    }
    return $namesArray;
    
}
/**
 * 
https://www.sqlitetutorial.net/sqlite-full-outer-join/
outer join with first col name
 */
function fullOuterJoinTables($db, $tableName1, $tableName2) {
    
    $cols1 = getColumnNames($db, $tableName1);
    $onName = $cols1[0];
    foreach ($cols1 as &$col) {
        $col = 'table1.'.$col;
    }
    $cols2 = getColumnNames($db, $tableName2);
    foreach ($cols2 as &$col) {
        $col = 'table2.'.$col;
    }
    $cols = array_merge($cols1, $cols2);
    $colsString = implode(', ', $cols);
    $sql = 'SELECT ' . $colsString . 
    ' FROM ' . 
    $tableName1 . ' table1' . ' LEFT JOIN ' .
    $tableName2 . ' table2' . ' USING (' . $onName . ') ' .
    'UNION ALL 
    SELECT ' . 
    $colsString . 
    ' FROM ' .
    $tableName2 . ' table2' . ' LEFT JOIN ' .
    $tableName1 . ' table1' . ' USING (' . $onName . ') ' .
    'WHERE ' . $onName. ' IS NULL;';
    var_dump($sql);
}

function deleteTempTables() {
    
}

/**
 * does not scale etc.
 * merge (full outer join) 2 datasets, first data is primary key, means each array has unique keys
 * overwrites dataset
 * @param unknown $array1
 * @param unknown $array2
 */
function array_datasets_merge($array1, $array2) {
    $array2copy = $array2;
    $keysArray = array_keys($array1[0]);
    var_dump($keysArray);
    $pkName = $array1[0][$keysArray[0]];
var_dump($pkName);
    foreach ($array1 as $dataset1) {
        foreach ($array2copy as $dataset2) {
            if ($dataset1[$pkName] === $dataset2[$pkName]) {
                //match
//                 $mergedArray[] = array($pkName )
            }
        }
//         $mergedArray[]
    }
    return $mergedArray;
}