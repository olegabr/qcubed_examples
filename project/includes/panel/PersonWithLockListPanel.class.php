<?php
require(__PANEL_GEN__ . '/PersonWithLockListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/PersonWithLockList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the PersonWithLock class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class PersonWithLockListPanel extends PersonWithLockListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/PersonWithLockListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the PersonWithLockList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the PersonWithLockList creates the default columns.

	protected function dtgPersonWithLocks_CreateColumns() {
		$col = $this->dtgPersonWithLocks->CreateNodeColumn("Id", QQN::PersonWithLock()->Id);
		$col = $this->dtgPersonWithLocks->CreateNodeColumn("First Name", QQN::PersonWithLock()->FirstName);
		$col = $this->dtgPersonWithLocks->CreateNodeColumn("Last Name", QQN::PersonWithLock()->LastName);
		$col = $this->dtgPersonWithLocks->CreateNodeColumn("Sys Timestamp", QQN::PersonWithLock()->SysTimestamp);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgPersonWithLocks_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgPersonWithLocks_EditClick'));
			$this->dtgPersonWithLocks->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::PersonWithLock()->Id, null, false, 0);
		}

		protected function dtgPersonWithLocks_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
