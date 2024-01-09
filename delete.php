<?php

include("DB.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    mysqli_query($conn ,$query);
    header("Location: index.php");

}