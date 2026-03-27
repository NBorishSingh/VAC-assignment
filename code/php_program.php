<!DOCTYPE html>
<html>

<head>
<title>Prime Number Check</title>
</head>

<body>

<h1>Find if the number is prime</h1>

<form method="post">

<input type="number" name="num" placeholder="Enter a number">

<button type="submit">Submit</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$num = $_POST["num"];

$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}

for ($i = 2; $i <= $num / 2; $i++) {

    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }

}

if ($isPrime) {
    echo "<h3>$num is a Prime Number</h3>";
}
else {
    echo "<h3>$num is Not a Prime Number</h3>";
}

}

?>

</body>
</html>