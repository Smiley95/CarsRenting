<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_notif">	
			<?php
				require('../connexion.php');
				$sql='select * from contact';
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$id = $result[0];
						$matclient = $result[1];
						$desc = $result[2];
						$sql2="select nom,prenom from client WHERE cin='$matclient'";
						$mysql2=mysql_query($sql2);
						$result2=mysql_fetch_array($mysql2);
						$nom=$result2[0];
						$prenom=$result2[1];
						
					 ?>
						<article>
							
									<div class="div_notif">
									<table><tr>
									<td><label>Nom : </label></td><td><label><?php echo $nom;?></label></td></tr>
									<tr><td><label>Prenom : </label></td><td><label><?php echo $prenom;?></label></td></tr>
									<tr><td><label>Message : </label></td><td><label><?php echo $desc;?></label></td></tr></table></br>
									<a  name="lien" href="suppnotification.php?id=<?php echo $id;?>">Supprimer</a>
								</div>
						</article>
						<?php
					}
			?> 
		</section>
<?php require('footer.php'); ?>