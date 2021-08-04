<?php

use App\Core\Controller;

class HomeController extends Controller
{
    public $cakeModel;
    public $categoryModel;


    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
        $this->categoryModel = $this->model('CategoryModel');
    }

    function Index()
    {
        //get all cake
        $cakes = $this->cakeModel->all();
        if (!$cakes) {
            $cakes = [];
        }
        $data['cakes'] = $cakes;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        //get caketype
        $caketypes = $this->categoryModel->all();
        if (!$caketypes) {
            $caketypes = [];
        }
        $data['caketypes'] = $caketypes;

        //get num of cake
        $numCake = $this->cakeModel->count();
        $data['numCake'] = $numCake;

        //get page show cake
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data['page'] = $page;


        //get cake limit
        $limit = ($page - 1) * 8;
        $cakeOnPage = $this->cakeModel->getCake($limit, 8);
        if (!$cakeOnPage) {
            $cakeOnPage = [];
        }
        $data['cakeOnPage'] = $cakeOnPage;

        $this->view("/home/index", $data);
    }
}
