<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>persons name and ID display area</h1>
    <?php
    $age = $_POST['age'];  //kan ändra till post eller get
    $name = $_POST['name'];
    $pen = 65 - $age;
    echo"<h1> hello $name. you are  $age years old, there are $pen years left till pension";

    ?>

</body>


</html>