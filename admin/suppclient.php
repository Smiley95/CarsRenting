<?php
if (isset($_GET['cin'])) {
    $cin=$_GET['cin'];
    require('../connexion.php');
    $sql="delete from client WHERE cin='$cin'";
    $result=mysql_query($sql) or die ('error requete');
}
header('location:clients.php');
?>