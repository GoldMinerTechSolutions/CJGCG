<?php
    class Request
    {
        public $url;

        public function __construct()
        {
            $this->url = $_SERVER["REQUEST_URI"];
            // echo json_encode($_SERVER);
        }
    }

?>