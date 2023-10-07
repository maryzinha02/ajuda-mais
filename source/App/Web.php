<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\GroupsHelp;
use Source\Models\Faq;
use Source\Models\User;
use Source\Models\Donation;

class Web
{
    private $view;
    //private $categories;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
        //$categories = new Category();
        //$this->categories = $categories->selectAll();
        
    }

    public function forum()
    {
        echo $this->view->render("forum",[
        ]);
    }

    public function home()
    {
        echo $this->view->render("home",[
        ]);
    }

    public function location()
    {
        echo $this->view->render("location",[
        ]);
    }

    public function login()
    {
        echo $this->view->render("login",[
        ]);
    }

    public function register()
    {
        if(!empty($data)){
            
            $response = json_encode($data);
            echo $response;
            return;
        }

        echo $this->view->render("register",[]);
    }

    public function support()
    {
        $groupshelps = new GroupsHelp();

        echo $this->view->render("support", [
            "groupshelps" => $groupshelps->selectGroups()
        ]);
    }

}