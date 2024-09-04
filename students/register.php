<?php
// Database connection
require 'db_connection.php';

try {
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $student_name = $_POST['student_name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $qualification_id = $_POST['qualification'];

        // Prepare and execute the SQL statement
        // $stmt = $pdo->prepare("INSERT INTO students (student_name, dob, address, phone, email, qualification_id) 
        //                     VALUES (:student_name, :dob, :address, :phone, :email, :qualification_id)");
        // $stmt->bindParam(':student_name', $student_name);
        // $stmt->bindParam(':dob', $dob);
        // $stmt->bindParam(':address', $address);
        // $stmt->bindParam(':phone', $phone);
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':qualification_id', $qualification_id);
        $stmt = $pdo->prepare("INSERT INTO students (student_name, dob, address, phone, email, qualification_id) 
                             VALUES (?,?,?,?,?,?)");

        if ($stmt->execute([$student_name,$dob,$address,$phone,$email,$qualification_id])) {
            echo "Student registered successfully!";
            echo '<a href="index.php">Go back</a>';
        } else {
            echo "Error: Could not register student.";
        }
    }
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>
