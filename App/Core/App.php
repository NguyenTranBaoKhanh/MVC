<?php

namespace App\Core;

class App
{
    public $controller = "Home";
    public $action = "Index";
    public $params = [];

    function __construct()
    {
        //process url
        $url = $this->urlProcess();

        //xu li controller
        if (file_exists("./App/Controllers/" . ucfirst($url[0]) . "Controller.php")) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        $this->controller = $this->controller . "Controller";

        require_once("./App/Controllers/" . $this->controller . ".php");

        $this->controller = new $this->controller;

        //action
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
        }

        //param
        $this->params = $url ? array_values($url) : [];

        //call function in controller: controller-> action-> param
        call_user_func_array([$this->controller, $this->action], $this->params);
    }



    private function urlProcess()
    {
        if (isset($_GET['url'])) {
            $url = explode('/', filter_var(trim($_GET['url'])));
            return $url;
        } else {
            return [
                "Home",
                "Index"
            ];
        }
    }
}
