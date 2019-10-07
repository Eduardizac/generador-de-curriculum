
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
<div class="textarriba">
                                            <h3> CURRICULUM VITAE </h3>
                                            <?php //echo $variable[actividad1][1]["ESTUDIOS"];?>
</div>
    <div class="cuerpo2">

  
<br>
<br>
    <div class="cuerpo3">
                        <div class="algo"> <h1> <?php echo $variable[actividad1][0]["NOMBRE"];?> </h1> </div>
         
     <h1 class="textocabecera">  </h1>




   </div>
    <div class="quiensoy">

    <h3>Quien Soy <br>
         <?php echo $variable[actividad1][1]["QUIENSOY"];?>
         </h3>
    <br>
    <br>
   <h3> Lista de software que usted sabe usor <br>
        <?php echo $variable[actividad1][1]["PROGRAMAS"];?> 
        /<h3>
    <br>
    <br>
    <h3> Lista de idiomas que usted sabe hablar <br>
    <?php echo $variable[actividad1][1]["IDIOMAS"];?> 
</h3>
    <br>
    <br>
    <h3> Referencias personales y laborales <br>
    <?php echo $variable[actividad1][1]["REFERENCIAS"];?>
</h3>
    <br>
    <br>
   
   


</div>



</div>

</div>





</body>
</html>




