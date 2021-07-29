<?php

use App\Core\Controller;

class HomeController extends Controller
{
    public $cakeModel;

    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
    }

    function Index()
    {
        $cakes = $this->cakeModel->all();

        if (!$cakes) {
            $cakes = [];
        }

        $data['cakes'] = $cakes;
        echo '<pre>';
        print_r($data);

        echo '</pre>';


        // $this->view("/home/index", $data);
    }
}
