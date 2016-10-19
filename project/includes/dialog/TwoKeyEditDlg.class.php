<?php

require(__DIALOG_GEN__ . '/TwoKeyEditDlgGen.class.php');

/**
 * This is the customizable subclass for the edit dialog. This dialog is just a shell for the
 * TwoKeyEditPanel class, and so you will not likely need to do major customizations here.
 * Generally speaking, you would only add things here that you want to display outside of the edit panel.
 *
 * This file is intended to be modified. Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage Dialogs
 *
 */
class TwoKeyEditDlg extends TwoKeyEditDlgGen {

	/**
	 * @param QForm|QContorl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		/**
		 * Setting AutoRenderChildren will automatically draw the TwoKeyEditPanel panel that is
		 * a member of this class, and anything else you add. To customize how the dialog renders, create a template
		 * and set the Template property of the dialog.
		 **/

		$this->AutoRenderChildren = true;
	}
}
