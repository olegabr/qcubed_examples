<?php
require(__PANEL_GEN__ . '/AddressListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/AddressList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Address class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class AddressListPanel extends AddressListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/AddressListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the AddressList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the AddressList creates the default columns.

	protected function dtgAddresses_CreateColumns() {
		$col = $this->dtgAddresses->CreateNodeColumn("Id", QQN::Address()->Id);
		$col = $this->dtgAddresses->CreateNodeColumn("Person", QQN::Address()->Person);
		$col = $this->dtgAddresses->CreateNodeColumn("Street", QQN::Address()->Street);
		$col = $this->dtgAddresses->CreateNodeColumn("City", QQN::Address()->City);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgAddresses_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgAddresses_EditClick'));
			$this->dtgAddresses->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::Address()->Id, null, false, 0);
		}

		protected function dtgAddresses_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
