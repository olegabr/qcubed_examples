<?php
require(__PANEL_GEN__ . '/QcWatchersEditPanelGen.class.php');

/**
 * This is the customizable subclass for the edit panel functionality
 * of the QcWatchers class. This is where you should create your customizations to the edit
 * panel that edits a qc_watchers record.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Panels
 *
 */
class QcWatchersEditPanel extends QcWatchersEditPanelGen {
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		// Set AutoRenderChildren in order to use the PreferredRenderMethod attribute in each control
		// to render the controls. If you want more control, you can use the generated template
		// instead in your superclass and modify the template.
		$this->AutoRenderChildren = true;

		//$this->Template = __PANEL_GEN__ . '/QcWatchersEditPanel.tpl.php';
	}
}
