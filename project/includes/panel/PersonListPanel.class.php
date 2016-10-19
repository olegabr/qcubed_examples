<?php
require(__PANEL_GEN__ . '/PersonListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/PersonList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Person class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class PersonListPanel extends PersonListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/PersonListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the PersonList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the PersonList creates the default columns.

	protected function dtgPeople_CreateColumns() {
		$col = $this->dtgPeople->CreateNodeColumn("Id", QQN::Person()->Id);
		$col = $this->dtgPeople->CreateNodeColumn("First Name", QQN::Person()->FirstName);
		$col = $this->dtgPeople->CreateNodeColumn("Last Name", QQN::Person()->LastName);
		$col = $this->dtgPeople->CreateNodeColumn("Login", QQN::Person()->Login);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgPeople_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgPeople_EditClick'));
			$this->dtgPeople->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::Person()->Id, null, false, 0);
		}

		protected function dtgPeople_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
