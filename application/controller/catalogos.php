<?php

/*
 * Jonnyalexbh
 * @Descripcion: controlador catalogos
 */

class Catalogos extends Controller {
    /*
     * metodo post cargar paises
     */

    public function _loadCountry() {

        $catalogosModel = new CatalogosModel();
        $data = $catalogosModel->cargaPais();

        header('Content-type: application/json');
        echo '{"paises": ' . json_encode($data) . '}';
    }

    /*
     * metodo post carga departamentos
     */

    public function _loadDepartment() {

        $request = json_decode(file_get_contents("php://input"));

        $CatalogosModel = new CatalogosModel();
        $data = $CatalogosModel->cargaDepartamento($request->idPais);

        header('Content-type: application/json');
        echo '{"departamentos": ' . json_encode($data) . '}';
    }

}
