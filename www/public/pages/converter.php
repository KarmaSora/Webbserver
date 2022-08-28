<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header> <h1>currency converter $ to sek</h1></header>
    <main>h2, the value you are looking for is ...</main>

    <?php
   
    $dollar = $_POST['currency'];
    $sek = $dollar * 9.7;
    
    echo "<p>$dollar $  =  $sek kr</p>";
    ?>

</body>


</html>