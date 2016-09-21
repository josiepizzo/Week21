<?php
// Name information
$first = 'Josie ';
$last  = 'Pizzolato';
$full  = $first . $last;
// Age information
$birth_year = 1964;
$current_year = 2016;
$age = $current_year - $birth_year;
echo "My name is $full.\n";
echo "I am $age years old.\n";


if (strlen($full) > 12){
echo "It's a long name.\n";
}
else
echo "It's a short name.\n";

//the 12 here is how many times the = it will repeat
echo str_repeat('=', 12) . "\n";

echo "I am $age years old.\n";

if ($age > 21){
echo "Sake! Sake! Sake!\n";
}
elseif ($age === 21){
echo "Just slipped by! Sake! Sake! Sake!\n";
}
else{
echo "No Sake for me \n";
}
?>
