<?php

namespace Source\App;

use League\Plates\Engine;

class Adm
{
    private $view;

    public function __construct ()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/adm","php");
    }

    public function home()
    {
        echo $this->view ->render("home");
    }

    public function moderateGroups()
    {
        echo $this->view ->render("moderate-groups");
    }


}