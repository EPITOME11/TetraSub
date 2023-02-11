

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>
body, html {
  height: 100%;
  margin: 0;
 width: 100%;
align:left;
}

.bg1 {
  /* The image used */
  
  background-image: url('style/image/Untitled-3 - Copy.png');

  /* Full height */
  height: 80px;
  margin: 0;
 width: 100%;
  

  /* Center and scale the image nicely */
  background-position:left;
  background-repeat:no-repeat;
  background-size:contain;
  
}
</style>


<style>
body, html {
  height: 100%;
  margin: 0;
 width: 100%;
align:left;
}

.bg11 {
  /* The image used */
  
  background-image: url('style/image/Untitled-3 - Copy.png');

  /* Full height */
  height: 100px;
  margin: 0;
 width: 100%;
  

  /* Center and scale the image nicely */
  background-position:left;
  background-repeat:no-repeat;
  background-size:contain;
  
}
</style>

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

 <link rel="shortcut icon" href="style/image/favi.png" />
</head>

<body>
<div class="container-fluid " style="background-color: #0AABEF" >
    <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 " style="color:white" align="left"><font size="-1"><b>Global Science Networks</b>
     </font>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 " style="color:#044C87" align="right">
    
    <a href="#" class=" " data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-user" style="color: white"></i><font color="white"><b>LOGIN </b></font></a>
    

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
       <?php
require_once("database.php");





if(isset($_POST['submit'])){
$user= $_POST['username'];
$pass= $_POST['password'];

	
	$select= mysqli_query($connect, "select * from table1 where binary username = '$user' ") or die("could not login".mysqli_error($connect));
	$num= mysqli_num_rows($select);
	if(mysqli_num_rows($select)){
		while($rows=mysqli_fetch_assoc($select))
		{
			$nweze= $rows['username'];
			$okey= $rows['password'];
			
		}
		if(password_verify($pass, $okey)){
		if($num>0){
		setcookie("oka", $nweze, time()+3600);
	    header("location:login1.php");
			
		}
	}
			else{echo "Wrong password";}
			
		}
		else {echo "Wrong username please register!";}
	}
	
	
?>



        <h4 class="modal-title">Please, Log in</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action=""  method="post" enctype="multipart/form-data">
<div class="container" style="width: 80%" ><br/>
<div class="" style="background-color: #044C87; text-align: center"><br/>
	
<label style="color: white; font-size: 22px;">username: </label>
<input name="username" type="text" id="username" value="" /><br/>
	
<label style="color: white; font-size: 22px;">password:</label>
	<input type="password" name="password" id="password"/><p/>

	
	<label style="color: white; font-size: 22px;"></label>
		<input type="submit" name="submit" id="submit"  value="LOGIN"/><br/>
	
	
	<input type="checkbox" name="" id=""/>
<label style="color: white; font-size: 15px;">Remember me</label><br/>
<span style="color: white">Don't have an account yet:</span>
<a href="register.php" style="color: gold; font-size: 18px;">Register </a><br/>
	
<a href="#" style="color: gold; font-size: 18px;">Forgot Password </a>
	</div><br/></div>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div> </div>
  </div>
    	
		</div>
   </div> 
</div>



<nav class="navbar navbar-expand-xl navbar-dark    " style="background-color:#044C87">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon  btn-primary  "></span>
  </button>
  
  
 
  <a  class="navbar-brand-logo  bg1 col-3" size=""></a>
 
 
  
  
  <div class="collapse navbar-collapse " id="collapsibleNavbar"  align="left">
    <ul class="navbar-nav " style="font-size: 14px" align="left">
      <li class="nav-item ">
        <a class="nav-link" href="index.php" style="text-align: left"><font color="#FCFCFC"><b>HOME</b></font></a>
      </li>
      </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle " href="about1.php" id="navbardrop" data-toggle="dropdown">
       <font color="white"><b>ABOUT US</b></font>
      </a>
      <div class="dropdown-menu  "  style="background-color:#0AABEF" >
        <a class="dropdown-item" href="about1.php"  ><font color="white"><b><span style="background-color: #0AABEF">Mission Statement</span></b></font></a>
        <a class="dropdown-item" href="about2.php"><font color="white"><b><span style="background-color: #0AABEF">Vision Statement</span></b></font></a>
		  <a class="dropdown-item" href="about3.php"><font color="white"><b><span style="background-color: #0AABEF">Objectives</span></b></font></a>
          <a class="dropdown-item" href="about4.php"><font color="white"><b><span style="background-color: #0AABEF">Profiles</span></b></font></a>
      </div>
    </li>
     </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="service1.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>OUR SERVICES</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="service1.php"><font color="white"><b><span style="background-color: #0AABEF">Home and Private Classes</span></b></font></a>
        <a class="dropdown-item" href="service2.php"><font color="white"><b><span style="background-color: #0AABEF">Offline Group Classes </span></b></font></a>
        <a class="dropdown-item" href="service3.php"><font color="white"><b><span style="background-color: #0AABEF">WAEC/JAMB Exam Lessons </span></b></font> </a>
        <a class="dropdown-item" href="service4.php"><font color="white"><b><span style="background-color: #0AABEF">Common Entrance Exam Lessons</span></b></font></a>
        <a class="dropdown-item" href="service5.php"><font color="white"><b><span style="background-color: #0AABEF">National Exam Info and Updates </span></b></font></a>
      </div>
    </li>
      </ul> 
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="news1.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>NEWS</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="news1.php"><font color="white"><b><span style="background-color: #0AABEF">Educational News for Sciences</span></b></font></a>
        <a class="dropdown-item" href="news2.php"><font color="white"><b><span style="background-color: #0AABEF">Nigeria Exam Info and Guides </span></b></font></a>
        <a class="dropdown-item" href="news3.php"><font color="white"><b><span style="background-color: #0AABEF">Career Prospects and Guides</span></b> </font></a>
      </div>
    </li>
      </ul> 
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="register.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>COURSES</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">English Language </span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics</span></b></font> </a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Physics </span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Chemistry </span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Biology</span></b></font> </a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Programming & Coding</span></b></font> </a>
      </div>
    </li>
      </ul>
     
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="register.php" id="navbardrop" data-toggle="dropdown">
         <font color="white"><b>ARTICLES </b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics and F.Maths Direct</span></b> </font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Physics Today</span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Chemistry for Sciences</span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Biology of the Living Things</span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">English Language and Structure </span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Mathematics for Kids</span></b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Learn English for kids</b></font></a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Advanced Physics and Trends </span></b></font> </a>
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Basic Biological Science for Kids </span></b></font> </a>
      </div>
    </li>
      </ul>
      <ul class="navbar-nav" style="font-size: 14px">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="register.php" id="navbardrop" data-toggle="dropdown" >
         <font color="white"><b>REGISTER</b></font>
      </a>
      <div class="dropdown-menu"  style="background-color:#0AABEF">
        <a class="dropdown-item" href="register.php"><font color="white"><b><span style="background-color: #0AABEF">Register Here</span></a>
        
      </div>
    </li>
      </ul>
   
    
     <div class="modal-window" >
		<div id="modal" >
			
			<div class="modal-search">
				
				<form action="search11.php" method="get" >
					<fieldset>
						<input type="text" name="search" value="" placeholder="Search News" >
						<input type="submit" value="Search" name="submit">
					</fieldset>
				</form>
			</div>
		</div>  
	</div>
  
  </div> 
  
   
   
     
       
</nav>
 

<div class="container-fluid" style="background-color: gold">
	<div class="row" style="height: 1px">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>




<div class="container-fluid" style="background-color: ">
	<div class="row" style="height: ">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>


<style>
body, html {
  height: 100%;
  margin: 0;
 width: 100%;
}

.bg {
  /* The image used */
  
  background-image: url('style/image/Artboard 1 - Copy (18).png');

  /* Full height */
  height: 100%; 
  width: 100%;
  

  /* Center and scale the image nicely */
  background-position:left;
  background-repeat:repeat;
  background-size:contain;
}
</style>





<div class="bg" style="height: 500px; " >
 
 
 
	 <div class="col-sm-12 col-md-12 col-lg-12 " style="color:#044C87;padding-top: 100px; text-align: right; "><h2><strong><b>TetraSub Academy, Global Science Networks  </b></strong> </h2></div>
	 <div class="col-sm-12 col-md-12 col-lg-12 " style="color: gold;text-align: right; " ><h5><strong> Restoring Educational Values to Mankind</strong></h5> </div>
	 <div class="col-sm-12 col-md-12 col-lg-12  " style="padding-top: 150px;color: white;text-align: left; " ><h6><strong><b>Academic Giants OF Africa</b></strong></h6> </div>
	
	
</div>





<div class="container-fluid "  >
	<div class="row " style="height:  " >
		<div class="col-sm-6 col-md-6 col-lg-7 "  style="background-color: #044C87"  >
		<br/><br/>
		<span style="color:gold; font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'"><h1><b>TetraSub Global Trends</b> </h1></span><br/>Since 2010 our pioneering research and tutoring has made a positive impact on the global stage. We continue to push new frontiers in the fields of Science, Technology and Engineering...<a href="#"><span style="color: yellow"> Read More!</span></a> <br/><br/>
		</div><br/>
		<div class="col-sm-6 col-md-6 col-lg-5 "  style="background-color:#044C87 "  >
		<img  src="style/image/Artboard 1 - Copy (15).png" width="100%" height ="300px"/>
		</div>
		
	</div>
</div>


<div class="container-fluid" style="background-color:white">
	<div class="row">
	
	
		<div class="col-sm-12 col-md-12 col-lg-12 " style="color: grey">
		<div class="row">
		<div class="col-sm-6 col-md-7 col-lg-8 "><br/><br/><span style="color:black "><h1><b>Our Science Articles </b></h1></span> <p/> Our articles are specially prepared to meet your academic goals and quests.... <br/><br/>
		
		</div>
		
		
		<div class="col-sm-5 col-md-4 col-lg-3 " style="color:#044C87; text-align: left "><br/><br/><br/><br/><h2><b>Paradigm Masters</b></h2><p/><font color="deepskyblue">Our learned colleagues work tirelessly on our articles' modifications and compatibility. Learn and lead.</font></div>
		</div>
		</div>
		
		
		
		<div class="col-sm-12 col-md-12 col-lg-12 " style="color: dimgray"><br/><br/>
 		<div class="row">
 		<div class="container"><div class="row">
 		
 		
 		<div class="col-sm-6 col-md-6 col-lg-3 ">
 		<div class="card" style="width:100%">
 
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Applied Physics</u> </b></font></h4>
    <p class="card-text"><font color="white">Our Applied Physics articles gives you new trends in the field of Pure & Industrial Physics.</font></p>
    <a href="register.php" class="btn btn-primary ">Explore</a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Applied Maths</u> </b></font></h4>
    <p class="card-text"><font color="white">Explore mathematical articles in Calculus, Group Theorems, Laplace Transform etc. </font></p>
    <a href="register.php" class="btn btn-primary ">Learn more</a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color:#044C87 ">
    <h4 class="card-title"><font color="gold"><b><u>Quantitative </u> </b></font></h4>
    <p class="card-text"><font color="white">Our Quantitative articles cover all basic solutions made easy for Common Entrance Exams. </font></p>
    <a href="register.php" class="btn btn-primary">Explore </a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Spatial</u></b></font></h4>
    <p class="card-text"><font color="white">With our enriched articles on Spatial Reasoning your pathway to exam success is here.</font></p>
    <a href="register.php" class="btn btn-primary">See more</a>
  </div>
			</div></div>
			</div></div>			
 		</div>
  		</div><br/>
		<div class="col-sm-12 col-md-12 col-lg-12 " style="color: dimgray"><br/><br/><br/><br/>
 		<div class="row">
 		<div class="container"><div class="row">
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Biology </u> </b></font></h4>
    <p class="card-text"><font color="white">Learn basic and advanced Biology and excell in all your exams with ease now.</font></p>
    <a href="register.php" class="btn btn-primary">click here</a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Mathematics</u> </b></font></h4>
    <p class="card-text"><font color="white">Learn Algebra, Geometry, Trigonometry, Calculus etc with video tutorials. </font></p>
    <a href="register.php" class="btn btn-primary ">Learn more</a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color:#044C87 ">
    <h4 class="card-title"><font color="gold"><b><u>Physics</u> </b></font></h4>
    <p class="card-text"><font color="white">Our Physics articles cover all Basic Physics solutions made easy for self studies. </font></p>
    <a href="register.php" class="btn btn-primary">Explore </a>
  </div>
			</div></div>
 		<div class="col-sm-6 col-md-6 col-lg-3 "><div class="card" style="width:100%">
  
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Chemistry </u></b></font></h4>
    <p class="card-text"><font color="white">With our enriched articles in Chemistry your pathway to success is here.</font></p>
    <a href="register.php" class="btn btn-primary">See more</a>
  </div>
			</div></div>
			</div></div>			
 		</div>
  		</div>
	</div><br/><br/><br/><br/>
</div>








<div class="container-fluid " style="background-color: #044C87" >

	<div class="row " style="height: " >
		<div class="col-sm-6 col-md-6 col-lg-7 "    ><br/><br/><h1><b><span style="color:gold"><span style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'">Our Global Science Networks </span></b></h1><p/><font class="" style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'"><p/>Focusing on the fundamentals of Science is a pathway to building outstanding future scientists. We are dedicated to rendering excellent and effective tutorials to our esteemed students. Our online articles are uniquely prepared with a touch of excellence to meet your academic demands.</font><a href="#"><span style="color: yellow"> Explore More!</span></a> </span>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-5 "  style="color: "  ><span style="color:greenyellow"></span> </h4><font class=""><img src="style/image/Artboard 1 - Copy (4).png"S alt="New York" width="100%" height="350px">  </font></div>
		
	</div>
	

</div>









<div class="container-fluid" style="background-color: whitesmoke">
	<div class="row" >
		<div  class="col-sm-7 col-md-7 col-lg-8  " style="color:black"><br/><br/>
		<h1><b>Latest News </b></h1><p/><span style="color:dimgray"> All the exciting news from across TetraSub global community. </span>
		</div>
		
		<div  class="col-sm-5 col-md-4 col-lg-3  " style="color: #044C87"><br/><br/><br/><br/><br/>
		<h2><b>TetraSub Academy  </b></h2><p/><span style="color:deepskyblue">Excellence & Dignity are the major focus of our landing paths. We are the global pioneers in science tutoring.</span>
		</div>
		
		
		<div class="col-sm-12 col-md-12 col-lg-12"><br/>
		<div class="row" style="height: ">
		<div class="container"><div class="row">
			<div  class="col-sm-6 col-md-4 col-lg-4 "><div class="card" style="width:100%">
  <img class="card-img-top" src="style/image/Artboard 1 - Copy (5).png" alt="Card image" style="width: 100%;
  height: 200px;">
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>Big September</u></b></font></h4>
    <p class="card-text"><font color="white">Special award awaits the best brain at the TetraSub Academy on September every year...</font></p>
    <a href="service2.php" class="btn btn-primary ">Apply Now</a>
  </div>
			</div></div>
			
			<div  class="col-sm-6 col-md-4 col-lg-4 "><div class="card" style="width:100%">
  <img class="card-img-top" src="style/image/Artboard 1 - Copy (3).png" alt="Card image" style="width: 100%; height: 200px;">
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>New Articles</u></b></font></h4>
    <p class="card-text"><font color="white">Be the first to get notified on every published science  articles in TetraSub Academy. </font></p>
    <a href="#form1" class="btn btn-primary">Sign Up</a>
  </div>
			</div></div>
			
			<div  class="col-sm-6 col-md-4 col-lg-4 "><div class="card" style="width:100%">
  <img class="card-img-top" src="style/image/Artboard 1 - Copy (7).png" style="width: 100%; height: 200px;">
  <div class="card-body" style="background-color: #044C87">
    <h4 class="card-title"><font color="gold"><b><u>August Special</u></b></font></h4>
    <p class="card-text"><font color="white">Our intensive offline tutorials is at a 40% discount on every month of the August...</font></p>
    <a href="service1.php" class="btn btn-primary">Register Now</a>
  </div>
			</div></div>
		</div>
		</div>
		</div></div>
	</div>
	<br/><br/><br/>
</div>



<div class="container-fluid"  style="background-color: whitesmoke" ><br/>
<div class="row" style="background-color: whitesmoke" >
	<div class="col-sm-4 col-md-4 col-lg-4 " style="background-color: whitesmoke"><span  style="color: black"><h2><b>Articles Overview </b></h2>
	
	
	<button class="accordion" style="color: white"><b>Waves (Physics)</b></button>
	<div class="panel" style="color: dimgrey"><a href="register.php"><span  style="color: dimgray">Waves </span></a><p/>
	</div>
	
	<button class="accordion" style="color: white"><b>Metals & Metalloids </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Metals & Metalloids </span></a><p/></div>
	
	<button class="accordion" style="color: white"><b>Comprehension (English)</b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Comprehension (English) </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Fractions (Mathematics)</b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Fractions  </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Hereditary (Biology) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Hereditary  </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Electrolysis (Chemistry) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Electrolysis </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Elementary Mechanics  </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: red">Elementary Mechanics  </span> </a><p/></div>
	</span>
	
	
	
	
	</div>
	
	
	<div class="col-sm-4 col-md-4 col-lg-4 " style="background-color: whitesmoke">
	<span  style="color: whitesmoke"><h2><b>Articles Overview </b></h2>
	
	<button class="accordion" style="color: white"><b>Reproduction (Biology)</b></button>
	<div class="panel" style="color: dimgrey"><a href="register.php"><span  style="color: dimgray">Reproduction (Biology) </span></a><p/>
	</div>
	
	<button class="accordion" style="color: white"><b>Heat & Energy (Physics) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Heat & Energy</span></a><p/></div>
	
	<button class="accordion" style="color: white"><b>Concord Rules (English)</b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Concord (English) </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Set Theory (Maths) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Set Theory </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Phonics (Oral English) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Phonics </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Habitat (Biology) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Habitats </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Electric Fields (Physics)</b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: red">Electric Fields </span> </a><p/></div>
	</span>
	
	
	
	
	</div>
	
	
	
	
	<div class="col-sm-4 col-md-4 col-lg-4 " style="background-color: whitesmoke">
	<span  style="color: whitesmoke"><h2><b>Articles Overview </b></h2>
	
	<button class="accordion" style="color: white"><b>HTML5 & CSS3 (Coding) </b></button>
	<div class="panel" style="color: dimgrey"><a href="register.php"><span  style="color: dimgray">  HTML5 & CSS</span></a><p/>
	</div>
	
	<button class="accordion" style="color: white"><b> PHP & MYSQL  </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray"> PHP & MYSQL </span></a><p/></div>
	
	<button class="accordion" style="color: white"><b> Algebra & Geometry</b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray"> Algebra and Geometry </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>All Calculus (Maths) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray"> Calculus </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Parts of Speech (English) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray"> Parts of Speech </span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Magnetic Fields (Physics) </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: dimgray">Magnetic Fields</span> </a><p/></div>
	
	<button class="accordion" style="color: white"><b>Aromatic Hydrocarbons  </b></button>
	<div class="panel">
	<a href="register.php"><span  style="color: red">Aromatic Hydrocarbons </span> </a><p/></div>
	</span>
	
	
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
	
	</div>
	
	
	
	</div></div>
			<br/><br/><br/>
			
			
			
	<div class="container-fluid " style="background-color: #044C87" >

	<div class="row " style="height: " >
		<div class="col-sm-6 col-md-6 col-lg-7 "    ><br/><br/><h1><b><span style="color:gold"><span style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'">Applied Science and Industry </span></b></h1><p/><font class="" style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'"><p/>The application of scientific processes  in industrial production has taken a revolutionary stretch in the 21st Century. Every society that must fit in on the current technological advancement would consider the fundamental facets of science in both research and practical applications. </font><a href="#"><span style="color: yellow"> Read More!</span></a> </span>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-5 "  style="color: "  ><span style="color:greenyellow"></span> </h4><font class=""><img src="style/image/Artboard 1 - Copy (8).png"S alt="New York" width="100%" height="350px">  </font></div>
		
	</div>
	

</div>
		
			
	<div class="container-fluid" style="background-color: #044C87">
	<div class="row" style="height: 1px">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>
		
			
			
			
			<style>
body, html {
  height: 100%;
  margin: 0;
 width: 100%;
}

.bg2 {
  /* The image used */
  
  background-image: url('style/image/Artboard 1 - Copy (19).png');

  /* Full height */
  height: 100%; 
  width: 100%;
  

  /* Center and scale the image nicely */
  background-position:left;
  background-repeat:no-repeat;
  background-size:cover;
}
</style>





<div class="bg2" style="height: 400px; " >
	 

	
</div>











<div class="container-fluid">
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6 " style="background-color: gainsboro ; color:dimgray"><br/><br/><br/><br/><h3><b><font color="#044C87">Subscribe to our Newsletter</font></b></h3><p/>Get information on the latest science articles published on TetraSub Academy weekly, all exam updates and other professional activities that you may not like to miss out...</div>
<div class="col-sm-6 col-md-6 col-lg-6 " style="background-color: gainsboro" id="form1"><br/>



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
	

	
	


<form action="" method="post" enctype="multipart/form-data" class="" >
  <div class="form-group">
    <label for="uname"><font color="dimgray">Name:</font></label>
    <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="name1" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd"><font color="dimgray">Email:</font></label>
    <input type="email" class="form-control" id="email1" placeholder="Enter Email" name="email1" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required>
      <font color="dimgray"> I agree on the terms and services.</font>
     
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit1">Subscribe</button>
</form></div>
</div></div>



<div class="container-fluid" style="background-color: gold">
	<div class="row" style="height: 1px">
		<div class="col-sm-12 col-md-12 col-lg-12 " ></div>
	</div>
</div>


<div class="container-fluid" style="background-color:#044C87 "><br/>
	<div class="row" style="background-color:#044C87 ">
	<div class="container " style="font-family: Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'"><br/><br/><br/>
	<div class="row" style="background-color:#044C87 "><br/><br/>
		<div class="col-sm-6 col-md-4 col-lg-4 "><br/><br/><a  class="navbar-brand bg11  "  ></a><font color="#044C87 "><p/><b><h4> <p/></h4>
		</b><p/>
		<a ><font color="white">Science Articles, Papers    </a><br/></font>
		
		<a ><font color="white">and Videos </a><br/></font><br/><br/>
		<a ><font color="white"></a></font>
		<br/></font>
		<br/></font>
		</font></div>
		<div class="col-sm-6 col-md-4 col-lg-4 "><font color="gold"><p/>
		<u><h4>Contact Us</h4></u><p/>
		<a href="enquiry.php"><font color="white">Enquiries</a><br/></font>
		<a href="register.php"><font color="white">TetraSub Programs </a><br/></font>
		<a href="help.php"><font color="white">Help & Support  </a><br/></font>
		<a href="register.php"><font color="white">Consult Us</a><br/></font>
		<a href="about1.php"><font color="white">Who we are </a><br/></font>
		<a href="register.php"><font color="white">Research Publications </a><br/></font>
		<a href="faq.php"><font color="white">FAQ'S</a><br/></font>
		</font></div>
		<div class="col-sm-6 col-md-4 col-lg-4 "><font color="gold"><p/>
		<u><h4>More</h4></u><p/>
		<a href="register.php"><font color="white">Career</a><br/></font>
		<a href="service5.php"><font color="white">Exam Updates</a><br/></font>
		<a href="register.php"><font color="white">Archives</a><br/></font>
		<a href="register.php"><font color="white">Teachers</a><br/></font>
		
		<a href="register.php"><font color="white">Articles </a><br/></font>
		
		<a href="empower.php"><font color="white">Empower Us</a><br/></font>
		<a href="terms.php"><font color="white">Terms and Conditions</a><br/></font>
		<a href="privacy.php"><font color="white">Privacy Policy </a><br/></font>
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