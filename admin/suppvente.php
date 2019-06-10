<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    require('../connexion.php');
    $sql="delete from commande WHERE id='$id'";
    $result=mysql_query($sql) or die ('error requete');
}
header('location:commandevente.php');
?>