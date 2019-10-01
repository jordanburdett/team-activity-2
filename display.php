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
        <h1 class="display-4">Team Activity #2</h1>
    </div>

<div class="container">
  <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    $comments = $_POST["comments"];
    $northAmerica = $_POST["northAmerica"];
    $southAmerica = $_POST["southAmerica"];
    $europe = $_POST["europe"];
    $asia = $_POST["asia"];
    $australia = $_POST["australia"];
    $africa = $_POST["africa"];
    $antarctica = $_POST["antarctica"];

    echo("Name: " . $name . "<br>Email: " . $email . "<br>Major: "
     . $major . "<br>Comments: " . $comments . "<br>Continents visited:<br>");
    echo("<ul>")
     if($northAmerica) {
        echo(<li>North America</li>);
    }
    if($southAmerica) {
        echo(<li>South America</li>);
    }
    if($europe) {
        echo(<li>Europe</li>);
    }
    if($asia) {
        echo(<li>Asia</li>);
    }
    if($australia) {
        echo(<li>Australia</li>);
    }
    if($africa) {
        echo(<li>Africa</li>);
    }
    if($antarctica) {
        echo(<li>Antarctica</li>);
    }
    echo("</ul>")
  ?>
</div>

</body>
</html>
