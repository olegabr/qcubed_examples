<?php
require(__PANEL_GEN__ . '/TwoKeyListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/TwoKeyList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the TwoKey class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class TwoKeyListPanel extends TwoKeyListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/TwoKeyListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the TwoKeyList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the TwoKeyList creates the default columns.

	protected function dtgTwoKeies_CreateColumns() {
		$col = $this->dtgTwoKeies->CreateNodeColumn("Server", QQN::TwoKey()->Server);
		$col = $this->dtgTwoKeies->CreateNodeColumn("Directory", QQN::TwoKey()->Directory);
		$col = $this->dtgTwoKeies->CreateNodeColumn("File Name", QQN::TwoKey()->FileName);
		$col = $this->dtgTwoKeies->CreateNodeColumn("Person", QQN::TwoKey()->Person);
		$col = $this->dtgTwoKeies->CreateNodeColumn("Project", QQN::TwoKey()->Project);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgTwoKeies_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgTwoKeies_EditClick'));
			$this->dtgTwoKeies->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::TwoKey()->Id, null, false, 0);
		}

		protected function dtgTwoKeies_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
