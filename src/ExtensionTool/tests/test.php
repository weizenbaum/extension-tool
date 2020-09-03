<?php
declare(strict_types=1);
use PhpFunctionWrapper\Pcre\PregMatch;
use PhpFunctionWrapper\Pcre\PregMatch_mod;

//
// function() !== function(null)
//if ($variableNotSet === null) echo 'not set variables are identical equally to null'



//some tests

$subject = 'needle';
//$test2 = (new PregMatch())->run((new Exception()), $subject); //throws TypeError
//var_dump($test2);

$pregm = new PregMatch();
$pattern = '/(l)/';
$subject = 'hello world';
$matches = array();
$test2 = $pregm->run($pattern, $subject, $matches);

var_dump($test2);
var_dump($matches);
var_dump($pregm->getSubpatterns());

//counter tests internal function
var_dump(getenv('PATH')); //works
// var_dump(getenv(null, null));
// var_dump(getenv(null, null, null));


//positive test
// $test1 = (new PhpFunctionWrapper\Standard\Getenv)->run();
// var_dump($test1);

// $test1 = (new PhpFunctionWrapper\Standard\Getenv())->run('PATH', false);
// var_dump($test1); 

//negative tests

//$test1 = (new PhpFunctionWrapper\Standard\Getenv())->run(null, null, null);
//var_dump($test1); //wirft Exception

// $test1 = (new PhpFunctionWrapper\Standard\Getenv())->run('PATH_GIBBET_NICH', false);
// var_dump($test1); //soll Exception werfen
