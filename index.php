<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condition</title>
</head>
<body>

    <h2>conditions if...else</h2>

    <?php

    $day = "Tuesday";

    if($day == "Tuesday"){
        echo "<b>Today is holiday.";
    }
    else{
        echo "Today is not holiday.";
    }

    echo "<br>";

    $num = 67;

    if($num % 2 ==0){
        echo "Multiples of 2";
    }
    elseif($num % 3 == 0){
        echo "Multiples of 3";
    }
    elseif($num % 4 == 0){
        echo "Multiples of 4";
    }
    elseif($num % 5 == 0){
        echo "Multiples of 5";
    }
    else{
        echo "It is just a number only.";
    }
    
    ?>

</body>
</html>