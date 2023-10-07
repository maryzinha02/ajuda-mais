<?php

namespace Source\Models;

use Source\Core\Connect;

class GroupsHelp {
    private $id_groups;
    private $name;
    private $description;
    private $city;

    public function __construct (
        $id_groups = null,
        $name = null,
        $description = null,
        $city = null
    ){
        $this->id_groups = $id_groups;
        $this->name = $name;
        $this->description = $description;
        $this->city = $city;
    }

    public function getIdGroups() {
        return $this->id_groups;
    }
    public function setIdGroups($id_groups): void {
        $this->id_groups = $id_groups;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name): void {
        $this->name = $name;
    }
    
    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description): void {
        $this->description = $description;
    }
    
    public function getCity() {
        return $this->city;
    }
    public function setCity($city): void {
        $this->city = $city;
    }

    // public function getFk_donation() {
    //     return $this->fk_donation;
    // }
    // public function setFk_donation($fk_donation): void {
    //     $this->fk_donation = $fk_donation;
    // }

    // public function getFk_user() {
    //     return $this->fk_user;
    // }
    // public function setFk_user($fk_user): void {
    //     $this->fk_user = $fk_user;
    // }
    
    public function insert()
    {
        $query = "INSERT INTO groupsHelps VALUES ( NULL, :name, :description, :city)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":city", $this->city);
    
        try {
            $stmt->execute();
            if ($stmt->rowCount()) {
                $this->id_groups = Connect::getInstance()->lastInsertId();
                $this->message = "Grupo cadastrado com sucesso!";
                return true;
            }
    
            $this->message = "Erro ao inserir, verifique os dados!";
            return false;
            
        } catch (PDOException $e) {
            $this->message = "Erro: {$e->getMessage()}";
            return false;
        }
    }

    public function selectGroups ()
    {
        $query = "SELECT groupsHelps.name as 'grupo_name', groupsHelps.description as 'grupo_desc',  groupsHelps.city as 'grupo_cidade', donations.name 'doa_name' FROM  groupsHelps
        JOIN donations ON  donations.id_groupsHelps =  groupsHelps.id_groupsHelps;";
                  
        $stm = Connect::getInstance()->query($query);
        return $stm->fetchAll();
    }

    public function selectAll ()
    {
        $query = "SELECT * FROM groupsHelps";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}