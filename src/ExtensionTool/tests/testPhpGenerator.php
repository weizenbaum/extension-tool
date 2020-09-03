<?php
require_once __DIR__ . '/../vendor/autoload.php';

$class = new Nette\PhpGenerator\ClassType('Demo');

$class
->setFinal()
->setExtends(ParentClass::class)
->addImplement(Countable::class)
->addTrait(Nette\SmartObject::class)
->addComment("Description of class.\nSecond line\n")
->addComment('@property-read Nette\Forms\Form $form');

// to generate PHP code simply cast to string or use echo:
echo $class;