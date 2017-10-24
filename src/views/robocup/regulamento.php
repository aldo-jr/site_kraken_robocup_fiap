<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="container">
	<div class="jumbotron text-center">
		<h1><?= $this->title; ?></h1>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h2>Regulamento:</h2>
			<hr>
      <p>
        Os principais pontos que cobrem toda a competição da RobôCup FIAP são:
      </p>
      <p>
        - O balão deve estar preso exatamente à 20cm de altura do chão e localizado no centro da estrutura do robô.
        - O balão deve permanecer reto durante toda a luta, caso ele incline, será contado como derrota.
        - O balão deve permanecer preso durante toda a luta, caso ele se solte, será contado como derrota.
        - Após estourar o balão do robô adversário, é preciso que a arma volte totalmente para dentro do robô, não ficando nenhuma parte de fora. Caso contrário, mesmo que seu balão tenha sido estourado, o robô adversário será declarado vencedor da luta.
        - Após posicionar o robô na arena de combate, não é permitido que se coloque a mão nele.
        - A conferência dos robôs é feita antes do combate, onde cada piloto inspeciona o robô adversário e, tendo o aceite de ambas as partes, a luta pode ser iniciada.
        - Durante a conferência e toda a luta, o piloto deve seguir e atuar sozinho, sem nenhuma ajuda externa.
        - O robô não deverá ter dimensões superiores a:
      </p>
      <p>
        Largura: 30 cm.
        Comprimento: 30 cm.
        Altura do robô até a base do balão: 20 cm.
        Alcance da arma:
        - inativa: perímetro do robô
        - ativa: raio máximo de 45 cm.
        - O peso do robô não pode ultrapassar 2,5kg.
      </p>

      <a href="<?php echo HOME_URI;?>/grupo/">Conheça nosso grupo >></a>

		</div>

    <div class="col-md-4 text-center">
      <img class="mt-5" src="<?php echo HOME_URI;?>/views/_images/robocup.jpeg" alt="">
    </div>
  </div>
</div>

