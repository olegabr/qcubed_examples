<?php
require(__PANEL_GEN__ . '/TypeTestListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/TypeTestList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the TypeTest class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class TypeTestListPanel extends TypeTestListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/TypeTestListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the TypeTestList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the TypeTestList creates the default columns.

	protected function dtgTypeTests_CreateColumns() {
		$col = $this->dtgTypeTests->CreateNodeColumn("Id", QQN::TypeTest()->Id);
		$col = $this->dtgTypeTests->CreateNodeColumn("Date", QQN::TypeTest()->Date);
		$col = $this->dtgTypeTests->CreateNodeColumn("Time", QQN::TypeTest()->Time);
		$col = $this->dtgTypeTests->CreateNodeColumn("Date Time", QQN::TypeTest()->DateTime);
		$col = $this->dtgTypeTests->CreateNodeColumn("Test Int", QQN::TypeTest()->TestInt);
		$col = $this->dtgTypeTests->CreateNodeColumn("Test Float", QQN::TypeTest()->TestFloat);
		$col = $this->dtgTypeTests->CreateNodeColumn("Test Text", QQN::TypeTest()->TestText);
		$col = $this->dtgTypeTests->CreateNodeColumn("Test Bit", QQN::TypeTest()->TestBit);
		$col = $this->dtgTypeTests->CreateNodeColumn("Test Varchar", QQN::TypeTest()->TestVarchar);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgTypeTests_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgTypeTests_EditClick'));
			$this->dtgTypeTests->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::TypeTest()->Id, null, false, 0);
		}

		protected function dtgTypeTests_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
