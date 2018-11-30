<?php
try
{
   $db = new PDO('mysql:host=localhost;dbname=PortFolio;charset=utf8', 'phpmyadmin', 'AdaLinkLoulouZelda');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}
?>