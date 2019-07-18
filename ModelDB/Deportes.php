<?php
/**
 * Table Definition for deportes
 */
require_once 'DB/DataObject.php';

class DataObjects_Deportes extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'deportes';                        // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $deporte;                         // string(255)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Deportes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	
	var $fb_linkDisplayFields = array(
		'deporte'
	); 
}
?>