<?php

/*
 * Jonnyalexbh
 * @Descripcion: controlador home
 */

class Home extends Controller {
    /*
     * metodo get index
     */

    public function index() {
        /* require APP . 'view/_templates/header.php';
          require APP . 'view/home/index.php';
          require APP . 'view/_templates/footer.php'; */
        $data = ['title' => 'Pagina inicial', 'otraVar' => 'subtitulo'];
        View::ViewLoad('home/index', $data);
    }

    /*
     * metodo get exampleOne
     */

    public function exampleOne() {
        View::ViewLoad('home/example_one');
    }

    /*
     * metodo get exampleTwo
     */

    public function exampleTwo() {
        View::ViewLoad('home/example_two');
    }

    /*
     * metodo get selectsDependientes
     */

    public function selectsDependent() {
        View::ViewLoad('home/selectsDependientes');
    }

}
