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
 

   $valOfX = $_POST['ValOfX'];
   if($valOfX[1] == 30 || $valOfX[1] == 70 ){
    $points ++;
   
   }

    echo '<strong>Du fick '.$points.' av 5 möjliga</strong>';
   
    if (0 <= $points && $points <= 2) {
        
        echo(" must study more, when I was your age I was 10 years older than you");
    }
    if (3 <= $points && $points <= 4) {
       
        echo(" good enough ");
    }
    if ( $points ==5 ) {
      
        echo("great success");
    }


?>
</body>
</html>