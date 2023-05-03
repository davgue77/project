<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';

$photo="";
if(isset($_POST['upload'])){
    $photo=$_FILES['image']['name'];
    $target_dir = "uploads/"; // Change this line to specify the "uploads" folder
    $target_file = $target_dir . basename($_FILES["image"]["name"]); 
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $user_id = 22; 
    $image_data = fopen($target_file, 'r');
    $query = "UPDATE usertable SET image=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $image_file, $user_id);

    $image_file = "uploads/" . basename($_FILES["image"]["name"]);
// set the image file path with "uploads/" prefix
    $stmt->send_long_data(0, fread($image_data, filesize($target_file)));
    $stmt->execute();

    fclose($image_data);
    header('location:index.php');
    $_SESSION['response']="Successfully Inserted to the database!";
    $_SESSION['res_type']="success";
}



?>
