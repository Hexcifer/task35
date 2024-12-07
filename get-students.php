<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tugas35', 'root', ''); // Adjust username and password as needed
    $query = $pdo->prepare("SELECT * FROM students");
    $query->execute();
    $students = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($students);
} catch (Exception $e) {
    echo json_encode(["status" => false, "error" => $e->getMessage()]);
}
?>