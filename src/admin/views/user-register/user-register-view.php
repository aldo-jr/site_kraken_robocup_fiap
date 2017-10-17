<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="container">

	<?php
	// Carrega todos os métodos do modelo
	$modelo->validate_register_form();
	$modelo->get_register_form( chk_array( $parametros, 1 ) );
	$modelo->del_user( $parametros );
	?>
  <h1 class="text-center my-4">Gerenciamento de usuários</h1>
  <form method="post" action="">
    <div class="form-group row">
      <label for="user_name" class="col-sm-2 col-form-label">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_name" name="user_name"
               value="<?php echo htmlentities( chk_array( $modelo->form_data, 'user_name' ) ); ?>" placeholder="Nome"
               required/>
      </div>
    </div>

    <div class="form-group row">
      <label for="user" class="col-sm-2 col-form-label">Usuário:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" name="user"
               value="<?php echo htmlentities( chk_array( $modelo->form_data, 'user' ) ); ?>" placeholder="Usuário"
               required/>
      </div>
    </div>

    <div class="form-group row">
      <label for="user_password" class="col-sm-2 col-form-label">Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="user_password" name="user_password"
               value="<?php echo htmlentities( chk_array( $modelo->form_data, 'user_password' ) ); ?>"
               placeholder="Senha" required/>
      </div>
    </div>

    <div class="form-group row">
      <label for="user_permissions" class="col-sm-2 col-form-label">
        Permissões: <br>
        <small>(Separe com vírgula)</small>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_permissions" name="user_permissions"
               value="<?php echo htmlentities( chk_array( $modelo->form_data, 'user_permissions' ) ); ?>"
               placeholder="Permissões" required/>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10 ml-auto">
        <input class="btn btn-primary px-5" type="submit" value="Salvar"/>
        <a class="btn btn-secondary" href="<?php echo HOME_URI . '/user-register'; ?>">Cadastrar novo usuário</a>
      </div>
    </div>

		<?php echo $modelo->form_msg; ?>


  </form>

	<?php
	// Lista os usuários
	$lista = $modelo->get_user_list();
	?>

  <h2 class="mt-5">Usuários cadastrados:</h2>
  <table class="table table-bordered table-responsive">
    <thead>
    <tr>
      <th>ID</th>
      <th>Usuário</th>
      <th>Name</th>
      <th>Permissões</th>
      <th>Edição</th>
    </tr>
    </thead>

    <tbody class="table-stripped">

		<?php foreach ( $lista as $fetch_userdata ): ?>

      <tr>

        <td> <?php echo $fetch_userdata['user_id'] ?> </td>
        <td> <?php echo $fetch_userdata['user'] ?> </td>
        <td> <?php echo $fetch_userdata['user_name'] ?> </td>
        <td> <?php echo implode( ', ', unserialize( $fetch_userdata['user_permissions'] ) ) ?> </td>

        <td>
          <a class="btn btn-sm btn-primary"
             href="<?php echo HOME_URI ?>/user-register/index/edit/<?php echo $fetch_userdata['user_id'] ?>">Edit</a>
          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalConfirma"
                  data-url="<?php echo HOME_URI ?>/user-register/index/del/<?php echo $fetch_userdata['user_id'] ?>">
            Delete
          </button>
        </td>

      </tr>

		<?php endforeach; ?>

    </tbody>
  </table>


  <div class="modal fade" id="modalConfirma">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tem certeza que deseja apagar este usuário?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Ao apagar o usuário, não é possível restaura-lo.</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger">Sim</a>
          <button class="btn btn-secondary" data-dismiss="modal">Não</button>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .wrap -->
