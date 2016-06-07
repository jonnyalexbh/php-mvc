<?php

/*
 * @Descripcion: Libreria de conexion PDO travez del patron singletom
 * @Adaptada: Jeison Varilla
 * @compartida : Andres Guzman
 * @Licencia: Libre uso GNU-GPL 
 * @Email:2012 - keypherc@gamil.com 
 * @Website:www.keyphercom.com
 */

class DbPdo {
    /*
      private $_dbh;
      private $_username = "root";
      private $_passwd = "";
      private $_dns = "mysql:host=localhost;dbname=proyecto_phpoo";
      private static $_instance = null;
     */

    private $_dbh;
    private $_username = DB_USER;
    private $_passwd = DB_PASS;
    private $_dns = "" . DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . "";
    private static $_instance = null;

    public static function getInstance() {
        if (!(self::$_instance instanceof DbPdo)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        try {
            $this->_dbh = new PDO($this->_dns, $this->_username, $this->_passwd);
            $this->_dbh->exec("SET CHARACTER SET " . DB_CHARSET . "");
        } catch (PDOException $e) {
            echo "Error al conectar DB!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getConn() {
        if ($this->_dbh === null) {
            self::getInstance();
        }

        return $this->_dbh;
    }

    public function isConn() {
        return ((bool) ($this->_dbh instanceof PDO));
    }

    public function closeConn() {
        $this->_dbh = null;
    }

    public function __destruct() {
        $this->closeConn();
    }

}
