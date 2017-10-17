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
    <?php
    if ( $this->login_error ) {
      echo '<tr><td colspan="2" class="error">' . $this->login_error . '</td></tr>';
    }
    ?>
    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" method="post">
      <span id="reauth-email" class="reauth-email"></span>
      <input type="text" id="inputEmail" class="form-control" placeholder="Usuário" name="userdata[user]" required autofocus>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="userdata[user_password]" required>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Conectar</button>
    </form><!-- /form -->
  </div><!-- /card-container -->
</div>