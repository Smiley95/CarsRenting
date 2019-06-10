<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<section class="section_login">
                <article>
                    <center><h1><strong>Bienvenue</strong></h1>
                    <form method="POST">
					<label name="label1"><strong>username : </strong></label>
					<input type="text" name="userid"/><br/><br/>
					<label name="label2"><strong>password : </strong></label>
					<input type="password" name="pass"/><br/><br/>
					<input type="submit" name="verif" value="connect"/>
					</form></center>
				</article>
				<?php
				if(isset($_POST['verif'])){
					
					if (isset($_POST['userid']) && isset($_POST['pass'])) {
                        require('connexion.php');
                        $id=$_POST['userid'];
                        $passw=$_POST['pass'];
                        $query = "SELECT *
                                  FROM administrateur
                                  WHERE '$id'=administrateur.userid
                                  AND '$passw'=administrateur.password";
                        $mysql=mysql_query($query) or die ('error requete');
                        if (mysql_num_rows($mysql) > 0) {
                            header("Location: admin/");
                        } else {
                            echo "Ce compte n'existe pas.";
                        }
                    }
				}
				?>
        </section>
<?php require('footer.php'); ?>