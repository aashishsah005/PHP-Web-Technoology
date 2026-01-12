<!DOCTYPE html>
<html lang="en">
<head>
    <title>List of Prime Numbers...</title>
</head>
<body>
    <form method="POST">
        Start Number:
        <input type="Number" name="start" required ><Br><Br>
        End Number:
        <input type="Number" name="end" required ><Br><Br>

        <input type="submit" name="submit" ><Br><Br>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $start=$_POST["start"];
            $end=$_POST["end"];
        }

        for($i=$start;$i<=$end;$i++){
            $isPrime=True;
            for($j=2;$j<=sqrt($i);$j++){
                if($i%$j==0){
                    $isPrime=FALSE;
                    break;
                }
            }
            if($isPrime==TRUE){
                echo $i." ";
            }
        }
    ?>
</body>
</html>