<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<div class="container">
            <form method="POST">
                <h1>saisir les informations :  </h1>
                <div class="form-group">
                    <label>Matricule :</label>
                    <input type="text" name="matricule" class="form-control">
                </div>
				<div class="form-group">
                    <label>Modele :</label>
                    <input type="text" name="modele" class="form-control">
                </div>
				<div class="form-group">
                    <label>Marque :</label>
                    <input type="text" name="marque" class="form-control">
                </div>
                <div class="form-group">
                    <label>Moteur :</label>
                    <input type="number" maxlength="11" name="moteur" class="form-control">
                </div>
                <div class="form-group">
                    <label>nombre de porte :</label>
                    <input type="number" maxlength="11" name="porte" class="form-control">
                </div>
                <div class="form-group">
                    <label>Couleur :</label>
                <input type="text" name="couleur" class="form-control">
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="number" maxlength="11" name="prix" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Vente / Location :</label>
                    <input type="range" maxlength="1" min="0" max="1" name="offre" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Nombre disponible :</label>
                    <input type="number" maxlength="3" name="dispo" class="form-control"></textarea>
                </div>
				<div class="form-group">
                    <label>Lien de l'image :</label>
                    <input type="text" name="image" class="form-control"></textarea>
                </div>
                <input type="submit" name="btn" class="btn btn-primary " value="Ajouter"/>
            </form>
			<?php
				 if(isset($_POST['btn'])){
					require('../connexion.php');
					$image = $_POST['image'];
					$dispo = $_POST['dispo'];
					$offre = $_POST['offre'];
					$prix = $_POST['prix'];
					$couleur = $_POST['couleur'];
					$porte = $_POST['porte'];
					$mat=$_POST['matricule'];
					$modele = $_POST['modele'];
					$moteur = $_POST['moteur'];
					$marque = $_POST['marque'];
					$result = mysql_query("INSERT INTO voiture (id,matricule,marque,modele,couleur,porte,moteur,prix,offre,image,dispo) VALUES ('','$mat','$marque','$modele','$couleur','$porte','$moteur','$prix','$offre','$image','$dispo')");
					header('location:voitures.php');
				 }
			?>
        </div>
<?php require('footer.php'); ?>