
<?php
/**
 * This is the base class for the the PersonWithLockEditPanel class.  It uses the code-generated
 * PersonWithLockModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a PersonWithLock columns.
 *
 * Implement your customizations in the PersonWithLockEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class PersonWithLockEditPanelGen extends QPanel {
	/** @var PersonWithLockConnector */
	public $mctPersonWithLock;

	// Controls for PersonWithLock's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QTextBox */
	protected $txtFirstName;

	/** @var QTextBox */
	protected $txtLastName;

	/** @var QLabel */
	protected $lblSysTimestamp;


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

		// Construct the PersonWithLockConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctPersonWithLock = PersonWithLockConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on PersonWithLock's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctPersonWithLock->lblId_Create();
		$this->txtFirstName = $this->mctPersonWithLock->txtFirstName_Create();
		$this->txtLastName = $this->mctPersonWithLock->txtLastName_Create();
		$this->lblSysTimestamp = $this->mctPersonWithLock->lblSysTimestamp_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctPersonWithLock->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctPersonWithLock->SavePersonWithLock();
	}

	public function Delete() {
		$this->mctPersonWithLock->DeletePersonWithLock();
	}

}
