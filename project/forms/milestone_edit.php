<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__PANEL__ . '/MilestoneEditPanel.class.php');

/**
 * This is a draft QForm object to do Create, Edit, and Delete functionality
 * of the Milestone class.  It uses the code-generated
 * MilestoneConnector class, which has methods to help with
 * easily creating/defining controls to modify the fields of Milestone columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class MilestoneEditForm extends QForm {

	/** @var MilestoneEditPanel  */
	protected $pnlMilestone;

	/** @var QJqButton  */
	protected $btnSave;
	/** @var QJqButton  */
	protected $btnCancel;
	/** @var QJqButton  */
	protected $btnDelete;

	// Override Form Event Handlers as Needed
	protected function Form_Run() {
		parent::Form_Run();

		// Security check for ALLOW_REMOTE_ADMIN
		// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
		QApplication::CheckRemoteAdmin();
	}

//	protected function Form_Load() {}

	protected function Form_Create() {
		parent::Form_Create();

		$this->pnlMilestone = new MilestoneEditPanel($this);
		$intId = QApplication::QueryString('intId');
	    $this->pnlMilestone->Load($intId);
		$this->CreateButtons();
	}

	/**
	 * Create the buttons at the bottom of the dialog.
	 */
	protected function CreateButtons() {
		// Create Buttons and Actions on this Form
		$this->btnSave = new QJqButton($this);
		$this->btnSave->Text = QApplication::Translate('Save');
		$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
		$this->btnSave->CausesValidation = true;

		$this->btnCancel = new QJqButton($this);
		$this->btnCancel->Text = QApplication::Translate('Cancel');
		$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

		$this->btnDelete = new QJqButton($this);
		$this->btnDelete->Text = QApplication::Translate('Delete');
		$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Milestone'))));
		$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
		$this->btnDelete->Visible = $this->pnlMilestone->mctMilestone->EditMode;
	}

	// Button Event Handlers

	protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
		$this->pnlMilestone->Save();
		$this->RedirectToListPage();
	}

	protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
		$this->pnlMilestone->Delete();
		$this->RedirectToListPage();
	}

	protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
		$this->RedirectToListPage();
	}

	protected function RedirectToListPage() {
		QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORMS__ . '/milestone_list.php');
	}

}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// milestone_edit.tpl.php as the included HTML template file
MilestoneEditForm::Run('MilestoneEditForm');
