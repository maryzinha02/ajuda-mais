<?php

namespace Source\App\Api;

use Source\Models\Faq;

class Faqs extends Api
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }

    public function listFaqs (array $data) : void
    {
        $faqs = (new Faq())->selectAll();
        $this->back($faqs,200);
    }
}