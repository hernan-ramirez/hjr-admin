<?php
/**
 * Table Definition for tenis_campeonatos
 */
require_once 'DB/DataObject.php';

class DataObjects_Tenis_campeonatos extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'tenis_campeonatos';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $campeonato;                      // string(200)  not_null
    var $participantes;                   // int(3)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Tenis_campeonatos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>