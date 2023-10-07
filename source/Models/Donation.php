<?php

namespace Source\Models;

use Source\Core\Connect;

class Donation{
    private $id_donation;
    private $name;
    private $id_groups;

    public function __construct (
        $id_donation = null,
        $name = null,
        $id_groups = null
    ){
        $this->id_donation = $id_donation;
        $this->name = $name;
        $this->id_groups = $id_groups;
    }

    public function getIdDonation()
    {
        return $this->id_donation;
    }

    public function setIdDonation($id_donation): void
    {
        $this->id_donation = $id_donation;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getIdGroups()
    {
        return $this->id_groups;
    }

    public function setIdGroups($id_groups): void
    {
        $this->id_groups = $id_groups;
    }

  


}