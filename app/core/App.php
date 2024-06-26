<?php
class App {
    protected $controller = "LoginControllers";
    protected $method = "index";
    protected $params = []; 

    public function __construct()
    {
        $url = $this->parseURL();

        // Cek ada tidak nya sebuah file di dalam folder controller sesuai url yang kita ketik
        if(isset($url[0]) && file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Memanggil controller default
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Parameter
        if(!empty($url)){
            $this->params = array_values($url);
        }

        // Menjalankan Controller & Method, Serta Mengirimkan Parameter
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return []; // Return an empty array if 'url' is not set
    }
}