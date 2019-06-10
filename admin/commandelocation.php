<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_admincommande">	
			<?php
				require('../connexion.php');
				$sql='select * from location';
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$id = $result[0];
						$matclient = $result[1];
						$matvoiture = $result[2];
                        $date_deb = $result[3];
                        $date_ret = $result[4];
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
						$loc=$result2[3];
					 ?>
						<article>
							
									<div class="commandeadmin">
									<label><strong>- CLIENT -</strong></label></br>
									<table><tr><th><label>Nom : </label></th><th><label><?php echo $nom;?></label></th></tr>
									<tr><th><label>Prenom : </label></th><th><label><?php echo $prenom;?></label></th></tr></table>
									<label><strong>- VOITURE -</strong></label></br>
									<table><tr><th><label>Matricule : </label></th><th><label><?php echo $marque;?></label></th></tr>
									<tr><th><label>Modele : </label></th><th><label><?php echo $modele;?></label></th></tr>
									<tr><th><label>Couleur : </label></th><th><label><?php echo $couleur;?></label></th></tr>
									<tr><th><label>Prix : </label></th><th><label><?php echo $loc;?> DT/H</label></th></tr></table></br>
                                    <label><strong>- LOCATION -</strong></label></br>
									<table><tr><th><label>Date debut : </label></th><th><label><?php echo $date_deb;?></label></th></tr>
									<tr><th><label>Date reture : </label></th><th><label><?php echo $date_ret;?></label></th></tr></table>
                                    
									<a  name="lien" href="supplocation.php?id=<?php echo $id;?>">Supprimer</a>
								</div>
						</article>
						<?php
					}
			?> 
		</section>
<?php require('footer.php'); ?>