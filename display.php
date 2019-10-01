<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $major = $_POST["majorRadio"];
  $comments = $_POST["comments"];

  echo("Name: " . $name . "<br>Email: " . $email . "<br>Major: " . $major . "<br>Comments: " . $comments);
?>