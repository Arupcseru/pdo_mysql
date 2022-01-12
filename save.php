<?php
require "database/connection.php";
if (isset($_GET['title'])) {
        $title = $_GET['title'];
        $author = $_GET['author'];
        $available= $_GET['available'];
        $isbn = $_GET['isbn'];
        $pages = $_GET['page'];
        $db = connect();
        // var_dump($db);
        add_book($db, $title, $author, $available, $isbn, $pages);

        header('Location: index.php');
    }
?>