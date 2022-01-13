<?php

function Connect()
{
  $server_name = "sql6.freesqldatabase.com";
  $username = "sql6465231";
  $password = "UTHiIAmaUd";
  $db_name = "sql6465231";
  try {
    $db = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
  } catch (PDOException $e) {
    echo $e;
    return -1;
  }
}
function create_if_not_exist($db)
{
  $query_st = "CREATE TABLE IF NOT EXISTS books(
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(250),
        author VARCHAR(250),
        available VARCHAR(20),
        isbn VARCHAR(250),
        pages VARCHAR(250)
        )ENGINE=InnoDb;";
  $db->query($query_st);
}

function add_book($db,$title, $author, $available, $isbn, $pages){
  // $query_st = "INSERT INTO books (title, author, available, isbn, pages)
  //       VALUES ($title, $author, $available, $isbn, $pages);";
  $query_st = "INSERT INTO books (title, author, available, isbn, pages)
        VALUES ('$title', '$author', '$available', '$isbn', '$pages');";
  $db->query($query_st);

}
function show_table($db)
{
  $query_st = "SELECT * FROM `books` WHERE 1";
  $data = $db->query($query_st);
  return $data;
}
function delete($db, $id)
{
  $id = (int)$id;
  $query_st = "DELETE FROM books WHERE id=$id;";
  return $db->exec($query_st);
}
function get_heading($db){
  $query_st="SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME=books";
  // "USE bookstore; SELECT *
  // FROM INFORMATION_SCHEMA.COLUMNS
  // where TABLE_NAME=books";
$col =$db->query($query_st);
// var_dump($col);
  return $col ;
}

?>
