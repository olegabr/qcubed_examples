<?php
	require(__MODEL_CONNECTOR_GEN__ . '/PersonWithLockConnectorGen.class.php');

	/**
	 * This is a ModelConnector customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * PersonWithLock class.  This code-generated class extends from
	 * the generated ModelConnector class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single PersonWithLock object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PersonWithLockModelConnector
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 */
	class PersonWithLockConnector extends PersonWithLockConnectorGen {
		// Initialize fields with default values from database definition
/*
		public function __construct($objParentObject, PersonWithLock $objPersonWithLock) {
			parent::__construct($objParentObject,$objPersonWithLock);
			if ( !$this->blnEditMode ){
				$this->objPersonWithLock->Initialize();
			}
		}
*/
	}