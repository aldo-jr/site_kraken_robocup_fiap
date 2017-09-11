<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="container">
  <div class="jumbotron text-center">
    <h1><?= $this->title; ?></h1>
  </div>
</div>

<div class="container">
  <div class="col-md-10 ml-auto mr-auto">
    <form method="post" action="<?php echo HOME_URI;?>/contato/s">
      <div class="form-group row">
        <label for="nome" class="col-sm-3 col-form-label">Nome Completo (*): </label>
        <div class="col-sm-9">
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">E-mail (*): </label>
        <div class="col-sm-9">
          <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="assunto" class="col-sm-3 col-form-label">Assunto (*): </label>
        <div class="col-sm-9">
          <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="texto" class="col-sm-3 col-form-label">Texto (*): </label>
        <div class="col-sm-9">
          <textarea class="form-control" name="mensagem" id="texto" placeholder="Texto" rows="5" required></textarea>
        </div>
      </div>

      <div class="form-group row">

        <div class="col-sm-9 ml-auto">
          <input type="submit" class="btn btn-primary" value="Enviar contato">
        </div>
      </div>
    </form>
  </div>
</div>
