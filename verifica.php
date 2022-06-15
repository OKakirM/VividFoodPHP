<?php 
  if(!$_SESSION["name"]) {
    header("Location: index.html");
    exit();
  }
?>