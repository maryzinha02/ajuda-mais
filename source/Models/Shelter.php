<?php 

namespace Source\Models;

use Source\Core\Connect;

class  Shelter {
    private $id_shelter;
    private $name;
    private $city;

    public function __construct (
        $id_shelter = null,
        $name = null,
        $city = null
    ){
        $this->id_shelter = $id_shelter;
        $this->name = $name;
        $this->city = $city;
    }

    public function getIdShelter() {
        return $this->id_shelter;
    }
    public function setIdShelter($id_shelter): void {
        $this->id_shelter = $id_shelter;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name): void {
        $this->name = $name;
    }
    
    public function getCity() {
        return $this->city;
    }
    public function setCity($city): void {
        $this->city = $city;
    }

    public function insert () : bool
    {

        $query = "INSERT INTO shelters VALUES (NULL,:name,:city)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":city", $this->city);
        try {
            $stmt->execute();
            if($stmt->rowCount()){
                $this->id = Connect::getInstance()->lastInsertId();
                $this->message = "Abrigo cadastrado com sucesso!";
                return true;
            }
            $this->message = "Erro ao inserir abrigo, verifique os dados!";
            return false;
        } catch (PDOException $e) {
            $this->message = "Erro: {$e->getMessage()}";
            return false;
        }
    }

    public function selectUserCity()
    {
        $query = "";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectAll ()
    {
        $query = "SELECT * FROM shelters";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}