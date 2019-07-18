<?php
/**
 *
 * Modelos de AutosFormularios
 *
 * Este archivo es el encargado de genarar 
 * los campos de formularios segun el 
 * modelaje que se le dió al DataObject en /ModelDB
 * 
 * Necesita la instalación del DB_DataObject_FormBuilder
 * 
 * @link http://opensource.21st.de/ Sitio DB_DataObject_FormBuilder
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see Formulario
 * @todo <B>Instalar</B> DB_DataObject_FormBuilder en {include_path}/DB/DataObject/FormBuilder
 *
 */

/**
 * Incluyo lo que uso:
 * Sistema de plantillas y
 * Conexion en Wrapper
 * Generador de Formulario [DB_DO_FB]:
 * Justin Patrin [papercrane@reversefold.com]
 * Markus Wolff  [wolff@21st.de]
 */
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/DataObject.php';
require_once 'ModelApp/Application.php';
require_once 'DB/DataObject/FormBuilder.php';


/**
 *
 * Formulario genérico de mi modelo
 * @see Form.php
 * @package ModelApp
 *
 */
class Formulario
{

	/**
	 *
	 * Instancia de plantilla
	 * @var Object 
	 * @access private
	 *
	 */	
	var $smarty;

	/**
	 *
	 * Instancia del formulario generado con todos sus campos por getForm
	 * @var Object 
	 * @access public
	 *
	 */	
	var $form;
	
	/**
	 *
	 * Instancia del Formulario modelado
	 * @var Object 
	 * @access public
	 *
	 */	
	var $fg;
	
	
	/**
	 *
	 * Creo el objeto formulario
	 * @see Formulario
	 * @access public
	 * @param $ob
	 * @return Formulario
	 *
	 */
	function getFormulario($ob){
		
		$fg =& DB_DataObject_FormBuilder::create($ob);
		$fg->createSubmit = false;
		$form =& $fg->getForm();
		$this->fg = $fg;
		$this->form = $form;
		
	}
	
	
	
	/**
	 *
	 * Tomo los datos del submit
	 * @see Formulario
	 * @access public
	 * @param Sin parámetros
	 * @return NULL
	 *
	 */
	function getSubmit(){

		if ($this->form->validate()) {
			$this->form->process(array(&$this->fg, 'processForm'), true);
			/*
			Tomar el id del nuevo registro
			Mandarlo con redireccion a Edicion
			*/
		}
	
	}
	
	
	/**
	 *
	 * Asigno las variables y mando a mostrar
	 * @see Formulario
	 * @access public
	 * @param $template
	 * @return Plantilla
	 *
	 */
	function sendToTemplate($template){	
	
		$sm = $this->smarty;	
		$sm = new MySmarty();		
		Application::getLang();
				
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );
		$sm->assign("campos", $this->form->toArray());
				
		/**
		 * Mando a mostrar
		 */
		$sm->display($sm->plantilla . $template);
		
	}
}

?>