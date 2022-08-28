<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <header><h1>this here is a dollar to sek converter</h1></header>   

   <main>
      <form action="pages/converter.php" method="post">
      <legend>dollar to sek </legend>
      <br>
      <label> insert money in sek</label>
      <br>
      <input type="number" name="currency">
      <br>
      <input type="submit" value="Convert">

      </form>
<br><br><br><br> // kan ändra till post eller get.     
<br>
<form action="pages/PId.php" method="get">   
   <label > insert name </label>
   <input type="text" name="name">
   <label >insert age</label>
   <input type="number" name="age">
   <br> 
   <input type="submit" value="submit">
</form>

<h1>Matematik-test</h1>

<form action="pages/calculate.php" method="post">
   <fieldset>
       <legend>Kalkylator</legend>
       <input type="number" name="n1"> +
       <input type="number" name="n2">
       <br>
       <input type="submit" value="Beräkna">
   </fieldset>
</form>

   </main>
</body>
</html>