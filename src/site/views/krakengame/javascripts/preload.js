function preload () {
  game.load.image('ship', '/site/views/krakengame/images/ship.png');
  game.load.image('bullet', '/site/views/krakengame/images/bullet.png');
  game.load.image('alien', '/site/views/krakengame/images/alien.png');
  game.load.image('bomb', '/site/views/krakengame/images/bomb.png');
  game.load.spritesheet('explosion', '/site/views/krakengame/images/explosion.png', 80, 80);

  game.load.audio('shoot', '/site/views/krakengame/sounds/shoot.wav');
  game.load.audio('explode', '/site/views/krakengame/sounds/explode.wav');
  game.load.audio('bomb', '/site/views/krakengame/sounds/bomb.wav');
  game.load.audio('backtrack', '/site/views/krakengame/sounds/backtrack.wav');
}