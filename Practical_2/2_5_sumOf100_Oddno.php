<?php
$sum=0;

//Inside 200 there are 100 odd ansd 100 even numbers

for($i=1;$i<=200;$i+=2){
    $sum=$sum+$i;
}
echo "Sum of first 100 odd numbers : ".$sum;
?>