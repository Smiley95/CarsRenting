<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="container">
            <form method="POST">
                <h1>Pour nous contacter veuillez remplir ce formulaire </h1>
                <div class="form-group">
                    <label>Nom: </label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Prenom :</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
				<div class="form-group">
                    <label>Cin :</label>
                    <input type="text" name="cin" class="form-control">
                </div>
                <div class="form-group">
                    <label>Adresse :</label>
                    <input type="text" name="adresse" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telephone :</label>
                <input type="tel" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <textarea name="desc" class="form-control"></textarea>
                </div>
                <input type="submit" name="btn" class="btn btn-primary " value="Envoyer"/>
            </form>
			<?php
				 if(isset($_POST['btn'])){
					require('connexion.php');
					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$cin = $_POST['cin'];
					$adresse = $_POST['adresse'];
					$email = $_POST['email'];
					$tel = $_POST['tel'];
					$mat=$_POST['cin'];
					$desc = $_POST['desc'];
					$result = mysql_query("REPLACE INTO client (cin,nom,prenom,adresse,tel,email) VALUES ('$cin','$nom','$prenom','$adresse','$tel','$email')");	
					//$res=mysql_query($req);
					$req2 = "INSERT INTO contact (id,matricule_client,description) values ('','$cin','$desc')";
					$res=mysql_query($req2)or die('erreur req2');
					//var_dump($res);
				 }
			?>
        </section>
<?php require('footer.php'); ?>