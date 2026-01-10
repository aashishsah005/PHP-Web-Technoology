<?php
date_default_timezone_set("asia/kolkata");
$time=date("H:i:s");
echo "Current Time is : ".$time."<Br>";

if($time>="00:00:00" && $time<="11:59:59"){
    echo "Good Morning....";
}
elseif($time>="12:00:00" && $time<="17:59:59"){
    echo "Good AfterNoon...";
}
elseif($time>="18:00:00" && $time<="20:59:59"){
    echo "Good Evening...";
}
else {
    echo "Good Night...";
}
?>