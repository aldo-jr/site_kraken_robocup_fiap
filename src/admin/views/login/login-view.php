<?php if ( ! defined('ABSPATH')) exit; ?>


<?php
if ( $this->logged_in ) {
	$this->goto_page(HOME_URI);
}
?>

<style>
  body, html {
    min-height:400px;
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    margin:0 !important;
    padding:0 !important;
  }
</style>
<div class="d-flex align-items-center login_page" style="height:100%;">
  <div class="card card-container">
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?php
    if ( $this->login_error ) {
      echo '<div class="alert alert-danger text-center" role="alert">' . $this->login_error . '</div>';
    }
    ?>
    <form class="form-signin" method="post">
      <span id="reauth-email" class="reauth-email"></span>
      <input type="text" id="inputEmail" class="form-control" placeholder="Usuário" name="userdata[user]" required autofocus>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="userdata[user_password]" required>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Conectar</button>
    </form><!-- /form -->
  </div><!-- /card-container -->
</div>