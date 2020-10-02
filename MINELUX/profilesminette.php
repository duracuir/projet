 <?php
    require("connexionBD.php");
initMigration($pdo);
if (isset($_GET["username"])) {
  $username = $_GET["username"];
  try {
    $statement = $pdo->prepare( 
     "SELECT username, photos, (YEAR(CURDATE())-date_format(datenaiss, '%Y')) as datenaiss, ville, epilation,tattoo, langue, piercing, apropos, sexe FROM membres WHERE username = :username ORDER BY orderGallery DESC"
      );
    $stmt = $pdo->prepare("SELECT * FROM reception WHERE username = :username");
    $sql = $pdo->prepare("SELECT * FROM deplacement WHERE usernamed = :usernamed");

    $statement->execute(["username" => $username]);
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    
    $stmt->execute(["username" => $username]);
    $recep = $stmt->fetchAll(PDO::FETCH_OBJ);

    $sql->execute(["usernamed" => $username]);
    $deplace = $sql->fetchAll(PDO::FETCH_OBJ);
  } catch (PDOException $e) {
      echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
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
        <link rel="stylesheet" href="css/profilesminette.css">
        <script src="js/script.js"></script>
        <script type="application/javascript">
                var user_info = { 'logged_in':true, 'user_id': null, 'user_type': null,};
                var signon_link = "/login2.php/";
        var env = 'production';
                    </script>
</head>
    <body id="profile">
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
                        <a class="btn btn-primary" href="connexion.php">S'identifier</a>
                        <a class="btn btn-tertiary" href="signup.html">S'inscrire</a>
                        <a class="btn btn-secondary" href="contact.html">Nous Contater</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Minettees"></a>
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
                    <h1 class="page-title">Nom de la minette</h1>
                </div>
                    <div class="col-xs-4">
                    <p class="views">Derniere modification: jj/mm/aa: Nbr de vues:??</p>
                </div>
            </div>
            </div>
            </div>
		</header>
           <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a> </li>
                <li class="breadcrumb-item"><a href="/minettes/girls/paris/">ville de la minette </a> </li>
                <li class="breadcrumb-item active">nom de la minette</li>
            </ol>
        </div>
<form class="updating" action="profilesminette.php?username=<?php echo $username;?>" method="POST">
        <main class="container">
            <div class="row">
            <div class="content full">
                <div class="row">
                    <!-- Left side -->
                    <div class="col-xs-4">
                        <p class="slogan"><strong>Ville de la minette</strong></p> 
                         <div class="pictures">
                            <div class="row lightgallery row-sm">
                                <div class="col-xs-12 profile-picture">                        
                                    <div class="img"> 
                                    <?php 
                                    echo '<a class="pitem" data-exthumbimage="lien de la photo.jpeg" href="galleryphoto.php?username='.$username.'">
                                            <img class="img-full" src="images/gallery/'.$results[0]->photos.'" alt="detail de la photo">
                                    </a>' 
                                ?> 
                                <a href="galleryphoto.php"><p>Voir plus...</p>
                                </a>
                                                </div>

                                            </div>
                                         
                                <!-- Photos -->
                       
                           
                               
                                    
                        </div>  

								</div>

                         <!-- Boutton pour signaler une annonce -->

						
                        <!-- <div class="buttons">
                                <div class="row row-sm">
                                        <div class="col-xs-12"><a href="javascript:void(0);" data-action="problem" class="btn btn-black btn-block add_report"><styles> background: red;</styles>Signaler l'annonce</a>
                                        </div>
                                </div>
                        </div> -->
                            </div>

                                            
            <div class="col-xs-8">
                <div class="box info">
                    <div class="row">
                        <div class="col-xs-8">
                            <h2 class="person">
                                <span class="name"><?php echo $username;?></span>
                                <span class="city">(<?php echo $results[0]->datenaiss;?>)</span><br> 
                                <span class="age"><?php echo $results[0]->ville;?></span>
                            </h2>
                        </div>
                        
<!--                        Boutton pour voter -->
                        
                        <div class="col-xs-4 clearfix gotm_div">
                                <a href="/" class="btn btn-primary cta">Votez pour moi !</a>
                        </div>
                        
                        <div class="col-xs-12">
                            <h3 class="box-title">Biographie</h3>
                        </div>
                        <div class="col-xs-6">
                            <div class="list">
                                <div class="row row-sm">
                                    <div class="col-xs-6 label-ct">Sexe</div>
                                    <div class="col-xs-6">:<?php echo $results[0]->sexe ?></div>                            
                                    <div class="col-xs-6 label-ct">Âge</div>
                                    <div class="col-xs-6">:<?php echo $results[0]->datenaiss;?></div>
                                    <div class="col-xs-6 label-ct">Orientation sexuelles</div>
                                    <div class="col-xs-6">:</div>
                                    <div class="col-xs-6 label-ct">Services offerts pour</div><div class="col-xs-6"><span>:</span><br><span></span></div>                               
								</div>
                            </div>
                        </div>
                     <div class="col-xs-6">
                         <div class="list">
                            <div class="col-xs-6 label-ct">Epilation du maillot</div>
							<div class="col-xs-6">:<?php echo $results[0]->epilation;?></div>
                            <div class="col-xs-6 label-ct">Tattoo</div>
                            <div class="col-xs-6">:<?php echo $results[0]->tattoo;?></div> 
                            <div class="col-xs-6 label-ct">Piercings</div>
                            <div class="col-xs-6">:<?php echo $results[0]->piercing;?></div>
                            <div class="col-xs-6 label-ct">Langues</div>
                            <div class="col-xs-6">:<?php echo $results[0]->langue;?></div>
                            
                            <div class="col-xs-6 label-ct">Disponible pour</div>
                            <div class="col-xs-6">
                                <span class="label-ct">Reçoit :</span><br>
                                <span class="label-ct">Déplace :</span><br>
                            </div>
                        </div>
                        </div>
                     </div>
                    </div>              
                <div class="box about">
                    
                    <h3 class="box-title half">A propos de moi</h3>
                    <p>
                        <span>
                            <?php echo $results[0]->apropos;?>
                        </span>
                    </p>
                </div>
                
                <div class="row row-sm prices-contact" wfd-id="74">
                    <div class="col-xs-6" wfd-id="75">
                        <div class="box contact-info" wfd-id="76">
                            <h3 class="box-title">Coordonnées</h3>
                            <div class="row row-sm" wfd-id="77">
                                <div class="col-xs-6 label-ct" wfd-id="89">Ville de base:</div>
                                <div class="col-xs-6" wfd-id="88">
                                    <a href="/" class="bold" title="/">.. </a>
                                </div>
                                <div class="col-xs-6 label-ct" wfd-id="87">Disponible en:</div>
                                    <div class="col-xs-6" wfd-id="86">
                                      <a href="/" class="bold" title="/">...</a> <br>
                                      <a href="/" class="bold" title="/">.. </a> <br>
                                  </div>
                                <div class="col-xs-6 label-ct" wfd-id="85">Téléphone:</div>
                                <div class="col-xs-6 label-ct" wfd-id="82">
                                    <div class="phone" wfd-id="83">
                                        ..<div class="phone_btn phone_btn_small" wfd-id="84">
                                            <a href="javascript:void(0);" onclick="showNumber(9302);">Voir le numero</a>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-xs-6 label-ct" wfd-id="81">Consignes pour le téléphone:
                                </div>
                                <div class="col-xs-6" wfd-id="80">...
                                </div>
                                <div class="col-xs-6 label-ct" wfd-id="79">Apps Available:
                                </div>
                                <div class="col-xs-6" wfd-id="78">...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--  Afficher les Services offertent -->
              
                <div class="box service-offered">
                        <h3 class="box-title half">Services</h3>
                        <div class="row">
                            <ul class="col-xs-4">                                
                                
                            </ul>                                                            
                            <ul class="col-xs-4">                   
                                
                            </ul>    

                            <ul class="col-xs-4">                               
                               
                            </ul>
                        </div>
                    </div>
                <div class="col-xs-6">
                            <div class="box prices">
                                <h3 class="box-title">Mon Cadeau</h3>
                                <div class="row row-sm">
                                <div class="col-xs-5 label-ct">Reçoit:</div>
                                        <div class="col-xs-7">
                <?php foreach ($recep as $user) { ?>
                     <?php echo $recep[0]->heurerecep;?> heures / <?php echo $recep[0]->montant;?> Roses <br>  
                <?php }?>
                                     <div class="col-xs-5 label-ct">Déplace:</div>
                                        <div class="col-xs-7">
                <?php foreach ($deplace as $users) { ?>
                    <?php echo $deplace[0]->heuredep;?> heures /<?php echo $deplace[0]->montantdep;?>  Roses</div>
                                </div>
                            </div>
                        </div>
                <?php }?>
            </form>   
                    </div>
                           <!-- Commentaires -->

<!--
                    <div class="box comments">
                        
                        <div class="clearfix">
                            <h3 class="comments-title pull-left">Commentaires <span class="comm-num">0</span></h3>
                        </div>
                             <p></p>
                        </div>
-->
                                    </div>
                               
                
            <!-- INFORMATION DETAILLES SUR LA MINETTE-->
            </div>    

                
                                </div>
                
                            </div>
            
                        </div>
<!--
    <div class="box comments" wfd-id="65">
                        <div class="clearfix" wfd-id="66">
                            <h3 class="comments-title pull-left">Commentaires <span class="comm-num" wfd-id="67">0</span></h3>
                                                            <a href="javascript:void(0);" class="btn btn-primary pull-right submit-comment" data-toggle="modal" data-target="#modal-comment">Ajouter un commentaire</a>
                                                    </div>
                                                    <p>Pas de commentaires jusqu'a présent</p>
                                            </div>
-->
                    </div>
        
                </div>
    
                        <div class="fixed-ph-no">
                            
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="phone">
                    <div class="phone_btn">
                        <a href="" onclick="">Voir le numéro</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 right">
                                    <a href="javascript:void(0);" class="favorite">
                        <span>Ajouter au favoris</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path d="M4,23c0-9.132,7.183-17,16-17c4.641,0,8.985,1.945,12,5.5C35.016,7.941,39.359,6,44,6c8.815,0,16,7.868,16,17 c0,11.949-28,35-28,35S4,34.697,4,23z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                        <script type="text/javascript">
                                            var escort_id = '9302';
                                            var add_fav = '/escort/ajax_add_fav/';
                                            var del_fav = '/escort/ajax_del_fav/';
                                            var translate = { 'add_fav': 'Ajouter au favoris', 'del_fav': 'Effacer de votre liste de Favoris' , 'comment_added': 'Votre commentaire a été ajouté avec succès. Vous le verrez après que nos modérateurs le confirment.' };
                                            var contact_me = '/escort/ajax_pm/';
                                            var gotm_link = '/escort/gotm_vote/';
                                            var get_phone = '/escort/get_phone/';
                                            var add_report = '/escort/add_report/';
                                            var add_comment = '/escort/add_comment/';   
                                        </script>
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