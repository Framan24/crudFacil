<?php
include('DB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
   <div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="from-group">
                        <input autofocus type="text" name="tarea" class="form-control m-2" placeholder="tarea">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion"  rows="2" class="form-control m-2" placeholder="descripcion"></textarea>
                    </div>
                    <input type="submit" class=" btn btn-success btn-block m-2" name="guardar" value="guardar">
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <table class="table table-borderd">
        <thead>
            <tr>
                <th>tareas</th>
                <th>descripcion</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $query = "SELECT * FROM tareas";
              $tareas=mysqli_query($conn, $query);
              while($fila = mysqli_fetch_array($tareas)) { ?>

                    <tr>
                        <td>
                            <?php echo $fila['tarea'] ?>
                        </td>
                        <td>
                            <?php echo $fila['descripcion'] ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $fila['id']?>">editar</a>
                            <a href="delete.php?id=<?php echo $fila['id']?>">eliminar</a>
                        </td>
                    </tr>

              <?php } ?>
        </tbody>
        </table>
    </div>
   </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>