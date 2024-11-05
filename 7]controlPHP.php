<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statrments</title>
</head>
<body>
        <h1>Control Statements</h1>
        <h2>1. If-Else elseif</h2>
        <?php
            $num = 10;
            if($num > 10){
                echo "Number is greater than 10";
            }elseif($num == 10){
                echo "Number is equal to 10";
            }else{
                echo "Number is less than 10";
            }
        ?>
         <h2>2. Switch Statement</h2>
    <?php
        $day = "Tuesday";
        switch ($day) {
            case "Monday":
                echo "Today is Monday";
                break;
            case "Tuesday":
                echo "Today is Tuesday";
                break;
            case "Wednesday":
                echo "Today is Wednesday";
                break;
            default:
                echo "Today is not Monday, Tuesday, or Wednesday";
        }
    ?>
    <h2>3. While Loop</h2>
    <?php

    $var = 10;
    while($var-->0) {
        echo "Value of var is: $var <br>";
    }
    ?>

    <h2>4. Do-While Loop</h2>
    <?php
    $var = 10;
    do {
        echo "My name is Yash, Printing this: $var time <br>";
    } while ($var-->0);
    ?>

    <h2>5. For Loop</h2>
    <?php
    for($i = 0; $i < 10; $i++) {
        echo "Value of i is: $i <br>";
    }
    ?>

    <h2>6. For Each Loop</h2>
    <?php
    $arr = array("yash",1,"harsh",2,"soumitra",3);
    foreach( $arr as $val){
        echo "Value is: $val <br>";
    }
    echo "The length of array is :". count($arr)."<br>";

    ?>

</body>
</html>