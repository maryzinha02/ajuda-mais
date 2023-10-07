<?php

namespace Source\Models;

use Source\Core\Connect;

class Adm {
    
    private $id_adm;
    private $email;
    private $password;


    public function __construct (
        $id_adm = null,
        $email = null,
        $password = null
    ){
        $this->id_adm = $id_adm;
        $this->email = $email;
        $this->password = $password;
    }

    public function getIdAdm() {
        return $this->id_adm;
    }
    public function setIdAdm($id): void {
        $this->id = $id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email): void {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password): void {
        $this->password = $password;
    }

}