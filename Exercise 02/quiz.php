<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

            
    $answer1 = $_POST['ans1'];
    $answer2 = $_POST['ans2'];
    $answer3 = $_POST['ans3'];
    $answer4 = $_POST['ans4'];
    $answer5 = $_POST['ans5'];
        
    $count = 0;
	
    	if ($answer1 == "Alex")
    	{
        	$count++;
    	}
	if ($answer2 == "Scrub room")
	{
		$count++;
	}
	if ($answer3 == "Meredith")
	{
		$count++;
	}
	if ($answer4 == "Medusa")
	{
		$count++;
	}
	if ($answer5 == "Grey+Sloan Memorial Hospital")
	{
		$count++;
	}

    echo "Correct Answers: " . $count . " out of 5.<br>";
    echo "Percentage: " . ($count * 20) . "%<br>";
    echo "<br>";
    echo "Answer Key:<br><br>";
    echo "1. Who does Cristina accidentally stab with epi?<br>";
    echo "You answered: " .$answer1 ."<br>";
    echo "Correct answer: Alex<br><br>";

    echo "2. Where did Meredith dispose of her mother's ashes?<br>";
    echo "You answered: " .$answer2 . "<br>";
    echo "Correct answer: Scrub room<br><br>";

    echo "3. Who dropped a kidney in Season 5?<br>";
    echo "You answered: " .$answer3 . "<br>";
    echo "Correct answer: Meredith<br><br>";

    echo "4. What nickname does Meredith get from the interns?<br>";
    echo "You answered: " .$answer4 . "<br>";
    echo "Correct answer: Medusa<br><br>";

    echo "5. What was Seattle Grace Hospital renamed to after the plane crash?<br>";
    echo "You answered: " .$answer5 . "<br>";
    echo "Correct answer: Grey+Sloan Memorial Hospital<br><br>";

?>