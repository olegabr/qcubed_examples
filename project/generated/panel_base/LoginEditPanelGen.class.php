
<?php
/**
 * This is the base class for the the LoginEditPanel class.  It uses the code-generated
 * LoginModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Login columns.
 *
 * Implement your customizations in the LoginEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class LoginEditPanelGen extends QPanel {
	/** @var LoginConnector */
	public $mctLogin;

	// Controls for Login's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QListBox */
	protected $lstPerson;

	/** @var QTextBox */
	protected $txtUsername;

	/** @var QTextBox */
	protected $txtPassword;

	/** @var QCheckBox */
	protected $chkIsEnabled;


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

		// Construct the LoginConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctLogin = LoginConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Login's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctLogin->lblId_Create();
		$this->lstPerson = $this->mctLogin->lstPerson_Create();
		$this->txtUsername = $this->mctLogin->txtUsername_Create();
		$this->txtPassword = $this->mctLogin->txtPassword_Create();
		$this->chkIsEnabled = $this->mctLogin->chkIsEnabled_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctLogin->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctLogin->SaveLogin();
	}

	public function Delete() {
		$this->mctLogin->DeleteLogin();
	}

	// Check for records that may violate Unique Clauses
	public function Validate() {
		$blnToReturn = true;
		if (($this->txtUsername) && ($objLogin = Login::LoadByUsername($this->txtUsername->Text)) && ($objLogin->Id != $this->mctLogin->Login->Id )){
				$blnToReturn = false;
				$this->txtUsername->Warning = QApplication::Translate("This value is already in use.");
			}
		if (($this->lstPerson) && ($objLogin = Login::LoadByPersonId($this->lstPerson->SelectedValue)) && ($objLogin->Id != $this->mctLogin->Login->Id )){
				$blnToReturn = false;
				$this->lstPerson->Warning = QApplication::Translate("This value is already in use.");
			}
		return $blnToReturn;
	}
}
