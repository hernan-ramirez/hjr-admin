<?php
/**
 * Table Definition for agencias
 */
require_once 'DB/DataObject.php';

class DataObjects_Agencias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'agencias';                        // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $agencia;                         // string(255)  not_null
    var $id_pais;                         // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Agencias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	
	var $fb_fieldLabels = array(
		'id_pais' => 'Pais'
	);
	var $fb_textFields = array(
		'agencia'
	);
	var $fb_linkDisplayFields = array(
		'agencia'
	);
}
?>