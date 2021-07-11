<?php
session_start();

//ouvrir la base de donnée 
$bdd = new PDO('mysql:host=localhost;dbname=star','root',''); 
$bdd->exec("SET CHARACTER SET utf8"); 

//requete d insertion 
$pdoStat = $bdd->prepare('INSERT INTO data_star (id, size) VALUES(null, :size)');
 
//chaque marqueur a une valeur
$pdoStat->bindValue(':size', $_POST['star_size'], PDO::PARAM_INT);

//executer la requete
$insertIsOk = $pdoStat->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Star</title>
</head>
<body>
  <header>
    <h1>Star</h1>
  </header>

<section>   
    Size of the Star :<?php echo($_POST['star_size'])?> </br>

    <?php
 
    $ligne_parallèle = ($_POST['star_size'] + 2) *2; // exemple : si l'on rentre la taille de l'étoile 1, le nb d'étoiles des lignes parallèles est de 6 
    $nb_detoiles_ligne_1_3_5 = $_POST['star_size']; // exemple : si l'on rentre la taille de l'étoile 1, le nb d'étoiles sur les lignes 1, 3 et 5 est de 1 (la valeur rentré)

    if ($_POST['star_size'] == 0){ //si l'on rentre la taille de l'étoile 0, cela n'affiche rien
        echo("");
    }
    else{
    $hauteur = 5; 
    //Boucle de ligne total 
    for ($i = 0; $i < $hauteur; $i++)
    {
        //Boucle des espaces, on retire 1 espace 
        //On va à la ligne inférieur à chaque fois

        for ($n = ($hauteur ); $n > 0; $n--)
        {
            echo " ";
        }
        //Boucle pr les étoiles 
        //$e doit etre pareil que $i
        for($e=0;$e<=$i;$e++)
        {
            echo "*";
        }
        echo "<br />";
    }
    }
    ?>
</section>

</body>
</html>
