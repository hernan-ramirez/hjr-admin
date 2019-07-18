<?php
/**
 * Table Definition for prode
 */
require_once 'DB/DataObject.php';

class DataObjects_Prode extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'prode';                           // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_suscripto;                    // int(10)  not_null
    var $id_torneo;                       // int(10)  not_null
    var $num_fecha;                       // int(10)  not_null
    var $id_partido;                      // int(10)  not_null
    var $L;                               // int(1)  
    var $E;                               // int(1)  
    var $V;                               // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Prode',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>