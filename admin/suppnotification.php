<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    require('../connexion.php');
    $sql="delete from contact WHERE id='$id'";
    $result=mysql_query($sql) or die ('error requete');
}
header('location:notification.php');
?>