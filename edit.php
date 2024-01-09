<?php
include("DB.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tareas WHERE id = $id";
    $rusult = mysqli_query($conn, $query);
   
}
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $tarea= $_POST['tarea'];
    $descripcion = $_POST['descripcion'];
  
    $query = "UPDATE tareas set tarea = '$tarea', descripcion = '$descripcion' WHERE id=$id";
    mysqli_query($conn, $query);
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="tarea" type="text" class="form-control" value="tarea" placeholder="tarea">
        </div>
        <div class="form-group">
        <textarea name="descripcion"  rows="2" class="form-control m-2" placeholder="descripcion"></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>