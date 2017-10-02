function update () {
  playerMovement();

  // Atirando?
  if (fireButton.isDown && player.alive) {
    fireBullet();
  }

  // Reiniciar?
  if (restartButton.isDown && lives == 0) {
    restartGame();
  }

  // Aliens jogando bombas
  handleBombs();

  game.physics.arcade.overlap(bullets, aliens, bulletHitsAlien, null, this);
  game.physics.arcade.overlap(bombs, player, bombHitsPlayer, null, this);
}
