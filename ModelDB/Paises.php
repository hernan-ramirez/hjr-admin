<?php
/**
 * Table Definition for paises
 */
require_once 'DB/DataObject.php';

class DataObjects_Paises extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'paises';                          // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $pais;                            // string(255)  not_null
    var $alias;                           // string(3)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Paises',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

	var $fb_linkDisplayFields = array(
		'alias', 'pais'
	); 

}
?>