<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/registro_mesa.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">

    <title>Registrar Mesa</title>
  </head>
  <body>

   
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">

        <form>
        
        <h2>AGREGAR MESA</h2><br>
        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;"></h5><br>
        <div class="row">
          <div class="col-3">
          <label for="" class="form-label">Número de Mesa</label>
          <input type="number" class="form-control" id="nuemero_mesa" aria-describedby="">
          </div>
          <div class="col-3">
          <label for="" class="form-label">Número de personas</label>
          <input type="number" class="form-control" id="numero_personas" aria-describedby="">
          </div>
          <div class="col-6">
          <label for="" class="form-label">Nombre del mesero</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Salvador Morfín García</option>
            <option value="">Luz Abigali Campos Fajardo</option>
          </select>
         </div>
        </div> <br>
        </fieldset>

        <div class="boton">
        <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

       
   
      </form>
   
   
   
   </div>
   </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/registro.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>