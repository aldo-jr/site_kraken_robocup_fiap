<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- Forçar última engine do IE ou solicita Chrome Frame -->
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

	<title>~ SCAPE THE KRAKEN ~</title>

  <link rel="stylesheet" href="<?php echo HOME_URI;?>/views/_css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo HOME_URI;?>/views/_css/style.min.css">
	<!-- Favicon -->
	<link href="<?php echo HOME_URI;?>/views/krakengame/favicon.ico" rel="shortcut icon">

	<link href="<?php echo HOME_URI;?>/views/krakengame/stylesheets/all.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/lib/phaser.min.js" type="text/javascript"></script>
	<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/lib/cookies.min.js" type="text/javascript"></script>
</head>

<body class="index">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo HOME_URI; ?>">KRAKEN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo HOME_URI;?>">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Robocup </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo HOME_URI;?>/robocup/sobre/">O que é</a>
            <a class="dropdown-item" href="<?php echo HOME_URI;?>/robocup/regulamento/">Regulamento</a>
          </div>
        </li>

        <!-- @TODO criar página e alterar link-->
        <li class="nav-item">
          <a class="nav-link" href="#">O Grupo</a>
        </li>

        <!-- @TODO criar página e alterar link-->
        <li class="nav-item">
          <a class="nav-link" href="#">O Projeto</a>
        </li>

        <!-- @TODO criar página e alterar link-->
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo HOME_URI;?>/noticias/">Notícias</a>
        </li>

        <!-- @TODO criar página e alterar link-->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo HOME_URI;?>/contato/">Contato</a>
        </li>
      </ul>

      <!-- @TODO criar página e alterar link-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Extras </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Jogo</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>SCAPE THE KRAKEN!</h1>
<div id="game">
</div>

<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/preload.js" type="text/javascript"></script>
<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/create.js" type="text/javascript"></script>
<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/update.js" type="text/javascript"></script>
<script src="<?php echo HOME_URI;?>/views/krakengame/javascripts/game.js" type="text/javascript"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

</script>

<script src="<?php echo HOME_URI; ?>/views/_js/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo HOME_URI; ?>/views/_js/popper/popper.min.js"></script>
<script src="<?php echo HOME_URI; ?>/views/_js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo HOME_URI; ?>/views/_js/scripts.min.js"></script>
</body>
</html>
