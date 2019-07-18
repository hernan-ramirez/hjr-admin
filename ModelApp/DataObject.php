<?PHP
/**
 *
 * DataObject personalizado
 *
 * Crea el objeto descendiente de DO
 * desde el modelo pasado que está alojado 
 * en /ModelDB
 * Necesita la instalación del DB_DataObject 
 * 
 * @link http://pear.php.net/package/DB_DataObject DB_DataObject
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see MyDO
 * @todo <B>Instalar</B> DB_DataObject en {include_path}/DB/DataObject
 *
 */

/**
 *
 * CONEXION
 * Incluyo el Layer de Base
 * + DB
 * &#8226;&#8226; + DB_DataObject
 *
 * Responsable de DO: Alan Knowles [alan@akbkhome.com]
 *
 */
require_once 'DB/DataObject.php';
/**
 * Incluyo las configuraciones por la tabla defecto
 */
require_once 'ModelApp/Application.php';


/**
 *
 * Creo mi clase de configuración de DB_DO 
 * @see DataObject.php
 * @package ModelApp
 *
 */
class MyDO extends DB_DataObject  
{
	/**
	 *
	 * Objeto de la tabla en base 
	 * @var Object Almacena el DO de la tabla
	 *
	 */	
	var $ob;

	
	/**
	 *
	 * Creo mi objeto de datos
	 *
	 * @see MyDO
	 * @access public
	 * @param $object
	 * @return $ob DB_DO
	 *
	 */
	function getDataObject($object){
		
		Application::getCongif();
		$conf = PEAR::getStaticProperty('Application','config');
		
		if(!isset($object) || $object == '') { $object = $conf['Application']['table_default']; }		
		$ob = DB_DataObject::Factory($object);
		
		if ( PEAR::isError($ob) ) {			
			die($ob->getMessage());			
		}
		
		$this->ob = $ob;
		
	}

}

?>