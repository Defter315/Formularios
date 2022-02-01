<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/registro_empleado.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">

    <title>Registro de empleado</title>
  </head>
  <body>

   
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">

        <form>
        
        <h2>REGISTRO DE UN NUEVO EMPLEADO</h2><br>
        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Nombre completo</h5><br>
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
        </div> <br>
        </fieldset>

        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Datos personales</h5><br>
        <div class="row">
          <div class="col-3">
          <label for="" class="form-label">Estado</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Unión libre">Unión libre</option>
            <option value="Viudo">Viudo</option>
          </select>
          </div>
          <div class="col-3">
          <label for="" class="form-label">Género</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Hombre</option>
            <option value="Mujer">Mujer</option>
          </select>
          </div>
          <div class="col-6">
          <label for="" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        </div> <br>
        <div class="mb-3">
          <label for="" class="form-label">CURP</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>

        </div>
        <div class="mb-3">
          <label for="" class="form-label">Domicilio</label>
          <textarea class="form-control" id="correo"></textarea>

        </div>
        </fieldset>

        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Información de contacto</h5><br>
        <div class="row">
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
        <h5 style="font-weight:bold;">Información de empleado</h5><br>
        <div class="row">
          <div class="col-3">
          <label for="" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-3">
          <label for="" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-6">
          <label for="" class="form-label">Código para control de acceso</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        </div> <br>
        <div class="row">
          <div class="col-6">
          <label for="" class="form-label">Salario</label>
          <div class="input-group">
          
            <div class="input-group-text">$</div>
            <input type="text" class="form-control" id="specificSizeInputGroupUsername" required>
          </div>
          </div>
          <div class="col-6">
          <label for="" class="form-label">Puesto</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Gerente</option>
            <option value="">Capitán de mesero</option>
            <option value="">Mesero</option>
          </select>
          </div>
        </div>
        </fieldset>

        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Referencias</h5><br>
        <div class="row">
          <div class="col-4">
          <label for="" class="form-label">Nombre completo</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Relación</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Madre</option>
            <option value="">Padre</option>
            <option value="">Hermano</option>
            <option value="">Vecino</option>
          </select>
          </div>
          <div class="mb-3">
          <label for="" class="form-label">Domicilio</label>
          <textarea class="form-control" id="correo"></textarea>

        </div>
        </div> <br>
        </fieldset>
        

        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Otros</h5><br>
        <div class="row">
          <div class="col-3">
          <label for="" class="form-label">Número de seguro</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-3">
          <label for="" class="form-label">Tipo de sangre</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-6">
          <label for="" class="form-label">RFC</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
        </div> 
        </fieldset>
        <br>
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