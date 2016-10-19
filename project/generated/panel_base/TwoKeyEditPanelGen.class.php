
<?php
/**
 * This is the base class for the the TwoKeyEditPanel class.  It uses the code-generated
 * TwoKeyModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a TwoKey columns.
 *
 * Implement your customizations in the TwoKeyEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class TwoKeyEditPanelGen extends QPanel {
	/** @var TwoKeyConnector */
	public $mctTwoKey;

	// Controls for TwoKey's Data Fields

	/** @var QTextBox */
	protected $txtServer;

	/** @var QTextBox */
	protected $txtDirectory;

	/** @var QTextBox */
	protected $txtFileName;

	/** @var QListBox */
	protected $lstPerson;

	/** @var QListBox */
	protected $lstProject;


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

		// Construct the TwoKeyConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctTwoKey = TwoKeyConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on TwoKey's data fields
	 **/
	protected function CreateObjects() {
		$this->txtServer = $this->mctTwoKey->txtServer_Create();
		$this->txtDirectory = $this->mctTwoKey->txtDirectory_Create();
		$this->txtFileName = $this->mctTwoKey->txtFileName_Create();
		$this->lstPerson = $this->mctTwoKey->lstPerson_Create();
		$this->lstProject = $this->mctTwoKey->lstProject_Create();
	}

	/**
	 * @param null|string $strServer
	 * @param null|string $strDirectory
	 **/
	public function Load ($strServer = null, $strDirectory = null) {
		if (!$this->mctTwoKey->Load ($strServer, $strDirectory)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctTwoKey->SaveTwoKey();
	}

	public function Delete() {
		$this->mctTwoKey->DeleteTwoKey();
	}

}
