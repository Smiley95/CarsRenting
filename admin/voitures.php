<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_adminvoitures">	
        <div align="right" ><a name="lien" href="ajoutervoiture.php" >Ajouter voiture</a></div>
			<?php
                require('../connexion.php');
				$sql='select * from voiture';
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$image = $result[9];
						$prix = $result[7];
						$marque = $result[2];
						$model=$result[3];
						$id=$result[0];
						$moteur=$result[6];
						$matricule=$result[1];
						$couleur=$result[4];
						$dispo=$result[10];
						$porte=$result[5];
						$offre=$result[8];
						
					 ?>
						<article>
									<div class="photo" align="center">
                                        <img src="../images/<?php echo $image;?>" width="200px" height="160px">
									</div>
									<div class="adminvoiture">
                                    <label><?php if ($offre) echo "* LOCATION"; else echo "* VENTE"; ?> </label></br>
									<label>Prix : <?php echo $prix;?> DT</label></br>
									<label>Marque : <?php echo $marque;?></label></br>
									<label>Modele : <?php echo $model;?> </label></br>
									<label>Moteur : <?php echo $moteur;?> </label></br>
									<label>Matricule : <?php echo $matricule;?> </label></br>
									<label>Couleur : <?php echo $couleur;?> </label></br>
									<label>nombre disponible :<?php echo $dispo;?> </label></br>
									<label>porte : <?php echo $model;?> </label></br><br/>
									
									<a  name="lien" href="modifiervoiture.php?id=<?php echo $id;?>">Modifier</a>
									<a  name="lien" href="suppvoiture.php?id=<?php echo $id;?>">Supprimer</a>
								</div>
								</article>
						<?php
					}
			?> 
		</section>
<?php require('footer.php'); ?>