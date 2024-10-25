<?php

if (session_id() == "") {
    session_start();
}

require_once('db_utilisateurs2.php');

class User {
    private $id;
    private $login;
    private $email;
    private $firstname;
    private $lastname;
    private $connected = false;
    private $pdo;

    public function __construct($pdo) { /* Constructeur avec la connexion PDO */
        $this->pdo = $pdo;
    }

    public function register($login, $password, $email, $firstname, $lastname) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = $this->pdo->prepare('INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$login, $hashedPassword, $email, $firstname, $lastname]);

        $this->id = $this->pdo->lastInsertId();
        $this->login = $login;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        return $this->getAllInfos();
    }

    public function connect($login, $password) {
        $query = $this->pdo->prepare('SELECT * FROM utilisateurs WHERE login = ?');
        $query->execute([$login]);
        $user = $query->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $this->id = $user['id'];
            $this->login = $user['login'];
            $this->email = $user['email'];
            $this->firstname = $user['firstname'];
            $this->lastname = $user['lastname'];
            $this->connected = true;
            return true;
        }
        return false;
    }

    public function disconnect() {
        $this->id = null;
        $this->login = null;
        $this->email = null;
        $this->firstname = null;
        $this->lastname = null;
        $this->connected = false;
    }

    public function delete() {
        if ($this->id) {
            $query = $this->pdo->prepare('DELETE FROM utilisateurs WHERE id = ?');
            $query->execute([$this->id]);
            $this->disconnect();
        }
    }

    public function update($login, $password, $email, $firstname, $lastname) {
        if ($this->id) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->pdo->prepare('UPDATE utilisateurs SET login = ?, password = ?, email = ?, firstname = ?, lastname = ? WHERE id = ?');
            $query->execute([$login, $hashedPassword, $email, $firstname, $lastname, $this->id]);

            $this->login = $login;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }
    }

    public function isConnected() { /* Vérifie si l'utilisateur est connecté */
        return $this->connected;
    }

    public function getAllInfos() { /* Retourner toutes les infos de l'utilisateur */
        if ($this->id) {
            return [
                'id' => $this->id,
                'login' => $this->login,
                'email' => $this->email,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname
            ];
        }
        return null;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }
}

?>