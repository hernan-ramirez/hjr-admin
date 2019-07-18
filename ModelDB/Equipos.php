<?php
/**
 * Table Definition for equipos
 */
require_once 'DB/DataObject.php';

class DataObjects_Equipos extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'equipos';                         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $nombre_sistema;                  // string(255)  not_null
    var $estilo_juego;                    // string(255)  not_null
    var $id_fotos;                        // int(10)  not_null
    var $selccionado;                     // string(255)  not_null
    var $club;                            // string(255)  not_null
    var $historia;                        // blob(16777215)  not_null blob
    var $id_deporte;                      // int(10)  not_null
    var $id_pais;                         // int(10)  not_null
    var $fecha_creacion;                  // datetime(19)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Equipos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>