<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_adminclients">	
			<?php
				require('../connexion.php');
				$sql='select * from client';
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$mail = $result[5];
						$nom = $result[1];
						$prenom=$result[2];
						$tel=$result[4];
						$cin=$result[0];
						$adresse=$result[3];
						
					 ?>
						<article>
								<div class="adminclient">
									<label>Nom : <?php echo $nom;?></label></br>
									<label>Prenom : <?php echo $prenom;?></label></br>
									<label>Telephone : <?php echo $tel;?> </label></br>
									<label>CIN : <?php echo $cin;?> </label></br>
									<label>Adresse : <?php echo $adresse;?> </label></br>
									<label>Mail : <?php echo $mail;?> </label></br></br>
									<a  name="lien" href="suppclient.php?cin=<?php echo $cin;?>">Supprimer</a>
								</div>
						</article>
						<?php
					}
			?> 
		</section>
<?php require('footer.php'); ?>