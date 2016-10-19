<?php
require(__PANEL_GEN__ . '/MilestoneListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/MilestoneList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Milestone class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class MilestoneListPanel extends MilestoneListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/MilestoneListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the MilestoneList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the MilestoneList creates the default columns.

	protected function dtgMilestones_CreateColumns() {
		$col = $this->dtgMilestones->CreateNodeColumn("Id", QQN::Milestone()->Id);
		$col = $this->dtgMilestones->CreateNodeColumn("Project", QQN::Milestone()->Project);
		$col = $this->dtgMilestones->CreateNodeColumn("Name", QQN::Milestone()->Name);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgMilestones_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgMilestones_EditClick'));
			$this->dtgMilestones->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::Milestone()->Id, null, false, 0);
		}

		protected function dtgMilestones_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
