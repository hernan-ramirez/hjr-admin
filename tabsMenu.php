<?PHP
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/Application.php';

class MenuMain
{

	function main(){
	
		/**
		 * Mando a mostrar
		 */
		$sm = new MySmarty();
		Application::getLang();
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );

		$sm->display($sm->plantilla . 'tabsMenu.htm');
		
	}
	
}

MenuMain::main();
?>