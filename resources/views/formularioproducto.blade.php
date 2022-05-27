<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulario Registro Detalle- Cognitus</title>

  </head>
  <body style="background-color: #455a64;">

    {{--BARRA DE NAVEGACION --}}
    <x-Navbar></x-Navbar>

    <div class="container bg-white rounded mt-5 p-2 pt-5 border border-dark">

      <h1 class="text-center mb-5">💻 Cognitus Inventory - Información Detalle</h1>

      {{--IMAGEN DE COGNITUS--}}
      <x-ImagenCognitus></x-ImagenCognitus>

      
      <div class="container">

        <form action="{{route('añadir.producto')}}" method="post" class="px-3">
          <hr>

          {{--TOKEN DEL FORMULARIO--}}
        {{ csrf_field() }}

          <h3 class="text-center mb-5">Información del Detalle</h3>

          <label for=""><h4>1. Codigo del Producto :</h4></label>
          <input type="number" class="form-control mb-4" id="" aria-describedby="" placeholder="Ingrese el codigo del producto" name="codigo_producto">

          <label for=""><h4>2. ID del Movimiento :</h4></label>
          <input type="number" class="form-control mb-4" id="" aria-describedby="" placeholder="Ingrese el id del movimiento" name="id_movimiento">

          <label for=""><h4>3. Nombre del Producto :</h4></label>
          <input type="text" class="form-control mb-4" id="" aria-describedby="" placeholder="Ingrese el nombre del producto" name="nombre_producto">

          <label for=""><h4>4. Descripción breve del producto :</h4></label>
          <input type="text" class="form-control mb-4" id="" aria-describedby="" placeholder="Ingrese una breve descripción del producto" name="descripcion_producto">

          <label for=""><h4>5. Cantidad del producto :</h4></label>
          <input type="number" class="form-control mb-4" id="cantidad" aria-describedby="" placeholder="Ingrese la cantidad del producto" name="cantidad_producto">

          <label for=""><h4>6. Valor unitario del producto :</h4></label>
          <input type="number" class="form-control mb-4" id="valor" aria-describedby="" placeholder="Ingrese el valor unitario del producto" name="valor_unitario" onblur="Blur()">


          <label for=""><h4>Total Valor del producto :</h4></label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="number" class="form-control p-4" aria-label="Amount (to the nearest dollar)" id="total" name="valor_total">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>

          <hr>

          <div class="container text-center">
            <button type="submit" class="btn btn-success col-6 pt-3 p-2"><h5>Registrar Detalle ✔️</h5></button>
          </div>
          <div class="container text-center">
            <a class="btn btn-danger p-2 col-6 pt-3 mt-4 mb-5" href="/" role="button"><h5>Regresar al apartado principal 👈🏻</h5></a>
          </div>

        </form>
      
      </div>
    
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
    <script src="js/calculo.js"></script>

  </body>
</html>