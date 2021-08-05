<?php

use App\Core\Controller;

class CakesController extends Controller
{
    private $cakeModel;

    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
    }

    function index()
    {
        $cake = $this->cakeModel->all();
        if (!$cake) {
            $cake = [];
        }
        $data['cakes'] = $cake;

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

        $this->view("/cakes/index", $data);
    }


    function search()
    {
        if (isset($_GET["keyword"])) {
            $keyword = $_GET["keyword"];
        } else {
            $keyword = "";
        }
        $cakes = $this->cakeModel->getByKeyword($keyword);
        $data['search'] = $keyword;
        $data['cakes'] = $cakes;

        $this->view("/cakes/search", $data);
    }

    function categories()
    {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = "";
        }
        $data['id'] = $id;

        if (isset($_GET['type'])) {
            $type = $_GET['type'];
        } else {
            $type = "";
        }
        $data['type'] = $type;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $data['page'] = $page;

        $countCakeOftype = $this->cakeModel->countCakeOfType($id);

        $data['cakeOfPage'] = $countCakeOftype;

        $limit = ($page - 1) * 8;
        $cakeOfType = $this->cakeModel->getCakeOfType($id, $limit, 8);
        $data['cakeOfType'] = $cakeOfType;



        $this->view("/cakes/categories", $data);
    }
}
