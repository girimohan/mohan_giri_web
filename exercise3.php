<?php
echo "<h1>My exercise 3 - Mohan</h1>";

#1 use of IF/Else
$month = date("M");
if($month =="Aug"){
    echo "Its $month, so it's still holiday.<br>";
}
else{
    echo"Not August, This is $month so i don't have any holidays.<br>";
}

#2 
$color = "Red";
if($color == "Red"){
    echo "The color is red.<br>";
}
else{
    echo " The color is not red.<br>";
}

#3 Using if-elseif
$score = 50;
echo "<h5>Score of example one</h5>";
if ($score >= 80 && $score<=100){
    echo"$score, Excellent <br>";
}
elseif($score >=70 && $score <80){
    echo"$score, Great <br>";
}
elseif($score >=60 && $score <70){
    echo"$score, Good <br>";
}
elseif($score >=50 && $score <60){
    echo"$score, Pass <br>";
}
elseif($score <50 && $score>0){
    echo"$score, Fail <br>";
}

#3 Another way, using switch -practise
$my_score = 79;
echo "<h5>Score of example two</h5>";
switch($my_score){
    case $my_score >=80 and $my_score <=100:
        echo "You score $my_score, Excellent <br>";
        break;
    case $my_score >=70 and $my_score <=80:
        echo "You score $my_score, Great <br>";
        break;
    case $my_score >=60 and $my_score <=70:
        echo "You score $my_score, Good <br>";
        break;
    case $my_score >=50 and $my_score <=60:
        echo "You score $my_score, Pass <br>";
        break;
    case $my_score >=0 and $my_score <=50:
        echo "You score $my_score, Fail <br>";
        break;
    default:
    echo "Something else <br>";
}
#4
$name = readline('Enter your name: ');
$age = (int)readline('Enter your age: ');
echo "$name";
/*if($name >= 18){
    echo"Hi $name, you are $age and eligible for voting.";
}
else{
    echo"Sorry $name, You are $age and  NOT eligible for voting.";
}*/




?>