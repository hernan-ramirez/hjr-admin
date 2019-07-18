<?php
/**
 * Table Definition for medallero_puestos
 */
require_once 'ModelDB/Medallero.php';

class DataObjects_Medallero_puestos extends DataObjects_Medallero 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'medallero_puestos';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_medallero;                    // int(10)  not_null
    var $id_jugador;                      // int(10)  not_null
    var $oro;                             // int(10)  
    var $plata;                           // int(10)  
    var $bronce;                          // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Medallero_puestos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>