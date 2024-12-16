<?php
$animals = ["Chat", "Chien", "Lapin", "Souris"];
for($i=0;$i<count($animals);$i++)
{
  echo " {$animals[$i]} <br> ";
}

$numbers = [28, 32, 44, -67, 18, 24, -98];

for($i=0;$i<count($numbers);$i++)
{
  if ($numbers[$i] < 0){
    echo " {$numbers[$i]} <br> ";
  }
}

$userA = [
  "name" => "James",
  "age" => 28
];

foreach($userA as $key => $value)
{
  echo "$key: $value <br>";
}

$users = [
  [
      "firstName" => "Hugues",
      "lastName" => "Froger"
  ],
  [
      "firstName" => "Mari",
      "lastName" => "Doucet"
  ]
];

foreach($users as $user)
{
  foreach($user as $key => $value)
  {
    echo "$key: $value ";
  }
  echo "<br>";
}


?>