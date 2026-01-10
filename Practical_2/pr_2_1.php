<?php
$str="<H1>Practical 1..</H1>";
$str0="<H1>Using echo()</H1>";
$str1="Hello World!";
$str2="I am Aashish Sah.";
echo $str."<Br>".$str0;
echo $str1." ".$str2."<Br>";
echo $str1, $str2."<Br>";

$str3="<H1>Using print() </H1>";
print($str3);
print "<Br>".$str1." ".$str2;

define("name","Aashish");
echo constant("name");  // OR  echo name;

//Check data types
$a=50;
$b="Hello";
$c=24.5;
$d=TRUE;
echo var_dump($a)."<Br>";
echo var_dump($b)."<Br>";
echo var_dump($c,$d)."<Br>";

//date 
date_default_timezone_set("asia/kolkata");
echo date("d/m/y")."   ".date("D/M/Y")."<Br>";

echo date("H:i:s")."<Br>";
//echo date("h:i:s")."<Br>";

//Time
echo time();

phpinfo();

?>