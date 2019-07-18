<?PHP
/**
 *
 * Modelo de Smarty adaptado
 *
 * Este archivo contiene una adaptacion de Smarty para 
 * el manejo de las plantillas de la aplicación.<BR>
 * Contiene remplazos estáticos 
 * @see remplazo_path
 * y define las etiquetas en forma de 
 * comentarios de html para que sean navegables por el explorer
 * sin necesidad de un server corriendo. 
 * @link http://smarty.php.net Sitio Smarty
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see MySmarty
 * @todo <B>Instalar</B> Smarty en  /{$include_path}/Smarty/
 *
 */

/**
 *
 * PLANTILLA
 * Las plantillas de esta aplicación estan 
 * manejadas por Smarty
 *
 */
require_once 'Smarty/Smarty.class.php';


/**
 *
 * Estableciendo las plantillas
 * La plantilla gráfica asignada para la aplicación
 * @var string Es el directorio de los templates a utilizar.
 * @global string Directorio plantillas
 *
 */
$plantillaDefecto = 'Default/';


/**
 *
 * Filtro de Entrada
 * Para remplazar las extenciones htm por php  y el path de los repositorios
 * @param $source es la fuente htm que esta agarrando Smarty
 * @return $source devuelve la fuente con los replace hechos.
 * @access private
 *
 */
function remplazo_path($source){
	
	global $plantillaDefecto;
	$source = str_replace('../REPOSITORY/','View/REPOSITORY/', $source);
	$source = str_replace('.htm','.php', $source);
	$source = str_replace('rel="stylesheet" href="Look','rel="stylesheet" href="View/' . $plantillaDefecto . 'Look' , $source);
	/**
	 * @todo Hacer variable para el Look & Feel (diferente a la variable de plantilla)
	 */

	/* Elimino Etiquetas */
	$source = preg_replace('@<DEL[^>]*?>.*?</DEL>@si','', $source); // Elimina toda la etqueta <DEL></DEL>
	$source = preg_replace('/<!--.*-->/U','', $source); // Elimina cualquier comentario HTML
	return $source;
	
}


/**
 *
 * Extendiendo Smarty
 * @see Smarty.php
 * @package ModelApp
 *
 */
class MySmarty extends Smarty 
{
	
	/**
	 *
	 * Ubicación del skin a utilizar
	 * @var string Directorio de las plantillas despues del /View
	 * @access public
	 *
	 */	
	var $plantilla;
	
	
	/**
	 *
	 * <B>Constructor de plantilla</B>
	 *
	 * Creo mi smarty y le modelo las configuraciones. 
	 * Luego en toda la aplicación uso este modelaje, nunca el original.
	 *
	 * @see Smarty
	 * @access public
	 * @static
	 * @param Sin parámetros
	 * @return NULL
	 *
	 * @todo Comentar <code>$this->force_compile = true;</code> para poner en producción<BR>
	 * @todo Comentar <code>$this->debugging = true;</code> para poner en producción<BR>
	 */
	function MySmarty(){
	
		global $plantillaDefecto;

		/**
		 *
		 * Configuro las plantillas
		 *
		 */
		$this->Smarty();
		$this->force_compile = true; // comentar en ambiente de produccion
		//$this->debugging = true; // comentar en ambiente de produccion
		$this->left_delimiter = '<!--{';
		$this->right_delimiter = '}-->';
		$this->template_dir = './View';
		$this->compile_dir = './Compile';
		
		/**
		 *
		 * Seteo los remplazos HARD
		 *
		 */
		$this->plantilla = $plantillaDefecto;
		$this->register_postfilter('remplazo_path');        

	}
	
}
?>