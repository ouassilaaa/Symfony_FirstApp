<?php 

namespace App\Controller; 
use Symfony\Component\HttpFoundation\Response;

class HomeController {

    public function index(){

        $response = new Response('<h1> Hello world!</h1>');
        return $response;
    }
}

?>