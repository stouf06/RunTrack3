<?php

if (session_id() == "") {
    session_start();
}

require_once('db_memory_game.php');
require_once('jeu.php');
require_once('carte.php');

class Score {
    private $dbname;

    public function __construct($db) {
        $this->dbname = $dbname;
    }

    public function getTopScores($limit = 10) {
        $query = $this->db->query("SELECT * FROM score ORDER BY score DESC, time DESC LIMIT 10");
        return $query->fetchAll();
    }
}

?>