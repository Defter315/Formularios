<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/registro_reservación.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">

    <title>Reservaciones</title>
  </head>
  <body>

   
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">

        <form>
        
        <h2>NUEVA RESERVACIÓN</h2><br>
        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Información del cliente</h5><br>
        <div class="row">
          <div class="col-3">
          <label for="" class="form-label">Apellido paterno</label>
          <input type="text" class="form-control" id="apePaterno" aria-describedby="">
          </div>
          <div class="col-3">
          <label for="" class="form-label">Apellido materno</label>
          <input type="text" class="form-control" id="apeMaterno" aria-describedby="">
          </div>
          <div class="col-6">
          <label for="" class="form-label">Nombre(s)</label>
          <input type="text" class="form-control" id="nombres" name="" aria-describedby="" required>
          </div>
          <div class="col-3">
          <label for="" class="form-label">Teléfono 1</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-3">
          <label for="" class="form-label">Teléfono 2 (opcional)</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-6">
          <label for="" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="" name="" aria-describedby="" required>
          </div>
       
        </div> <br>
        </fieldset>

    

        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Detalles de reservación</h5><br>
        <div class="row">
        <div class="col-4">
          <label for="" class="form-label">Numero de personas</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        <div class="col-4">
          <label for="" class="form-label">Fecha de Reservación</label>
          <input type="date" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        <div class="col-4">
          <label for="" class="form-label">Hora</label>
          <input type="time" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        </div> <br>
        </fieldset>
      
        <div class="boton">
        <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
   
   
   
   </div>
   </div>
   <br><br>
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