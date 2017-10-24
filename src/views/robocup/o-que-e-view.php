<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="container">
  <div class="jumbotron text-center">
    <h1><?= $this->title; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-8">
      <h2>O que é:</h2>
      <hr>
      <p>
        A RoboCup é a iniciativa multidisciplinar da FIAP para os primeiros anos do cursos de Sistema de Informação.
        Sendo a mais antiga da faculdade, consiste em construir um robô motorizado com armas capazes de estourar o balão
        de seus adversários por meio das mais variadas armas.
      </p>

      <p>
        Os melhores robôs participam das finais no evento do NEXT, sendo regida de acordo com regras adaptadas Robot
        Fighting League Standard Ruleset (livro de regras da principal liga de competições com robôs), colocando os
        conhecimentos desenvolvimentos ao longo do ano letivo à prova, integrando as disciplinas de Tecnologia,
        Planejamento e Execução de Projetos, bem como uma visão de mercado para o produto desenvolvido.
      </p>

      <p>
        O tempo máximo de disputa é de 2 minutos, caso nenhum concorrente estoure o balão durante a disputa, há um
        intervalo e mais 1 minuto de luta é concebido aos participantes. Se o empate permanecer, nenhuma equipe pontua.
      </p>

      <p>
        Com o intuito de incentivar os alunos, o projeto não consiste somente no robô, junto dele é desenvolvido um
        site, uma enredo de jogo e uma análise de riscos. Esse é o momento de aplicar na prática tudo o que foi
        aprendido nas aulas.
      </p>
      <a href="<?php echo HOME_URI; ?>/robocup/regulamento/">Veja o regulamento >></a>

    </div>

    <div class="col-md-4 text-center">
      <img class="mt-5" src="<?php echo HOME_URI; ?>/views/_images/robocup.jpeg" alt="">
    </div>
  </div>
</div>

