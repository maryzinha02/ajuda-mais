<?php

namespace Source\Models;

use Source\Core\Connect;

class Address
{
    private $id_address;
    private $street;
    private $number;
    private $complement;

    private $message;

    public function __construct($street = null, $number = null, $complement = null, $message = null)
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
        $this->message = $message;
    }

    public function getIdAddress()
    {
        return $this->id_address;
    }

    public function setIdAddress($id_address): void
    {
        $this->id_address = $id_address;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function setComplement($complement): void
    {
        $this->complement = $complement;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    
    public function selectByIdUser (int $id) : array
    {
        $sql = "SELECT * FROM addresses WHERE user_id = :id";
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindParam(":id",$id);

        try {
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            return $e->getMessage();
        }

    }

}