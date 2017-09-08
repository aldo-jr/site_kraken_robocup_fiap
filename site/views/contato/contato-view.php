<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
<div class="container">

  <div class="alert alert-danger text-center" role="alert">
    <h4 class="alert-heading mb-4">Não foi possível enviar contato.</h4>
    <p>
      Desculpe, não foi possível enviar seu contato no momento. <br>
      Por favor, tente novamente mais tarde!
    </p>
  </div>

  <div class="alert alert-success text-center" role="alert">
    <h4 class="alert-heading mb-4">Tempo perdido com sucesso!</h4>
    <p>Obrigado por enviar um contato, mas sinto lhe informar que ninguém lerá isso!</p>

    <img
      src="https://t04.deviantart.net/gNqheazatD9UnSlVMUHMpUMveQs=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre01/00fe/th/pre/i/2014/176/6/6/hue_hue_hue_br_by_voltrotz-d7nvrcl.png"
      alt="">
    <hr>
    <p class="mb-0">Volte sempre que quiser perder seu tempo! HUEHUEHUE.</p>
  </div>
</div>

<div class="container">
  <div class="jumbotron text-center">
    <h1><?= $this->title; ?></h1>
  </div>
</div>


<div class="container">
  <div class="col-md-10 ml-auto mr-auto">
    <form method="post" action="teste">
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
