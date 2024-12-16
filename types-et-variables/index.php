<?php
    $nb = 42;
    $str = "La vie l'univers et tout le reste";
    $nbrstr = ($str.$nb);
    phpinfo();

    $nb_tab =[1,2.5,10];
    print_r($nb_tab);
    echo "<br>";
    $animal = [
      "species"=>"chien",
      "name"=>"paul",
      "age"=>"10"
    ];
    print_r($animal);
    echo "<br>";
    $data =42.0;
    echo $data;
    $int = (int)$data;
    echo $int;
?>