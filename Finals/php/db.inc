<?php
try {
    $dbh = new PDO('mysql:host=finals_default;dbname=cldadmi_finals', 'cldadmi_finals', 'Lsoizv7Q6l7O2Api');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}