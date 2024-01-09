<?php
include("DB.php");
if(isset($_POST['guardar'])){
    $tarea = $_POST['tarea'];
    $descripcion = $_POST['descripcion'];
    $query ="INSERT INTO tareas(tarea,descripcion) VALUES ('$tarea','$descripcion')";
    mysqli_query($conn,$query);

    header("Location: index.php");
}

?>