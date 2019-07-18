<?php
/**
 * Table Definition for columnistas
 */
require_once 'DB/DataObject.php';

class DataObjects_Columnistas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'columnistas';                     // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $archivo_columnista;              // string(50)  
    var $email;                           // string(100)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Columnistas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>