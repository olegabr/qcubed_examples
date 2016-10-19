<?php

include (__PANEL__ . '/PersonWithLockEditPanel.class.php');

/**
 * This is the PersonWithLockEditDlgGen class.  It uses the code-generated
 * PersonWithLockEditPanel class, which has all the controls for editing
 * a record in the person_with_lock table.
 *
 *
 * @package My QCubed Application
 * @subpackage Dialogs
 */
class PersonWithLockEditDlgGen extends QDialog {

	/** @var PersonWithLockEditPanel  */
	protected $pnlPersonWithLock;

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

		$this->pnlPersonWithLock = new PersonWithLockEditPanel($this);
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
			sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('PersonWithLock')),
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
		$this->pnlPersonWithLock->Load($intId);
		$blnIsNew = is_null($intId);
		$this->ShowHideButton ('delete', !$blnIsNew);	// show delete button if editing a previous record.

		if ($blnIsNew) {
			$strTitle = QApplication::Translate('New') . ' ';
		} else {
			$strTitle = QApplication::Translate('Edit') . ' ';
		};
		$strTitle .= 'Person With Lock';
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
				$this->pnlPersonWithLock->Save();
				break;

			case 'delete':
				$this->pnlPersonWithLock->Delete();
				break;

			case 'cancel':
				// do nothing
				break;
		}
		$this->Close();
	}

}
