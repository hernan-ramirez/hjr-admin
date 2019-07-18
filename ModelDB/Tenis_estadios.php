<?php
/**
 * Table Definition for tenis_estadios
 */
require_once 'ModelDB/Tenis_campeonatos.php';

class DataObjects_Tenis_estadios extends DataObjects_Tenis_campeonatos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'tenis_estadios';                  // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $torneo;                          // string(255)  
    var $estadio;                         // string(255)  not_null
    var $ubicacion;                       // string(255)  
    var $capacidad;                       // string(255)  
    var $historia;                        // blob(16777215)  blob
    var $caracteristicas;                 // blob(16777215)  blob
    var $archivo_estadiotenis;            // string(255)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Tenis_estadios',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>