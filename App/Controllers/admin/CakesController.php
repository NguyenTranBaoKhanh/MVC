<?php

use App\Core\Controller;

class CakesController extends Controller
{
    private $cakeModel;
    private $categoryModel;

    function __construct()
    {
        $this->cakeModel = $this->model('CakeModel');
        $this->categoryModel = $this->model('CategoryModel');
    }

    function index()
    {
        $cake = $this->cakeModel->all();
        if (!$cake) {
            $cake = [];
        }
        $data['cakes'] = $cake;

        $this->view("/admin/cakes/index", $data);
    }

    function create()
    {
        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;


        $this->view("/admin/cakes/create", $data);
    }

    function store()
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }

        // $data = $_POST;

        $data['name'] = $_POST["name"];
        $data['category'] = $_POST["category"];
        $data['size'] = $_POST["size"];
        $data['price'] = $_POST["price"];
        $data['description'] = $_POST["description"];
        $data['cakeimage'] = '';

        //handel image
        $outputDir = PUBLIC_DIR_CAKE_IMG;

        if (isset($_FILES['cakeimage']) != "") {
            if ($_FILES['cakeimage']['name']) {
                $random = time();
                $imgName = str_replace(' ', '-', strtolower($_FILES['cakeimage']['name']));
                $imgExt = substr($imgName, strrpos($imgName, '.'));
                $imgExt = str_replace('.', '', $imgExt);
                $newImg = $random . '.' . $imgExt;

                move_uploaded_file($_FILES['cakeimage']['tmp_name'], $outputDir . DS . $newImg);
                $data['cakeimage'] = $newImg;
            }
        }
        $result = $this->cakeModel->store($data);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

    function edit($id)
    {
        $cake = $this->cakeModel->getById($id);
        $data['cake'] = $cake;

        $categories = $this->categoryModel->all();
        $data['categories'] = $categories;

        if (!$cake) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        }

        $this->view("/admin/cakes/edit", $data);
    }

    function update($id)
    {
        if (!isset($_POST)) {
            header("Location: " . DOCUMENT_ROOT . "/admin");
        }

        // $data = $_POST;

        $data['id'] = $id;
        $data['name'] = $_POST["name"];
        $data['category'] = $_POST["category"];
        $data['size'] = $_POST["size"];
        $data['price'] = $_POST["price"];
        $data['description'] = $_POST["description"];
        $data['cakeimage'] = "";
        //handel image
        $outputDir = PUBLIC_DIR_CAKE_IMG;

        if (isset($_FILES['cakeimage'])) {
            if ($_FILES['cakeimage']['name']) {
                $random = time();
                $imgName = str_replace(' ', '-', strtolower($_FILES['cakeimage']['name']));
                $imgExt = substr($imgName, strrpos($imgName, '.'));
                $imgExt = str_replace('.', '', $imgExt);
                $newImg = $random . '.' . $imgExt;

                move_uploaded_file($_FILES['cakeimage']['tmp_name'], $outputDir . DS . $newImg);
                $data['cakeimage'] = $newImg;
            }
        }

        // var_dump($data);die();
        $result = $this->cakeModel->update($data);
        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    }

    function delete($id){
        
        $data['id'] = $id;
        $result = $this->cakeModel->delete($id);

        if ($result) {
            header("Location: " . DOCUMENT_ROOT . "/admin/cakes");
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }

    }
}
