<?php    
    require 'database/connection.php';
    $db = connect();
    $id=$_GET['id'];
    delete($db, $id);

    header('Location: index.php');
?>

Sucessfuly deleted!!!