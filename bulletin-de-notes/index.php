<?php

$students = [
    [
        "firstName" => "Hannah",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],
        "average" => -1
    ],
    [
        "firstName" => "Richard",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => -1
    ],
    [
        "firstName" => "Mark",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],
        "average" => -1
    ],
    [
        "firstName" => "Charlie",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],
        "average" => -1
    ],
    [
        "firstName" => "Suzy",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],
        "average" => -1
    ]
];

function average(array $notes) :float{
  return array_sum($notes) / count($notes);
}

function noteList(array $notes) : string {
  $acc = "";

  foreach ($notes as $note){
    $acc .= "<li>".$note."</li>";
  }

  return $acc;
}
function determineClass(float $average) :string{
  if($average<10){
    return "red";
  }elseif($average<=13){
    return "orange";
  }else{
    return "green";
  }
}

function studentLi(array $student) : string {
  $notes = noteList($student["grades"]);
  $average = average($student["grades"]);
  $colorClass = determineClass($average);
  return <<<HTML
    <li>
    <article class="{$colorClass}">
        <header>
            <h1>{$student["firstName"]} {$student["lastName"]}</h1>
        </header>
        <section>
            <h2>Notes : </h2>
            <ul>
                {$notes}
            </ul>
        </section>
        <footer>
            <h3>Moyenne des notes de l'étudiant : {$average}</h3>
        </footer>
    </article>
    </li>
  HTML;
}
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bulletin de notes</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>
            Bulletin de notes
        </h1>
        <h2>
            Liste des étudiants
        </h2>
        <ul id="students">
            <?php foreach($students as $student) : ?>
              <?= studentLi($student)?>
            <?php endforeach ?>
        </ul>
    </body>
</html>