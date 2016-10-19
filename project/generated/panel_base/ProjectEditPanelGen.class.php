
<?php
/**
 * This is the base class for the the ProjectEditPanel class.  It uses the code-generated
 * ProjectModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Project columns.
 *
 * Implement your customizations in the ProjectEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class ProjectEditPanelGen extends QPanel {
	/** @var ProjectConnector */
	public $mctProject;

	// Controls for Project's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QListBox */
	protected $lstProjectStatusType;

	/** @var QListBox */
	protected $lstManagerPerson;

	/** @var QTextBox */
	protected $txtName;

	/** @var QTextBox */
	protected $txtDescription;

	/** @var QDateTimePicker */
	protected $calStartDate;

	/** @var QDateTimePicker */
	protected $calEndDate;

	/** @var QTextBox */
	protected $txtBudget;

	/** @var QTextBox */
	protected $txtSpent;

	// Controls to edit many-to-many relationships

	/**  @var QCheckBoxList  */
	protected $lstProjectsAsRelated;
	/**  @var QCheckBoxList  */
	protected $lstParentProjectsAsRelated;
	/**  @var QCheckBoxList  */
	protected $lstPeopleAsTeamMember;

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

		// Construct the ProjectConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctProject = ProjectConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Project's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctProject->lblId_Create();
		$this->lstProjectStatusType = $this->mctProject->lstProjectStatusType_Create();
		$this->lstManagerPerson = $this->mctProject->lstManagerPerson_Create();
		$this->txtName = $this->mctProject->txtName_Create();
		$this->txtDescription = $this->mctProject->txtDescription_Create();
		$this->calStartDate = $this->mctProject->calStartDate_Create();
		$this->calEndDate = $this->mctProject->calEndDate_Create();
		$this->txtBudget = $this->mctProject->txtBudget_Create();
		$this->txtSpent = $this->mctProject->txtSpent_Create();
		$this->lstProjectsAsRelated = $this->mctProject->lstProjectsAsRelated_Create();
		$this->lstParentProjectsAsRelated = $this->mctProject->lstParentProjectsAsRelated_Create();
		$this->lstPeopleAsTeamMember = $this->mctProject->lstPeopleAsTeamMember_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctProject->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctProject->SaveProject();
	}

	public function Delete() {
		$this->mctProject->DeleteProject();
	}

}
