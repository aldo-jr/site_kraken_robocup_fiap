<?php
// Evita acesso direto a este arquivo
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Configura as URLs
$adm_uri    = HOME_URI . '/noticias/adm/';
$edit_uri   = $adm_uri . 'edit/';
$delete_uri = $adm_uri . 'del/';


// Carrega o método para obter uma notícia
$modelo->obtem_noticia();

// Carrega o método para inserir uma notícia
$modelo->insere_noticia();

// Carrega o método para apagar a notícia
$modelo->form_confirma = $modelo->apaga_noticia();

// Remove o limite de valores da lista de notícias
$modelo->sem_limite = true;
?>

<div class="container">
  <h1 class="text-center my-4">Gerenciamento de notícias</h1>

	<?php echo $modelo->form_msg; ?>

  <!-- Formulário de edição das notícias -->
  <form method="post" action="" enctype="multipart/form-data">

    <div class="form-group row">
      <label for="noticia_titulo" class="col-sm-2 col-form-label">Título:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="noticia_titulo" name="noticia_titulo" value="<?php echo htmlentities( chk_array( $modelo->form_data, 'noticia_titulo' ) ); ?>" placeholder="Título" required />
      </div>
    </div>

    <div class="form-group row">
      <label for="noticia_imagem" class="col-sm-2 col-form-label">Imagem:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="noticia_imagem" name="noticia_imagem" value="" placeholder="Imagem" />
      </div>
    </div>

    <div class="form-group row">
      <label for="noticia_texto" class="col-sm-2 col-form-label">Texto da notícia:</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="noticia_texto" name="noticia_texto" placeholder="Texto da notícia" required ><?php echo htmlentities( chk_array( $modelo->form_data, 'noticia_texto' ) ); ?></textarea>
      </div>
    </div>

    <input type="hidden" name="noticia_autor" value="<?php echo htmlentities( $_SESSION['userdata']['user_name'] ); ?>" />

    <input type="hidden" name="insere_noticia" value="1"/>

    <div class="form-group row">
      <div class="col-sm-10 ml-auto">
        <input type="submit" value="Salvar" class="btn btn-primary px-5"/>
      </div>
    </div>
  </form>

  <!-- LISTA AS NOTICIAS -->
	<?php $lista = $modelo->listar_noticias(); ?>

  <h2 class="mt-5">Lista de notícias:</h2>
  <table class="table table-responsive table-bordered">
    <thead>
    <tr>
      <th>Título</th>
      <th></th>
    </tr>
    </thead>

    <tbody class="table-stripped">
		<?php foreach ( $lista as $noticia ): ?>

      <tr>
        <td><?php echo $noticia['noticia_titulo'] ?></td>
        <td>
          <a class="btn btn-sm btn-primary" href="<?php echo $edit_uri . $noticia['noticia_id'] ?>">Editar</a>
          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalConfirma" data-url="<?php echo $delete_uri . $noticia['noticia_id'] ?>">Apagar</button>
        </td>
      </tr>

		<?php endforeach; ?>
    </tbody>

  </table>


  <div class="modal fade" id="modalConfirma">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tem certeza que deseja apagar esta notícia?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Ao apagar uma notícia, não é possível restaura-la.</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger">Sim</a>
          <button class="btn btn-secondary" data-dismiss="modal">Não</button>
        </div>
      </div>
    </div>
  </div>
</div> <!-- .wrap -->
