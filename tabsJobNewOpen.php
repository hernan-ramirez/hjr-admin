<?PHP
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/Application.php';

class JobsMain
{

	function Main(){
		
		/**
		 * Mando a mostrar
		 */
		$sm = new MySmarty();
		Application::getLang();
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );

		$sm->display($sm->plantilla . 'tabsJobNewOpen.htm');

	
	}

}

JobsMain::Main();
?>