
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div><h1 class="title"> Enter book information</h1></div>
<div class="container-fluid">
    <div class="create-btn">
        <a href="index.php">
            <button class="btn btn-primary create-btn">Back</button>
        </a>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="custom-container d-flex border-demo justify-content-md-center">
        <form action="save.php" method="get">
            <label class="form-label">Title:</label>
            <input type="text" id="title" name="title" required><br>
            <label class="form-label">Author:</label>
            <input type="text" id="author" name="author" required><br>
            <p class="form-label">Available:</p>
            <input type="radio" id="available" name="available" value="Yes" checked="checked">
            <label >Available</label><br>
            <label class="form-label"></label>
            <input type="radio" id="not available" name="available" value="No">
            <label >Not Available</label><br>

            <label class="form-label"> Pages:</label>
            <input type="number" id="page" name="page" required><br>

            <label class="form-label"> ISBN:</label>
            <input type="number" id="isbn" name="isbn" required><br><br>

            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

    </div>
</div>

</body>
</html>
