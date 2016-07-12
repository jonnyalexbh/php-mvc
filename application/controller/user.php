<?php

/*
 * Jonnyalexbh
 * @Descripcion: controlador user
 */

class User extends Controller {
    /*
     * metodo get paginar usuarios
     */

    public function paginacionAngular() {
        View::ViewLoad('user/paginacionAngular');
    }

    /*
     * metodo post paginar usuarios
     */

    public function _paginacionAngular() {
        $user = new UserModel();
        $data = $user->usuario();
        header('Content-type: application/json');
        echo json_encode($data);
    }

    /*
     * metodo get paginar usuarios PHP
     */

    public function paginacionPhp($pagina = false) {

        if (!isset($pagina)) {
            $pagina = false;
        } else {
            $pagina = (int) $pagina;
        }

        $paginador = new Paginador();
        $user = new UserModel();

        $data = ['title' => 'Paginacion PHP', 'data' => $paginador->paginar($user->usuario(), $pagina),
            'paginacion' => $paginador->getView('user/paginacionPhp')];
        View::ViewLoad('user/paginacionPhp', $data);
    }

    /*
     * metodo get paginar usuarios PHP AJAX
     */

    public function paginacionPhpAjax() {
        View::ViewLoad('user/paginacionPhpAjax');
    }

    /*
     * metodo post paginar usuarios PHP AJAX
     */

    public function _paginacionPhpAjax() {

        if (!isset($_POST['pagina'])) {
            $pagina = false;
        } else {
            $pagina = (int) $_POST['pagina'];
        }

        $paginador = new Paginador();
        $user = new UserModel();

        $param = ['title' => 'Paginar PHP AJAX', 'data' => $paginador->paginar($user->usuario($_POST['condicion']), $pagina),
            'paginacion' => $paginador->getView()];

        View::ViewLoadSin('user/paginacionPhpAjaxHelp', $param);
    }

}
