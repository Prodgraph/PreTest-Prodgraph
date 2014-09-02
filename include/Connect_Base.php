<?php
//Connection à la base de données
try
{
	$DB=new PDO('mysql:host=localhost;dbname=prodgraph_app','sguay','rafR3C8b');
	$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//afficher les Erreurs(SILENT,WARNING,EXCEPTION)
}
//Si erreur on l'attrape et on affiche ce message
catch(PDOException $e)
{
	echo '<p style="color:red;font-weight:bold;">Probleme de connexion a la base de données</p>';
}

?>
