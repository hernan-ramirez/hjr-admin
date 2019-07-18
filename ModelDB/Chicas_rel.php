<?php
/**
 * Table Definition for chicas_rel
 */
require_once 'ModelDB/Chicas.php';

class DataObjects_Chicas_rel extends DataObjects_Chicas 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'chicas_rel';                      // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $id_chica;                        // int(10)  not_null
    var $id_chicasimg;                    // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Chicas_rel',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>