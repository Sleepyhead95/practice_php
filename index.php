<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hot Dog<br>
        <input type="submit" name="submit" value="Submit">
    </form> -->
</body>

</html>


<?php

function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(3, 4);

function happy_birthday($first_name, $age)
{
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday dear {$first_name}! <br>";
    echo "You are {$age} years old <br>";
}

happy_birthday("Janka", 29);

// if (isset($_POST["submit"])) {

//     if (isset($_POST["pizza"])) {
//         echo "You selected Pizza<br>";
//     }
//     switch ($credit_card) {
//         case "Visa":
//             echo "You selected Visa";
//             break;
//         case "MasterCard":
//             echo "You selected MasterCard";
//             break;
//         case "American Express":
//             echo "You selected American Express";
//             break;
//         default:
//             echo "Please select a credit card";
//     }
// }
