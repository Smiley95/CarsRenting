<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<div class="container">
            <?php 
				if(isset($_GET['id'])) {
					require('../connexion.php');
                    $sql='select * from voiture where id='.$_GET['id'];
                    $mysql=mysql_query($sql) or die ('error requete');
					$result=mysql_fetch_array($mysql);
						$image = $result[9];
						$prix = $result[7];
						$marque = $result[2];
						$model=$result[3];
						$moteur=$result[6];
						$matricule=$result[1];
						$couleur=$result[4];
						$dispo=$result[10];
						$porte=$result[5];
						$offre=$result[8];
						
				}
				else {header('location:voitures.php');die();}
				?>
            <form method="POST">
                <h1>Modifier les informations :  </h1>
				<div class="form-group">
                    <label>Modele :</label>
                    <input type="text" name="modele" value="<?php echo $model; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Moteur :</label>
                    <input type="number" maxlength="11" name="moteur" value="<?php echo $moteur; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>nombre de porte :</label>
                    <input type="number" maxlength="11" name="porte" value="<?php echo $porte; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Couleur :</label>
                <input type="text" name="couleur" value="<?php echo $couleur; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="number" maxlength="11" name="prix" value="<?php echo $prix; ?>" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Vente / Location :</label>
                    <input type="range" maxlength="1" min="0" max="1" name="offre" value="<?php echo $offre; ?>" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Nombre disponible :</label>
                    <input type="number" maxlength="3" name="dispo" value="<?php echo $dispo; ?>" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Lien de l'image :</label>
                    <input type="text" name="image" value="<?php echo $image; ?>" class="form-control"></textarea>
                </div>
                <input  type="submit" name="btn" class="btn" value="Modifier" />
				<?php 
				if(isset($_POST['btn'])){
					require('../connexion.php');
					$id=$_GET['id'];
					$image = $_POST['image'];
					$dispo = $_POST['dispo'];
					$offre = $_POST['offre'];
					$prix = $_POST['prix'];
					$couleur = $_POST['couleur'];
					$porte = $_POST['porte'];
					$modele = $_POST['modele'];
					$moteur = $_POST['moteur'];
					$result=mysql_query("UPDATE voiture SET modele='$modele',couleur='$couleur',porte='$porte',moteur='$moteur',prix='$prix',offre='$offre',image='$image',dispo='$dispo' WHERE id='$id'");
                    header('location:voitures.php');
				}
					
				?>
            </form>
	        </div>
<?php require('footer.php'); ?>