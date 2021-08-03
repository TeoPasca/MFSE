<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MFSE</title>
	<link rel="stylesheet" href="style.css"/>
	<script src="https://kit.fontawesome.com/1e7416c8f2.js" crossorigin="anonymous"></script>

</head>

<body>
<!-- HEADER -->
<header>
	<h1> Carl Gustav Jung</h1>
	<div class="login-menu">
		<ul>
			
			<li class="menu-item"><a class="menu-link" href="./SignIn.php">Sign In</a></li>
			
			<li class="menu-item"><a class="menu-link" href="./SignUp.php"><i class="fas fa-sign-in-alt"></i>Sign Up</a></li>
		</ul>
	
	
</header>
<!--END HEADER -->

<!-- SECTION -->
<section class="banner">

	<img src="./img/jung.jpg" id="img" alt="Man above thess city">
	<div class="welcome">
		<h2><span>Man</span> and his <span>archetypes</span></h2>
	</div>
	
</section>
<!-- END SECTION -->

<!-- NAV -->
<nav class="main-nav">
	<ul id="ul">
		<li><a href="./shadow.html">The Shadow</a></li>
		<li><a href="./anima.html">The Anima</a></li>
		<li><a href="./animus.html">The Animus</a></li>
		<li><a href="./self.html">The Self</a></li>
	</ul>
	
</nav>
<!-- END NAV -->

<!-- MAIN -->
<main>
	<article>
		<h2> Collective Unconscious</h2>
		<p class="bold"> Collective unconscious refers to structures of the unconscious mind which are shared among beings of the same species. It is a term coined by Carl Jung. According to Jung, the human collective unconscious is populated by instincts, as well as by archetypes: universal symbols such as <span>The Tree of Life</span>, <span>The Wise Old Man</span>,  <span>The Shadow</span>, and <span>The Hero</span>. Jung considered the collective unconscious to underpin and surround the unconscious mind, distinguishing it from the personal unconscious of Freudian psychoanalysis. He argued that the collective unconscious had profound influence on the lives of individuals, who lived out its symbols and clothed them in meaning through their experiences. The psychotherapeutic practice of analytical psychology revolves around examining the patient's relationship to the collective unconscious.
		</p>	
	</article>
	 <ul id="t" class="images">
		<li><img src="img/TheTreeOfLife.jpg"  alt="TheTreeOfLife"></li>
		<li><img src="img/filemon.jpg" alt="filemon"></li>
		<li><img src="img/TheShadow.jpg" alt="TheShadow"></li>
		<li><img src="img/TheHero.jpg" alt="CollectiveUnconscious"></li>
		
	
	
	</ul> 
	
	
</main> 
<!-- END MAIN -->

<section class="join">
	<h3> Join Collective Unconscious</h3>
	
	
	<form>
		<input type="email" name="email" placeholder="Subscribe" required>
	</form>	

<!-- FOOTER -->
<footer>
	
	<p class="copyright"> Copyright 2021 Man and his archetypes.</p>
</footer>

<!-- END FOOTER -->
<script type="text/javascript">

function record(){
	console.log("It was clicked.");
}
var ul = document.getElementById("ul");
ul.addEventListener('click', record, false);
</script>

</body>

</html>


