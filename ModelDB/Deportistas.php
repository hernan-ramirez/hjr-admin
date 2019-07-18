<?php
/**
 * Table Definition for deportistas
 */
require_once 'ModelDB/Deportes.php';

class DataObjects_Deportistas extends DataObjects_Deportes 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'deportistas';                     // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $comentario;                      // blob(16777215)  not_null blob
    var $id_fotos;                        // int(10)  not_null
    var $perfil;                          // string(255)  
    var $trayectoria;                     // blob(16777215)  blob
    var $apodos;                          // string(255)  
    var $posicion;                        // string(255)  
    var $fecha_nacimiento;                // date(10)  binary
    var $lugar_nacimiento;                // string(255)  
    var $id_equipo;                       // int(10)  
    var $id_pais;                         // int(10)  
    var $id_deporte;                      // int(10)  
    var $fecha_creacion;                  // real(22)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Deportistas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>