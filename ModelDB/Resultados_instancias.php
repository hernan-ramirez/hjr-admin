<?php
/**
 * Table Definition for resultados_instancias
 */
require_once 'DB/DataObject.php';

class DataObjects_Resultados_instancias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'resultados_instancias';           // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $instancia;                       // string(100)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Resultados_instancias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>