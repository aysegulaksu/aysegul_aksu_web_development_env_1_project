<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aysegul_aksu_web_development_env_1_project</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
                                             <!-- Header-->
                                             <header class="page-header">
        <div class="container">
            <div class="header-flex">
                <div class="logo">
					<a href="index.php">Aysegul Aksu</a>
				</div>
                <div class="bar">
					<i class="fa-solid fa-bars"></i>
				</div>

                <nav>
                    <ul class="header-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Me</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
     <!-- Banner-->
     <section class="banner">
        <div class="text-box">
            <h2>We are almost there</h2>
            <div id="countdown"></div>
        </div> 
    </section>
    <section class="date">
        <div class="container">
            <h3>My first and last PHP code</h3>
            <div id="date"><?php echo date('F j, Y'); ?></div> 
        </div>
    </section>
                       <!-- One Column--> 
    <section class="php">
        <div class="container">
            <div class="php-flex">
                <div class="left">
                    <h2>PHP: The Undying Legend</h2>
                    <p>Apparently, this is the topic that keeps resurfacing as a headline once in a while, like a never-ending saga.</p>
                    <p> It's like a fiery debate caught between the "punk is dead" and "Microsoft is dead" discussions. </p>
                    <p>Frankly, I have absolutely no idea why PHP gets all this attention, probably because I'm blissfully unaware of its inner workings, except for the fact that it generously offers side effects like killer headaches and depression. </p>
                </div>
                <div class="right"> </div>
            </div>  
            <p span class="bold-statement">  The jury might still be out on whether PHP is dead, but personally, I would say, if it's not, let's make sure we put the final nail in the coffin.</p>
        </div>
    </section>
 
      <!-- Portfolio--> 
    <section class="portfolio">
        <div class="container">
            <h2>We also had some fun</h2>
            <h3>I definetly had fun!</h3>
            <div class="portfolio-flex">
                <div class="left">
                    <div class="card vertical img1"></div> 
                    <div class="card horizontal img2"></div> 
                </div>
                <div class="right">
                    <div class="card horizontal img3"></div>
                    <div class="card vertical img4"></div>
                </div>
            </div>       
        </div>
    </section>
                        <!-- About--> 
    <section class="about">
        <div class="container">
            <div class="about">
                <h2>About me...</h2>
                <div class="line"></div>
                <div class="about-flex">
                    <div class="left">
                        <h2>Well what to say</h2>
                        <p>Oh, where do I even begin with myself? I'm just a mind-bendingly average individual, blessed with an uncanny ability to blend seamlessly into the crowd and go completely unnoticed. </p>
                        <a href="about.php" class="btn">If you must!</a>
                    </div>
                    <div class="right"></div>
                </div>
            </div>
        </div>
    </section>

                
    <!-- Footer--> 
    <footer>
        <div class="container">
            <div class="footer-flex">
                <div class="text">
                    <h3>© All rights not reserved.</h3>                
                </div> 
            </div>
        </div>        
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		$(window).scroll(function() {    
		    var scroll = $(window).scrollTop();

		    if (scroll >= 100) {
		        $(".page-header").addClass("has-bg");
		    } else {
		        $(".page-header").removeClass("has-bg");
		    }
		});
	</script>
    <script src="js/main.js"></script>
</body>
</html>
