<?php
require('database.php');
try {
    $results = $db->query("SELECT apparel FROM manufacturer WHERE region = 'Asia'");
} catch (Exception $e) {
    echo "Not successful";
    exit;
}

var_dump($results->fetchAll(PDO::FETCH_ASSOC));
?>
