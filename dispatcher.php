<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        error_log(json_encode($controller));

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "tasksController";
        $file = ROOT . 'Controllers'. '\\' . $name . '.php';
        require($file);

        $teste = new tasksController();
        $teste->index();

        $controller = new $name();
        return $controller;
    }

}
?>