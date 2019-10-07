<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GENERADOR DE CURRICULUM</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="cuerpoformulario">
                      <center>
<!--CABECERA-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">GENERADOR DE CURRICULUM</h1>
    <p class="lead">En esta Pagina podras digitar tus datos para generar el diseño de tu curriculum</p>
  </div>
</div>



<!-- FORMULARIO -->


<form action="curriculum.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">NOMBRE Y APELLIDO</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="actividad1[0][NOMBRE]" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">CEDULA</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="actividad1[0][CEDULA]" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">DIRECCION</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="actividad1[0][DIRECCION]" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">NUMERO TELEFONO</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="actividad1[0][TELEFONO]" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="actividad1[0][CORREO]" placeholder="name@example.com">
  </div>




  <div class="form-group">
    <label for="exampleFormControlTextarea1">QUIEN SOY</label>
    <input type="text" class="form-control" id="exampleFormControlTextarea1"  name="actividad1[1][QUIENSOY]" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Idiomas</label>
    <input type="text" class="form-control" id="exampleFormControlTextarea1"  name="actividad1[1][IDIOMAS]" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">programas</label>
    <input type="text" class="form-control" id="exampleFormControlTextarea1"  name="actividad1[1][PROGRAMAS]" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Referencias</label>
    <input type="text" class="form-control" id="exampleFormControlTextarea1"  name="actividad1[1][REFERENCIAS]" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">GENERAR</button>
<?php


  /*foreach($actividad1 as $actividad=>$active)
	{
        foreach ($active as $cosa =>$cosa2)
        {
            foreach ($cosa2 as $cosa3 =>$cosa4){

                echo $cosa4;
            }
        }
        */


?>

</form>





</center>
</div>



<script src="js/jquery-3.4.1.min.js" >  </script>
<script src="js/bootstrap.min.js" >  </script>
<script src="js/popper.min.js" >  </script>
</body>
</html>