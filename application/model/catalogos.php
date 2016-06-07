<?php

/*
 * Jonnyalexbh
 * @Descripcion: modelo catalogos
 */

class CatalogosModel extends Model {
    /*
     * paises
     */

    public function cargaPais() {
        $sql = $this->_getDbh()->query("SELECT * FROM pais");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
     * departamentos
     */

    public function cargaDepartamento($idPais) {
        $sql = $this->_getDbh()->query("SELECT B.ID_DEPARTAMENTO, B.NOMBRE
                                            FROM PAIS A
                                                INNER JOIN DEPARTAMENTO B
                                                    ON A.ID_PAIS = B.ID_PAIS
                                                        WHERE B.ID_PAIS = '$idPais'");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

}
