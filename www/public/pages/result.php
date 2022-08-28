<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Resultat</h1>
<?php 
    $points = 0;
    $ansOne = $_POST['qOne'];
    $ansTwo = $_POST['qTwo'];
    $ansThree = $_POST['qThree'];
    $ansFour = $_POST['qFour'];

    if($ansOne == 'php'){
        $points++;}
    if($ansTwo == 'js'){
        $points++; }
    if($ansThree == '18'){
        $points++; }
    if($ansThree == '3'){
        $points++; }
   else{
    
   }

   $valOfX = $_POST['ValOfX'];
   if($valOfX[1] == 30 || $valOfX[1] == 70 ){
    $points ++;
   
   }

    echo '<strong>Du fick '.$points.' av 5 möjliga</strong>';
   
    if (0 =< $points =< 2) {
        <br><br>
        echo("you are not good enough, must study more");
    }
    if (3 =< $points =< 4) {
        <br><br>
        echo("decently good");
    }
    if ( $points ==5 ) {
        <br><br>
        echo("great success");
    }


?>
</body>
</html>