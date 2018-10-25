<html>
<head>
       <title>Résultat</title>
</head>
 
<?php
if(isset($_POST['1erNombre']) AND isset($_POST['choix']) AND isset($_POST['2emeNombre'])) // Si les varaibles existent ...
{
    $nombre1 =htmlspecialchars($_POST['1erNombre']); // On sécurise ...
    $choix = htmlspecialchars($_POST['choix']);
    $nombre2 = htmlspecialchars($_POST['2emeNombre']);
 
    if($nombre1 != NULL AND $nombre2 != NULL) // Puis on vérifie leur valeur ...
    {
        if($choix == 'division' AND $nombre2 == 0)
        {
            echo 'On peut pas diviser par 0 ';
        }
        else
        {  
            if($choix == 'addition')
            {
            $resultat = $nombre1 + $nombre2;
            echo 'Le résultat de votre addition est '.$resultat;
            }
             
            if($choix == 'soustraction') // Si on a choisi la soustraction, on calcul la différence.
            {
            $resultat = $nombre1 - $nombre2; // On calcul
            echo 'Le résultat de votre soustraction est '.$resultat; // Puis on affiche le résultat
            }
             
            if($choix == 'multiplication')
            {  
            $resultat = $nombre1 * $nombre2;
            echo 'Le résultat de votre multiplication est '.$resultat;
            }
         
            if($choix == 'division')
            {
            $resultat = $nombre1 / $nombre2;
            echo 'Le résultat de votre division est '.$resultat;
            }
        }
        }
    else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
    {
    echo 'Veuillez renseigner tous les champs.';
    }
}
?>