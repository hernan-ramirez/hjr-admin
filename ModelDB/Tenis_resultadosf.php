<?php
/**
 * Table Definition for tenis_resultadosf
 */
require_once 'ModelDB/Tenis_campeonatos.php';

class DataObjects_Tenis_resultadosf extends DataObjects_Tenis_campeonatos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'tenis_resultadosf';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_campeonato;                   // int(10)  not_null
    var $id_instancia;                    // int(10)  
    var $id_primer_jugadorwta;            // int(10)  not_null
    var $jug1_set1;                       // string(5)  
    var $tie_jug1_set1;                   // int(2)  
    var $jug1_set2;                       // string(5)  
    var $tie_jug1_set2;                   // int(2)  
    var $jug1_set3;                       // string(5)  
    var $tie_jug1_set3;                   // int(2)  
    var $jug1_set4;                       // string(5)  
    var $tie_jug1_set4;                   // int(2)  
    var $jug1_set5;                       // string(5)  
    var $id_segundo_jugadorwta;           // int(10)  not_null
    var $jug2_set1;                       // string(5)  
    var $tie_jug2_set1;                   // int(2)  
    var $jug2_set2;                       // string(5)  
    var $tie_jug2_set2;                   // int(2)  
    var $jug2_set3;                       // string(5)  
    var $tie_jug2_set3;                   // int(2)  
    var $jug2_set4;                       // string(5)  
    var $tie_jug2_set4;                   // int(2)  
    var $jug2_set5;                       // string(5)  
    var $fecha_partido;                   // date(10)  binary
    var $hora_partido;                    // time(8)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Tenis_resultadosf',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>