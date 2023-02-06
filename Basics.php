<!DOCTYPE html>

<html>

<body>

<h1>My first PHP Page</h1>

<?php

echo "Hello World";

echo "<br>";

//Variables
 $txt = "Hello World";
 $x = 5;
 $y = 10.5;

 echo $txt;
 echo "<br>";
 echo $x;
 echo "<br>";
 echo $y;


 // Var_Dump 

 $message = "Hello Again!";
 $count = 3;
 $price = 1.99;
 var_dump($message);
 var_dump($count);
 var_dump($price);

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // Task 1
 echo "Task 1";

 echo "<br>";

 $name = "Shahed";
 $dob = 2002;
 echo "My name is $name and I was born in $dob";
 echo "<br>";

 echo "I have been on this earth for approximately 20 years";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 // Task 1B
 echo "Task 1b";

 echo "<br>";
 //Use functions to find the number of characters and number of words in the name variable.

 $nameLength = strlen($name);
echo ("The length of the name variable is $nameLength characters") ;
echo "<br>";

// Use functions to find the number of words in the name variable.

$nameWord = str_word_count($name);
echo ("The name variable contains $nameWord words(s)");
echo "<br>";
//Use a function to reverse the name string, but display it using a h2 heading. Ensure this is done within the PHP tags.

 
$reversed = (strrev($name));
echo ("<h2>The name of the varaiable when reversed reads $reversed</h2>");
echo "<br>";

// Using Arithmetic Operators 
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo "<br>";
echo "<br>";

// Task 2 

// Create a small program in PHP that will use a function to store the value of PI.

 echo "Task 2";

 //Additionally, use the value of PI to work out the area of a circle. The diameter of the circle is 60cm.

$diameter = 30;
$pie = 3.14;
echo "<br>";

// Use a funciton to round down the value of the area of the circle to 2 decimal places

$answer =  $diameter * $pie;
echo "<br>";
echo (floor($answer));
echo "<br>";
echo "<br>";
echo "<br>";

// While Loops
 echo ("<h1>While Loops</h1>");
$n = 0;
 while ($n <= 100){
    echo "The number is: $n <br>";
    $n+=10;
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // Do While Loops 

 echo "<h2>Do While Loops</h2>";

 $a = 1;

 do {
   echo "The number is:$a <br>";
   $a++;
 } while ($a <= 5);

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // For Loops 
 echo "<h2>For Loops</h2>";

 for ($b = 0; $b <= 100; $b+=10){
   echo "The number is: $b <br>";
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // If Statements 
 echo "<h2>If Statments</h2>";

 $t = date("H");

 echo "<p> The hour (of the server) is " . $t;

 echo ",and will give the follwing message: </p>";

 if ($t < "10"){
   echo "Have a good morning!";
 } elseif ($t < "20") {
   echo "Have a good day!";
 } else {
   echo "Have a good night!";
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // Task 3 - Create an If Statement to check the age to see if you van drive or not 

 echo "<h2>Task 3</h2>";
 $age = 20;
 $hasLicense = FALSE;

 if ($age >= 17 || $hasLicense == TRUE ){
   echo "You are able to drive";
 } else {
   echo "You are not able to drive";
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // Switch Statements 

 echo "<h2>Switch Statements</h2>";

 $favcolor = "red";

 switch ($favcolor){
  case "red";
  echo "Your favorite color is red!";
  break;
  case "blue";
  echo "Your favorite color is blue!";
  break;
  case "green";
  echo "Your favorite color is green!";
  break;
  default:
  echo "Your favorite color is neither red, blue nor green!";
 }
 echo "<br>";
 echo "<br>";
 echo "<br>";


 // Task 4 

 // As an IF Statement 

 echo "<h2> As an IF statement</h2>";

 $score = 50;

 if ($score <= 21){
  echo "This is a Fail";
 } else if($score <= 35){
  echo "This is a Pass";
 } else if ($score <= 45){
  echo "This is a Merit";
 }else if ($score >= 45){
  echo "This is a Distinction";
 } else {
  echo "You have not done the test";

 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // As a Switch Statement

 echo "<h2> As an Switch statement</h2>";

 $total = 35;

 switch($total){
  case ($total <= 21);
  echo "This is a Fail";
  break;
  case ($total <= 35);
  echo "This is a Pass";
  break;
  case ($total >= 45);
  echo "This is a Merit";
  break;
  case ($total >= 45);
  echo "This is a Distinction";
  break;
  default:
  echo "You have not done the test";
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";


 // Arrays 

 echo "<h2>Arrays</h2>";
 echo "<br>";

 echo "<h3>Writing Arrays with the Sqaure brackets []</h3>";
 echo "<br>";

 $articles = ["First Post","Another Post", "Read This!"];
 var_dump($articles);
 var_dump($articles[0]);
 var_dump($articles[2]);

 echo $articles[2];
 echo "<br>";

 echo "<h3>Writing Arrays with the array() function</h3>";

 $cars = array("Volvo", "BMW","Toyota");

 echo "<br>";
 echo "<br>";
 echo "<br>";


 // Associative Arrays 

 echo "<h2>Associative Arrays</h2>";
  $articles = [
    "first" => "First Post",
    "second" => "Another Post",
    "third" => "Read This!"
  ];

  print_r($articles);

  echo "<br>";
  echo "<br>";
  echo "<br>";

  // The For Each Loop

  echo "<h2>The For Each Loop</h2>";
  $articles = ["First Post","Another Post", "Read This!"];
  foreach ($articles as $articles){
    echo $articles, ",";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  // Process the value and index in a for loop
  echo "<h2>Process the value and index in a for loop</h2>";

  $articles = [
    "a" => "First Post",
    "b" => "Another Post",
    "c" => "Read This!"
  ];

  foreach ($articles as $index => $articles){
    echo $index . " - ". $articles, ", ";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  // Task 5 

  $array = [
    "first" => "Goku",
    "second" => "Vegeta",
    "third" => "Gohan"
  ];

  foreach ($array as $index => $array){
    echo $index. " - " 
    . $array, "<br>" ;
  }































?>





    


</body>




</html>