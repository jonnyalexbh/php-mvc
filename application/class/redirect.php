<?php

/*
 * Jonnyalexbh
 * @Descripcion: métodos estáticos para redireccionar
 */

class Redirect {
    /*
     *  redireccionar
     */

    public static function to($path) {
        header("location:$path");
    }

}
