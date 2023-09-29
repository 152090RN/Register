<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'] ?? '';
    $message = $_POST['message'] ?? '';
    $username = $_POST['username'] ?? '';

    $db = new Database();
    $conn = $db->conn;

    try {
        $sql = "INSERT INTO users (`name`, `email_address`, `username`, `age`, `Message`) VALUES (:name, :email, :username, :age, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':username', $username);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
