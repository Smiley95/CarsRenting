<?php require('header.php'); ?>
<?php require('nav.php'); ?>
		<div class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
                    </ol>
                <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../images/image1.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="../images/img2.jpg" alt="...">
                    <div class="carousel-caption">		
                    </div>
                </div>
                <div class="item">
                    <img src="../images/image2.jpg" alt="...">
                </div>
            </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
		<section class="section_home">
                <article>
                    <h1>Welcome</h1>
                    <p>Welcome to "Motor's house, in our site we offer to our clients plenty of luxurious cars. 
						Motor's house is known for the great server,
						the good quality and espacially the great deals and 
						offers which we offently present to our dear client.
						Hope you like the content and keep visiting us. </p>
                </article>
                <article>
                    <h2>Where are we?</h2>
				<div class="map">
					<div class="par">
                        <p>2075 Marsa Sidi Youssef Road<br>
                        </p>
                        <p>Telephone  +216 250 652 38<br>
                        Freephone  +216 717 546 85<br>
                        FAX        +216 725 854 31<br>
                        E-mail     mail@google.com</p>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.6369459848474!2d10.17462011478785!3d36.80325417522838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34713c52ef0b%3A0xc704f99e4095093c!2sRue+des+Salines%2C+Tunis!5e0!3m2!1sen!2stn!4v1448981504588" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				</article>
            </section>
<?php require('footer.php'); ?>