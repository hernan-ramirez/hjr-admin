<?php
/**
 * Table Definition for futbol_partidos_goltv
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_partidos_goltv extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_partidos_goltv';           // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_torneo;                       // int(11)  not_null
    var $ck_goltv;                        // int(1)  
    var $id_etapa;                        // int(10)  
    var $orden_llave;                     // int(10)  
    var $numero_fecha;                    // int(10)  
    var $grupo;                           // int(10)  
    var $id_primer_club;                  // int(10)  not_null
    var $goles_primer_club;               // int(5)  
    var $penales_primer_club;             // int(5)  
    var $grupo_primer_club;               // string(50)  
    var $id_segundo_club;                 // int(10)  not_null
    var $goles_segundo_club;              // int(5)  
    var $penales_segundo_club;            // int(5)  
    var $grupo_segundo_club;              // string(50)  
    var $fecha_partido;                   // date(10)  not_null binary
    var $hora_partido;                    // time(8)  binary
    var $estadio;                         // string(200)  
    var $arbitro;                         // string(200)  
    var $lineas;                          // string(200)  
    var $id_partidos_estados;             // int(10)  
    var $comentario;                      // string(200)  
    var $cronica;                         // blob(16777215)  blob
    var $ck_mam;                          // int(1)  
    var $ck_gag;                          // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_partidos_goltv',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>