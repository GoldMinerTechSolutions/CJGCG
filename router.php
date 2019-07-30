<?php

class Router
{

    static public function parse($url, $request)
    {
        error_log($url);
        $url = trim($url);
        error_log($url);
        if ($url == "\PHP_Rush_MVC\\")
        {
            $request->controller = "tasks";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('\\', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            // error_log($explode_url[0]);
            $request->action = $explode_url[1];
            // error_log($explode_url[1]);
            $request->params = array_slice($explode_url, 2);
        }

    }
}
?>