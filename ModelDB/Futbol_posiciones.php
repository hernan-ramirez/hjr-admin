<?php
/**
 * Table Definition for futbol_posiciones
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_posiciones extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_posiciones';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_torneo;                       // int(10)  not_null
    var $id_club;                         // int(10)  not_null
    var $grupo;                           // string(50)  
    var $pj;                              // int(10)  
    var $pg;                              // int(10)  
    var $pe;                              // int(10)  
    var $pp;                              // int(10)  
    var $gf;                              // int(10)  
    var $gc;                              // int(10)  
    var $pts;                             // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_posiciones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>