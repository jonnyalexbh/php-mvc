<?php

/*
 * Jonnyalexbh
 * @Descripcion: métodos estáticos para fechas
 */

class Date {
    /*
     * return la fecha de hoy
     */

    public static function today() {
        return date("y-m-d");
    }

    /*
     * return fecha y hora actual
     */

    public static function now() {
        return date("Y-m-d H:i:s");
    }

    /*
     * return fecha corta
     */

    public static function shortDate($data) {
        $fecha = date('Y-m-d', strtotime($data));
        return $fecha;
    }

}
