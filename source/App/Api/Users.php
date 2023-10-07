<?php

namespace Source\App\Api;

use Source\Models\User;
use Source\Models\Address;

class Users extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function read (array $data) : void
    // {
    //     $response = [
    //         "code" => 200,
    //         "type" => "success",
    //         "message" => "Dados do usuário"
    //     ];
    //     http_response_code(200);
    //     echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    // }

    public function create (array $data) : void
    {

        if(!empty($data)){
            $user = new User(NULL, $data["name"],$data["email"],$data["password"]);
            if(!$user->insert()){
                $response = [
                    "error" => [
                        "code" => 400,
                        "type" => "invalid_data",
                        "message" => $user->getMessage()
                    ]
                ];
                $this->back($response,400);
                return;
            }

            $response = [
                "user" => [
                    "type" => "success",
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "email" => $user->getEmail(),
                ]
            ];

            $this->back($response,201);
        }
    }

    public function login (array $data) : void
    {

        if(!empty($this->token)){
            $response = [
                "user" => [
                    "id" => $this->user->getId(),
                    "name" => $this->user->getName(),
                    "email" => $this->user->getEmail(),
                    "token" => $this->token
                ]
            ];
            $this->back($response,200);
        }

    }

    // public function listAddresses (array $data): void
    // {

    //     if($this->user){
    //         $addresses = new Address();
    //         $this->back($addresses->selectByIdUser($this->user->getId()),200);
    //     }

    // }

}