<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="./favicon.ico">
		<title>Association I.D.E. - Informatique et droit des étrangers</title>
		<!-- Bootstrap core CSS -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link rel="./stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<!-- Custom styles for this template -->
		<link href="./css/owl.carousel.css" rel="stylesheet">
		<link href="./css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="././assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="./js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll" style="padding-top:15px">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="./index.html#page-top">
					<span style="color:#e87613;font-family:'Open Sans',sans-serif;">
					<b>Association IDE</b>
					</span>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="./index.html#asso">L'association I.D.E.</a>
						</li>
						<li>
							<a class="page-scroll" href="./index.html#lodetis">L'outil Lodétis</a>
						</li>
						<li>
							<a class="page-scroll" href="./index.html#liens">Liens utiles</a>
						</li>
						<li>
							<a class="page-scroll" href="./index.html#contact">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<?php
		include("./connect.php");
		
		$lang = "fr";
		if(isset($_GET["lang"])){
		    if($_GET["lang"]=="es"){
		       $lang = "es";
		    }
		    if($_GET["lang"]=="en"){
		       $lang = "en";
		    }
		    if($_GET["lang"]=="ar"){
		       $lang = "ar";
		    }
		}
		
		$id = "MIL-0";
		if(isset($_GET["id"])){
    		if(substr($_GET["id"],0,3)=="REP" || substr($_GET["id"],0,3)=="MIL" || substr($_GET["id"],0,3)=="DOC"){
		        $id = $_GET["id"];
		    }
		}
		
    $sql = "SELECT * FROM `lodetis_ts` WHERE `id` LIKE :id;";

    // On envoie la requête :
    $req = $link->prepare($sql);
    $req->execute(array(':id' => $id));
    
    $question = "";
    $id_oui = "";
    $id_non = "";
    
    $reponse = 0;
    
    // Récupération des informations sur la question
    while($data = $req->fetch()){
        $question = $data["question"];
        $id_oui = $data["id-oui"];
        $id_non = $data["id-non"];
        if($lang != "fr"){        
           $question2 = $data["lang-".$lang];
           if($question2 == ""){
              $question2 = "Question en cours de traduction. Vous voulez nous donner un coup de main&nbsp;? Contactez-nous sur notre adresse de courriel asso.ide@protonmail.com";
           }
        }
        if($data["id-oui"]=="" && $data["id-non"]==""){
           $reponse = 1;
        }
    }
    
    
		?>
		<section id="lodetis-question" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
						  <br/><br/>
							<h2><a href="lodetis-demo.php">LODÉTIS-DÉMO</a></h2><br/><br/>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2 text-center">
					</div>
					<div class="col-md-8 text-center">
						<div class="mz-module-about bloc-texte">
					    <p><b><i>Cette démonstration montre l'arbre des questions uniquement dans le cas où c'est le statut de militaire qui permet l'obtention du titre de séjour.</i></b>
					    </p>
					  </div>
					</div>
					<div class="col-md-2 text-center">
					</div>
        </div>

				<div class="row">
					<div class="col-md-12 text-center">
					&nbsp;
					</div>
        </div>

				<div class="row">
					<!-- question -->
					<div class="col-md-2 text-center">
					</div>
					<div class="col-md-8 text-center">
						<div class="mz-module-about bloc-texte">
							<p>
                <?php 
                if($lang=="fr"){
                   echo $question;
                }else{
                   echo $question.'
							</p>
						</div>
					</div>
					<div class="col-md-2 text-center">
					</div>
					<!-- fin question -->
				</div>
				<div class="row">
					<!-- question -->
					<div class="col-md-2 text-center">
					</div>
					<div class="col-md-8 text-center">
						<div class="mz-module-about bloc-texte">
							<p>
                '.$question2;
                }?>
							</p>
						</div>
					</div>
					<div class="col-md-2 text-center">
					</div>
					<!-- fin question -->
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-12 text-center">
					&nbsp;
					</div>
        </div>
				<?php if($reponse==1){echo "<!--";} ?>
				<div class="row">
					<div class="col-md-2 text-center">
					</div>
					<a href="lodetis-demo.php?id=<?php echo $id_oui."&amp;lang=".$lang;?>">
					<div class="col-md-3 text-center">
						<div class="mz-module-about bloc-texte">
							<p>
							   <?php
							   $oui = array("ar"=>"نعم","es"=>"Si","en"=>"Yes");
							   $message = "Oui";
							   if($lang != "fr"){
							      $message.= " / ".$oui[$lang];
							   }
							   echo $message;
							   ?>
							</p>
						</div>
					</div>
					</a>
					<div class="col-md-2 text-center">
					</div>
					<a href="lodetis-demo.php?id=<?php echo $id_non."&amp;lang=".$lang;?>">
					<div class="col-md-3 text-center">
						<div class="mz-module-about bloc-texte">
							<p>
							   <?php
							   $non = array("ar"=>"لا","es"=>"No","en"=>"No");							   
							   $message = "Non";
							   if($lang != "fr"){
							      $message.= " / ".$non[$lang];
							   }
							   echo $message;
							   ?>
							</p>
						</div>
					</div>
					</a>
					<div class="col-md-2 text-center">
					</div>					
				</div>
				<?php if($reponse==1){echo "-->";} ?>
				<!--
				<div class="row">
					<div class="col-md-12 text-center">
					&nbsp;
					</div>
        </div>
				<div class="row">
					<div class="col-md-2 text-center">
					</div>
					<div class="col-md-8 text-center">
						<div class="mz-module-about bloc-texte">
					    <p>Changer de langue ?</p>
					    <p>
					    <a href="lodetis-demo.php?id=<?php echo $id."&amp;lang=en";?>">anglais</a> / 
					    <a href="lodetis-demo.php?id=<?php echo $id."&amp;lang=ar";?>">arabe</a> / 
					    <a href="lodetis-demo.php?id=<?php echo $id."&amp;lang=es";?>">espagnol</a> / 
					    <a href="lodetis-demo.php?id=<?php echo $id;?>">français</a>
					    </p>
					  </div>
					</div>
					<div class="col-md-2 text-center">
					</div>
        </div>
        -->
			</div>
			<!-- /.container -->
		</section>

		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Thème conçu par <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a><!-- - Code source de ce site disponible <a href="https://framagit.org/">sur Framagit</a>.--></p>
			</div>
		</footer>


		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/owl.carousel.min.js"></script>
		<script src="./js/cbpAnimatedHeader.js"></script>
		<script src="./js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="./js/ie10-viewport-bug-workaround.js"></script>

	</body>
</html>