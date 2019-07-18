<?php
/**
 * Table Definition for tenis_jugadoratp
 */
require_once 'ModelDB/Tenis_campeonatos.php';

class DataObjects_Tenis_jugadoratp extends DataObjects_Tenis_campeonatos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'tenis_jugadoratp';                // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $apellido;                        // string(100)  not_null
    var $nombre;                          // string(100)  
    var $apodo;                           // string(100)  
    var $id_pais;                         // int(11)  not_null
    var $id_foto;                         // int(10)  
    var $descripcion;                     // blob(65535)  blob
    var $lugar_nacimiento;                // string(150)  
    var $lugar_residencia;                // string(200)  
    var $fecha_nacimiento;                // date(10)  binary
    var $titulos_singles;                 // string(20)  
    var $titulos_dobles;                  // string(20)  
    var $grand_slams;                     // string(20)  
    var $masters;                         // string(20)  
    var $masters_series;                  // string(20)  
    var $otros;                           // string(20)  
    var $copa_davis;                      // string(20)  
    var $finales_singles;                 // int(20)  
    var $finales_dobles;                  // string(20)  
    var $finales_grand_slams;             // string(20)  
    var $finales_masters;                 // string(20)  
    var $finales_masters_series;          // string(20)  
    var $finales_otros;                   // string(20)  
    var $finales_copa_davis;              // string(20)  
    var $mejor_ranking;                   // int(20)  
    var $champions_race;                  // int(20)  
    var $comentarios;                     // blob(65535)  blob

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Tenis_jugadoratp',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>