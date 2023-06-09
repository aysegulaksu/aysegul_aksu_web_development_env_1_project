<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aysegul_aksu_web_development_env_1_project</title>

    <link rel="stylesheet" href="assets/css/about.css">
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
            <h2>Once upon a time</h2>
        </div> 
    </section>
    <section class="date">
        <div class="container">
            <div id="date"><?php echo date('F j, Y'); ?></div> 
        </div>
    </section>
                      
    <section class="about">
        <div class="container">
            <div class="about">
                <h2>All about me</h2>
                <p>Where do I even begin with myself? I'm just a mind-bendingly average individual, blessed with an uncanny ability to find myself in extraordinary places, meeting amazing people and sharing and telling wonderful stories. I have covered wars and pop stars, Presidents and fishmongers, war chiefs and chefs.</p>
                <div class="about-flex">
                    <div class="left">
                    <p>For the past nine years, I have resided in Montreal, a city teeming with diverse cultures and a fervor for life. Yet, the cold winters remain an unwelcome guest, as I yearn for the warmth of sun-kissed days. Animals hold a special place in my heart, and the playful antics of my mischievous feline companion remind me of the beauty found in nature's creations.</p>
                    </div>
                    <div class="right"></div>
                </div>
                <p span class="bold-statement"> "Difficult to see. Always in motion is the future." - Yoda</p>                
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
