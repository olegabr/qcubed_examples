
<?php
/**
 * This is the base class for the the MilestoneEditPanel class.  It uses the code-generated
 * MilestoneModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Milestone columns.
 *
 * Implement your customizations in the MilestoneEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class MilestoneEditPanelGen extends QPanel {
	/** @var MilestoneConnector */
	public $mctMilestone;

	// Controls for Milestone's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QListBox */
	protected $lstProject;

	/** @var QTextBox */
	protected $txtName;


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

		// Construct the MilestoneConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctMilestone = MilestoneConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Milestone's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctMilestone->lblId_Create();
		$this->lstProject = $this->mctMilestone->lstProject_Create();
		$this->txtName = $this->mctMilestone->txtName_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctMilestone->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctMilestone->SaveMilestone();
	}

	public function Delete() {
		$this->mctMilestone->DeleteMilestone();
	}

}
