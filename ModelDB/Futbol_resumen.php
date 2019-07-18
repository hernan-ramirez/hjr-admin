<?php
/**
 * Table Definition for futbol_resumen
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_resumen extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_resumen';                  // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_torneo;                       // int(10)  not_null
    var $ck_goltv;                        // int(1)  
    var $id_instancia;                    // int(11)  
    var $id_primer_club;                  // int(10)  not_null
    var $goles_primer_club;               // string(5)  not_null
    var $id_segundo_club;                 // int(10)  not_null
    var $goles_segundo_club;              // string(5)  not_null
    var $fecha_partido;                   // date(10)  binary
    var $hora_partido;                    // time(8)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_resumen',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>