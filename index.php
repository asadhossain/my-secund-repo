<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Project
    </title>
</head>
<body>
    
<?php
$marks = 111;

if ($marks >= 80 && $marks <= 100 ){
    echo "Congratulation You Got A+ Grade Point 5.00";
} elseif ($marks >= 70 && $marks <= 79) {
    echo "Congratulation You Got A Grade Point 4.00";
} elseif ($marks >= 60 && $marks <= 69) {
    echo "Congratulation You Got A- Grade Point 3.5";
} elseif ($marks >= 50 && $marks <= 59) {
    echo "Congratulation You Got B Grade Point 3.00";
} elseif ($marks >= 40 && $marks <= 2) {
    echo  "You Got C Grade Point 2.00";
} elseif ( $marks >= 33 && $marks <= 39){
    echo "You Got D Grade Point 1.00";
} elseif ($marks >=0 && $marks <=32 ){
    echo "I'm Sorry your mark is Fail.";
} else {
    echo "invalid output";
}

?>

</body>
</html>