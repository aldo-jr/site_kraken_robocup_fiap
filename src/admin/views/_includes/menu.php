<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= HOME_URI ?>">KRAKEN ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= HOME_URI ?>">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= HOME_URI ?>/user-register/">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= HOME_URI ?>/noticias/adm/">Notícias Admin</a>
        </li>


	      <?php
	      if ( $this->logged_in ) {
		      ?>
          <li class="nav-item ml-auto">
            <a href="<?= HOME_URI ?>/logout/" class="nav-link">Sair</a>
          </li>
          <?php
	      }
	      ?>
      </ul>
    </div>
  </div>
</nav>