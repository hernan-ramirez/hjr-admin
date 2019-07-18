<?php
/**
 * Table Definition for prode_puntos
 */
require_once 'ModelDB/Prode.php';

class DataObjects_Prode_puntos extends DataObjects_Prode 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'prode_puntos';                    // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_suscripto;                    // int(10)  not_null
    var $id_torneo;                       // int(10)  not_null
    var $num_fecha;                       // int(10)  not_null
    var $pts;                             // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Prode_puntos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>