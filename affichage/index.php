<?php 
    $title = "Le titre de ma page";
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <h1>
            <?= $title ?>
        </h1>
    </body>
</html>

<?php 
    $connectedUser = false;

    function navButton(bool $isConnected) : string 
    {
        if($isConnected){
            return "Connexion";
        }else{
            return "Déconnexion";
        }
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="#"><?= navButton($connectedUser)?></a>
                
            </nav>
        </header>
    </body>
</html>

<?php 
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny"
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit"
        ]
    ];

    
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach($users as $user) :?>
                <li><?= "$user[firstName] $user[lastName]"?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>


<?php 
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];

    function liFromUser(array $user) :string
    {
        $li = "";
        foreach($user as $value){
            $li = "$li $value";
        }
        return $user["age"]>=18 ? $li = "$li : Majeur ! <br>": $li = "$li : Mineur ! <br>";
    };
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach($users as $user) :?>
                <li> <?= liFromUser($user)?></li>
            <?php endforeach?>
        </ul>
    </body>
</html>