<?php

/*
 * Jonnyalexbh
 * @Descripcion: aplicación
 */

class Application {
    /* @variable controlador null */

    private $url_controller = null;

    /* @variable action null */
    private $url_action = null;

    /* @variable params array */
    private $url_params = array();

    /*
     * Inicio de la aplicación
     */

    public function __construct() {

        $this->splitUrl();
        require ROOT . 'vendor/autoload.php';

        if (!$this->url_controller) {
            //require APP . 'controller/home.php';  // incluir controlador por defecto
            $page = new Home();
            $page->index();
        } elseif (file_exists(APP . 'controller/' . $this->url_controller . '.php')) {

            // incluir controller enviado por URL
            // require APP . 'controller/' . $this->url_controller . '.php';

            $controller = ucfirst($this->url_controller);    // Convertimos la primera letra Mayuscula
            $this->url_controller = new $controller();

            if (method_exists($this->url_controller, $this->url_action)) {

                if (!empty($this->url_params)) {
                    call_user_func_array(array($this->url_controller, $this->url_action), $this->url_params);
                } else {

                    $this->url_controller->{$this->url_action}();
                }
            } else {
                if (strlen($this->url_action) == 0) {
                    $this->url_controller->index();
                } else {
                    header('location: ' . URL . 'error');
                }
            }
        } else {
            header('location: ' . URL . 'error');
        }
    }

    /*
     * Get dividir la URL
     */

    private function splitUrl() {

        if (isset($_GET['url'])) {

            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller = isset($url[0]) ? $url[0] : null;
            $this->url_action = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $this->url_params = array_values($url);

            // para debugging, descomente estas lineas si tiene problemas con la URL
            //echo 'Controller: ' . $this->url_controller . '<br>';
            //echo 'Action: ' . $this->url_action . '<br>';
            //echo 'Parameters: ' . print_r($this->url_params, true) . '<br>';
        }
    }

}
