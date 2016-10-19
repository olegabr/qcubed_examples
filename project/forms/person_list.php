<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__PANEL__ . '/PersonListPanel.class.php');

	/**
	 * This is a draft QForm object to do the List All functionality
	 * of the Person class, and is a starting point for the form object.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * @package My QCubed Application
	 */
	class PersonListForm extends QForm {
		protected $pnlNav;
		protected $pnlPersonList;

		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();		    
		}

		protected function Form_Create() {
			$this->pnlNav = new NavPanel($this);
			$this->pnlPersonList = new PersonListPanel($this);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// person_list.tpl.php as the included HTML template file
	PersonListForm::Run('PersonListForm');