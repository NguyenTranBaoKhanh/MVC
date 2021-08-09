<?php

use App\Core\Controller;

class AccountController extends Controller
{
    public $userModel;


    function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    function Index()
    {

        $this->view("/account/login");
    }


    function login()
    {

        $this->view("/account/login");
    }

    function authenticate()
    {
        if (isset($_POST)) {

            $result = $this->userModel->checkLogin($_POST);
            if ($result === true) {

                $user = $this->userModel->getEmail($_POST['email']);

                $_SESSION['user'] = $user;

                header("Location: " . DOCUMENT_ROOT);
                return;
            } else {
                $data['error'][] = $result;
            }
        } else {

            $data['error'][] = "Email and password can't be empty!";
        }

        $this->view("/account/login", $data);
    }

    function register()
    {

        $this->view("/account/register");
    }

    function signup()
    {

        if (isset($_POST)) {

            $check = true;

            if ($_POST['password'] != $_POST['password_confirmation']) {
                $data['error'][] = "Password and password confirm must be same!";
                $check = false;
            }

            $isUserName = $this->userModel->isUserName($_POST['email']);
            if ($isUserName) {
                $data['error'][] = "Username already exists";
                $check = false;
            }

            if (!$check) {
                $this->view("/account/register", $data);
                return;
            }


            $result = $this->userModel->register($_POST);
            if ($result == true) {
                $data['message'][] = "Register successful. Please login!!";
                $this->view('/account/login', $data);
            } else {
                $data['error'][] = "Register unsuccessful!";
                $this->view("/account/register", $data);
            }
        }

    }

    function signout()
    {

        unset($_SESSION['user']);
        header("Location: " . DOCUMENT_ROOT);
        return;
    }

    function checkEmail()
    {
        if (isset($_GET['email'])) {
            $result = $this->userModel->isUserName($_GET['email']);
            if($result== true){
                echo"false";
                return;

            }else{
                echo "true";
                return;
            }
        }
        echo "false";
    }
}
