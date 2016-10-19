
<?php
/**
 * This is the base class for the the TypeTestEditPanel class.  It uses the code-generated
 * TypeTestModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a TypeTest columns.
 *
 * Implement your customizations in the TypeTestEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class TypeTestEditPanelGen extends QPanel {
	/** @var TypeTestConnector */
	public $mctTypeTest;

	// Controls for TypeTest's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QDateTimePicker */
	protected $calDate;

	/** @var QDateTimePicker */
	protected $calTime;

	/** @var QDateTimePicker */
	protected $calDateTime;

	/** @var QIntegerTextBox */
	protected $txtTestInt;

	/** @var QFloatTextBox */
	protected $txtTestFloat;

	/** @var QTextBox */
	protected $txtTestText;

	/** @var QCheckBox */
	protected $chkTestBit;

	/** @var QTextBox */
	protected $txtTestVarchar;


	/**
	 * @param QForm|QControl $objParentObject
	 * @param null|string $strControlId
	 * @throws Exception
	 * @throws QCallerException
	 */
	public function __construct($objParentObject, $strControlId = null) {
		// Call the Parent
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		// Construct the TypeTestConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctTypeTest = TypeTestConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on TypeTest's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctTypeTest->lblId_Create();
		$this->calDate = $this->mctTypeTest->calDate_Create();
		$this->calTime = $this->mctTypeTest->calTime_Create();
		$this->calDateTime = $this->mctTypeTest->calDateTime_Create();
		$this->txtTestInt = $this->mctTypeTest->txtTestInt_Create();
		$this->txtTestFloat = $this->mctTypeTest->txtTestFloat_Create();
		$this->txtTestText = $this->mctTypeTest->txtTestText_Create();
		$this->chkTestBit = $this->mctTypeTest->chkTestBit_Create();
		$this->txtTestVarchar = $this->mctTypeTest->txtTestVarchar_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctTypeTest->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctTypeTest->SaveTypeTest();
	}

	public function Delete() {
		$this->mctTypeTest->DeleteTypeTest();
	}

}
