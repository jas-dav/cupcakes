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
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
<form method="POST" action="process.php">
    <label>Your Name:</label>
    <input type="text" name="name"> <br><br>
    <u>Cupcake Flavors:</u><br>
    <label><input type="checkbox" value="The Grasshopper" name="flavor[]">The Grasshopper</label><br>
    <label><input type="checkbox" value="Whiskey Maple Bacon" name="flavor[]">Whiskey Maple Bacon</label><br>
    <label><input type="checkbox" value="Carrot Walnut" name="flavor[]">Carrot Walnut</label><br>
    <label><input type="checkbox" value="Salted Caramel Cupcake" name="flavor[]">Salted Caramel Cupcake</label><br>
    <label><input type="checkbox" value="Red Velvet" name="flavor[]">Red Velvet</label><br>
    <label><input type="checkbox" value="Tiramisu" name="flavor[]">Tiramisu</label><br>

    <input type="submit" value="Order">
</form>

</body>
</html>