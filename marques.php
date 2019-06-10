<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_showroom">	
			<?php
				require('connexion.php');
				$sql='select * from voiture where offre=0';
				$mysql=mysql_query($sql) or die ('error requete');
					while($result=mysql_fetch_array($mysql)){
						$image = $result[9];
						$prix = $result[7];
						$marque = $result[2];
						$model=$result[3];
						$id=$result[0];
					 ?>
						<article>
							
								<div class="photo">
									<img src="images/<?php echo $image;?>" width="200px" height="160px">
								</div>
								<div class="offre">
									<label>Prix : <?php echo $prix;?> DT</label></br>
									<label>Marque : <?php echo $marque;?></label></br>
									<label>Modele : <?php echo $model;?> </label></br>
									<a  name="lien" href="deal.php?id=<?php echo $id;?>">Voir le deal</a>
								</div>
							
						</article>
						<?php
					}
			?>
		</section>
<?php require('footer.php'); ?>