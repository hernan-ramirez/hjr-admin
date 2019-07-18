<?php
/**
 * Table Definition for futbol_clubes
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_clubes extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_clubes';                   // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(250)  not_null
    var $alias;                           // string(100)  not_null
    var $archivo_escudo;                  // string(255)  
    var $fundacion;                       // blob(16777215)  blob
    var $titulos;                         // blob(16777215)  blob
    var $direccion;                       // blob(16777215)  blob
    var $estilo_juego;                    // blob(16777215)  blob
    var $id_pais;                         // int(11)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_clubes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>