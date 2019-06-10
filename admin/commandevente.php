<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_admincommande">	
			<?php
				require('../connexion.php');
				$sql='select * from commande';
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$id = $result[0];
						$matclient = $result[1];
						$matvoiture = $result[2];
						$sql1="select nom,prenom from client WHERE cin='$matclient'";
						$sql2="select marque,modele,couleur,prix from voiture WHERE id='$matvoiture'";
						$mysql1=mysql_query($sql1);
						$result1=mysql_fetch_array($mysql1);
						$nom=$result1[0];
						$prenom=$result1[1];
						$mysql2=mysql_query($sql2);
						$result2=mysql_fetch_array($mysql2);
						$marque=$result2[0];
						$modele=$result2[1];
						$couleur=$result2[2];
						$prix=$result2[3];
					 ?>
						<article>
							
									<div class="commandeadmin">
									<label><strong>- CLIENT -</strong></label></br>
									<table><tr><th><label>Nom :</label></th><th><label><?php echo $nom;?></label></th></tr>
									<tr><th><label>Prenom : </label></th><th><label><?php echo $prenom;?></label></th></tr></table>
									<label><strong>- VOITURE -</strong></label></br>
									<table><tr><th><label>Matricule : </label></th><th><label><?php echo $marque;?></label></th></tr>
									<tr><th><label>Modele : </label></th><th><label><?php echo $modele;?></label></th></tr>
									<tr><th><label>Couleur : </label></th><th><label><?php echo $couleur;?></label></th></tr>
									<tr><th><label>Prix : </label></th><th><label><?php echo $prix;?> DT</label></th></tr></table></br>
									<a  name="lien" href="suppvente.php?id=<?php echo $id;?>">Supprimer</a>
								</div>
						</article>
						<?php
					}
			?> 
		</section>
<?php require('footer.php'); ?>