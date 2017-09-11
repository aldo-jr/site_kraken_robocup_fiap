function preload () {
  game.load.image('ship', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/images/ship.png');
  game.load.image('bullet', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/images/bullet.png');
  game.load.image('alien', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/images/alien.png');
  game.load.image('bomb', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/images/bomb.png');
  game.load.spritesheet('explosion', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/images/explosion.png', 80, 80);

  game.load.audio('shoot', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/sounds/shoot.wav');
  game.load.audio('explode', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/sounds/explode.wav');
  game.load.audio('bomb', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/sounds/bomb.wav');
  game.load.audio('backtrack', '/fiap/site_kraken_robocup_fiap/site/views/krakengame/sounds/backtrack.wav');
}
