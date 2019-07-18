<?php
/**
 * Table Definition for galerias
 */
require_once 'DB/DataObject.php';

class DataObjects_Galerias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'galerias';                        // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $galeria;                         // string(255)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Galerias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>