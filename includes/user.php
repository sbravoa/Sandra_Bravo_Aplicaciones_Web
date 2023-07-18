<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $usuario;
    private $edad;
    private $interes;


    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usuario = $currentUser['usuario'];
            $this->edad = $currentUser['edad'];
            $this->interes = $currentUser['interes'];

        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }
    public function getinteres(){
        return $this->interes;
    }
}

?>