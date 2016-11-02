<?php

$ans1 = $_POST["q1"];
$ans2 = $_POST["q2"];
$ans3 = $_POST["q3"];
$ans4 = $_POST["q4"];
$ans5 = $_POST["q5"];
$correct = 0;

echo <br><br>;
echo "Question 1: Mobile Suit Gundam is set in what year?";
switch $ans1
{
	case 1:
		echo "Your answer: 2307 A.D.";
		break;
	case 2:
		echo "Your answer: CE 70";
		break;
	case 3:
		echo "Your answer: U.C. 0079";
		$correct++;
		break;
	case 4:
		echo "Your answer: AC 175";
		break;
}
echo <br>;
echo "Correct Answer: U.C. 0079";
echo <br><br>;
echo "Question 2: Who wrote and directed the 1973 film Westworld?";
switch $ans2
{
	case 1:
		echo "Your answer: Robert A. Heinlein";
		break;
	case 2:
		echo "Your answer: Michael Crichton";
		$correct++;
		break;
	case 3:
		echo "Your answer: Phillip K. Dick";
		break;
	case 4:
		echo "Your answer: William Gibson";
		break;
}
echo <br>;
echo "Correct Answer: Michael Crichton";
echo <br><br>;
echo "Question 3: Who was the male host of MTV's Singled Out?";
switch $ans3
{
	case 1:
		echo "Your answer: Adam Carolla";
		break;
	case 2:
		echo "Your answer: Dane Cook";
		break;
	case 3:
		echo "Your answer: Marc Maron";
		break;
	case 4:
		echo "Your answer: Chris Hardwick";
		$correct++;
		break;
}
echo <br>;
echo "Correct Answer: Chris Hardwick";
echo <br><br>;
echo "Question 4: What was the first hybrid made by Ferrari?";
switch $ans4
{
	case 1:
		echo "Your answer: LaFerrari";
		$correct++;
		break;
	case 2:
		echo "Your answer: California T";
		break;
	case 3:
		echo "Your answer: P1";
		break;
	case 4:
		echo "Your answer: 918 Spyder";
		break;
}
echo <br>;
echo "Correct Answer: LaFerrari";
echo <br><br>;
echo "Question 5: You are going to non-chain Chinese restaurant for the first time. What should you order?";
switch $ans5
{
	case 1:
		echo "Your answer: Fried Rice";
		break;
	case 2:
		echo "Your answer: Triple Delight";
		break;
	case 3:
		echo "Your answer: Beef and Broccoli";
		break;
	case 4:
		echo "Your answer: General Tso's Chicken";
		$correct++;
		break;
}
echo <br>;
echo "Correct Answer: General Tso's Chicken";
echo <br><br>;

echo 'You scored ' .$correct. 'out of 5';
echo <br>;
switch $correct
{
	case 0:
		echo "That's 0%!";
		break;
	case 1:
		echo "That's 20%!";
		break;
	case 2:
		echo "That's 40%!";
		break;
	case 3:
		echo "That's 60%!";
		break;
	case 4:
		echo "That's 80%!";
		break;
	case 5:
		echo "That's 100%!";
		break;
}
echo <br>;
echo "Analysis: Terrible. You should take up knitting.";
 ?>
