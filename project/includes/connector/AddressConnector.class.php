<?php
	require(__MODEL_CONNECTOR_GEN__ . '/AddressConnectorGen.class.php');

	/**
	 * This is a ModelConnector customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Address class.  This code-generated class extends from
	 * the generated ModelConnector class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Address object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AddressModelConnector
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 */
	class AddressConnector extends AddressConnectorGen {
		// Initialize fields with default values from database definition
/*
		public function __construct($objParentObject, Address $objAddress) {
			parent::__construct($objParentObject,$objAddress);
			if ( !$this->blnEditMode ){
				$this->objAddress->Initialize();
			}
		}
*/
	}