<?php

namespace Source\App\Api;

use Source\Models\GroupsHelp;

class GroupsHelps extends Api
{
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
            $groupsHelp = new GroupsHelp(null, $data["name"],$data["description"],$data["city"]);

            if(!$groupsHelp->insert()){

                $response = [
                    "error" => [
                        "code" => 400,
                        "type" => "invalid_data",
                        "message" => $groupsHelp->getMessage()
                    ]
                ];
                $this->back($response,400);
                return;
            }

            $response = [
                "groupsHelp" => [
                    "type" => "success",
                    "id" => $groupsHelp->getIdGroups(),
                    "name" => $groupsHelp->getName(),
                    "description" => $groupsHelp->getDescription(),
                    "city" => $groupsHelp->getCity()
                ]
            ];

            $this->back($response,201);
        }
    }

}