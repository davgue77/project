<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$name="";
	$email="";
	$phone="";
	$photo="";
	$address="";
	$occupation="";
	$gender="";
	$age="";
	$birthdate="";
	$major="";

	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$occupation=$_POST['occupation'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$birthdate=$_POST['birthdate'];
		$major=$_POST['major'];

		$photo=$_FILES['image']['name'];
		$upload= 'photo';

		$query="INSERT INTO crud(name,email,phone,photo,address,occupation,gender,age,birthdate,major)VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssssssss",$name,$email,$phone,$upload,$address,$occupation,$gender,$age,$birthdate,$major);
		$stmt->execute();
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);

		header('location:index.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT photo FROM crud WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['photo'];
		unlink($imagepath);

		$query="DELETE FROM crud WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM crud WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$name=$row['name'];
		$email=$row['email'];
		$phone=$row['phone'];
		$photo=$row['photo'];
		$address=$row['address'];
		$occupation=$row['occupation'];
		$gender=$row['gender'];
		$age=$row['age'];
		$birthdate=$row['birthdate'];
		$major=$row['major'];
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$oldimage=$_POST['image'];
		$address=$_POST['address'];
		$occupation=$_POST['occupation'];
		$gender = $_POST['gender'];
		$age=$_POST['age'];
		$birthdate=$_POST['birthdate'];
		$major=$_POST['major'];

		if(isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")){
			$photo = $_FILES['image']['name'];
			$newimage = $photo;
			unlink($oldimage);
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		} else {
			$newimage = $oldimage;
		}
		$query="UPDATE crud SET name=?,email=?,phone=?,photo=?,address=?,occupation=?,gender=?,age=?,birthdate=?,major=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssssssssi",$name,$email,$phone,$newimage,$address,$occupation,$gender,$age,$birthdate,$major,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}
	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM crud WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vname=$row['name'];

		$vemail=$row['email'];
		$vimage=$row['photo'];
		$vphone=$row['phone'];
		$vphoto=$row['photo'];
		$vaddress=$row['address'];
		$voccupation=$row['occupation'];
		$vgender=$row['gender'];
		$vage=$row['age'];
		$vbirthdate=$row['birthdate'];
		$vmajor=$row['major'];
	}
	
?>