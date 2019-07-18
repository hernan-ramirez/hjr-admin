<?php
/**
 * Table Definition for f1_pilotos
 */
require_once 'ModelDB/F1_carreras.php';

class DataObjects_F1_pilotos extends DataObjects_F1_carreras 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'f1_pilotos';                      // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $apellido;                        // string(100)  
    var $nombre;                          // string(100)  
    var $fecha_nacimiento;                // date(10)  binary
    var $lugar_nacimiento;                // string(100)  
    var $debut_f1;                        // string(200)  
    var $gps_disputados;                  // int(11)  
    var $victorias;                       // int(11)  
    var $pole_position;                   // int(11)  
    var $record_vueltas;                  // int(11)  
    var $titulos_mundiales;               // int(11)  
    var $trayectoria_f1;                  // blob(16777215)  blob
    var $id_pais;                         // int(10)  
    var $id_pilotos_fotos;                // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_F1_pilotos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>