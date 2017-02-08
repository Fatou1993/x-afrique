<?php
session_start() ;

 
// Constantes
define('TARGET', 'photo/');    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier
define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels

$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';

if (isset($_SESSION['email']))
{
 // select tout from la base de données	
	
	require('php/database.php');
    $dbh = Database::connect();

 // recevoir les informations et change la table dans la base de données ...


    $nom = mysql_real_escape_string(htmlspecialchars($_POST["inputnom"])) ;
    $prenom = mysql_real_escape_string(htmlspecialchars($_POST["inputprenom"])) ;
    $description = mysql_real_escape_string(htmlspecialchars($_POST["inputdescription"])) ;
    $jesuis = mysql_real_escape_string(htmlspecialchars($_POST["inputselect"])) ;
	  $poste = mysql_real_escape_string(htmlspecialchars($_POST["inputposte"])) ;
	
	
	
  // On verifie si le champ est rempli
  if( !empty(htmlspecialchars($_FILES['inputphoto']['name']) )
  {
    // Recuperation de l'extension du fichier
    $extension  = pathinfo(htmlspecialchars($_FILES['inputphoto']['name']), PATHINFO_EXTENSION);
 
    // On verifie l'extension du fichier
    if(in_array(strtolower($extension),$tabExt))
    {
      // On recupere les dimensions du fichier
      $infosImg = getimagesize(htmlspecialchars($_FILES['inputphoto']['tmp_name']);
 
      // On verifie le type de l'image
      if($infosImg[2] >= 1 && $infosImg[2] <= 14)
      {
        // On verifie les dimensions et taille de l'image
        if(1==1)
        {
          // Parcours du tableau d'erreurs
          if(isset($_FILES['inputphoto']['error']) && UPLOAD_ERR_OK === $_FILES['inputphoto']['error'])
          {
            // On renomme le fichier
            $nomImage = md5(uniqid()) .'.'. $extension;
 
            // Si c'est OK, on teste l'upload
            if(move_uploaded_file($_FILES['inputphoto']['tmp_name'], TARGET.$nomImage))
            {
				
			  $query = "UPDATE `participants` SET img = '".TARGET.$nomImage."' WHERE `email` = '".$_SESSION['email']."' ";
		    $sth = $dbh->prepare($query);
		    $sth->execute() ;
						
            }
            else
            {
              // Sinon on affiche une erreur systeme
              $message = 'Problème lors du téléchargement !';
            }
          }
          else
          {
            $message = 'Une erreur interne a empêché le télèchargement de l\'image';
          }
        }
        else
        {
          // Sinon erreur sur les dimensions et taille de l'image
          $message = 'Erreur dans les dimensions de l\'image !';
        }
      }
      else
      {
        // Sinon erreur sur le type de l'image
        $message = 'Le fichier à uploader n\'est pas une image !';
      }
    }
    else
    {
      // Sinon on affiche une erreur pour l'extension
      $message = 'L\'extension du fichier est incorrecte !';
    }
  }
  
	if ($message == '')	{
	if (isset($nom , $prenom , $jesuis , $description , $poste) && !empty($nom)&& !empty($prenom)&& !empty($description)&& !empty($jesuis) && !empty($nom))
	{
		
		// si tout va bien
		
		$query = "UPDATE `participants` SET `nom`='".$nom."',`prenom`='".$prenom."',`description`='".$description."',jesuis='".$jesuis."',post='".$poste."' WHERE `email` = '".$_SESSION['email']."' ";
		$sth = $dbh->prepare($query);
		$sth->execute() ;
		
		echo "<centre><font color='red'>Votre profil a été mis à jour</font><br><a href='index1.php'>cliquer ici</a></centre>" ;
		
		
	}else{
	echo "<centre><font color='red'>Erreur reessayez s'il vous plait</font><br><a href='index1.php'>cliquer ici</a></centre>" ;
	}


}
else
{
	echo '<centre>'.$message.'<br><a href="index1.php">Cliquez ici</a></centre>' ;
}
}else{
	header ('location: index.php');	
}

?>