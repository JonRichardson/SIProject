<?php

  try {
      $db = new PDO("mysql:host=localhost;dbname=scenarios;port=8888","root","root");
      $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $db->exec("SET NAMES 'utf8'");
  } catch (Exception $e) {
      echo "Could not connect to the database.";
      exit;
    }

  try {
      $results = $db->query("SELECT region FROM manufacturer");
      echo "Query successful";
  } catch (Exception $e) {
      echo "Not successful";
      exit;
  }
?>
