<?php

/*
 * Jonnyalexbh
 * @Descripcion: métodos estáticos carga de vistas
 */

class View {
    /*
     * función estatica para incluir head, view y footer
     */

    public static function ViewLoad($path, $data = []) {
        extract($data);   // cada clave(key) ahora es una variable (var)
        require APP . 'view/_templates/header.php';
        require APP . 'view/' . $path . '.php';
        require APP . 'view/_templates/footer.php';
    }

}
