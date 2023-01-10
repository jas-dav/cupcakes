<!---

    By: Jasmine David and Jerome Shadkam
    1/5/2023
    url: http://jbdavid.greenriverdev.com/328/cupcakes/
    Cupcake Order form that submits to process.php (which displays the Order Summary).

--->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Order Summary</title>
</head>
<body>
<?php
// variable for cupcake flavor array
$array = $_POST['flavor'];

// check if customer typed in name and at least 1 cupcake flavor was selected
// if no name was typed and/or no checkbox was selected, print out error message
if ($_POST['name'] == "" && count($array) == 0 ||
    $_POST['name'] == "" || count($array) == 0) {
    echo "Error --- Please type in your name and select at least 1 cupcake flavor.";
}
// otherwise continue with order summary
else {
    // print thank you note with customer name
    echo "<h1>Thank you " . $_POST['name'] . ", for your order!</h1>";
    // print order summary
    echo "<u>Order Summary: </u></br>";

    // $count variable that will hold count for flavors selected
    $count = 0;
    // $price variable that assigns price to $3.50
    $price = 3.5;
    // loop through cupcake flavor array, print out selected flavors, and increment count for selected flavors
    foreach ($array as $value) {
        echo "<li>" . $value . "</li>";
        $count++;
    }

    // calculate order total and format $total to 2 decimal places
    $total = number_format($price*$count, 2);

    // print order total
    echo "<br>Order Total:  $" . $total;
}

?>

</body>
</html>