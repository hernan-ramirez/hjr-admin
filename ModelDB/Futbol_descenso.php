<?php
/**
 * Table Definition for futbol_descenso
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_descenso extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_descenso';                 // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_torneos;                      // int(10)  
    var $id_club;                         // int(10)  not_null
    var $ac_1_2_pts;                      // int(10)  
    var $ac_1_2_pj;                       // int(10)  
    var $ac_2_3_pts;                      // int(10)  
    var $ac_2_3_pj;                       // int(10)  
    var $ac_3_4_pts;                      // int(10)  
    var $ac_3_4_pj;                       // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_descenso',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>