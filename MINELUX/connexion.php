<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $_SESSION['username'] = $username;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `membres` WHERE username='$username' 
  and password='$password'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
      header('location:panel.php');
  }else{

     $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}

?>


<!DOCTYPE html>
<html>
<head>
	<tilte></tilte>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=1200, initial-scale=0">
        <title >Escorts Girl au Cameroun</title>
        <link href="fond/favicon.png" rel="icon" type="fond/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/Connexion.css">
        <script src="js/script.js"></script>
</head>
    <body id="home">
        <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter id="filter-shadow" x="0" y="0" width="100%" height="100%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
            <feOffset dx="1" dy="1"></feOffset>
            <feComponentTransfer>
                <feFuncA type="linear" slope="0.3"></feFuncA>
            </feComponentTransfer>
            <feMerge>
                <feMergeNode></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
        </filter>
    </defs>
    <g id="icon-password">
        <path d="M29.41,28C27.68,22.22,22.33,18,16,18C8.28,18,2,24.28,2,32c0,7.72,6.28,14,14,14h0c6.33,0,11.68-4.22,13.41-10H41v4h8v-4h5 v6h8V28H29.41z M16,38c-3.31,0-6-2.69-6-6c0-3.31,2.69-6,6-6c3.31,0,6,2.69,6,6C22,35.31,19.31,38,16,38z"></path>
    </g>
    <g id="icon-user">
        <path d="M59.04,51.44l-17.12-9.32c5.72-6.2,5.8-15,5.8-15.4V16.28c0-0.08,0-0.2-0.04-0.28C46.48,8.8,38.6,4,32,4l0,0 c-6.6,0-14.52,4.8-15.72,11.96c0,0.08-0.04,0.2-0.04,0.28v10.48c0,0.4,0.08,9.2,5.8,15.4L4.92,51.44C4.36,51.72,4,52.32,4,52.96 v3.52C4,58.4,5.56,60,7.52,60h48.96C58.4,60,60,58.44,60,56.48v-3.52C59.96,52.32,59.6,51.72,59.04,51.44z"></path>
    </g>
    <g id="icon-real-photos">
        <polygon points="16.67,4 13.85,20 16.89,20 19.1,7.48 56.52,14.07 52.18,38.69 48,37.96 48,50.14 53.05,51.03 60,11.64"></polygon>
        <path d="M4,20v40h44V20H4z M45,48H7V23h38V48z M41,45H11l5-7l5,4l5-7l5,5l5-8L41,45z M15,28c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3 c1.66,0,3-1.34,3-3C18,29.34,16.66,28,15,28z"></path>
    </g>
    <g id="icon-discretion-guaranteed">
        <path d="M50,28v-6c0-9.93-8.08-18-18-18c-9.93,0-18,8.07-18,18v6H8v32h48V28H50z M34,42.45V51c0,1.1-0.9,2-2,2s-2-0.9-2-2v-8.55 c-1.19-0.69-2-1.97-2-3.45c0-2.21,1.79-4,4-4s4,1.79,4,4C36,40.48,35.19,41.75,34,42.45z M18,28v-6c0-7.72,6.28-14,14-14 s14,6.28,14,14v6H18z"></path>
    </g>
    <g id="icon-trusted-website">
        <path d="M49.97,19.19L49.32,14l-4.17-3.15L42,6.68l-5.19-0.65L32,4l-4.81,2.03L22,6.68l-3.15,4.17L14.68,14l-0.65,5.19L12,24 l2.03,4.81L14.68,34l4.17,3.16L22,41.32l5.19,0.65L32,44l4.81-2.03L42,41.32l3.15-4.17L49.32,34l0.65-5.19L52,24L49.97,19.19z M34.5,32.54h-4v-11.5l-3,1.5v-4l4-2h3V32.54z"></path>
        <path d="M56,54l-7.7-1.33L45.61,60l-8.58-14.86l0.57-0.24l4.77-0.6l1.25-0.16l0.76-1.01l2.9-3.83l0.15-0.11L56,54z M26.4,44.89 l-4.77-0.6l-1.26-0.16l-0.76-1.01l-2.9-3.83l-0.15-0.11L8,54l7.7-1.33l2.7,7.33l8.58-14.86L26.4,44.89z"></path>
    </g>
    
</svg>
        <header>
        	
                <div class="top-nav">
                <div class="container clearfix">
                    <ul class="nav navbar-nav">
                        <li><a href="#top recherche">Top Recherché</a></li>
                        <li><a href="#top favorites">Top Favorites</a></li>
                        <li><a href="#nouvelles">Nouvelles</a></li>
                    </ul>

                    <div class="pull-left"></div>
                    <div class="pull-right">
                        <!-- <a class="btn btn-primary" href="login.html">S'identifier</a> -->
                        <a class="btn btn-tertiary" href="login2.php">S'inscrire</a>
                        <a class="btn btn-secondary" href="contact.html">Nous Contacter</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Escortes"></a>
                    </div>
                    <div id="navbar">
                <ul class="nav navbar-nav">
                   <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="nouvelles.html">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="filles.html">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="garcon.html">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="vip.html">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="toursdeville.html">Tournées de Ville</a></li>
                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="index.php" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">Espace Privé</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
		<main class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <form action id="sign-in" class="clearfix" method="post">
                        <div class="col-xs-6 col-xs-offset-6">
                            <h4 class="title">S'identifier à votre compte</h4>
                            <p class="attention">Remplissez simplement le formulaire ci-dessous</p>
                            <div class="form-group input">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nom d'utilisateur">
                            </div>
                            <div>
                            <div class="form-group input">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de Passe">
                            </div>
                        </div>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="rememberMe" name="checkbox" value="1">
                            <label for="rememberMe">Souvenez-vous de moi</label>
                        </div>
                        <br>
                        <input type="submit" value="S'identifier" class="btn btn-primary">
                        <?php if (! empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
                        <p class="spad"><a href="mpforget.html">Mot de passe oublié?</a>
                            <br></p>
                        <p class="spad"><a href="login2.php">Inscrivez-vous gratuitement</a>
                            </p>
                        <p class="spad">Si vous avez encore des problemes n'hésitez pas à :<a href="contact.html" id="feelback"><b><span>Nous contater</span></br></a></p>
					<input type="hidden" id="csrf" name="csrf" value="eG1rNEgrZHZyZ0JBUFB4aUlRZTFjZz09">
                        </div>
                    </form>
                </div>
			</div>
        </main>
    <footer>
    	<div class="footer-top">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-4">
    					<svg viewBox="0 0 64 64">
    					<use xlink:href="#icon-real-photos"></use>
    					</svg>
    					<h4 class="line">Photo des Minettes réelles</h4>
    				</div>
    				<div class="col-xs-4">
    					<svg viewBox="0 0 64 64">
    					<use xlink:href="#icon-discretion-guaranteed"></use>
    					</svg>
    					<h4 class="line">Discretion assurée</h4>
    				</div>
    				<div>
    					<div class="col-xs-4">
    						<svg viewBox="0 0 64 64">
    						<use xlink:href="#icon-trusted-website"></use>
    						</svg>
    						<h4 class="line">Minette girl Cameroun</h4>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
        <div class="copy"><small>© MINELUX 2020 Copyrigth All rigths reserved. V1.0 </small></div>
    </footer>
</body>
</html>