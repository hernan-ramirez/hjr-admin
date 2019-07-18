<?php
/**
 * Table Definition for fotos_agencias
 */
require_once 'ModelDB/Agencias.php';

class DataObjects_Fotos_agencias extends DataObjects_Agencias 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'fotos_agencias';                  // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $agencia;                         // string(255)  not_null
    var $id_pais;                         // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Fotos_agencias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>