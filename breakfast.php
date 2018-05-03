<?php
//food for break fast
if(isset($_POST["top"])){

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];
$q19=$_POST['q19'];
$q20=$_POST['q20'];
$q21=$_POST['q21'];
$q22=$_POST['q22'];
$q23=$_POST['q23'];
$q24=$_POST['q24'];
$q25=$_POST['q25'];
$q26=$_POST['q26'];
$q27=$_POST['q27'];
$q28=$_POST['q28'];
$q29=$_POST['q29'];
$q30=$_POST['q30'];
$q31=$_POST['q31'];
$q32=$_POST['q32'];
$q33=$_POST['q33'];
$q34=$_POST['q34'];
$q35=$_POST['q35'];
$q36=$_POST['q36'];
$q37=$_POST['q37'];
$q38=$_POST['q38'];
$q39=$_POST['q39'];
$q40=$_POST['q40'];
$q41=$_POST['q41'];
$q42=$_POST['q42'];
$q43=$_POST['q43'];
$q44=$_POST['q44'];
$q45=$_POST['q45'];
$q46=$_POST['q46'];
$q47=$_POST['q47'];
$q48=$_POST['q48'];
$q49=$_POST['q49'];
$q50=$_POST['q50'];
$q51=$_POST['q51'];
$q52=$_POST['q52'];
$q53=$_POST['q53'];
$q54=$_POST['q54'];
$q55=$_POST['q55'];
$q56=$_POST['q56'];
$q57=$_POST['q57'];
$q58=$_POST['q58'];
$q59=$_POST['q59'];
$q60=$_POST['q60'];
$q61=$_POST['q61'];
$q62=$_POST['q62'];
$q63=$_POST['q63'];
$q64=$_POST['q64'];
$q65=$_POST['q65'];
$q66=$_POST['q66'];
$q67=$_POST['q67'];
$q68=$_POST['q68'];
$q69=$_POST['q69'];
$q70=$_POST['q70'];
$q71=$_POST['q71'];
$q72=$_POST['q72'];
$q73=$_POST['q73'];
$q74=$_POST['q74'];
$q75=$_POST['q75'];
$q76=$_POST['q76'];
$q77=$_POST['q77'];
$q78=$_POST['q78'];


	$food=$_POST["top"];
	$c=count($food);
	$price=0.0;
	for($i=0;$i<$c;$i++){
		if($food[$i]==1){
			$min=$q1*80;
			$price=$price+$min;
			echo "you have selected $q1 eggboiled for breakfast<br>";
		}
		if($food[$i]==2){
			$min=$q2*80;
			$price=$price+$min;
			echo "you have selected $q2 egg poached for breakfast<br>";
		}
		if($food[$i]==3){
			$min=$q3*110;
			$price=$price+$min;
			echo "you have selected $q3 egg fried for breakfast<br>";
		}
		if($food[$i]==4){
			$min=$q4*120;
			$price=$price+$min;
			echo "you have selected $q4 egg omelet for breakfast<br>";
		}
		if($food[$i]==5){
			$min=$q5*45;
			$price=$price+$min;
			echo "you have selected $q5 bread slice for breakfast<br>";
		}
		if($food[$i]==6){
			$min=$q6*90;
			$price=$price+$min;
			echo "you have selected $q6 bread slice with butter for breakfast<br>";
		}
		if($food[$i]==7){
			$min=$q7*60;
			$price=$price+$min;
			echo "you have selected $q7 chapati for breakfast<br>";
		}
		if($food[$i]==8){
			$min=$q8*75;
			$price=$price+$min;
			echo "you have selected $q8 puri for breakfast<br>";
		}
		if($food[$i]==9){
			$min=$q9*150;
			$price=$price+$min;
			echo "you have selected $q9 paratha for breakfast<br>";
		}
		if($food[$i]==10){
			$min=$q10*150;
			$price=$price+$min;
			echo "you have selected $q10 subji for breakfast<br>";
		}
		if($food[$i]==11){
			$min=$q11*100;
			$price=$price+$min;
			echo "you have selected $q11 idli for breakfast<br>";
		}
		if($food[$i]==12){
			$min=$q12*120;
			$price=$price+$min;
			echo "you have selected $q12 dosa plain for breakfast<br>";
		}
		if($food[$i]==13){
			$min=$q13*250;
			$price=$price+$min;
			echo "you have selected $q13 dosa masala for breakfast<br>";
		}
		if($food[$i]==14){
			$min=$q14*150;
			$price=$price+$min;
			echo "you have selected $q14 sambhar for breakfast<br>";
		}
		if($food[$i]==15){
			$min=$q15*120;
			$price=$price+$min;
			echo "you have selected $q15 cup of palin rice for lunch and dinner<br>";
		}
		if($food[$i]==16){
			$min=$q16*150;
		$price=$price+$min;
			echo "you have selected $q16 cup of fried rice for lunch and dinner <br>";
		}
		if($food[$i]==17){
			$min=$q17*60;
		$price=$price+$min;
			echo "you have selected $q17 chapati for lunch and dinner<br>";
		}
		if($food[$i]==18){
			$min=$q18*75;
		$price=$price+$min;
			echo "you have selected $q18 puri for lunch and dinner<br>";
		}
		if($food[$i]==19){
			$min=$q19*150;
		$price=$price+$min;
			echo "you have selected $q19 paratha for lunch and dinner<br>";
		}
		if($food[$i]==20){
			$min=$q20*150;
		$price=$price+$min;
			echo "you have selected $q20 nan for lunch and dinner<br>";
		}
		if($food[$i]==21){
			$min=$q21*150;
		$price=$price+$min;
			echo "you have selected $q21 Dal for lunch and dinner<br>";
		}
		if($food[$i]==22){
			$min=$q22*150;
		$price=$price+$min;
			echo "you have selected $q22 cup of sambhar for lunch and dinner<br>";
		}
		if($food[$i]==23){
			$min=$q23*100;
		$price=$price+$min;
			echo "you have selected $q23 cup of curd for lunch and dinner<br>";
		}
		if($food[$i]==24){
			$min=$q24*150;
		$price=$price+$min;
			echo "you have selected $q24 cup of vegetable cury for lunch and dinner<br>";
		}
		if($food[$i]==25){
			$min=$q25*175;
		$price=$price+$min;
			echo "you have selected $q25 cup of meat curry for lunch and dinner<br>";
		}
		if($food[$i]==26){
			$min=$q26*100;
		$price=$price+$min;
			echo "you have selected $q26 cup of salad for lunch and dinner<br>";
		}
		if($food[$i]==27){
			$min=$q27*45;
		$price=$price+$min;
			echo "you have selected $q27 papad for lunch and dinner<br>";
		}
		if($food[$i]==28){
			$min=$q28*75;
		$price=$price+$min;
			echo "you have selected $q28 cutlet for lunch and dinner<br>";
		}
		if($food[$i]==29){
			$min=$q29*30;
		$price=$price+$min;
			echo "you have selected $q29 table spoon of pickle for lunch and dinner<br>";
		}
		if($food[$i]==30){
			$min=$q30*75;
		$price=$price+$min;
			echo "you have selected $q30 cup of clear soup for lunch and dinner<br>";
		}
		if($food[$i]==31){
			$min=$q31*75;
		$price=$price+$min;
			echo "you have selected $q31 cup of heavy soup for lunch and dinner<br>";
		}
		if($food[$i]==32){
			$min=$q32*150;
		$price=$price+$min;
			echo "you have selected $q32 helping of fruit for lunch and dinner<br>";
		}
		if($food[$i]==33){
			$min=$q33*10;
		$price=$price+$min;
			echo "you have selected $q33 cup of Black tea without sugar as your beverage<br>";
		}
		if($food[$i]==34){
			$min=$q34*10;
		$price=$price+$min;
			echo "you have selected $q34 cup of Black coffee without sugar as your beverage<br>";
		}
		
		if($food[$i]==35){
			$min=$q35*45;
		$price=$price+$min;
			echo "you have selected $q35 cup of tea with milk and sugar as your beverage<br>";
		}
		if($food[$i]==36){
			$min=$q36*45;
		$price=$price+$min;
			echo "you have selected $q36 cup of coffee with milk and sugar as your beverage<br>";
		}
		if($food[$i]==37){
			$min=$q37*60;
		$price=$price+$min;
			echo "you have selected $q37 cup of milk without sugar as your beverage<br>";
		}
		if($food[$i]==38){
			$min=$q38*75;
		$price=$price+$min;
			echo "you have selected $q38 cup of milk with sugar as your beverage<br>";
		}
		if($food[$i]==39){
			$min=$q39*120;
		$price=$price+$min;
			echo "you have selected $q39 cup of milk with sugar along with some milk powders like horlick,boost etc as your beverage<br>";
		}
		if($food[$i]==40){
			$min=$q40*120;
		$price=$price+$min;
			echo "you have selected $q40 cup of concentrated fruit juice as your beverage<br>";
		}
		if($food[$i]==41){
			$min=$q41*90;
		$price=$price+$min;
			echo "you have selected $q41 bottle soft drinks like coco-cola etc as your beverage<br>";
		}
		if($food[$i]==42){
			$min=$q42*200;
		$price=$price+$min;
			echo "you have selected $q42 bottle of beer as your beverage<br>";
		}
		if($food[$i]==43){
			$min=$q43*10;
		$price=$price+$min;
			echo "you have selected $q43 bottle of soda as your beverage<br>";
		}
		if($food[$i]==44){
			$min=$q44*75;
		$price=$price+$min;
			echo "you have selected $q44 peg alochol as your beverage<br>";
		}
		if($food[$i]==45){
			$min=$q45*91;
		$price=$price+$min;
			echo "you have selected $q45 glass or ounce of red wine as your beverage<br>";
		}
		if($food[$i]==46){
			$min=$q46*86;
		$price=$price+$min;
			echo "you have selected $46 ounce of white wine as your beverage<br>";
		}
		if($food[$i]==47){
			$min=$q47*90;
		$price=$price+$min;
			echo "you have selected $q47 ounce of rose wine as your beverage<br>";
		}
		if($food[$i]==48){
			$min=$q48*150;
		$price=$price+$min;
			echo "you have selected $q48 cup of porridge as your snack or helping<br>";
		}
		if($food[$i]==49){
			$min=$q49*30;
		$price=$price+$min;
			echo "you have selected $q49 spoon of jam as your snack or helping<br>";
		}
		if($food[$i]==50){
			$min=$q50*50;
		$price=$price+$min;
			echo "you have selected $q50 spoon of butter as your snack or helping<br>";
		}
		if($food[$i]==51){
			$min=$q51*50;
		$price=$price+$min;
			echo "you have selected $q51 spoon of ghee as your snack or helping<br>";
		}
		if($food[$i]==52){
			$min=$q52*30;
		$price=$price+$min;
			echo "you have selected $q52 spoon of sugar as your snack or helping<br>";
		}
		if($food[$i]==53){
			$min=$q53*30;
		$price=$price+$min;
			echo "you have selected $q53 Biscuits as your snack or helping<br>";
		}
		if($food[$i]==54){
			$min=$q54*300;
		$price=$price+$min;
			echo "you have selected $q54 cup of fried nuts as your snack or helping<br>";
		}
		if($food[$i]==55){
			$min=$q55*200;
		$price=$price+$min;
			echo "you have selected $q55 cup of puddings as your snack or helping<br>";
		}
		if($food[$i]==56){
			$min=$q56*200;
		$price=$price+$min;
			echo "you have selected $q56 cup of ice-cream as your snack or helping<br>";
		}
		if($food[$i]==57){
			$min=$q57*200;
		$price=$price+$min;
			echo "you have selected $q57 glass of milk shake as your snack or helping<br>";
		}
		if($food[$i]==58){
			$min=$q58*120;
		$price=$price+$min;
			echo "you have selected $q58 packets of wafers as your snack or helping<br>";
		}
		if($food[$i]==59){
			$min=$q59*100;
		$price=$price+$min;
			echo "you have selected $q59 samosa as your snack or helping<br>";
		}
		if($food[$i]==60){
			$min=$q60*150;
		$price=$price+$min;
			echo "you have selected $q60 bhel-puri or pani-puri as your snack or helping<br>";
		}
		if($food[$i]==61){
			$min=$q61*150;
		$price=$price+$min;
			echo "you have selected $q61 plate of kebab as your snack or helping<br>";
		}
		if($food[$i]==62){
			$min=$q62*150;
		$price=$price+$min;
			echo "you have selected $q62 piece of Indian sweets/ mithai as your snack or helping<br>";
		}
		if($food[$i]==63){
			$min=$q63*120;
		$price=$price+$min;
			echo "you have selected $q63 bread slices with butter and jam, cheese etc<br>";
		}
		if($food[$i]==64){
			$min=$q64*130;
		$price=$price+$min;
			echo "you have selected $q64 cup ofbreakfast cereal with milk sweetened<br>";
		}
		if($food[$i]==65){
			$min=$q65*120;
		$price=$price+$min;
			echo "you have selected $q65 cup of porridge and milk<br>";
		}
		if($food[$i]==66){
			$min=$q66*150;
		$price=$price+$min;
			echo "you have selected $q66 cup of porridge and sweetened milk<br>";
		}
		if($food[$i]==67){
			$min=$q67*120;
		$price=$price+$min;
			echo "you have selected $q67 sausage, bacon, ham etc fried as helping<br>";
		}
		if($food[$i]==68){
			$min=$q68*100;
		$price=$price+$min;
			echo "you have selected $q68 cup of potato mash<br>";
		}
		if($food[$i]==69){
			$min=$q69*200;
		$price=$price+$min;
			echo "you have selected $q69 cup of fried potato<br>";
		}
		if($food[$i]==70){
			$min=$q70*250;
		$price=$price+$min;
			echo "you have selected $q70 sandwitch large<br>";
		}
		if($food[$i]==71){
			$min=$q71*250;
		$price=$price+$min;
			echo "you have selected $q71 hamburger<br>";
		}
		if($food[$i]==72){
			$min=$q72*300;
		$price=$price+$min;
			echo "you have selected $q72 plate of steak and salad<br>";
		}
		if($food[$i]==73){
			$min=$q73*450;
		$price=$price+$min;
			echo "you have selected $q73 plate of spaghetti and meat, sause etc<br>";
		}
		if($food[$i]==74){
			$min=$q74*400;
		$price=$price+$min;
			echo "you have selected $q74 baked fish as helping<br>";
		}
		if($food[$i]==75){
			$min=$q75*200;
		$price=$price+$min;
			echo "you have selected $q75 fried chicken as helping<br>";
		}
		if($food[$i]==76){
			$min=$q76*450;
		$price=$price+$min;
			echo "you have selected $q76 plate of chinese noodles<br>";
		}
		if($food[$i]==77){
			$min=$q77*450;
		$price=$price+$min;
			echo "you have selected $q77 plate of chineese fried rice<br>";
		}
		if($food[$i]==78){
			$min=$q78*400;
		$price=$price+$min;
			echo "you have selected $q78 plate of pizza<br>";
		}
		
		
	}
	echo "Total calories you take by food:".$price."<br>";

}

else{echo "please select food items to estimate your calorie intake";
}
//for lunch

?>