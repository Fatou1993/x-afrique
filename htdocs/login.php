<?php

$type = intval($_GET['t']) ;

// log in
if ($type == 1)
{
	// recevoir les infos envoy�es 
	$email = mysql_real_escape_string(htmlspecialchars($_POST["email"])) ;
	$password = mysql_real_escape_string(htmlspecialchars($_POST["password"])) ;
	
	if (isset($email , $password))
	{
		// on interroge la base de donn�es
		
	    require('php/database.php');
        $dbh = Database::connect();
		
		$sql = "SELECT * FROM participants WHERE email = ? && password = SHA1(?) "; 
		
		$sth = $dbh->prepare($sql);
        // $query à executer
        $sth->execute(array($email ,$password));
        // Notez ici l'utilisation de rowCount qui permet de renvoyer le nombre de lignes générées par la requête
        $result = $sth->rowCount();
		
		
		if ($result >= 1)
		{
			session_start ();
			
			$_SESSION['email'] = $email;
			
			
			header ('location: index1.php');
			
		}
		else
		{
			echo "Vos identifiants de connexion sont incorrects";
			header('Location: index.php');
		}
	
	}
}

else if ($type == 2) // sign up
{
	
	$nom = mysql_real_escape_string(htmlspecialchars($_POST["nom"])) ;
	$prenom = mysql_real_escape_string(htmlspecialchars($_POST["prenom"])) ;
	$password = mysql_real_escape_string(htmlspecialchars($_POST["password"])) ;
	$email = mysql_real_escape_string(htmlspecialchars($_POST["email"])) ;
	
	// insertion des donn�es dans la  base de donn�es ....
	
	require('php/database.php');
    $dbh = Database::connect();
	
	$query = "SELECT * FROM `participants` where email=?";
    $sth = $dbh->prepare($query);
    $sth->execute(array($email));
    $resultat = $sth->rowCount();
	
	if ($resultat >= 1) // y'a deja qq un avec le meme email
	{
		echo "L'adresse mail est deja utilisee .<br><a href='index.php'> Cliquez ici </a>";
	}
	
	else // l'inscription est possible
	{
		$query = "INSERT INTO `participants` (nom, prenom,password, email, jesuis ,post, description,img ) VALUES (?, ?,SHA1(?), ?, ?,?, ?, ?)";
		$sth = $dbh->prepare($query);
        $sth->execute(array($nom ,$prenom , $password , $email , 9 , "" , "" , "photos/0.jpg"));
		echo "l'inscription a ete effectuee .<br><a href='index.php'> Cliquez ici </a>" ;
	}
	
			
}
else
{
	  header('Location: index.php');	
}




?>