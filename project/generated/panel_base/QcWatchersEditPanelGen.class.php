
<?php
/**
 * This is the base class for the the QcWatchersEditPanel class.  It uses the code-generated
 * QcWatchersModelConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of a QcWatchers columns.
 *
 * Implement your customizations in the QcWatchersEditPanel.class.php file, not here.
 * This file is overwritten every time you do a code generation, so any changes you make here will be lost.
 *
 * @package My QCubed Application
 */
class QcWatchersEditPanelGen extends QPanel {
	/** @var QcWatchersConnector */
	public $mctQcWatchers;

	// Controls for QcWatchers's Data Fields

	/** @var QTextBox */
	protected $txtTableKey;

	/** @var QTextBox */
	protected $txtTs;


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

		// Construct the QcWatchersConnector
		// MAKE SURE we specify "$this" as the Connector's (and thus all subsequent controls') parent
		$this->mctQcWatchers = QcWatchersConnector::Create($this);

		$this->CreateObjects();
	}

	/**
	 * Call ModelConnector's methods to create QControls based on QcWatchers's data fields
	 **/
	protected function CreateObjects() {
		$this->txtTableKey = $this->mctQcWatchers->txtTableKey_Create();
		$this->txtTs = $this->mctQcWatchers->txtTs_Create();
	}

	/**
	 * @param null|string $strTableKey
	 **/
	public function Load ($strTableKey = null) {
		if (!$this->mctQcWatchers->Load ($strTableKey)) {
			QApplication::DisplayAlert(QApplication::Translate('Could not load the record. Perhaps it was deleted? Try again.'));
		}
	}

	public function Save() {
		$this->mctQcWatchers->SaveQcWatchers();
	}

	public function Delete() {
		$this->mctQcWatchers->DeleteQcWatchers();
	}

}
