
<?php
/**
 * This is the base class for the the AddressEditPanel class.  It uses the code-generated
 * AddressModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a Address columns.
 *
 * Implement your customizations in the AddressEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class AddressEditPanelGen extends QPanel {
	/** @var AddressConnector */
	public $mctAddress;

	// Controls for Address's Data Fields

	/** @var QLabel */
	protected $lblId;

	/** @var QListBox */
	protected $lstPerson;

	/** @var QTextBox */
	protected $txtStreet;

	/** @var QTextBox */
	protected $txtCity;


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

		// Construct the AddressConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctAddress = AddressConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on Address's data fields
	 **/
	protected function CreateObjects() {
		$this->lblId = $this->mctAddress->lblId_Create();
		$this->lstPerson = $this->mctAddress->lstPerson_Create();
		$this->txtStreet = $this->mctAddress->txtStreet_Create();
		$this->txtCity = $this->mctAddress->txtCity_Create();
	}

	/**
	 * @param null|integer $intId
	 **/
	public function Load ($intId = null) {
		if (!$this->mctAddress->Load ($intId)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctAddress->SaveAddress();
	}

	public function Delete() {
		$this->mctAddress->DeleteAddress();
	}

}
