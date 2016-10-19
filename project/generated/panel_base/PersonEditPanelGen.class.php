
<?php
/**
 * This is the base class for the the PersonEditPanel class.  It uses the code-generated
 * PersonModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Person columns.
 *
 * Implement your customizations in the PersonEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class PersonEditPanelGen extends QPanel {
	/** @var PersonConnector */
	public $mctPerson;

	// Controls for Person's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QTextBox */
	protected $txtFirstName;

	/** @var QTextBox */
	protected $txtLastName;

	// Controls to edit unique reverse references

	/** @var QListBox */
	protected $lstLogin;
	// Controls to edit many-to-many relationships

	/**  @var QCheckBoxList  */
	protected $lstPersonTypes;
	/**  @var QCheckBoxList  */
	protected $lstProjectsAsTeamMember;

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

		// Construct the PersonConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctPerson = PersonConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Person's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctPerson->lblId_Create();
		$this->txtFirstName = $this->mctPerson->txtFirstName_Create();
		$this->txtLastName = $this->mctPerson->txtLastName_Create();
		$this->lstLogin = $this->mctPerson->lstLogin_Create();
		$this->lstPersonTypes = $this->mctPerson->lstPersonTypes_Create();
		$this->lstProjectsAsTeamMember = $this->mctPerson->lstProjectsAsTeamMember_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctPerson->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctPerson->SavePerson();
	}

	public function Delete() {
		$this->mctPerson->DeletePerson();
	}

}
