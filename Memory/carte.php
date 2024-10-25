<?php

if (session_id() == "") {
    session_start();
}

require_once('db_memory_game.php');
require_once('jeu.php');

class Carte {
    private $image;
    private $isRevealed;

    public function __construct($image) {
        $this->image = $image;
        $this->isRevealed = false;
    }

    public function reveal() {
        $this->isRevealed = true;
    }

    public function hide() {
        $this->isRevealed = false;
    }

    public function getImage() {
        return $this->image;
    }

    public function isRevealed() {
        return $this->isRevealed;
    }
}

?>