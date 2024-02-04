<?php

// setting up cookies
setcookie("fav_food", "pizza", time() + 86400, "/");
setcookie("fav_color", "blue", time() + 86400 * 2, "/");
foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}
?>

<?php

include("header.html");
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the Home Page of my PHP website.

</body>

</html> -->

<?php

include("footer.html");
?>

<?php

// // SANITIZATION
// if (isset($_POST["login"])) {
// $username = filter_input(
// INPUT_POST,
// "username",
// FILTER_SANITIZE_SPECIAL_CHARS
// );
// $age = filter_input(
// INPUT_POST,
// "age",
// FILTER_SANITIZE_NUMBER_INT
// );
// $email = filter_input(
// INPUT_POST,
// "email",
// FILTER_SANITIZE_EMAIL
// );
// }
// //VALIDATION
// if (isset($_POST["login"])) {
// $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
// $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
// if (empty($age)) {
// echo "Age is required";
// } else {
// echo "Age is valid";
// }
// }

// function hypotenuse($a, $b)
// {
// $c = sqrt($a ** 2 + $b ** 2);
// return $c;
// }
// echo hypotenuse(3, 4);

// function happy_birthday($first_name, $age)
// {
// echo "Happy Birthday to you! <br>";
// echo "Happy Birthday to you! <br>";
// echo "Happy Birthday dear {$first_name}! <br>";
// echo "You are {$age} years old <br>";
// }

// happy_birthday("Janka", 29);

// if (isset($_POST["submit"])) {

// if (isset($_POST["pizza"])) {
// echo "You selected Pizza<br>";
// }
// switch ($credit_card) {
// case "Visa":
// echo "You selected Visa";
// break;
// case "MasterCard":
// echo "You selected MasterCard";
// break;
// case "American Express":
// echo "You selected American Express";
// break;
// default:
// echo "Please select a credit card";
// }
// }