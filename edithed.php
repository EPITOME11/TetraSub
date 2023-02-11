<title>Tetrasub | Admin</title>
<?php
if (isset($_COOKIE["oka"])) $user= $_COOKIE["oka"]; else header("location:login.php");
include("database.php");
include("delete.php");

$eze = $_GET['id'];




$sql = "SELECT * FROM images where id = '$eze'";



$result = mysqli_query($connect, $sql) or die ("Could Not Select". mysqli_error($connect) );
if(mysqli_num_rows($result)){
	while($row=mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		$name = $row['name'];
	$course = $row['course'];
	$uni = $row['uni'];
	$level = $row['level'];
	$zone = $row['zone'];
	$state = $row['state'];
	$address = $row['address'];
	$waec = $row['waec'];
	$image = $row['image'];
	$award = $row['award'];
	$gp = $row['gp'];
	$email = $row['email'];
	$phone = $row['phone'];
	$reason = $row['reason'];
	$remember = $row['remember'];
	
		
	}
}

if(isset($_POST['submit'])){
	
	$a= $_POST['name'];
	$b= $_POST['course'];
	$c= $_POST['uni'];
	$d= $_POST['level'];
	$e= $_POST['zone'];
	$f= $_POST['state'];
	$g= $_POST['address'];
	$h= $_FILES['waec']['name'];
	$i= $_FILES['image']['name'];
	$j= $_POST['award'];
	$k= $_POST['gp'];
	$l= $_POST['email'];
	$m= $_POST['phone'];
	$n= $_POST['reason'];
	
	

    $target = "images/".basename($waec);
	$target = "images/".basename($image);
	

$update = mysqli_query($connect, "update images set name='$a', course='$b' , uni= '$c',
level= '$d', zone= '$e', state= '$f', address= '$g', waec= '$h', image= '$i' , award= '$j', gp= '$k', email= '$l', phone= '$m', reason= '$n'   where id ='$eze' ") or die('could not insert'.mysqli_error($connect)); 
if ($update){
	echo 'You have succesfully edithed your profile';
}}
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href='style/css/my.css' type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 " id="form">


<form action="" method="post" enctype="multipart/form-data" class="" >
  <div class="form-group">
    <label for="uname">Full Name:</label>
    <input type="text" class="form-control" id="name" placeholder="" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Course of Study:</label>
    <input type="text" class="form-control" id="course" placeholder="Enter Course of Study " name="course" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">University/Polytechnics/College:</label>
    <input type="text" class="form-control" id="uni" placeholder="Enter University/Polytechnics/College" name="uni" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Level:</label>
    <input type="text" class="form-control" id="level" placeholder="Enter Your Level" name="level" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Geopolitical Zone:</label>
    <input type="text" class="form-control" id="zone" placeholder="Enter Your Geopolitical zone" name="zone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">State:</label>
    <input type="text" class="form-control" id="state" placeholder="Enter Your State" name="state" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Your Address" name="address" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Upload WAEC/NECO Result:</label>
    <input type="file" class="form-control" id="waec" placeholder="" name="waec" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Upload Photo:</label>
    <input type="file" class="form-control" id="image" placeholder="" name="image" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
   <div class="form-group">
    <label for="uname">Have you been awarded a scholarship by any body in Nigeria?:</label>
    <input type="text" class="form-control" id="award" placeholder="Enter Yes or No" name="award" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
   <div class="form-group">
    <label for="uname">Your GP, if none enter awaiting:</label>
    <input type="text" class="form-control" id="gp" placeholder="Enter Your GP" name="gp" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Phone Number:</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">State two reasons why you must be selected for the ATEN Scholarship:</label>
    <textarea type="text" class="form-control" id="reason" placeholder="Enter Reasons" rows="5px" name="reason" required></textarea>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms and services.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div></div></div>
<div>
	<a class="btn btn-primary" href="student.php">Return</a>
</div>
</body>
</html>