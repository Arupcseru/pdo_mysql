<?php
    
    require 'database/connection.php';

    $db = connect();
    $raw_data = show_table($db);
    $result = array();

    if (isset($_POST['search'])) {
        $s_key = $_POST['search'];
        $option = 'author';


        foreach ($raw_data as $key => $obj){
            if($obj[$option]==$s_key)
                array_push($result,$obj);
        }

    }

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
    Search Result for "<?php echo $s_key?>"
</h1>
<div class="container-fluid">
<div class="create-btn">
    <a href="index.php">
        <button class="btn btn-primary create-btn">Back</button>
    </a>
</div>
</div>
<br>
<br>
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
      <?php foreach ($result as $book): ?>
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
