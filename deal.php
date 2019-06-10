<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_deal">
			<?php 
				if (isset($_GET['id'])) $id = $_GET['id'];
                else {header("Location: marques.php");die();}
				require('connexion.php');
				$sql="select * from voiture where id='$id'";
				$mysql=mysql_query($sql) or die ('error requete');
					$array=array();
					while($result=mysql_fetch_array($mysql)){
						$image = $result[9];
						$dispo = $result[10];
						$prix = $result[7];
						$marque = $result[2];
						$model=$result[3];
						$couleur = $result[4];
						$porte = $result[5];
						$moteur = $result[6];
                        $offre = $result[8];
			?>
			<article>
				<form name="f" method="get">
					<div class="photo">
						<img src="images/<?php echo $image;?>" width="600px" height="450px">
					</div>
					<div class="offre">
						<label>Marque : <?php echo $marque;?></label></br>
						<label>Modele : <?php echo $model;?></label></br>
						<label>Couleur : <?php echo $couleur;?></label></br>
						<label>Nombre de porte : <?php echo $porte;?></label></br>
						<label>Moteur : <?php echo $moteur;?></label></br>
						<label>Nombre disponible : <?php echo $dispo;?></label></br>
                    <?php if (!$offre) { ?>
						<label>Prix : <?php echo $prix;?> DT</label></br></br>
                        <a  name="lien" href="commande.php?id=<?php echo $id;?>">Commande</a>
                    <?php } else { ?>                      
                        <label>Prix : <?php echo $prix;?> DT/H</label></br></br>
                        <a  name="lien" href="location.php?id=<?php echo $id;?>">Location</a>
                    <?php } ?>
					</div>
				</form>
			</article>
					<?php } ?>
		</section>
<?php require('footer.php'); ?>