<?php
// declare(strict_types=1);
// include_once("b.php");
// include_once("a.php");



// function c(){
// 	echo "Hello c";
// }

// c();
// b();
// a();

// print "<pre>";

// function typehint($a):int{
// 	return (int)$a;
// }

// echo typehint(10.5);

// print "<pre>";

// function test(&$x){
// 	$x=1;
// }

// $a=7;
// test($a);
// echo $a;

// print "<pre>";

// function testw($x){
// 	return $x;
// }

// $a=testw;
// echo $a(5);

print "<br>";

$result=function($num1){
	return function ($num2) use ($num1){
		return $num1*$num2;
	};
};

$x=$result(2);
echo $x(5);
// var_dump($x) ;

