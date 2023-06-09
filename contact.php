<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aysegul_aksu_web_development_env_1_project</title>

    <link rel="stylesheet" href="assets/css/contact.css">
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
            <h2>Contact the Proto Webdesigner... </h2>
            <h3>if You're Brave Enough!</h3>
        </div> 
    </section>
    <section class="date">
        <div class="container">
            <div id="date"><?php echo date('F j, Y'); ?></div> 
        </div>
    </section>
                      
    <section class="contact">
        <div class="container">
            <h2>May the hexadecimal forces be with you on this extraordinary journey!</h2>
            <p>Enter the Enigmatic Realm of the Proto Webdesigner, Where the Boundaries of Creativity and Code Collide... But Beware, Communicating with this Elusive Being May Leave You Questioning the Very Fabric of Web Design</p>
            <p>Brave souls, heed the call and follow the cryptic instructions within the realm of hex code to reach us. Let the colors guide you, for only those who unravel the riddles shall make contact with the elusive Proto Webdesigner.</p>         
        </div>
    </section>  
    <section class=hex>
        <div class="container">
            <div class="hex-flex">
                <div class="hex-text">
                    <p>Adress: "504F20373235343933342C20416C7465726E61<br>746976652E20556E69766572736520373636"</p>
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
