<?php
$students_array = [
  'Cristal' => ['King', 35, 'Randolph'],
  'Josie' => ['Pizzolato', 52, 'Jersey City']
];
foreach ($students_array as $student => $data) {
  $full_name = $student .' '. $data[0];
  echo "My name is $full_name.\n";
  if (strlen($full_name) > 12)
    echo "It's a long name.\n";
  else
    echo "It's a short name.\n";
  $age = $data[1];
  echo "I'm $age years old.\n";
  if ($age > 21)
    echo "Sake! Sake! Sake!\n";
  else if ($age === 21)
    echo "Just slipped by! Sake! Sake! Sake!\n";
  else
    echo "No sake for me \n";

  echo str_repeat('=', 12) . "\n";
}