<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Table </title>
</head>
<body>

    <!-- form takes the input and pass it to the php/backend   -->
    <!-- there are two form methods : POST and GET            -->

    <form method="POST">
        Enter number of table you want to print : 
        <input type="number" name="table" required><br><br>

        <input type="submit" name="submit"><br><br>
    </form>
    <?php
        if(isset($_POST["submit"])){
            $num=$_POST["table"];
        }

        for($i=1;$i<=10;$i++){
            echo $num." * ".$i." = ".$num*$i."<br>";
        }
    ?>
</body>
</html>
