<?php
  header("Access-Control-Allow-Origin: *");
  header("content-type:application/json");
  echo json_encode($_POST["recup"]);
?>
