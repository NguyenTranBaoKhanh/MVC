<?php

use App\Core\Controller;

class CakesController extends Controller
{
    private $cakeModel;

    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
    }

    function index(){
        $cake= $this->cakeModel->all();
        if(!$cake){
            $cake=[];
        }
        $data['cakes']= $cake;

        //get num of cake
        $numCake = $this->cakeModel->count();
        $data['numCake']= $numCake;

        //get page show cake
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data['page']=$page;

        
        //get cake limit
        $limit=($page-1) * 8;
        $cakeOnPage=$this->cakeModel->getCake($limit, 8);
        if(!$cakeOnPage){
            $cakeOnPage=[];
        }
        $data['cakeOnPage']=$cakeOnPage;

        $this->view("/cakes/index", $data);
    }

    
    function search()
    {
        $keyword = $_POST["keyword"];
        $cakes = $this->cakeModel->getByKeyword($keyword);
        $data['search'] = $keyword;
        $data['cakes']= $cakes;

        $this->view("/cakes/search", $data);
    }

}
