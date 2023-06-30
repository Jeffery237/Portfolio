<?php
// connection to the database
require 'dbcon.inc.php';
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=portfolio_db', 'root');
// see the "error" folders for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['sender_name']) && isset($_POST['sender_email']) && isset($_POST['sender_message'])) {
    
    $sql = "INSERT INTO newsletter (sender_name, sender_email, sender_message) VALUES (:sender_name, :sender_email, :sender_message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':sender_name' => $_POST['sender_name'],
        ':sender_email' => $_POST['sender_email'],
        ':sender_message' => $_POST['sender_message']
    ));
}
?>