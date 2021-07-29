<?php

namespace App\Core;

class Controller
{
    function model($model)
    {
        if (file_exists("./App/Models/" . $model . ".php")) {
            require_once("./App/Models/" . $model . ".php");
            return new $model;
        }
    }


    function view($view, $data = [])
    {
        if (file_exists("./App/Views/" . $view . ".php")) {
            require_once("./App/Views/" . $view . ".php");
            return;
        } else {
            die("Not found view:" . $view);
        }
    }
}
