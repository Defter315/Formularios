<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/registro_cliente.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">

    <title>Nueva orden</title>
  </head>
  <body>

   
   <div class="container-fluid">
   <div class="row">
   <div class="col-md-12">

        <form>
        
        <h2>NUEVA ORDEN</h2><br>
        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Detalle de la orden</h5><br>
        <div class="row">
        <div class="col-3">
          <label for="" class="form-label">Tipo de entrega</label>
          <select class="form-select" id="tipo_entrega" aria-label="">
            <option selected value="local">Local</option>
            <option value="domicilio">A domicilio</option>
          </select>
          </div>
          <div class="col-3 data" id="local">
          <label for="" class="form-label">Número de mesa</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>1</option>
            <option value="">2</option>
          </select>
          </div>
          <div class="col-6">
          <label for="" class="form-label">Nombre del cliente</label>
          <input type="text" class="form-control" id="nombres" name="" aria-describedby="" required>
          
          </div>
        </div> <br>
        </fieldset>

        <fieldset class="formulario data" id="domicilio">
        <h5 style="font-weight:bold;">Información de envío</h5><br>
        <div class="row">
          <div class="col-4">
          <label for="" class="form-label">Calle</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Número exterior</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Número interior (opcional)</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="">
          </div>
        </div> <br>

        <div class="row">
        <div class="col-4">
          <label for="" class="form-label">Colonia</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Código postal</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="" required>
          </div>
          <div class="col-4">
          <label for="" class="form-label">Teléfono</label>
          <input type="number" class="form-control" id="" name="" aria-describedby="" required>
          </div>
         
        </div> <br>
 
        <div class="mb-3">
          <label for="" class="form-label">Referencias</label>
          <textarea class="form-control" id="correo"></textarea>

        </div>
        </fieldset>


        <fieldset class="formulario" id="formulario">
        <h5 style="font-weight:bold;">Alimentos</h5><br>
        <div class="container">
          <div class="row">
          <div class="col-md-3" id="">
          <label for="" class="form-label">Categorías</label>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
             Postres
            </button>
            <button type="button" class="list-group-item list-group-item-action">Bebidas</button>
          </div>
          </div>

          <div class="col-md-9" id="">
          <label for="" class="form-label">Alimentos</label>
          <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pastel</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content</p>
                <a href="#" class="btn btn-primary">Agregar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Cupcake</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Agregar</a>
              </div>
            </div>
          </div>
        </div>

          </div>

          </div>
          </div>
        </fieldset>
        

        
        <div class="boton">
        <button class="btn btn-primary" type="submit">Registrarse</button>
        </div>
       
      </form>
   
      
   
   </div>
   </div>
   <br><br>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/registro.js"></script>

    <script>
      $(document).ready(function(){
        $("#tipo_entrega").on('change', function(){
        $(".data").hide();
        $("#" + $(this).val()).fadeIn(700);
        }).change();

      });
     
    </script>
  </body>
</html>