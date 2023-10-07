<?php

namespace Source\App\Api;

use Source\Models\Shelter;

class Shelters extends Api {

    public function __construct()
    {
        parent::__construct();
    }

    public function read (array $data) : void
    {
        $response = [
            "code" => 200,
            "type" => "success",
            "message" => "Dados do grupo"
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function create (array $data) : void
    {

        if(!empty($data)){
            $shelter = new Shelter(null, $data["name"],$data["city"]);

            if(!$shelter->insert()){

                $response = [
                    "error" => [
                        "code" => 400,
                        "type" => "invalid_data",
                        "message" => $shelter->getMessage()
                    ]
                ];
                $this->back($response,400);
                return;
            }

            $response = [
                "shelter" => [
                    "type" => "success",
                    "id" => $shelter->getIdGroups(),
                    "name" => $shelter->getName(),
                    "city" => $shelter->getCity()
                ]
            ];

            $this->back($response,201);
        }
    }

}