= Goals (Ziele, Sinn und Zweck) =

* CSV files for core functions, and note for aliases etc. 
* An improved PHP API:
  * provide additional object-oriented interface for PHP internal (built-in) functions aka core functions
  * (like the Mysqli classes)
  * implemented in pure, stable PHP
  * contains all the boilerplate code for the following:
    * throws Exception in case of returns that really mean errors
    * throws Exception in case of too few or too many arguments
  * full strict mode
  * provides getter methods for parameters which are passed by reference
  * works as a foundation e.g. for building complex APIs like Java Class Library 
  * works as a foundation for building completely object-oriented interface for handling objects instead of PHP scalar types (primitive, native, atomic)
    * https://stackoverflow.com/questions/6623130/scalar-vs-primitive-data-type-are-they-the-same-thing
    * The reason for that was type safety, this was before the rise of PHP 7.0 with scalar type declarations / strict mode
    * e.g. now we have "PHP Fatal error:  Uncaught TypeError: preg_match() expects parameter 1 to be string, object given in ..."
    
= Details =
* one class per function
* gives a namespace for the functions from the extension name
* Pascal case/studly Caps
