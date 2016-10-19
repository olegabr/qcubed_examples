<?php
require(__PANEL_GEN__ . '/ProjectListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/ProjectList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the Project class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class ProjectListPanel extends ProjectListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/ProjectListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the ProjectList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the ProjectList creates the default columns.

	protected function dtgProjects_CreateColumns() {
		$col = $this->dtgProjects->CreateNodeColumn("Id", QQN::Project()->Id);
		$col = $this->dtgProjects->CreateNodeColumn("Project Status Type", QQN::Project()->ProjectStatusType);
		$col = $this->dtgProjects->CreateNodeColumn("Manager Person", QQN::Project()->ManagerPerson);
		$col = $this->dtgProjects->CreateNodeColumn("Name", QQN::Project()->Name);
		$col = $this->dtgProjects->CreateNodeColumn("Description", QQN::Project()->Description);
		$col = $this->dtgProjects->CreateNodeColumn("Start Date", QQN::Project()->StartDate);
		$col = $this->dtgProjects->CreateNodeColumn("End Date", QQN::Project()->EndDate);
		$col = $this->dtgProjects->CreateNodeColumn("Budget", QQN::Project()->Budget);
		$col = $this->dtgProjects->CreateNodeColumn("Spent", QQN::Project()->Spent);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgProjects_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgProjects_EditClick'));
			$this->dtgProjects->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::Project()->Id, null, false, 0);
		}

		protected function dtgProjects_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
