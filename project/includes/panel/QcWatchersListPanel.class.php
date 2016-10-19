<?php
require(__PANEL_GEN__ . '/QcWatchersListPanelGen.class.php');
require(__MODEL_CONNECTOR__ . '/QcWatchersList.class.php');

/**
 * This is the customizable subclass for the list panel functionality
 * of the QcWatchers class.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class QcWatchersListPanel extends QcWatchersListPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Default is just to render everything generic. Comment out the AutoRenderChildren line, and uncomment the
		 * template line to use a template for greater customization of how the panel draws its contents.
		 **/
		$this->AutoRenderChildren = true;
		//$this->Template =  __PANEL_GEN__ . '/QcWatchersListPanel.tpl.php';
	}

/*
	 Uncomment this block to directly create the columns here, rather than creating them in the QcWatchersList connector.
	 You can then modify the column creation process by editing the function below. Or, you can instead call the parent function 
	 and modify the columns after the QcWatchersList creates the default columns.

	protected function dtgQcWatcherses_CreateColumns() {
		$col = $this->dtgQcWatcherses->CreateNodeColumn("Table Key", QQN::QcWatchers()->TableKey);
		$col = $this->dtgQcWatcherses->CreateNodeColumn("Ts", QQN::QcWatchers()->Ts);
	}

*/	
		
/*
	 Uncomment this block to use an Edit column instead of clicking on a highlighted row in order to edit an item.

		protected $pxyEditRow;

		protected function dtgQcWatcherses_MakeEditable () {
			$pxyEditRow = new QControlProxy($this);
			$pxyEditRow->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'dtgQcWatcherses_EditClick'));
			$this->dtgQcWatcherses->CreateLinkColumn(QApplication::Translate('Edit'), QApplication::Translate('Edit'), $pxyEditRow, QQN::QcWatchers()->Id, null, false, 0);
		}

		protected function dtgQcWatcherses_EditClick($strFormId, $strControlId, $param) {
			$this->EditItem($param);
		}
*/	



}
