<style type="text/css">
{
 margin: 0;
 padding: 0;
 border: 0;
}
/*=======================
Navigation Styling
========================*/
h1 {
 font-size: 65px;
 font-family: 'Goldman', cursive;
 text-align: center;
 color: #0f1635;
 padding: 25px;
 text-shadow: 2px 1px lightslategrey;
}

h1 a {
 text-decoration: none;
 color: #0f1635;
}

nav ul {
 position: relative;
 left: 76px;
 border-top: 2px solid #454545;;
 border-bottom: 2px solid #454545;;
 max-width: 80%;
 padding: 10px;
 margin: 0 97px;
}

nav ul li {
 display: inline;
 position: relative;
 left: 415px;
 font-family: 'Inter', serif;
 font-weight: 600;
 font-size: 28px;
 padding: 10px 20px;
}

nav ul li a {
 text-decoration: none;
 color: #191817;
 padding: 0 110px;
 transition: .3s;
}

nav ul li a:hover {
 color: #4f4e4e;
 transition: .3s;
}
/*=======================
Social Media Links
========================*/
.social-media {
 position: absolute;
 top: 2%;
 left: 82%;
 font-size: 30px;
 max-width: 80%;
 word-spacing: 7px;
}

.social-media a {
 text-decoration: none;
 color: black;
}

.social-media a:visited {
 color: #093eb1;
}
/*=======================
Footer
========================*/
footer {
 font-family: 'Inter', sans-serif;
 margin: 0 auto;
 padding-top: 295px;
 font-size: 14px;
 color: white;
}

footer p {
 background: #0f1635;
 padding: 19px 0;
 text-align: center;
 position: absolute;
 width: 1918px;
 max-width: 1920px;
 height: 15px;
}
</style>

<!--- FontAwesome --->
<script src="https://kit.fontawesome.com/4f19959d2d.js" crossorigin="anonymous"></script>

<!--- Google Fonts --->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1><a href="index.html">S.F.H Reviews</a></h1>
    <nav>
      <ul>
        <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="social-media">
    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a href="https://www.goodreads.com/"><i class="fab fa-goodreads"></i></a>
  </section>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
</div>

<footer>
	<p>Website Created By: Connie Standish | University of Florida</p>
</footer>

</body>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
