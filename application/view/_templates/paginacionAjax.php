<?php

if (isset($this->_paginacion)) {
    echo "<div style='text-align: center;'><ul class='pagination'>";

    if ($this->_paginacion['primero']) {
        echo "<li><a class='pagina' pagina=" . $this->_paginacion['primero'] . " href='javascript:void(0);'>Primero</a></li>";
    } else {
        echo "<li class='disabled'><a href='#'>Primero</a></li>";
    }

    if ($this->_paginacion['anterior']) {
        echo "<li><a class='pagina' pagina=" . $this->_paginacion['anterior'] . " href='javascript:void(0);'> Anterior</a></li>";
    } else {
        echo "<li class='disabled'><a href='#'>Anterior</a></li>";
    }

    for ($i = 0; $i < count($this->_paginacion['rango']); $i++) {
        if ($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]) {
            echo "<li class='active'><a href='#'>" . $this->_paginacion['rango'][$i] . "</a></li>";
        } else {
            echo "<li><a class='pagina' pagina=" . $this->_paginacion['rango'][$i] . " href='javascript:void(0);'> " . $this->_paginacion['rango'][$i] . "</a></li>";
        }
    }

    if ($this->_paginacion['siguiente']) {
        echo "<li><a class='pagina' pagina=" . $this->_paginacion['siguiente'] . " href='javascript:void(0);'> siguiente</a></li>";
    } else {
        echo "<li class='disabled'><a href='#'>Siguiente</a></li>";
    }

    if ($this->_paginacion['ultimo']) {
        echo "<li><a class='pagina' pagina=" . $this->_paginacion['ultimo'] . " href='javascript:void(0);'> ultimo</a></li>";
    } else {
        echo "<li class='disabled'><a href='#'>Ultimo</a></li>";
    }

    echo "</ul></div>";
}