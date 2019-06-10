<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_commande">
            <article>
			<?php
				if (isset($_GET['id'])) $id = $_GET['id'];
                else {header("Location: marques.php");die();}
				require('connexion.php');
				$sql="select * from voiture where id='$id'";
				$mysql=mysql_query($sql) or die ('error requete');
					while($result=mysql_fetch_array($mysql)){
						$prix = $result[7];
						$marque = $result[2];
						$model=$result[3];
						$matricule=$result[1];
						$couleur = $result[4];
						$porte=$result[5];
						$moteur = $result[6];
					}
					 ?>
                     <form class="input">
                            <div class="form-group">
                                 <label>Marque :</label>
                                <input type="text" value="<?php echo $marque;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>Modele :</label>
                                <input type="text" value="<?php echo $model;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>Couleur :</label>
                                <input type="text" value="<?php echo $couleur;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>Nombre de porte : </label>
                                <input type="text" value="<?php echo $porte;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>Moteur : </label>
                                <input type="text" value="<?php echo $moteur;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>Prix :</label>
                                <input type="text" value="<?php echo $prix;?> DT" class="form-control" disabled>
                            </div>
                    </form>
        <?php
			if(isset($_POST['btn']) && isset($_POST['cin'])){
				require('connexion.php');
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$cin = $_POST['cin'];
				$adresse = $_POST['adresse'];
				$email = $_POST['email'];
				$tel = $_POST['tel'];
				$mat=$_POST['cin'];
				$result = mysql_query("REPLACE INTO client (cin,nom,prenom,adresse,tel,email) VALUES ('$cin','$nom','$prenom','$adresse','$tel','$email')");	
				$req = "INSERT INTO `agence`.`commande` (`id`, `matricule_client`, `matricule_voiture`) VALUES ('', '$cin', '$matricule')";
				$res=mysql_query($req)or die('erreur req');
                ?>
                    <br><form class="input">
                            <div class="form-group">
                                 <label>cin : </label>
                                <input type="text" value="<?php echo $cin;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>nom : </label>
                                <input type="text" value="<?php echo $nom;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>prenom : </label>
                                <input type="text" value="<?php echo $prenom;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>adresse : </label>
                                <input type="text" value="<?php echo $adresse;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>tel : </label>
                                <input type="text" value="<?php echo $tel;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>email :</label>
                                <input type="text" value="<?php echo $email;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>date debut :</label>
                                <input type="text" value="<?php echo $date_deb;?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                 <label>date reture :</label>
                                <input type="text" value="<?php echo $date_ret;?>" class="form-control" disabled>
                            </div>
                        </form>
                <center><h3>commande est effectuer</h3></center>      
                
        <?php        
			} else {
		?>

					</div>
					<form name="cmdform" method="POST" action="?id=<?php echo $id; ?>">
					<h3>Effectuer votre commande </h3>
					<div class="input">
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
					<input name="btn" type="submit" class="btn btn-primary " value="Valider">
					</div>
				</form>
			</article>
            <?php } ?>
		</section>
<?php require('footer.php'); ?>