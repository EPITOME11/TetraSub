<title>TetraSub | Courses</title>
<?php
if (isset($_COOKIE["oka"])) $user= $_COOKIE["oka"]; else header("location:login.php");
include("database.php");





$sql = mysqli_query($connect, "SELECT * FROM table1 order by id desc" ) or die("could Not Select profile".mysqli_error());



?>


<?php
if (isset($_COOKIE["oka"])) $user= $_COOKIE["oka"]; else header("location:login.php");
include("database.php");


if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 10;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `comments`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1


$sql = mysqli_query($connect, "SELECT * FROM `comments` order by id desc LIMIT $offset, $total_records_per_page" ) or die("could Not Select profile".mysqli_error($count));




$count = 0 ;
	
	
	if(mysqli_num_rows($sql)>$count){
		while($row=mysqli_fetch_assoc($sql))
			
	{
	$id[]=$row["id"];
	$title[]=$row["title"];
		$level[]= $row["level"];
		$count++;
	
	
	}
			
	}

$sn = 1;


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>
.footer {
   position: relative;
   
   width: 100%;
   line-height: 50px;
   background-color: #0AABEF;
   color: white;
   text-align: center;
}
	
	
.accordion {
  background-color: #044C87;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #0AABEF; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.active {
		color: white;
		background-color: dodgerblue;
		border-radius: 6px;
	}
	
	
</style>


	<title>TetraSub | Home</title>

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
<div class="container-fluid " style="background-color: #0AABEF" >
    <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 " style="color:white" align="left"><font size="-1"><b>Global Science Networks</b>
     </font>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 " style="color:white" align="right"><span style="color: white"><b><?php echo 'Welcome'. ' '. $user.'!' ?></b></span>
    	<a href="logout.php"><i class="fa fa-fw fa-user" style="color: white"></i><font color="white"><b> LOGOUT</b></font></a>
		</div>
   </div> 
</div>



<nav class="navbar navbar-expand-xl navbar-dark    " style="background-color:#044C87">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon  btn-primary  "></span>
  </button>
 
  <a  class="navbar-brand col-3 " size="+0"><font  color="white" ><b><h4>
	  TETRASUB<p/>ACADEMY</h4></b></font></a>
 
 
  
  
  <div class="collapse navbar-collapse " id="collapsibleNavbar"  align="left">
    <ul class="navbar-nav " style="font-size: 14px" align="left">
      <li class="nav-item ">
        <a class="nav-link" href="login1.php" style="text-align: left"><font color="#FCFCFC"><b>HOME</b></font></a>
      </li>
      </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle " href="about11.php" id="navbardrop" data-toggle="dropdown">
       <font color="white"><b>ABOUT US</b></font>
      </a>
      <div class="dropdown-menu  "  style="background-color:#0AABEF" >
        <a class="dropdown-item" href="about11.php"  ><font color="white"><b><span style="background-color: #0AABEF">Mission Statement</span></b></font></a>
        <a class="dropdown-item" href="about21.php"><font color="white"><b><span style="background-color: #0AABEF">Vision Statement</span></b></font></a>
		  <a class="dropdown-item" href="about31.php"><font color="white"><b><span style="background-color: #0AABEF">Objectives</span></b></font></a>
          <a class="dropdown-item" href="about41.php"><font color="white"><b><span style="background-color: #0AABEF">Profiles</span></b></font></a>
      </div>
    </li>
     </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="service11.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>OUR SERVICES</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="service11.php"><font color="white"><b><span style="background-color: #0AABEF">Home and Private Classes</span></b></font></a>
        <a class="dropdown-item" href="service21.php"><font color="white"><b><span style="background-color: #0AABEF">Offline Group Classes </span></b></font></a>
        <a class="dropdown-item" href="service31.php"><font color="white"><b><span style="background-color: #0AABEF">WAEC/JAMB Exam Lessons </span></b></font> </a>
        <a class="dropdown-item" href="service41.php"><font color="white"><b><span style="background-color: #0AABEF">Common Entrance Exam Lessons</span></b></font></a>
        <a class="dropdown-item" href="service51.php"><font color="white"><b><span style="background-color: #0AABEF">National Exam Info and Updates </span></b></font></a>
      </div>
    </li>
      </ul> 
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="news11.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>NEWS</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="news11.php"><font color="white"><b><span style="background-color: #0AABEF">Educational News for Sciences</span></b></font></a>
        <a class="dropdown-item" href="news21.php"><font color="white"><b><span style="background-color: #0AABEF">Nigeria Exam Info and Guides </span></b></font></a>
        <a class="dropdown-item" href="news31.php"><font color="white"><b><span style="background-color: #0AABEF">Career Prospects and Guides</span></b> </font></a>
      </div>
    </li>
      </ul> 
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="course1.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>COURSES</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="course1.php"><font color="white"><b><span style="background-color: #0AABEF">English Language </span></b></font></a>
        <a class="dropdown-item" href="course2.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics</span></b></font> </a>
        <a class="dropdown-item" href="course3.php"><font color="white"><b><span style="background-color: #0AABEF">Physics </span></b></font></a>
        <a class="dropdown-item" href="course4.php"><font color="white"><b><span style="background-color: #0AABEF">Chemistry </span></b></font></a>
        <a class="dropdown-item" href="course5.php"><font color="white"><b><span style="background-color: #0AABEF">Biology</span></b></font> </a>
        <a class="dropdown-item" href="course6.php"><font color="white"><b><span style="background-color: #0AABEF"> Programming & Coding</span></b></font> </a>
      </div>
    </li>
      </ul>
     
       <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="article1.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>ARTICLES </b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="course2.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics and F.Maths Direct</span></b> </font></a>
        <a class="dropdown-item" href="course3.php"><font color="white"><b><span style="background-color: #0AABEF">Physics Today</span></b></font></a>
        <a class="dropdown-item" href="course4.php"><font color="white"><b><span style="background-color: #0AABEF">Chemistry for Sciences</span></b></font></a>
        <a class="dropdown-item" href="course5.php"><font color="white"><b><span style="background-color: #0AABEF">Biology of the Living Things</span></b></font></a>
        <a class="dropdown-item" href="course1.php"><font color="white"><b><span style="background-color: #0AABEF">English Language and Structure </span></b></font></a>
        <a class="dropdown-item" href="course2.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics for Kids</span></b></font></a>
        <a class="dropdown-item" href="course1.php"><font color="white"><b><span style="background-color: #0AABEF">Learn English for kids</b></font></a>
        <a class="dropdown-item" href="course3.php"><font color="white"><b><span style="background-color: #0AABEF">Advanced Physics and Trends </span></b></font> </a>
        <a class="dropdown-item" href="course5.php"><font color="white"><b><span style="background-color: #0AABEF">Basic Biological Science for Kids </span></b></font> </a>
      </div>
    </li>
      </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="archive1" id="navbardrop" data-toggle="dropdown" >
         <font color="white"><b>ARCHIVES</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="archive1"><font color="white"><b><span style="background-color: #0AABEF">TetraSub Science Collections </span></a>
        <a class="dropdown-item" href="archive12.php"><font color="white"><b><span style="background-color: #0AABEF">Research Publications  </span></a>
      </div>
    </li>
      </ul>
   
    
      <div class="modal-window" style="margin-top: 20px;">
		<div id="modal">
			
			<div class="modal-search">
				
				<form action="search1a.php" method="get">
					<fieldset>
						<input type="text" name="search" value="" placeholder="Search Course Title">
						<input type="submit" value="Search" name="submit">
					</fieldset>
				</form>
			</div>
		</div>  
	</div>
  
  </div>  
</nav>


<div class="container-fluid" style="background-color: dimgrey">
	<div class="row" style="text-align: center">
		<div class="col-sm-12 col-md-12 col-lg-12 " ><h5>TETRASUB ENGLISH LANGUAGE ARTICLES & VIDEOS  </h5> </div>
	</div>
</div>




<div class="container-fluid" style="background-color: ">
	<div class="row" style="height: ">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>


<div id="dem1" class="carousel slide " data-ride="carousel ">
  <ul class="carousel-indicators">
    <li data-target="#demo1" data-slide-to="0" class="active"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="style/image/Artboard 1 - Copy (12).png" alt="Los Angeles" alt="Los Angeles" width="100%" height="600px">
      <div class="carousel-caption">
       
      </div>   
    </div>
  </div>
  
   
  <a class="carousel-control-prev" href="#dem1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#dem1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<div class="container-fluid " style="margin-top: 0px; color: white; background-color:#044C87; width: 100%; border-radius: 6px; height: 200px"><br/>
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 " align="center" style=""><h2>TETRASUB ACADEMY, GLOBAL SCIENCE NETWORKS </h2> </div>
	<div class="col-sm-12 col-md-12 col-lg-12 " align="center" style="color: skyblue"><h4>ALL ENGLISH LANGUAGE ARTICLES & VIDEOS </h4></div><p/>
	</div>
</div>
	<div class="container "><div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 " style="color: gold; background-color: #044C87; text-align: center">MOTTO: LEARN & LEAD </div>
	</div></div>


	
	<div class="container" style="color: dodgerblue; "><br/>
	<div class="row" style="; border-radius: 4px;">
	
	<div class="col-sm-12 col-md-12 col-lg-12" style="color: dimgray; background-color: gainsboro"><h5><b> ENGLISH LANGUAGE ARTICLES </b></h5></div>
	
	</div><br/>
	<?php for ($s=0; $s<$count; $s++){?>
	<div class="row">
	<div class="col-sm-10 col-md-10 col-lg-11" style="background-color:whitesmoke; color: "> <?php echo $title[$s]?></div>
	<div class="col-sm-2 col-md-2 col-lg-1 " style="background-color:whitesmoke; margin-top: 10px;"><a class="btn btn-primary" href="course11?id=<?php echo $id[$s]?>"><b>View </b></a></div>
	</div>
	<?php }?>
	
	<br/>
	
	<div style='padding: 10px 20px 0px; border-top: dotted 1px blue; font-size: 18px;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination" style="height: ;font-size: 20px; background-color:gainsboro;border-spacing: 3px;">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a class="btn btn-primary" style="padding-left: 2px; " <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>><b>Previous</b></a>
	</li>|
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn'; 'btn-primary'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn'; 'btn-primary' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn'; 'btn-primary'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn'; 'btn-primary' href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a class='btn'; 'btn-primary'>...</a></li>";
		echo "<li><a class='btn'; 'btn-primary' href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a class='btn'; 'btn-primary' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a class='btn'; 'btn-primary' href='?page_no=1'>1</a></li>";
		echo "<li><a class='btn'; 'btn-primary' href='?page_no=2'>2</a></li>";
        echo "<li><a class='btn'; 'btn-primary'>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn'; 'btn-primary'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn'; 'btn-primary' href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a class='btn'; 'btn-primary'>...</a></li>";
	   echo "<li><a class='btn'; 'btn-primary' href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a class='btn'; 'btn-primary' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a class='btn'; 'btn-primary' href='?page_no=1'>1</a></li>";
		echo "<li><a class='btn'; 'btn-primary' href='?page_no=2'>2</a></li>";
        echo "<li><a class='btn'; 'btn-primary'>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn'; 'btn-primary'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn'; 'btn-primary' href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    |
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a class="btn btn-primary" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>><b>Next</b></a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a  href='?page_no=$total_no_of_pages' class='btn'></a></li>";
		} ?>
</ul>


	
	<div class="row" style="margin-top: 30px">
	<div class="col-sm-12 col-md-12 col-lg-12" style="color: dimgray"><h5><b>VIDEO TUTORIALS</b></h5></div>
	<div class="col-sm-10 col-md-10 col-lg-11" style="background-color:whitesmoke"> ENGLISH LANGUAGE VIDEOS </div>
	<div class="col-sm-2 col-md-2 col-lg-1" style="background-color:whitesmoke; margin-top: 10px;" ><a class="btn btn-primary" href="video.php"><b>Display</b></a></div>
	</div><br/>
	</div>




<div class="container-fluid " style="margin-top: 0px; color: white; background-color:#044C87; width: 100%; border-radius: 6px; height: 200px"><br/>
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 " align="center" style=""><h4>TETRASUB ACADEMY, GLOBAL SCIENCE NETWORKS </h4> </div>
	<div class="col-sm-12 col-md-12 col-lg-12 " align="center" style="color: deepskyblue"><h5>ACADEMIC GIANTS OF AFRICA</h5></div><p/>
	</div>
</div>


<div class="container-fluid" style="background-color: #044C87">
	<div class="row" style="height: 4px">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
	</div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6 " style="background-color: grey"><br/><br/><br/><br/><h3><b><font color="#044C87">Subscribe to our Newsletter</font></b></h3><p/>Get information on the latest science articles published on TetraSub Academy weekly, all exam updates and other professional activities that you may not like to miss out...</div>
<div class="col-sm-6 col-md-6 col-lg-6 " style="background-color: grey"><br/>
	
	
	<?php
require_once("database.php");




if(isset($_POST['submit1'])){
$name1= $_POST['name1'];
$email1= $_POST['email1'];
$remember= $_POST['remember'];


	$select= mysqli_query($connect, "select * from subscribe where name1 = '$name1' ");
	$num= mysqli_num_rows($select);
	if($num>0){
		echo "name exists";
	
	}
	else{
		$sign= mysqli_query($connect, "insert into subscribe (name1, email1, remember) values('$name1','$email1','$remember')") or die ('cant insert'.mysqli_error($connect));
		if($sign){echo 'Content Submitted, Subscription successful! ';}
	}
}


?>
	

	
	
	
<form action="" method="post" enctype="multipart/form-data" class="was-validated" >
  <div class="form-group">
    <label for="uname">Name:</label>
    <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="name1" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" id="email1" placeholder="Enter Email" name="email1" required>
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
  <button type="submit" class="btn btn-primary" name="submit1" id="submit1">Subscribe</button>
</form></div>
</div></div>

<div class="container-fluid" style="background-color: gold">
	<div class="row" style="height: 1px">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>


<div class="container-fluid" style="background-color:#044C87 "><br/>
	<div class="row" style="background-color:#044C87 ">
	<div class="container "><br/><br/><br/>
	<div class="row" style="background-color:#044C87 "><br/><br/>
		<div class="col-sm-6 col-md-4 col-lg-4 "><font color="white"><p/><b>
		<h4>TETRASUB <p/>ACADEMY</h4></b><p/>
		<a ><font color="white">Block 6/7 Ilukwe Street </a><br/></font>
		<a ><font color="white">Asata Township </a><br/></font>
		<a ><font color="white">Enugu North</a><br/></font>
		<a ><font color="white">Enugu State </a><br/></font>
		<a ><font color="white">Nigeria </a><br/></font><br/>
		<a ><font color="white" ><font color="gold">Phone: </font>+2348082994081 </a><br/></font>
		<a ><font color="white"><font color="gold">Email:</font> hr@tetrasub.net </a><br/></font>
		</font></div>
		<div class="col-sm-6 col-md-4 col-lg-4 "><font color="gold"><p/>
		<u><h4>Contact Us</h4></u><p/>
		<a href="enquiry1.php"><font color="white">Enquiries</a><br/></font>
		<a href="course1.php"><font color="white">TetraSub Programs </a><br/></font>
		<a href="help1.php"><font color="white">Help & Support  </a><br/></font>
		<a href="conssult.php"><font color="white">Consult Us</a><br/></font>
		<a href="about11.php"><font color="white">Who we are </a><br/></font>
		<a href="archive12.php"><font color="white">Research Publications </a><br/></font>
		<a href="faq1.php"><font color="white">FAQ'S</a><br/></font>
		</font></div>
		<div class="col-sm-6 col-md-4 col-lg-4 "><font color="gold"><p/>
		<u><h4>More</h4></u><p/>
		<a href="career.php"><font color="white">Career</a><br/></font>
		<a href="service51.php"><font color="white">Exam Updates</a><br/></font>
		<a href="archive1.php"><font color="white">Archives</a><br/></font>
		<a href="career.php"><font color="white">Teachers</a><br/></font>
		
		<a href="course1.php"><font color="white">Articles </a><br/></font>
		
		<a href="empower1.php"><font color="white">Empower Us</a><br/></font>
		<a href="terms1.php"><font color="white">Terms and Conditions</a><br/></font>
		<a href="privacy1.php"><font color="white">Privacy Policy</a><br/></font>
		</font></div>
		</div><br/><br/>
		</div>
		<br/><br/><br/>
	</div>
</div>


<div class="footer">
  <a>TetraSub Academy | &copy; <?php echo date('Y'); ?></a>
  
</div>


</body>
</html>