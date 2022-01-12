<?php
   
    require_once 'database/connection.php';
    $db = connect();
    // $heads=get_heading($db);
    // var_dump($head);
    create_if_not_exist($db);

    $books = show_table($db);
    // foreach($books as $book){
    //     foreach($book as $value){
    //         echo $value;
    //     }
    // }
    // echo "<br>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="title">
      Book Store
  </h1>
  <div class="container-fluid">
      <div class="row">
          <div class="col">
              <form class="row g-5 justify-content-md-center" action="search.php" method="post">
                  <div class="col-auto">
                      <label class="" style="font-size: large;">Search by Author : </label>
                  </div>
                  <div class="col-auto">
                      <input type="text" class="form-control" name="search" placeholder="Author Name" />
                  </div>
                  <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-3">Search</button>
                  </div>
              </form>
          </div>

          <div class="create-btn col">
              <a href="create.php">
                  <button class="btn btn-primary create-btn  ">Add Entry</button>
              </a>
          </div>
      </div>
  </div>

  <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>AVAILABLE</th>
        <th>ISBN</th>
        <th>PAGES</th>
        <th class="text-center">ACTION</th>  
      </tr>
      <?php foreach ($books as $book): ?>
          <tr>
              <?php foreach ($book as $value):?>
              <td><?php echo $value ?></td>
              <?php endforeach; ?>

              <td class="text-center">
                  <a href="<?php echo 'delete.php?' . 'id=' . $book['id']; ?>" onclick="return confirm('Are you sure?')">
                      <button class="btn btn-danger">Delete</button>
                  </a>
              </td>
          </tr>
      <?php endforeach; ?>

  </table>
  </body>
</html>



