<?PHP
/**
 *
 * Configuraciones de la aplicación
 *
 * Este archivo es el encargado de capturar las 
 * configuraciones establecidas en 'Custom/config.ini'.
 * Su principal objetivo es el de tomar los permisos
 * para acceder a la base de datos y la de armar
 * la matrix del lenguaje.
 * Necesita la instalación del PEAR por el 
 * método 'getStaticProperty'.
 * @link http://pear.php.net Sitio PEAR
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see Application
 * @todo <B>Instalar</B> PEAR
 * @todo Que 'safe_mode' esté desactivado
 *
 */

/**
 *
 * PEAR
 * Incluyo el cuerpo de PEAR
 *
 */
require_once 'PEAR.php';


/**
 *
 * La clase Aplicación
 * @see Application.php
 * @package ModelApp
 *
 */
class Application
{

	/**
	 *
	 * Archivo de Configuración 
	 * @var Array Matriz de las variables seteadas en config.ini
	 *
	 */	
	var $config;
	
	/**
	 *
	 * Archivo del idioma 
	 * @var Array Matriz de las variables seteadas en View/Lang/{idioma}.txt
	 *
	 */	
	var $lang;
	
	/**
	 *
	 * Obtener configuración
	 *
	 * @see Application
	 * @access public
	 * @param Sin parámetros
	 * @return $conf
	 * @static
	 */
	function getCongif(){
	
		/**
		 *
		 * Parseo mi archivo de configuración
		 * @var db Object al que le paso los valores de para la conexion de BD
		 * @var conf Object al que almacena toda la matriz de configuración
		 * @var parse Matriz temporaria
		 *
		 * Compruebo primero si se puede leer el .ini y luego lo recorro.
		 */
		if( ini_get('safe_mode') ){
		   die("Safe_Mode is active, I can't execute [parse_ini_file] for read configurations");
		} 		 
		$parse = parse_ini_file('Custom/config.ini', true);
		
		/**
		 * Seteo la conexion DB_DataObject
		 */
		$db = &PEAR::getStaticProperty('DB_DataObject','options');
		$db = $parse['DB_DataObject'];

		/**
		 * Seteo la configuración
		 */
		$conf = &PEAR::getStaticProperty('Application','config');
		$conf = $parse;
		
	}


	/**
	 *
	 * Obtener el lenguaje
	 *
	 * @see Application
	 * @access public
	 * @param Sin parámetros
	 * @return $lang
	 * @static
	 */	
	function getLang(){

		/**
		 *
		 * Parseo mi archivo de configuración
		 * @var lang Objeto al que le paso los valores en matriz del lenguaje
		 * @var parse Matriz temporaria
		 *
		 * Primero tomo la configuración
		 */
		Application::getCongif();
	
		$conf = PEAR::getStaticProperty('Application','config');
		$parse = parse_ini_file('View/Lang/' . $conf['Application']['lang'] . '.txt', true);
		
		$lang = &PEAR::getStaticProperty('Application','lang');
		$lang = $parse;
		
	}
	
}
?>
