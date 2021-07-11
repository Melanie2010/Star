<?php          
    // Création d'un tablau pour les points de l'étoile
  $valeurs = array(
    125, 50,  // Point 1 (x, y)
    175, 75, // Point 2 (x, y)
    225, 75,  // Point 3 (x, y)
    200, 125,  // Point 4 (x, y)
    225, 175,  // Point 5 (x, y)
    175, 175,  // Point 6 (x, y)
    125, 200,  // Point 7 (x, y)
    75,  175, // Point 8 (x, y)
    25,  175, // Point 9 (x, y)
    50,  125,  // Point 10 (x, y)
    25,  75,  // Point 11 (x, y)
    75,  75    // Point 12 (x, y)
    );

// Création d'une image
$Picture = imagecreatetruecolor(250, 250);

//  Couleurs
$yellow = imagecolorallocate($Picture, 255, 255, 0);
$Background   = imagecolorallocate($Picture, 255, 255, 255);

//arrière-plan
imagefilledrectangle($Picture, 0, 0, 249, 249, $Background);

// Trace l'étoile
imagefilledpolygon($Picture, $valeurs,12, $yellow);

// Pour afficher l'image
imagepng($Picture);
imagedestroy($Picture);
  
?>