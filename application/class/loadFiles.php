<?php

/*
 * Jonnyalexbh
 * @Descripcion: métodos estáticos carga de archivos
 */

class LoadFiles {
    /*
     *  carga archivo PHP
     */

    public static function load($path) {
        require "$path.php";
    }

}
