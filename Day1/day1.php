<?php

// function foo(){
// 	function bar(){
// 		echo "Hello world";
// 	}
// }

// foo();
// bar();

// function aurg(){
// 	print_r(func_get_args());
// }


// aurg(1,2.1,1,1,5,6,7,8,9);

// function recursion($a){
// 	if($a<20){
// 		echo $a." ";
// 		recursion($a+1);
// 	}
// }

// recursion(10);

$a="America";

$a=&$b;
$b="Hello";
// echo $a;

function ref(&$r){
	$r .="world";
	echo $r;
}

$str="Hello ";
ref($str);
// echo $str,"<br>";
function coffee($type="Capicheno"){
	echo $type;
}

// coffee("cold coffee");

function makeyogurt($type = "acidophilus", $flavour)
{
    return "Making a bowl of $type $flavour.\n";
}
 
echo makeyogurt("","raspberry");

function number(...$number){
	print_r($number);
}

number(1,2,3,4,5);