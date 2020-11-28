<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD </title>
  </head>
  <body>
    
    <div class="container">
      <h1>Crud con Codeigniter 4</h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" action="<?php echo base_url().'/Crear' ?>">
            <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre"  class="form-control">
                <label for="Paterno">Apellido Paterno</label>
                <input type="text" name="Paterno" id="Paterno" class="form-control">     
                <label for="Materno">Apellido Materno</label>
                <input type="text" name="Materno" id="Materno" class="form-control">
                          <br>
                          <button class="btn btn-warning">Guardar</button>
          </form>
        </div>
      </div>
      <hr>
      <h2>Listado de Personas</h2>

      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              <?php foreach ($datos as $key): ?>
              <tr>
                <td><?php echo $key->nombre ?></td>
                <td><?php echo $key->paterno ?></td>
                <td><?php echo $key->materno ?></td>
                <td>
                  <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                  <a href="<?php echo base_url().'/Eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm" >Eliminar</a>
                </td>
              </tr>  
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';


      if (mensaje== '1') {
        swal('Agregado con exito','success');
        
      }else if (mensaje== '0') {
        swal('Fallo al agregar','error');
        
      }
      else if (mensaje== '2') {
        swal('Dato actualizado','success');
        
      }
      else if (mensaje== '3') {
        swal('Fallo al Editar','error');
        
      }
      else if (mensaje== '4') {
        swal('Dato eliminado','success');
        
      }
      else if (mensaje== '5') {
        swal('Fallo al eliminar','error');
        
      }
    </script>
  </body>
</html>