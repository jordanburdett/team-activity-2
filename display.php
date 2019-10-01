<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $major = $_POST["major"];
  $comments = $_POST["comments"];

  echo("Name: " . $name . "<br>Email: " . $email . "<br>Major: " . $major . "Comments: " . $comments);
?>