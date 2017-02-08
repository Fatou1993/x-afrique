  <?php

  session_start() ;

  if (isset($_SESSION['email']))
  {
   // select tout from la base de données	
  	
  	require('php/database.php');
          $dbh = Database::connect();
  		
  		$sql = "SELECT * FROM participants WHERE email = '".$_SESSION['email']."'"; 
  		
  		$sth = $dbh->prepare($sql);
          // $query Ã  executer
          $sth->execute();
  		
  		$membre = $sth->fetchAll(PDO::FETCH_ASSOC);
  	
  	
  	
  	
  ?>
  <!DOCTYPE html>
  <html lang="fr">
    <head>

      <!-- Basic Page Needs
      ================================================== -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>ANZISHA X-Forum</title>

      <!-- Mobile Specific Metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Favicon -->
      <link rel="shortcut icon" href="img/favicon.png"> 

      <!-- CSS
      ================================================== -->       
      <!-- Bootstrap css file-->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Font awesome css file-->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- Superslide css file-->
      <link rel="stylesheet" href="css/superslides.css">
      <!-- Slick slider css file -->
      <link href="css/slick.css" rel="stylesheet"> 
      <!-- smooth animate css file -->
      <link rel="stylesheet" href="css/animate.css">  
      <!-- Elastic grid css file -->
      <link rel="stylesheet" href="css/elastic_grid.css"> 
      <!-- Circle counter cdn css file -->
      <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>    
      <!-- Default Theme css file -->
      <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
      <!-- Main structure css file -->
      <!-- Other css file -->
      <link href="css/login.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <!-- Google fonts -->
      
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
     
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body> 
       <!-- BEGAIN PRELOADER -->
      <div id="preloader">
        <div id="status">&nbsp;</div>
      </div>
      <!-- END PRELOADER -->

      <!-- SCROLL TOP BUTTON -->
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
      <!-- END SCROLL TOP BUTTON -->

      <!--=========== BEGIN HEADER SECTION ================-->
        <header id="header">
          <!-- BEGIN MENU -->
          <a class="scrollToDown" href="#description"><i class="fa fa-angle-down"></i></a>
          <div class="menu_area">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
              <div class="container">
              <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="#header">Binet<span> X-Afrique</span></a>
                
                <!-- IMG BASED LOGO  -->
                <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
                
                       
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                  <li class="active"><a href="#">Accueil</a></li>
                  <li><a href="#description">Description</a></li> 
                  <li><a href="#programme">Programme</a></li> 
                  <li><a href="#equipe">Notre Equipe</a></li>   
                  <li><a href="#contact">Contacts</a></li>   
                  <nav class="main-nav" style="text-align : right;">      
                    <li><a class="cd-signup" href="#">Profil</a></li>
                    <li><a class="cd-signin" href="logout.php">Se déconnecter</a></li>      
                  <nav>                        
                </ul>     
  			  </ul>           
              </div><!--/.nav-collapse -->
              </div>     
            </nav>  
          </div>
  		
          <aside class="social">
              <ul class="bigsocialbar">
                  <li><a href=" https://twitter.com/XAfrique"><i class="fa fa-twitter fa-4x"></i> Twitter </a></li>
                  <li><a href="https://www.facebook.com/MamaAfricaX"><i class="fa fa-facebook fa-4x"></i>&nbsp; &nbsp; &nbsp; &nbsp;Facebook </a></li>    
              </ul>
          </aside>
          <!-- BEGIN SLIDER AREA-->
          <div class="wide-container">
            <div class="slider_area">
              <!-- BEGIN SLIDER-->          
              <div id="slides">
                <ul class="slides-container">

                  <!-- THE FIRST SLIDE-->
                  <li>
                    <!-- FIRST SLIDE OVERLAY -->
                    <div class="slider_overlay"></div> 
                    <!-- FIRST SLIDE MAIN IMAGE -->
                    <img src="img/anzishaforum.png" alt="img">
                    <!-- FIRST SLIDE CAPTION-->
                    <div class="slider_caption">
                      <h2>ANZISHA X-Forum</h2>
                      <p>Expo-Forum pour l'entrepreuneuriat en Afrique</p></br>
                      <p>Bienvenue dans votre espace personel, vous pouvez mettre à jour votre profil ci-dessous .</p>            
                    </div>
                  </li>

                  
                </ul>
                <!-- BEGAIN SLIDER NAVIGATION -->
              </div>
              <!-- END SLIDER-->          
            </div>
          </div>
          <!-- END SLIDER AREA -->
        
        </header>

      <!--=========== End HEADER SECTION ================--> 

  	<section id="profil">
        <div class="container">
          <div class="row col-lg-12 col-md-12">
            <!-- START ABOUT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Profil</h2>
               
  			 

      <form class="form-horizontal" method="POST" action="profilform.php" enctype="multipart/form-data">
          <div class="form-group">
              <label for="inputEmail" class="control-label col-xs-2">Email :</label>
              <div class="col-xs-10">
              <?php
  			echo '<input type="email" class="form-control" id="inputemail" value="'.$membre[0]['email'].'" placeholder="Email" disabled>';
              ?>
  			</div>
          </div>
          <div class="form-group">
              <label for="inputnom" class="control-label col-xs-2">Nom :</label>
              <div class="col-xs-10">
                  <input type="text" class="form-control" name="inputnom" id="inputnom" value="<?php echo $membre[0]['nom']; ?>">
              </div>
          </div>
  		<div class="form-group">
              <label for="inputprenom" class="control-label col-xs-2">Prenom :</label>
              <div class="col-xs-10">
                  <input type="text" class="form-control" name="inputprenom" id="inputnom" value="<?php echo $membre[0]['prenom']; ?>">
              </div>
          </div>
  		<div class="form-group">
              <label for="inputposte" class="control-label col-xs-2">Poste :</label>
              <div class="col-xs-10">
                  <input type="text" class="form-control" name="inputposte" id="inputposte" value="<?php echo $membre[0]['post']; ?>">
              </div>
          </div>
  		<div class="form-group">
              <label for="" class="control-label col-xs-2">Description :</label>
              <div class="col-xs-10">
                  <textarea class="form-control" name="inputdescription" id="inputdescription" value=""><?php echo $membre[0]['description']; ?></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="" class="control-label col-xs-2">Je suis un :</label>
              <div class="col-xs-10">
                   <select class="form-control" name="inputselect" id="inputselect">
  					<?php
  					function select($i , $j)
  					{
  							if ($i == $j)return "selected" ;
  							return "" ;
  					}
  					// le variable USER contient tout les informations sur le current user ...
  					$JESUIS = array("entrepreneur" , "investisseur" , "alumni IE" , "invité institutionnel" , "partenaire" , "étudiant" , "blogeur" , "professeur" , "organe de presse" , "je ne souhaite pas divulguer cette information");
  					for ($i = 0 ; $i < 10 ; $i++)
  					{
  						echo "<option value=".$i." ".select($i , $membre[0]['jesuis']).">".$JESUIS[$i]."</option>" ;
  					}
  					?>
  				</select>
              </div>
          </div>
  		<div class="form-group">
              <label for="" class="control-label col-xs-2">Photo de profil :</label>
              <div class="col-xs-10">
                  <input class="form-control" type="file" id="inputphoto" name="inputphoto" value="">
              </div>
          </div>
  		<div class="form-group">
              <label for="" class="control-label col-xs-2">Photo actuelle :</label>
              <div class="col-xs-10">
  			 <img src="<?php echo $membre[0]['img']; ?>" class="img-rounded" alt="Photo de profil" width="80" height="auto">
              </div>
          </div>
          <div class="form-group">
              <div class="col-xs-offset-6 col-xs-10" style="text-align:centre ;">
                  <button type="submit" class="btn btn-primary cd-signup">Mettre à jour</button>
              </div>
          </div>
      </form>
  				
            </div>
          </div>
        </div>
      </section>
  	
      <!--=========== BEGAIN DESCRIPTION SECTION ================-->
      <section id="description">
        <div class="container">
          <div class="row col-lg-12 col-md-12">
            <!-- START DESCRIPTION HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Description</h2>
              <div align="justify">
              Nous sommes des élèves de l'Ecole Polytechnique que ne laissent pas indifférents les problématiques du développement africain. Nous voyons nos connaissances d’ingénieur comme un moyen qui peut nous permettre de proposer des solutions aux problèmes propres au continent africain.
              Ainsi, il est important pour nous de mieux faire connaître le continent, de parler des opportunités qui s’y trouvent et de partager notre passion.</br></br>
              A cet effet, nous organisons une journée de sensibilisation sur la dynamique entrepreneuriale en Afrique, et sur l'attractivité du continent pour des initiatives innovantes du fait de sa croissance et des nombreuses opportunités encore peu exploitées. Elle aura lieu le <strong>vendredi 26 février 2016</strong> sur le <strong>campus de l’Ecole polytechnique.</strong></br></br>
              Cette journée s’articulera autour de l’exposition des activités des différents entrepreneurs avec des projets vers le continent et de conférences thématiques autour de diverses problématiques soulevées par ces initiatives. Cette journée s'incrit dans la continuité de l'exposition sur <a href="http://www.lesgrandsmoyens.fr/" target="_blank">Les Grands Moyens</a> qui se tiendra tout au long de la semaine sur le campus de l'Ecole Polytechnique. C’est une enquête visuelle et analytique s’intéressant aux parcours de cinq PME africaines pour montrer la manière dont elle favorise le développement du continent. Les PME concernées sont donc:</br></br>
              <ul>
                <li>
                   <a href="http://www.cds.mr/" target="_blank"> CDS </a>  en Mauritanie qui propose un accès aux services d’eau et d’électricité aux populations rurales grâce aux énergies renouvelables.
                </li></br>
                <li>
                  <a href="http://http://www.cdpa-int.com/agrisatch/" target="_blank"> AGRISATCH </a> au Bénin qui produit localement des œufs de qualité en grande quantité.</br>
                </li></br>
                <li>
                  <a href="http://www.ietp.com/fr/iot" target="_blank"> IOT </a> à Madagascar qui réalise de l’aquaculture industrielle de concombres de mer.</br> 
                </li></br>
                <li>
                  <a href="http://www.nest.sn/" target="_blank"> NEST </a> au Sénégal qui propose un suivi médical complet de la femme et de l’enfant en bas-âge. 
                </li></br>
                <li>
                  <a href="http://wecyclers.com/" target="_blank"> WECYCLERS </a> au Nigéria qui offre un service de recyclage innovant et adapté aux quartiers informels de la ville de Lagos.
                </li></br>
              </ul>
              De manière plus générale, il nous semble important de montrer toutes les initiatives qui sont prises dans le contexte de la croissance africaine et des nombres opportunités présentes sur le continent. C’est pourquoi lors du forum, nous invitons d’autres entrepreneurs à également présenter leur projet.
             </br></br>N'hésitez plus et rejoignez nous. </br></br>
             <h4><strong>In Africa we trust.</strong></h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== END DESCRIPTION SECTION ================-->

      <!-- START PROGRAM CONTENT -->
      <section id="programme">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="programme_area">
                <!-- START programme HEADING -->
                <div class="heading">
                  <h2 class="wow fadeInLeftBig">Programme</h2>
                </div>

                <!-- START programme CONTENT -->
                <div class="programme_content">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="programme_featured">
                        <div class="panel-group" id="accordion">
                          <!-- START SINGLE FEATURED ITEAM #1-->
                          <div class="panel panel-default wow fadeInLeft">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  <div class="row">
                                    <span class="col-xs-12 col-sm-12">
                                         <span class="fa fa-check-square-o"></span>
                                         Sessions de l'apres-midi :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <span class=" time_session">
                                            <i class="fa fa-clock-o"></i>
                                          <span class="time">13:00&nbsp;-&nbsp;19:00</span>
                                          <span class="room">
                                            <i class="fa fa-map-marker"></i>&nbsp;
                                            <span class="room_name">Grand Hall</span>
                                          </span>
                                    </span>
                                  </div>
                                   
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                               <ul>
                                 <li>Exposition Les Grands Moyens</p></li>
                                 <li>Exposition des projets des startups</li>
                                 <li>Trois conférences thématiques : numérique, énergie, développement durable</li>
                                 <li>Concours de pitch de startup</li>
                                 <li>Conférence de présentation de l'exposition: Les Grands Moyens</li>
                                </ul>
                 </div>
                            </div>
                          </div>
                          <!-- START SINGLE FEATURED ITEAM #2 -->
                          <div class="panel panel-default wow fadeInLeft">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                   <div class="row">
                                    <span class="col-xs-12 col-sm-12">
                                         <span class="fa fa-check-square-o"></span>
                                         Cocktail de clôture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <span class=" time_session">
                                            <i class="fa fa-clock-o"></i>
                                          <span class="time">19:00&nbsp;-&nbsp;21:00</span>
                                          <span class="room">
                                            <i class="fa fa-map-marker"></i>&nbsp;
                                            <span class="room_name">Salon d'honneur</span>
                                          </span>
                                    </span>
                                  </div>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                              Cocktail de clôture , on vous attend nombreux !!
                </div>
                            </div>
                          </div>
                          <!-- START SINGLE FEATURED ITEAM #3 -->
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>       
        </div>
      </section>
      <!--=========== END PROGRAM SECTION ================-->
      
      <!--=========== BEGAIN TEAM SECTION ================-->
      <section id="equipe">
        <div class="container">
          <div class="row col-lg-12 col-md-12">
            <!-- START TEAM HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Notre equipe</h2>
              <div align="justify">
                X-Afrique est une jeune association  créé en décembre 2014 au sein de l'Ecole Polytechnique réunissant les africains et amis de l'Afrique de l'X. Elle a pour but pour faire connaître la culture, la gastronomie africaine et susciter un intérêt pour les enjeux économiques africains d'aujourd'hui et les opportunités entrepreneuriales qu'offre ce continent.</br>
                Rejoignez nous !
              </div></br>
              <img class="img-rounded" src="img/binetxafrique.jpg" alt="Binet X-Afrique" style="margin: auto;"></br>
            </div>
          </div>
        </div>
      </section> 
      <!--=========== END TEAM SECTION ================-->

      <!--=========== BEGAIN PARTICIPANTS SECTION ================-->
      <section id="participants">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <!-- BEGAIN programme HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">PARTICIPANTS</h2>            
              </div>
              <div class="participants_area">
                <!-- BEGAIN PARTICIPANT SLIDER -->
                <div class="participants_slider">  
                  <!-- BEGAIN SINGLE PARTICIPANT SLIDE#1 -->              
                   <?php
                    include("php/securite.php");
                    $msql = "SELECT * FROM participants "; 
                    $sth = $dbh->prepare($msql);
                    // $query Ã  executer
                    $sth->execute();
                    $membre = $sth->fetchAll(PDO::FETCH_ASSOC);
                    
                    $JESUIS = array("entrepreneur" , "investisseur" , "alumni IE" , "invité institutionnel" , "partenaire" , "étudiant" , "blogeur" , "professeur" , "organe de presse" , "je ne souhaite pas divulguer cette information");
                    
                    function jesuisstring($j)
                    {
                      $JESUIS = array("entrepreneur" , "investisseur" , "alumni IE" , "invité institutionnel" , "partenaire" , "étudiant" , "blogeur" , "professeur" , "organe de presse" , "je ne souhaite pas divulguer cette information");
                      if ($j != 9)return ''.$JESUIS[$j] ;
                    }
                    
                    for ($i = 0 ; $i < count($membre); $i++){
                    
                     echo  '
                            <div class="col-lg-3 col-md-3 col-sm-4">
                              <div class="single_participants wow fadeInUp">
                                <div class="participants_img">
                                  <img src="'.$membre[$i]['img'].'" alt="sdqlsjdh" >
                                </div> 
                                <h5 class="" >'.Securite::html($membre[$i]['prenom']).' '.Securite::html($membre[$i]['nom']).'.</h5>
                                <span>'.Securite::html(jesuisstring($membre[$i]['jesuis'])).'</span>
                                <p>'.Securite::html($membre[$i]['description']).'</p>
                              </div>
                            </div>
                            ';
                    }
                    
                    ?>                         
                </div>    
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== END participant SECTION ================-->

     
      <!--=========== BEGAIN CONTACT SECTION ================-->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <!-- START CONTACT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">Contactez-nous</h2>
                <p> N'hésitez pas à nous poser vos questions </p>
              </div>
            </div>
          </div>       
          <div class="row">
            <!-- BEGAIN CONTACT CONTENT -->
            <div class="contact_content">
              <!-- BEGAIN CONTACT FORM -->
              <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="contact_form">

                  <!-- FOR CONTACT FORM MESSAGE -->
                  <div id="form-messages"></div>

                  <form action="contact.php" method="POST">
                    <input type="hidden" name="event_title" value="ANZISHA X-Forum">
                    <input type="hidden" name="to_email" value="x-afrique@polytechnique.org">
            <div class="form-group">
                          <label >Nom Prénom</label>
                          <input type="text" name="name"  class="form-control">
                      </div>
                      <div class="form-group">
                          <label >E-mail</label>
                          <input type="text"  name="email"  class="form-control">
                      </div>
                      <div class="form-group">
                          <label >Message</label>
                          <textarea rows="7"  name="message" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-main pull-right"><span class="fui-mail"></span>&nbsp;&nbsp;&nbsp;Envoyer</button>
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
              <!-- BEGAIN CONTACT MAP -->
              <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="contact_map">
                <!-- BEGAIN GOOGLE MAP -->
                 <div id="map_canvas"></div>
                </div>
              </div>           
            </div>
          </div>      
        </div>             
      </section>
      <!--=========== END CONTACT SECTION ================-->

      <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
      <section id="contactFeature">
        <!-- participants COUNTER OVERLAY -->
        <div class="slider_overlay"></div>
        <div class="row">
          <div class="col-lg-12 col-md-12">       
            <div class="container">               
                <div class="contact_feature">
              <!-- BEGAIN CALL US FEATURE -->
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single_contact_feaured wow fadeInUp">
                  <i class="fa fa-phone"></i>
                  <h4>Contactez-nous</h4>
                  <p>0785360476</p>                
                </div>
              </div>
              <!-- BEGAIN CALL US FEATURE -->
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single_contact_feaured wow fadeInUp">
                  <i class="fa fa-envelope-o"></i>
                  <h4>Adresse mail</h4>
                  <p>binet@x-afrique.polytechnique.org</p>
                </div>
              </div>
              <!-- BEGAIN CALL US FEATURE -->
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single_contact_feaured wow fadeInUp">
                  <i class="fa fa-map-marker"></i>
                  <h4>Location</h4>
                  <p>Ecole Polytechnique</p>
                </div>
              </div>
              <!-- BEGAIN CALL US FEATURE -->
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single_contact_feaured wow fadeInUp">
                  <i class="fa fa-clock-o"></i>
                  <h4>Working Hours</h4>
                  <p>Monday-Friday 9.00-21.00</p>
                </div>
              </div>
            </div>
            </div>         
          </div>
        </div>
      </section>
      <!--=========== END CONTACT FEATURE SECTION ================-->

      <!--=========== BEGAIN SUBSCRIBE SECTION ================-->
      <section id="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <!-- START SUBSCRIBE HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">Newsletter</h2>
                <p> Abonnez-vous aux informations du groupe X-Afrique : </p>
              </div>
              <!-- BEGAIN SUBSCRIVE FORM -->
              <form class="subscribe_form">
                <div class="subscrive_group wow fadeInUp">
                  <input class="form-control subscribe_mail" type="email" placeholder="Entrez votre adresse mail">
                  <input class="subscr_btn" type="submit" value="Envoyer">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--=========== END SUBSCRIBE SECTION ================-->

       <!--=========== BEGAIN FOOTER ================-->
       <footer id="footer">
         <div class="container">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="footer_left">
        
                 <p>Copyright &copy; 2015 <a href="http://www.wpfreeware.com">Groupe X-Afrique</a>. All Rights Reserved</p>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="footer_right">
                 <ul class="social_nav">
                   <li><a href="https://www.facebook.com/MamaAfricaX?fref=photo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="https://twitter.com/XAfrique" target="_blank"><i class="fa fa-twitter"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
        </footer>
        <!--=========== END FOOTER ================-->

       <!-- Javascript Files
       ================================================== -->
    
            <!-- initialize jQuery Library -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

           <!-- Google map -->
           <script src="https://maps.googleapis.com/maps/api/js"></script>
           <script>
             function initialize() {
               var mapCanvas = document.getElementById('map_canvas');
               var mapOptions = {
                 center: new google.maps.LatLng(48.714463, 2.211243),
                 zoom:15 ,
                 mapTypeId:google.maps.MapTypeId.ROADMAP
               }
               var map = new google.maps.Map(mapCanvas, mapOptions)
             }
             google.maps.event.addDomListener(window, 'load', initialize);
           </script>
           <script src="js/jquery.ui.map.js"></script>
            <!-- For smooth animatin  -->
           <script src="js/wow.min.js"></script> 
           <!-- Bootstrap js -->
           <script src="js/bootstrap.min.js"></script>
           <!-- superslides slider -->
           <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
           <script>
            $(function() {
              $('#slides').superslides({
                inherit_width_from: '.wide-container',
                inherit_height_from: '.wide-container'
              });
            });
          </script>
          <script>
            function scrollWindow()
            {
            window.top.window.scrollTo(0,0)
            }
        </script>>
           <!-- slick slider -->
        <script src="js/slick.min.js"></script>    
         <!-- Modernizr -->
        
        <script src="js/main.js"></script> <!-- Gem jQuery -->
           <!-- Custom js-->
           <script src="js/custom.js"></script>
            <script src="js/modernizr.js"></script>

    </body>
  </html>
  <?php
  }
  else // si c'est pas un membre !!
  {
  	header ('location: index.php');	
  }

  ?>