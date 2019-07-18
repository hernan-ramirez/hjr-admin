<?php
/**
 * Table Definition for autores
 */
require_once 'DB/DataObject.php';

class DataObjects_Autores extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'autores';                         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $autor;                           // string(255)  not_null
    var $mail;                            // string(100)  
    var $url;                             // string(255)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Autores',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	var $fb_linkDisplayFields = array(
		'autor'
	); 
}
?>