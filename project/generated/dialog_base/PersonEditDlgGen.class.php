<?php

include (__PANEL__ . '/PersonEditPanel.class.php');

/**
 * This is the PersonEditDlgGen class.  It uses the code-generated
 * PersonEditPanel class, which has all the controls for editing
 * a record in the person table.
 *
 *
 * @package My QCubed Application
 * @subpackage Dialogs
 */
class PersonEditDlgGen extends QDialog {

	/** @var PersonEditPanel  */
	protected $pnlPerson;

	/**
	 * @param QForm|QControl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParentObject, $strControlId = null) {
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		$this->pnlPerson = new PersonEditPanel($this);
		$this->CreateButtons();
	}

	/**
	 * Create the buttons at the bottom of the dialog.
	 */
	protected function CreateButtons() {
		// Create Buttons
		$this->AddButton(QApplication::Translate('Save'), 'save', true, true, null, array('class'=>'ui-priority-primary'));
		$this->AddButton(QApplication::Translate('Cancel'), 'cancel');
		$this->AddButton(QApplication::Translate('Delete'), 'delete', false, false,
			sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Person')),
			array('class'=>'ui-button-left')
		);
		$this->AddAction(new QDialog_ButtonEvent(), new QAjaxControlAction($this, 'ButtonClick'));
	}

	/**
	 * Load the dialog using primary keys.
	 *
	 * @param null|integer $intId
	 */
	public function Load ($intId = null) {
		$this->pnlPerson->Load($intId);
		$blnIsNew = is_null($intId);
		$this->ShowHideButton ('delete', !$blnIsNew);	// show delete button if editing a previous record.

		if ($blnIsNew) {
			$strTitle = QApplication::Translate('New') . ' ';
		} else {
			$strTitle = QApplication::Translate('Edit') . ' ';
		};
		$strTitle .= 'Person';
		$this->Title = $strTitle;
	}


	/**
	 * A button was clicked. Override to do something different than the default or process further.
	 * @param string $strFormId
	 * @param string $strControlId
	 * @param mixed $strParameter
	 */

	public function ButtonClick($strFormId, $strControlId, $strParameter) {
		switch ($strParameter) {
			case 'save':
				$this->pnlPerson->Save();
				break;

			case 'delete':
				$this->pnlPerson->Delete();
				break;

			case 'cancel':
				// do nothing
				break;
		}
		$this->Close();
	}

}
