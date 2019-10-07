
<?php 

    error_reporting(0);
    $variable=$_POST;
    Print_r($variable);
   



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>curriculum</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    



<div class="cuerpo">
    <div class="cuerpo2">

    <h1> hola mundo </h1>
    <br>
<br>
<br>

<br>
<br>
    <div class="cuerpo3">
    <div class="algo"><?php echo $variable[actividad1][0]["NOMBRE"];?></div>
         
     <h1 class="textocabecera">  </h1>
   </div>
   <div class="quiensoy">
   
   <h3>QUIEN SOY </h3>
   
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aliquid nulla perferendis optio
     hic assumenda unde magnam minima facilis reiciendis, dolorem, enim ad amet molestias? Deleniti a
     rchitecto impedit laudantium quidem?
     
     </p>
</div>
   <br>
<br>
</div>
</div>
<?php ?>

<?php
  


?>


<?php /*


echo "<p> $nombre </p>";
echo "<p> $apellido </p>";
echo "<p> $direccion </p>";
echo "<p> $email </p>";
*/
?>



</body>
</html>




