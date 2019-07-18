<?PHP
/**
 *
 * Archivo de Formulario
 *
 * El objetivo de este archivo es el de presentar los formularios 
 * para el ingreso o modificación de datos
 * 
 * @link http://localhost/Admin.2005/View/Default/form.htm Presentación Gráfica
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ControllerApp
 * @see MainForm
 *
 */
 

/**
 * Incluyo mi modelo de formulario.
 */ 
require_once 'ModelApp/Form.php';

/**
 * Y mi modelo de Editor de HTML.
 */ 
require_once("ModelApp/Editor.php"); 


/**
 * Clase principal de <B>Form.php</B>
 * @see form.php
 * @package ControllerApp
 */ 
class MainForm
{

	/**
	 * <B>Genero Formulario</B>
	 * Con mi modelo en ModelApp
	 *
	 * @see Formulario
	 * @param Sin parámetros
	 * @return NULL
	 * @access public
	 * @static
	 * @final
	 */
	function main(){
		
		/**
		 * Tomo los datos del QueryString
		 */
		$queryDecode = unserialize( base64_decode( $_GET['q'] ) );
		$mDO = new MyDO();
		$mF = new Formulario();
		
		$mDO->getDataObject($queryDecode['object']);
		$mF->getFormulario($mDO->ob);
		$mF->getSubmit();
			
		$mF->sendToTemplate('formDIV.htm');
		
	}	
}

MainForm::main();
?>