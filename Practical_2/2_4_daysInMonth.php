<?php
$month1=2;
$month2=8;
$month3=15;

function daysInMonth($month){
    $days=[1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31];

    if($month<1 || $month>12){
        echo "Invalid month : ".$month."<Br>";
    }
    else{
        echo "No. of days in month ".$month." : ".$days[$month]."<Br>";
    }
}

daysInMonth($month1);
daysInMonth($month2);
daysInMonth($month3);

?>