<?php

/*
 * Jonnyalexbh
 * @Descripcion: controlador error
 */

class Error extends Controller {
    /*
     * pagina index, método se encarga de la página de error que se mostrará cuando no se encuentra una página
     */

    public function index() {
        /* require APP . 'view/_templates/header.php';
          require APP . 'view/error/index.php';
          require APP . 'view/_templates/footer.php'; */
        View::ViewLoad('error/index');
    }

}
