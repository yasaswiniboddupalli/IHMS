
<?php 
session_start();
mysql_connect("localhost","root"."") or die("connection failed");
mysql_select_db("health") or die("db not found");
if(isset($_POST['submit'])){
	session_start();
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];
	if($password == $password1) {
				//create user
				$password = md5($password); //hash password for security
	$query="insert into users(name,email,password)values('$name','$email','$password')";
	if(mysql_query($query)){
		echo "<h3>successfully inserted</h3>";
		$_SESSION['message'] = "you are now logged in";
				$_SESSION['name'] = $name;
				header("location: home1.php"); 
	}
	}else{
		$_SESSION['message'] = "The two passwords do not match";
	}
}

?>




<!DOCTYPE html>
<html>
<title>Intelligent Health Monitoring System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="one.css">
<link rel="stylesheet" href="input.css">
<link rel="stylesheet" href="/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
.h2{text-align:center;}
.mySlides {display:none;}
body{font-family: "Roboto", sans-serif}
.w3-sidenav a {padding:16px;font-weight:bold}
a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: green;
    background-color: transparent;
    text-decoration: underline;
}

</style>
<body>
<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
        <a href="#home" onClick="w3_close()">Home</a>
         <a href="#bmi" onClick="w3_close()">BMI calculator</a>
         <a href="#bmr" onClick="w3_close()">BMR calculator</a>
        <a href="#bsa" onClick="w3_close()">BSA calculator</a>
		<a href="#ibw" onClick="w3_close()">IBW calculator</a>
        <a href="#abw" onClick="w3_close()">ABW calculator</a>
        <a href="#whr" onClick="w3_close()">WHR calculator</a>
		<a href="#whtr" onClick="w3_close()">WHtR calculator</a>
        <a href="#calorie" onClick="w3_close()">Calorie intake calculator</a>
        <a href="#bodyfat" onClick="w3_close()">Body Fat% calculator</a>
		<a href="#burned" onClick="w3_close()">Calories Burned calculator</a>
      </nav>

	  <!-- Top menu -->
<div class="w3-top">

  <div class="w3-blue w3-xlarge w3-padding-jumbo" style="max-width:1200px;margin:auto">
    <div class="w3-opennav w3-left w3-hover-text-green" onclick="w3_open()">☰</div>
   <div class="w3-right"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal0').style.display='block'">signin</button>
</p>	</div>
   <div class="w3-center">Intelligent Health Monitoring System</div>
   
</div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

<!---slide show!--->
<div class="w3-row-padding w3-padding-16 w3-center" id="home">
<div class="w3-card-4 w3-margin">

  <img  class="mySlides" src="a.jpg" alt="Nature" style="width:100%;height:500px;">
  <img  class="mySlides" src="f.jpg" alt="Nature" style="width:100%;height:500px;">
  <img  class="mySlides" src="c.jpg" alt="Nature" style="width:100%;height:500px;">
  <img  class="mySlides" src="b.jpg" alt="Nature" style="width:100%;height:500px;">
  <img  class="mySlides" src="d.jpg" alt="Nature" style="width:100%;height:500px;">
  <img  class="mySlides" src="e.jpg" alt="Nature" style="width:100%;height:500px;">
  
</div>
</div>
<!--end of slide show--->
<hr id="bmi">
<br>
<br>
<br>
<div class="w3-card-4 w3-margin">
 <div class="w3-container">
   <h2>BMI</h2>
   <p>Body mass index (BMI) is a measure of body fat based on your weight in relation to your height, and applies to most adult men and 
	women aged 20 and over.BMI is used as a screening tool to indicate whether a person is underweight, overweight, obese or a healthy weight for their height.
    If a person's BMI is out of the healthy BMI range, their health risks may increase significantly.
    BMI values are age-independent and the same for both sexes.
</p>
<p>Research has shown that BMI is strongly correlated with the gold-standard methods for measuring body fat and it is an easy way 
for clinicians to screen who might be at greater risk of health problems due to their weight.The WHO states that for adults, the healthy 
range for BMI is between 18.5 and 24.9.</p><a href="https://en.wikipedia.org/wiki/BMI" target="_blank"> Know more</a><br>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal').style.display='block'">Caluculate BMI</button>
</p>	
 </div>
 </div>
 
 <hr id="bmr">
 <br>
<br>
<br>
 <div class="w3-card-4 w3-margin">
  <div class="w3-container">
    <h2>BMR</h2>
   <p>The amount of energy (in the form of calories) that the body needs to function while resting for 24 hours is known as the basal metabolic rate, 
   or BMR. This number of calories reflects how much energy your body requires to support vital body functions if, hypothetically, you were resting in 
   bed for an entire day.</p>
<p>Whether your goal is to lose weight (body fat), gain weight (lean muscle), or to just maintain your current weight, knowing your basal metabolic rate 
can help you attain and maintain your goals.The Basal Metabolic Rate calculator shows you the  number of calories you burn when at rest.  This is before 
you even get out of bed in the morning.  This is the amount of calories your body needs just to stay alive and function daily.  It is a great way to know
 if you are eating too few calories.  Eating too little, skipping meals and saving calories for later will all backfire on you
</p><a href="https://en.wikipedia.org/wiki/BMR" target="_blank"> Know more</a>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal1').style.display='block'">Caluculate BMR</button>
</p>
</div>	
 </div>
<hr id="bsa"> 
<br>
<br>
<br>
<div class="w3-card-4 w3-margin">
 <div class="w3-container">
    <h2>BSA</h2>
   <p>The total surface area of the human body. The body surface area is used in many measurements in medicine, including the calculation of drug dosages
   and the amount of fluids to be administered IV.For many clinical purposes BSA is a better indicator of metabolic mass than body weight because it is less
   affected by abnormal adipose mass. Nevertheless, there have been several important critiques of the use of BSA in determining the dosage of medications 
   with a narrow therapeutic index, such as chemotherapy.
.</p>
<a href="https://en.wikipedia.org/wiki/Body_surface_area" target="_blank"> Know more</a>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal2').style.display='block'">Caluculate BSA</button>
</p>		
 </div>
 </div>
 <hr id="whr">
 <br>
<br>
<br>
 <div class="w3-card-4 w3-margin">
  <div class="w3-container">
    <h2>WHR</h2>
   <p>WHR is used as a measurement of obesity, which in turn is a possible indicator of other more serious health conditions. The WHO states that
   abdominal obesity is defined as a waist–hip ratio above 0.90 for males and above 0.85 for females, or a body mass index (BMI) above 30.0.
.</p>
<a href="https://en.wikipedia.org/wiki/Waist%E2%80%93hip_ratio" target="_blank"> Know more</a>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal3').style.display='block'">Caluculate WHR</button>
</p>
	
 </div>
 </div>
 <hr id="whtr">
 <br>
<br>
<br>
 <div class="w3-card-4 w3-margin">
  <div class="w3-container">
    <h2>WHtR</h2>
   <p>A person's waist-to-height ratio (WHtR), also called waist-to-stature ratio (WSR), is defined as their waist circumference divided by their height,
   both measured in the same units. The WHtR is a measure of the distribution of body fat. Higher values of WHtR indicate higher risk of obesity-related 
   cardiovascular diseases; it is correlated with abdominal obesity</p>
<a href="https://en.wikipedia.org/wiki/Waist-to-height_ratio" target="_blank"> Know more</a>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal4').style.display='block'">Caluculate WHtR</button>
</p>
</div>	
 </div>
 <hr id="calorie">
 <br>
<br>
<br>
 <div class="w3-card-4 w3-margin">
  <div class="w3-container">
    <h2>Calorie Intake</h2>
   <p>To accurately determine your daily calorie amount above, enter your current weight, age, height, and gender into the calculator.
   Do your best estimate of how much exercise you will be doing.The results will show how many calories you may eat in order to maintain or lose weight.
   You don't need to adjust this depending on your exercise rate - that is factored into the equation. The maintenance value is the same as what some people 
   call Total Daily Energy Expenditure (TDEE).As you lose weight you will need to recalculate based on your new weight.
</p>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal5').style.display='block'">Caluculate Calorie intake</button>
</p>
</div>	
 </div>
 <hr id="bodyfat">
 <br>
<br>
<br>
  <div class="w3-card-4 w3-margin">
   <div class="w3-container">
    <h2>Body fat %</h2>
   <p>The Body Fat Calculator can be used to estimate your total body fat based on your size.so we may have different queries like
     What Is Body Fat?
The scientific name for body fat is "adipose tissue." Adipose tissue serves a number of important functions. It's primary purpose is to store 
lipids from which the body creates energy. It also secretes a number of important hormones.What is meant by Body Fat and Being Overweight
Being overweight does not necessarily mean that you have an excess of body fat. Powerfully muscled people often are overweight. A certain amount of body 
fat is also necessary to staying alive. Human beings also have a specialized kind of body fat called "Brown fat." It is located mainly around the neck and 
large blood vessels of the thorax, and it serves to generate heat to help keep us warm in severe cold.

</p>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal6').style.display='block'">Caluculate BodyFat%</button>
</p>
</div>	
 </div>
 <hr id="burned">
 <br>
<br>
<br>
  <div class="w3-card-4 w3-margin">
   <div class="w3-container">
    <h2>Calories Burned</h2>
   <p>Find out how many calories you burn doing different activities. The calculator uses the type of physical activity and your basal metabolic rate to 
   calculate calories burned, so gives a personalised result. Knowing roughly how many calories you expend doing different activities can help you with weight
   loss or maintenance.</p>

	<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal7').style.display='block'">Caluculate Calories Burned</button>
</p>
 </div>
 </div>
 <hr id="ibw">
 <br>
<br>
<br>
  <div class="w3-card-4 w3-margin">
   <div class="w3-container">
    <h2>IBW</h2>
   <p>IBW means Ideal Body eight in kg. If you want to know your ideal weight for your height then you have to use IBW calculator. It is calculated for every 
inch above five feet for both men and women. The values vary for men and women.   </p>
<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal8').style.display='block'">Caluculate IBW</button>
</p>
	
 </div>
</div>
<hr id="abw">
 <br>
<br>
<br>
  <div class="w3-card-4 w3-margin">
   <div class="w3-container">
    <h2>ABW</h2>
   <p>ABW means estimated adjusted body weight in kg. If the actual body weight is greater then 30% of the calculated BMI, then we have to calculate 
   adjusted body weight</p>

<p align="center"><button class="w3-btn w3-margin-bottom w3-blue" onclick="document.getElementById('ticketModal9').style.display='block'">Caluculate ABW</button>
</p>	
 </div>
 </div>
<footer class="w3-container w3-blue">
<p text-align="center">Prepared by Yash@your self check</p>
</footer>
<script>

function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
function openCity(evt, cityName) {
  var j, x, tablinks;
  x = document.getElementsByClassName("city");
  for (j = 0; j < x.length; j++) {
     x[j].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (j = 0; j < x.length; j++) {
      tablinks[j].className = tablinks[j].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
<!--script for singup and login navigation-->
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}


</script>
<!-- Ticket Modal for signin -->
  <div id="ticketModal0" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal0').style.display='none'" 
       class="w3-closebtn w3-padding-large w3-xxlarge w3-display-topright">×</span>
        <h1 class="w3-center">Dear Customer</h1>
		<button  class="w3-bar-item w3-button w3-blue w3-left w3-large" onclick="openCity('Login')">Login</button>
  
  <button class="w3-bar-item w3-button w3-blue w3-right w3-large" onclick="openCity('Singup')">Singup</button>
      </header>
      <div class="w3-container">
	  <div id="Login" class="w3-container city">
	  <form action="login.php" method="post">
	  <label><b>Email ID</b></label>
     <input type="text" id="FullName" name="email" placeholder="enter your emailid" maxlength="31" required />
	 <label><b>Password</b></label>
	 <input type="password" id="FullName" name="password" placeholder="enter your Password" maxlength="10" required />
	 <input type="submit" class="w3-btn w3-margin-bottom w3-blue " id="LogIn" value="Log In">
	 </form>
	<!-- <button class="w3-btn w3-margin-bottom w3-blue w3-right"><a href="signup.php" class="Link">Sign Up</a></button>-->
	</div>
	<div id="Singup" class="w3-container city" style="display:none">
	 <form action="home.php" method="post">
	 <label><b>Name</b></label>
   <input type="text" id="FullName" name="name" placeholder="Enter your name" maxlength="31"  class="textInput"  required />
      <label><b>Email ID</b></label>
	 <input type="text" id="FullName" name="email" placeholder="Enter your email" maxlength="50"  class="textInput" required />     
	 <label><b>Password</b></label>
	 <input type="password" id="FullName" name="password" placeholder="Enter your password" maxlength="20"   class="textInput" required />
	 <label><b> Retype Password</b></label>
	 <input type="password" id="FullName" name="password1" placeholder="Enter your password again" maxlength="20" class="textInput" required />
	 
	 <input type="submit" class="w3-btn w3-margin-bottom w3-blue " name="submit" value="submit">
     </form>
	 </div>
      </div>
    </div>
  </div>
<!-- Ticket Modal for BMI -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate BMI</h2>
      </header>
      <div class="w3-container">
	  <div data-ng-app="">
        <p><label> Height</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your height in meters" ng-model="height">
        <p><label> Weight</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your weight in kg" ng-model="weight">
        <p><b>Your BMI is:</b> {{weight /(height*height)}}</p>
        
		
        </div>
      </div>
    </div>
  </div>
  <!-- Ticket Modal for BMR -->
  <div id="ticketModal1" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal1').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate BMR</h2>
      </header>
      <div class="w3-container">
	  <div ng-app="">
	    <form>
        <p><label> Weight</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your weight in kg" ng-model="weight">
        <p><label>Select your gender</label></p>
		<input type="radio" ng-model="myVar" value="dogs">Male<br>
		 <input type="radio" ng-model="myVar" value="tuts">Female
		  </form>
		  <div ng-switch="myVar">
  <div ng-switch-when="dogs">
     <p><b>Your BMR is:</b> {{879+10.2*weight}}</p>
     
  </div>
  <div ng-switch-when="tuts">
     <p><b>Your BMR is:</b>{{795+7.2*weight}}</p>
  </div>
  </div>
		
        
        </div>
      </div>
    </div>
  </div>
  <!-- Ticket Modal for BSA -->
  <div id="ticketModal2" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal2').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate BSA</h2>
      </header>
      <div class="w3-container">
	  <div data-ng-app="">
        <p><label> Height</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your height in centimeters" ng-model="height">
        <p><label> Weight</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your weight in kg" ng-model="weight">
        <p><b>Your BSA is:</b> {{((height*weight)/3600)^0.5}}</p>
        
        </div>
      </div>
    </div>
  </div>
  
  <!-- Ticket Modal3 for WHR-->
  <!--<div id="ticketModal3" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal3').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate WHR</h2>
      </header>
      <div class="w3-container">
	  <div data-ng-app="">
        <p><label> Waist</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your waist in inches" ng-model="waist">
        <p><label> Hip</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your hip in inches" ng-model="hip">
        <p><b>Your WHR is:</b> {{waist/hip}}</p>
        
        </div>
      </div>
    </div>
  </div>
  <!-- Ticket Modal for WHtR -->
 <!-- <div id="ticketModal4" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal4').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate WHtR</h2>
      </header>
      <div class="w3-container">
	  <div data-ng-app="">
        <p><label> Waist</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your waist in inches" ng-model="waist">
        <p><label> Height</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your Height in inches" ng-model="height">
        <p><b>Your BMI is:</b> {{(waist/height)*100}}</p>
        
        </div>
      </div>
    </div>
  </div>
  
  <!-- Ticket Modal for Calorie intake -->
 <!-- <div id="ticketModal5" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal5').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate Calorie intake</h2>
      </header>
      <div class="w3-container">
	  <div ng-app="">
	  <form>
        <p><label> BMR</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your BMR" ng-model="bmr">
        <p><label> Select your activity level</label></p>
        <select ng-model="myVar">
    <option value="">
    <option value="a">Sedentary
    <option value="b">Lightly Active
    <option value="c">Moderately Active
	<option value="d">Very Active
    <option value="e">Extremely Active
  </select>
		</form>
<div ng-switch="myVar">
  <div ng-switch-when="a">
     <p><b>Your Calorie intake should be</b>{{bmr*1.2}}</p></div>
	 <div ng-switch-when="b">
     <p><b>Your Calorie intake should be</b>{{bmr*1.35}}</p></div>
     <div ng-switch-when="c">
     <p><b>Your Calorie intake should be</b>{{bmr*1.55}}</p>   
        </div>
		<div ng-switch-when="d">
     <p><b>Your Calorie intake should be</b>{{bmr*1.75}}</p>
      </div>
	  <div ng-switch-when="a">
     <p><b>Your Calorie intake should be</b>{{bmr*2.1}}</p></div>
	 </div>
    </div>
  </div>
  </div>
   <!-- Ticket Modal for BodyFat% -->
  <!--<div id="ticketModal6" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-8 ">
      <header class="w3-container w3-blue w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal6').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide">Caluculate your BodyFat%</h2>
      </header>
      <div class="w3-container">
	  <div ng-app="">
	    <form>
        <p><label> BMI</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your bmi" ng-model="bmi">
		<p><label> Age</label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your age" ng-model="age">
        <p><label>Select your gender</label></p>
		<input type="radio" ng-model="myVar" value="dogs">Male<br>
		 <input type="radio" ng-model="myVar" value="tuts">Female
		  </form>
		  <div ng-switch="myVar">
  <div ng-switch-when="dogs">
     <p><b>Your BodyFat% is:</b> {{(1.39*bmi)+(0.16*age)-(10.34*1)-9}}</p>
     
  </div>
  <div ng-switch-when="tuts">
     <p><b>Your BodyFat% is:</b>{{(1.39*bmi)+(0.16*age)-9}}</p>
  </div>
  </div>
		
        
        </div>
      </div>
    </div>-->
  </div>
</body>
</html> 
