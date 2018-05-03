

<!DOCTYPE html>
<html>
<title>Intelligent Health 
monitoring System/Customer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<!--including other html file for graph-->
<script src="/lib/w3data.js"></script>
<!--dougnut-->
<!--<script src="/lib/w3data.js"></script>-->
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
	
    </style>

<!--end of doughnut-->

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-blue", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-blue";
}
</script>
<style>
<!--self cal-->
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: w3-blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
<!--table-->
 caption {
    caption-side: top;
}  
 <!--navigation bar-->
div.background {
  background: h1b.jpg; 
  repeat:no;
 
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
.topleft {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 18px;
}
.topright {
    position: absolute;
    top: 25px;
    right: 16px;
    font-size: 18px;
}

.center {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;
}
div.goog-te-gadget-simple{border-radius:5px; background:w3-blue;}
a.goog-te-menu-value{text-decoration:none; background-color:w3-blue;}
a.goog-te-menu-value > span{text-color:white;}

</style>
<body >

<!--image section-->
<center><div class="w3-card-4 w3-margin" style="width:100%;">

<img src="h1b.jpg" alt="yoga" style="width:100%;height:100%;" />
<div class="topright">
 <!--translation-->
   
   <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
   <!--end-->
   </div>
  <div class="topleft">
  <center><h1><b><i>INTELLIGENT HEALTH MONITORING SYSTEM</i></b></h1></center>
  <center><br>
  <div class="w3-bar w3-blue">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#why" class="w3-bar-item w3-button">Information</a>
  <a href="#scc" class="w3-bar-item w3-button">Self-check calculator</a>
  <a href="#rec" class="w3-bar-item w3-button">Diet calorie calculation</a>
  <a href="index.php" class="w3-bar-item w3-button">Logout</a>
 
  </div></center>
</div>

<!--<img src="h1b.jpg" alt="yoga" style="width:100%;height:100%;" />-->
</div>
</center>



<!--information section-->
<hr id="why">
<center><div class="w3-card-4 w3-margin " style="width:90%;">
 <div class="w3-container">
  <h2>Why this Intelligent Health Monitoring System</h2>

  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Benefits</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Precautions</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">steps to achieve</div>
    </a>
  </div>

  <div id="London" class="w3-container city" style="display:none">
    <h2>Benefits</h2>
     <p><h4><i>There are a lot of benefits to staying physically fit. </i></h4></p>
	 <center>
	 <ul type="disk">
	 <p> <li>You'll have more energy, you'll look great, and you'll notice improvements in your overall health.</li></p>
	 <p><li> Unfortunately, it's not always easy to stay in great shape.</li></p>
	 <p> <li> However, if you focus on nutrition and exercise, you can make a lot of healthy physical changes.</li></p>
	  <p><li>Don't forget that a positive attitude is also really important to staying fit and beautifully healthy.</li></p>
	  </ul></center>
  </div>

  <div id="Paris" class="w3-container city" style="display:none">
    <h2>Precautions</h2>
    <p><h4><i>The following are the precautions to be taken while following this website. </i></h4></p>
	  <ul type="disk">
	  <li>Provide the information correctly while filling the form in <strong> self-check calculator</strong>.</li>
	  <li>The report is generated based on the information given by you in <strong> self-check calculator</strong>. </li>
	  <li>If a particular food item suggested is not available then you can subsitute with similar item (means with approximately equal calorie).</li>
	  <li>Check your health status monthly once using this calculator.</li>
	  <li> Never change whole diet at a time, make changes gradually by replacing each food item with food item suggested.</li>
	  <li>Follow the suggestions provided and dont overdo it. Listen to your body while following a new pattern of diet.</li>
	  <li>It's better to suggest your doctor before following any diet because not all diets are suitable for everyone.</li>
	  </ul>
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>Steps to achieve</h2>
    <p><h4>Three steps to be followed to stay in health using this website</h4></p>
	 <h4><b>Step 1:</b>Use the <strong>self-check calculator</strong> provided in this website.</h4>
	 <h4><b>Step 2:</b>See your result.</h4>
	 <h4><b>Step 3:</b>Track your records from the table. It displays your recent test results.</h4>
	 <h4><b>Step 4:</b>Click on <strong>generate report button</strong> and See your result</h4>
	 <h4><b>Step 5:</b>Follow the suggestions provided along with diet with great care</h4>
  </div>
</div>   
	
	
	
	 </div></center>
	 <!--end of information section-->
	 <br>
	 <br>
	 <br>
<!--formation of self-check calculator--->
<hr id="scc">
<center>
<div class="w3-card-4" style="width:70%;">
    <header class="w3-container w3-blue">
      <h1>Self-check Calculator</h1>
    </header>

    <div class="w3-container">
      <!--form-->
	  <form action="home1.php" method="post">
       <p style=" text-align: left;"><label> <b>Date:</b></label></p>
        <input type="date" id="FullName" name="date" maxlength="31" value="<?php echo date('Y-m-d'); ?>"  required />
		<p style=" text-align: left;"><label> <b>Email:</b></label></p>
        <input class="w3-input w3-border" type="varchar" placeholder="Enetr emailid you wish to get mail" name="email">
        <p style=" text-align: left;"><label> <b>Height in meters:</b></label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your height in meters" name="height">
        <p style=" text-align: left;"><label><b>Weight:</b></label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enter your weight in kg" name="weight">
		<p style=" text-align: left;"><label> <b>Height in inches:</b></label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your height in inches" name="height1">
		<p style=" text-align: left;"><label><b> Waist:</b></label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your waist in inches" name="waist">
		<p style=" text-align: left;"><label> <b>Hip:</b></label></p>
        <input class="w3-input w3-border" type="number" placeholder="Enetr your hip in inches" name="hip">
		<p style=" text-align: left;"><label><b>Select your gender:</b></label></p>
		<p align="left"><input type="radio" name="gender"  value="T">Male<br>
		 <input type="radio"  name="gender" value="F">Female</p>
        <p style=" text-align: left;"><label><b> Select your activity level:</b></label></p>
        <select name="activity">
    <option value="">
    <option value="a">Sedentary
    <option value="b">Lightly Active
    <option value="c">Moderately Active
	<option value="d">Very Active
    <option value="e">Extremely Active
  </select>
   <input type="submit" class="w3-btn w3-margin-bottom w3-blue "  value="submit">
   </form>
   <!--php code for result generation-->
   <?php
if(isset($_POST['height'])){
	//session_start();
	//conect to server
$con=mysql_connect("localhost","root","");
if(!$con){
	die('could not connect:'.mysql_error());
}
mysql_select_db("health") or die("db not found");
    $date=$_POST['date'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$height1=$_POST['height1'];
	$waist=$_POST['waist'];
	$hip=$_POST['hip'];
	$gender=$_POST['gender'];
	$activity=$_POST['activity'];
	$email=$_POST['email'];
	$bmi=$weight /($height*$height);

	//weight /(height*height)
	$whr=$waist/$hip;
	//waist/hip
	$whtr=($waist/$height1)*100;
	//(waist/height)*100
	if($gender == 'T')
	{
		//{{879+10.2*weight}}
		$bmr=879+10.2*$weight;
	}else{
		$bmr=795+7.2*$weight;
		//{{795+7.2*weight}}
	}
	//calculation for calorie intake
	if($activity == 'a'){
		$calorie=$bmr*1.2;
	}else if($activity == 'b'){
		$calorie=$bmr*1.35;
	}else if($activity == 'c'){
		$calorie=$bmr*1.55;
	}else if($activity == 'd'){
		$calorie=$bmr*1.75;
	}else if($activity == 'e'){
		$calorie=$bmr*2.1;
	}else{
		echo "<h5>please select your activity level in a day<h5>";
	}
	echo "<h1>Result</h1>";
	//result for bmi
	echo "<h4><b>your BMI is '$bmi'<b></h4>";
	if($bmi <= 18.4){
		echo "<p>Your BMI indicates that you are underweight, so you may need to put on some weight. You are recommended to ask your family
		doctor or a dietician for advice</p>";
	}else if($bmi >=18.5 && $bmi <= 25){
		echo "<p> Your BMI indicates that you are at a healthy weight for your weight. By maintaing a healthy weight, you lower your risk
		of developing serious health problems</p>";
	}else if($bmi >= 25.1 && $bmi <= 30){
		echo "<p>Your BMI indicates that you are slightly overweight. You may be advised to lose some weight for health reasons.You are reccommended
		to talk to your family doctor or a dietician</p>";
	}else if($bmi > 30){
		echo "<p>your BMi indicates that your are heavily overweight. Your health may be at risk if you do not lose weight.
        		You are recommended to talk to your doctor or take a dietician advice</p>";
	}else{
		echo "<p>Please go for a medical check</p>";
	}
	//result for whr
	echo "<h4><b>your WHR is '$whr'<b></h4>";
	if($gender == 'T'){
		if($whr >= 1){
			echo "<h5>You are warned to have health risks according to WHR calculation</h5>";
		}else{
			echo "<h5>You are healthy man according to WHR calculation</h5>";
		}
	}else{
		if($whr >= 0.85){
			echo "<h5>you are warned to have health risks according to WHR calculation</h5>";
		}else{
			echo "<h5>you are a healthy women according to WHR calculation</h5>";
		}
	}
	//WHtR result generation
	echo "<h4><b>your WHtR is '$whtr'</b></h4>";
	if($gender == 'T'){
		if($whtr < 35){
			echo "<h5>You are underweight according to WHtR calculation as a man</h5>";
		}else if($whtr >= 35.1 && $whtr <= 43){
			echo "<h5>You are healthy slim according to WHtR calculation as a man</h5>";
		}else if($whtr >= 43.1 && $whtr <= 53 ){
			echo "<h5>You are healthy according to WHtR calculation as a man</h5>";
		}else if($whtr >= 53.1 && $whtr <=58){
			echo "<h5>You are overweight according to WHtR calculation as a man</h5>";
		}else if($whtr >= 58.1 && $whtr <=63){
			echo "<h5>You are seriously overweight according to WHtR calculation as a man</h5>";
		}else if($whtr > 63.1){
			echo "<h5>You are morbidly obese according to WHtR calculation as a man</h5>";
		}else{
			echo "<h5>It is better to calculate your waist to height ratio as a man</h5>";
		}
	}else{
		if($whtr < 35){
			echo "<h5>You are abnormally slim to underweight according to WHtR calculation as a women</h5>";
		}else if($whtr >= 35.1 && $whtr <= 42){
			echo "<h5>You are extremely slim according to WHtR calculation as a women</h5>";
		}else if($whtr >= 42.1 && $whtr <= 46){
			echo "<h5>You are slender and healthy according to WHtR calculation as a women</h5>";
		}else if($whtr >= 46.1 && $whtr <=49){
			echo "<h5>You are healthy and in normal weight according to WHtR calculation as a women</h5>";
		}else if($whtr >= 49.1 && $whtr <=54){
			echo "<h5>You are overweight according to WHtR calculation as a women</h5>";
		}else if($whtr >= 54.1 && $whtr <=58){
			echo "<h5>You are seriously overweight according to WHtR calculation as a women</h5>";
		}else if($whtr > 58.1){
			echo "<h5>You are highly obese according to WHtR calculation as a women</h5>";
		}else{
			echo "<h5>It is better to calculate your waist to height ratio as a man</h5>";
		}
	}
	echo "<h4><b>your BMR is '$bmr'. It means you should take atlest $bmr calories for your survival per day</b></h4>";
	echo "<h4><b>your Calorie intake depending on your activity level should be '$calorie'</b></h4>";
	
	$info="insert into userinfo(email,date,bmi,bmr,calorie,whr,whtr)values('$email','$date','$bmi','$bmr','$calorie','$whr','$whtr')";
	if(mysql_query($info)){
		//echo "<h3>Your data is saved succesfully</h3>";
       }
//else{
	//echo "<h1>failed</h1>";
//}
//$to=$email;
//$subject="Your health result";
//$txt="Your results tested on $date were as folows.BMI(Body Mass Index) is $bmi,BMR(Basic metabolic rate) is $bmr,Calorie intake based on your activity level is $calorie,WHR(waist to hip ratio) is $whr and WHtR(waist to height ratio) is $whtr.If you want more deatils please lonon to 'Intelligent Health Monitoring System'.Thank you.";
//$headers="From:donotreply@fmt.com" . "\r\n" .
//"CC:somebodyelse@example.com";
//$headers.="Reply-To:$email";
//$yes=mail($to,$subject,$txt,$headers);
//if($yes){
//echo "The following data have been mailed to your email.id given in the self-check calculator.";
//}

?>

<!--doughnut-->
<div id="canvas-holder" style="width:40%">
        <canvas id="chart-area" />
    </div> 
    <script>
    var a="<?php echo $bmi; ?>";
	var b="<?php echo $bmr; ?>";
	var c="<?php echo $calorie; ?>";
	var d="<?php echo $whr; ?>";
	var e="<?php echo $whtr; ?>";
	//alert(a);
    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
				
				a,b,c,d,e
				//7,8,5,6,9
				
				
                    
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "BMI",
                "BMR",
                "Calorie Intake",
                "WHR",
                "WHtR"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Your result in chart view'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    };

   

    
    </script>

	<?php
}
?>
   
  
 </div>
	  </div></center>
	  <!--end of calculator-->
	  <br>
	  <br>
	  
<!--recors section displayed in the form of table-->
<hr id="rec">
<center>
<div class="w3-card-4" style="width:70%;">
<div class="container">
<hr id="rec">
<caption><h1><b> Select your diet to calculate your calories</b></h1></caption>
<form action="home1.php" method="post">
<center><h4>Select your food for breakfast</h4><table>
<tr>
<th>Food Item</th>
<th>Quantity</th>
</tr>
<tr><td>
<input type="checkbox" name="top[]" value="1">Egg boiled<br></td>
<td><input type="text" name="q1" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="2">Egg poached<br></td>
<td><input type="text" name="q2" ></td></tr>
<tr><td>
<input type="checkbox" name="top[]" value="3">Egg fried<br></td>
<td><input type="text" name="q3" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="4">Egg omelet<br></td>
<td><input type="text" name="q4" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="5">Bread slice<br></td>
<td><input type="text" name="q5" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="6">Bread slice with butter<br></td>
<td><input type="text" name="q6" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="7">Chapati<br></td>
<td><input type="text" name="q7" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="8">Puri<br></td>
<td><input type="text" name="q8" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="9">Paratha<br></td>
<td><input type="text" name="q9" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="10">Subji<br></td>
<td><input type="text" name="q10" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="11">Idli<br></td>
<td><input type="text" name="q11" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="12">Dosa plain<br></td>
<td><input type="text" name="q12" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="13">Dosa Masala<br></td>
<td><input type="text" name="q13" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="14">Sambhar<br></td>
<td><input type="text" name="q14" ></td></tr>
<tr><td><h4>Select the food items for your lunch and dinner</h4></td><td></td></tr>
<tr><td><input type="checkbox" name="top[]" value="15">Cooked plain rice<br></td>
<td><input type="text" name="q15" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="16">Cooked fried rice<br></td>
<td><input type="text" name="q16" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="17">Chapati<br></td>
<td><input type="text" name="q17" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="18">Puri<br></td>
<td><input type="text" name="q18" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="19">Paratha<br></td>
<td><input type="text" name="q19" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="20">Nan<br></td>
<td><input type="text" name="q20" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="21">Dal<br></td>
<td><input type="text" name="q21" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="22">Sambhar<br></td>
<td><input type="text" name="q22" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="23">Curd<br></td>
<td><input type="text" name="q23" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="24">Vegetable curry<br></td>
<td><input type="text" name="q24" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="25">Meat curry<br></td>
<td><input type="text" name="q25" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="26">Salad<br></td>
<td><input type="text" name="q26" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="27">Papad<br></td>
<td><input type="text" name="q27" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="28">Cutlet<br></td>
<td><input type="text" name="q28" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="29">Pickle<br></td>
<td><input type="text" name="q29" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="30">Clear Soup<br></td>
<td><input type="text" name="q30" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="31">Heavy Soup<br></td>
<td><input type="text" name="q31" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="32">Fruit<br></td>
<td><input type="text" name="q32" ></td></tr>
<tr><td><h4>Select the beverages</h4></td><td></td></tr>
<tr><td><input type="checkbox" name="top[]" value="33">Tea/Black tea/without sugar<br></td>
<td><input type="text" name="q33" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="34">Coffee/Black coffee/without sugar<br></td>
<td><input type="text" name="q34" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="35">Tea with milk and sugar<br></td>
<td><input type="text" name="q35" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="36">Coffee with milk and sugar<br></td>
<td><input type="text" name="q36" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="37">Milk without sugar<br></td>
<td><input type="text" name="q37" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="38">Milk with sugar<br></td>
<td><input type="text" name="q38" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="39">Milk with sugar and Horlicks,Boost etc<br></td>
<td><input type="text" name="q39" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="40">Fruit juice concentrated<br></td>
<td><input type="text" name="q40" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="41">Soft Drinks<br></td>
<td><input type="text" name="q41" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="42">Beer<br></td>
<td><input type="text" name="q42" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="43">Soda<br></td>
<td><input type="text" name="q43" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="44">Alcohal neat<br></td>
<td><input type="text" name="q44" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="45">Red wine<br></td>
<td><input type="text" name="q45" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="46">White wine<br></td>
<td><input type="text" name="q46" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="47">Rose wine<br></td>
<td><input type="text" name="q47" ></td></tr>
<tr><td><h4>Select the food items you take as your snack or helpping</h4></td><td></td></tr>
<tr><td><input type="checkbox" name="top[]" value="48">Porridge<br></td>
<td><input type="text" name="q48" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="49">Jam<br></td>
<td><input type="text" name="q49" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="50">Butter<br></td>
<td><input type="text" name="q50" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="51">Ghee<br></td>
<td><input type="text" name="q51" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="52">Sugar<br></td>
<td><input type="text" name="q52" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="53">Biscuit<br></td>
<td><input type="text" name="q53" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="54">Fried nuts<br></td>
<td><input type="text" name="q54" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="55">Puddings<br></td>
<td><input type="text" name="q55" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="56">Ice-cream<br></td>
<td><input type="text" name="q56" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="57">Milk-shake<br></td>
<td><input type="text" name="q57" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="58">Wafers<br></td>
<td><input type="text" name="q58" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="59">Samosa<br></td>
<td><input type="text" name="q59" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="60">Bhel-puri or Pani-puri<br></td>
<td><input type="text" name="q60" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="61">Kebab<br></td>
<td><input type="text" name="q61" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="62">Indian sweets/ Mithai<br></td>
<td><input type="text" name="q62" ></td></tr>
<tr><td><h4>Select the International foods</h4></td><td></td></tr>
<tr><td><input type="checkbox" name="top[]" value="63">Bread slices with butter and jam/cheese etc<br></td>
<td><input type="text" name="q63" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="64">Breakfast cereal with sweetened milk<br></td>
<td><input type="text" name="q64" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="65">Porridge and milk<br></td>
<td><input type="text" name="q65" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="66">Porridge and sweetened milk<br></td>
<td><input type="text" name="q66" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="67">Sausage, bacon, ham etc fried<br></td>
<td><input type="text" name="q67" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="68">Potato mash<br></td>
<td><input type="text" name="q68" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="69">Potato fried<br></td>
<td><input type="text" name="q69" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="70">Sandwich large<br></td>
<td><input type="text" name="q70" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="71">Hamburger<br></td>
<td><input type="text" name="q71" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="72">Steak and salad<br></td>
<td><input type="text" name="q72" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="73">Spaghetti with meat, sauce etc<br></td>
<td><input type="text" name="q73" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="74">Baked dish<br></td>
<td><input type="text" name="q74" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="75">Fried chicken<br></td>
<td><input type="text" name="q75" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="76">chineese noodles<br></td>
<td><input type="text" name="q76" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="77">Chineese fried rice<br></td>
<td><input type="text" name="q77" ></td></tr>
<tr><td><input type="checkbox" name="top[]" value="78">Pizza<br></td>
<td><input type="text" name="q78" ></td></tr>


<tr><td><center><input type="submit" name="submit" value="submit"></center></td></tr>
</table></center>
</form>


<h1>RESULT:</h1>

<?php
require("breakfast.php");
?>

</div>
</div>
</center>


<!--end of recors-->	  
<div class="w3-container w3-blue">
  <center><h5>yashu@your self check</h5></center>
</div>

</body>
</html>
