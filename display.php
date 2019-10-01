<!DOCTYPE html>
<html>
    <head>
    <title>PHP forms</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>

<div class="container-fluid">
        <h1 class="display-1">Team Activity #2</h1>
    </div>

<div class="container">
  <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    $comments = $_POST["comments"];

    echo("Name: " . $name . "<br>Email: " . $email . "<br>Major: " . $major . "Comments: " . $comments);
  ?>
</div>

</body>
</html>
