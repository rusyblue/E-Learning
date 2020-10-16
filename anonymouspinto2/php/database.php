<?php
session_start();
function bbd()   
{
  try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bbd = new PDO("mysql:host=localhost;dbname=flaskic1","root","",$pdo_options);
}
    catch (Exception $e)


    {
    		die('Erreur: ' .$e->getMessage());
    }
    	return $bbd;  
    }


 ?>
