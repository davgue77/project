<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';

$photo="";

if(isset($_POST['upload'])){
    $photo=$_FILES['image']['name'];
	$upload= 'photo';

    $query = "UPDATE usertable SET image=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $file_path, $user_id);
	$stmt->execute();
	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    

    header('location:index.php');
    $_SESSION['response']="Successfully Inserted to the database!";
    $_SESSION['res_type']="success";
}
?>
