<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Aplicativo Inventario Cognitus</title>

  </head>
  <body style="background-color: #455a64;">

    {{--BARRA DE NAVEGACION --}}
    <x-Navbar></x-Navbar>

    <div class="container bg-white rounded mt-5 p-2 pt-5 border border-dark">
      <h1 class="text-center mb-5">💻 Cognitus Inventory - Consultas Tabla Movimientos</h1>


      {{--IMAGEN DE COGNITUS--}}
      <x-ImagenCognitus></x-ImagenCognitus>

      <form action="{{route('añadir.movimiento')}}" method="post" class="px-5">
        <hr>

        {{--TOKEN DEL FORMULARIO--}}
        {{ csrf_field() }}

        <h3 class="text-center mb-5">Consulta del Movimiento</h3>
      

        <label for=""><h4>1. ID del Movimiento :</h4></label>
        <input type="number" class="form-control mb-4" id="" aria-describedby="" placeholder="Ingrese el id del movimiento" name="id_movimiento">

        <label for=""><h4>2. Tipo de Movimiento :</h4></label>
        <input type="number" class="form-control" id="" aria-describedby="" placeholder="Ingrese el tipo del movimiento" name="tipo_movimiento">
        <small id="" class="form-text text-muted mb-4">1 = Movimiento de entrada / 2 = Movimiento de salida</small>

        <label for=""><h4>3. Fecha de Movimiento :</h4></label>
        <input type="date" class="form-control mb-5" id="" aria-describedby="" placeholder="Ingrese el tipo del movimiento" name="fecha_movimiento">

        <hr>

        <div class="container text-center">
            <button type="submit" class="btn btn-primary col-6 pt-3 p-2 mb-4"><h5>Ver los todos los registros </h5></button>
          <button type="submit" class="btn btn-success col-6 pt-3 p-2"><h5>Realizar Consulta ✔️</h5></button>
        </div>
        <div class="container text-center">
          <a class="btn btn-danger p-2 col-6 pt-3 mt-4 mb-5" href="/" role="button"><h5>Regresar al apartado principal 👈🏻</h5></a>
        </div>
      </form>
    </div>

    <div class="container text-center mt-5 text-white mb-5">
      <h3>Developed By: <i>Cognitus Fundation</i></h3>
      <h4>2022</h4>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>