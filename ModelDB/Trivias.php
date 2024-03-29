<?php
/**
 * Table Definition for trivias
 */
require_once 'DB/DataObject.php';

class DataObjects_Trivias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'trivias';                         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $trivia;                          // string(255)  not_null
    var $ck_activa;                       // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Trivias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>