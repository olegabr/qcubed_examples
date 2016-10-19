<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the PersonWithLock class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single PersonWithLock object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PersonWithLockConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read PersonWithLock $PersonWithLock the actual PersonWithLock data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QTextBox $FirstNameControl
	 * @property-read QLabel $FirstNameLabel
	 * @property QTextBox $LastNameControl
	 * @property-read QLabel $LastNameLabel
	 * @property-read QLabel $SysTimestampLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class PersonWithLockConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var PersonWithLock objPersonWithLock
		 * @access protected
		 */
		protected $objPersonWithLock;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that correspond to PersonWithLock's individual data fields
		/**
		 * @var QLabel lblId
		 * @access protected
		 */
		protected $lblId;

		/**
		 * @var QTextBox txtFirstName

		 * @access protected
		 */
		protected $txtFirstName;

		/**
		 * @var QLabel lblFirstName
		 * @access protected
		 */
		protected $lblFirstName;

		/**
		 * @var QTextBox txtLastName

		 * @access protected
		 */
		protected $txtLastName;

		/**
		 * @var QLabel lblLastName
		 * @access protected
		 */
		protected $lblLastName;

		/**
		 * @var QLabel lblSysTimestamp
		 * @access protected
		 */
		protected $lblSysTimestamp;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * PersonWithLockConnector to edit a single PersonWithLock object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single PersonWithLock object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonWithLockConnector
		 * @param PersonWithLock $objPersonWithLock new or existing PersonWithLock object
		 */
		 public function __construct($objParentObject, PersonWithLock $objPersonWithLock) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PersonWithLockConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked PersonWithLock object
			$this->objPersonWithLock = $objPersonWithLock;

			// Figure out if we're Editing or Creating New
			if ($this->objPersonWithLock->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonWithLockConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing PersonWithLock object creation - defaults to CreateOrEdit
 		 * @return PersonWithLockConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objPersonWithLock = PersonWithLock::Load($intId);

				// PersonWithLock was found -- return it!
				if ($objPersonWithLock)
					return new PersonWithLockConnector($objParentObject, $objPersonWithLock);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a PersonWithLock object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PersonWithLockConnector($objParentObject, new PersonWithLock());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonWithLockConnector
		 * @param integer $intCreateType rules governing PersonWithLock object creation - defaults to CreateOrEdit
		 * @return PersonWithLockConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return PersonWithLockConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonWithLockConnector
		 * @param integer $intCreateType rules governing PersonWithLock object creation - defaults to CreateOrEdit
		 * @return PersonWithLockConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return PersonWithLockConnector::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			$this->lblId->PreferredRenderMethod = 'RenderWithName';
			$this->lblId->LinkedNode = QQN::PersonWithLock()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objPersonWithLock->Id : QApplication::Translate('N\A');
			return $this->lblId;
		}



		/**
		 * Create and setup a QTextBox txtFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFirstName_Create($strControlId = null) {
			$this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFirstName->Name = QApplication::Translate('First Name');
			$this->txtFirstName->Required = true;
			$this->txtFirstName->MaxLength = PersonWithLock::FirstNameMaxLength;
			$this->txtFirstName->PreferredRenderMethod = 'RenderWithName';
			$this->txtFirstName->LinkedNode = QQN::PersonWithLock()->FirstName;
			$this->txtFirstName->Text = $this->objPersonWithLock->FirstName;
			return $this->txtFirstName;
		}

		/**
		 * Create and setup QLabel lblFirstName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFirstName_Create($strControlId = null) {
			$this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFirstName->Name = QApplication::Translate('First Name');
			$this->lblFirstName->PreferredRenderMethod = 'RenderWithName';
			$this->lblFirstName->LinkedNode = QQN::PersonWithLock()->FirstName;
			$this->lblFirstName->Text = $this->objPersonWithLock->FirstName;
			return $this->lblFirstName;
		}



		/**
		 * Create and setup a QTextBox txtLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLastName_Create($strControlId = null) {
			$this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLastName->Name = QApplication::Translate('Last Name');
			$this->txtLastName->Required = true;
			$this->txtLastName->MaxLength = PersonWithLock::LastNameMaxLength;
			$this->txtLastName->PreferredRenderMethod = 'RenderWithName';
			$this->txtLastName->LinkedNode = QQN::PersonWithLock()->LastName;
			$this->txtLastName->Text = $this->objPersonWithLock->LastName;
			return $this->txtLastName;
		}

		/**
		 * Create and setup QLabel lblLastName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLastName_Create($strControlId = null) {
			$this->lblLastName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastName->Name = QApplication::Translate('Last Name');
			$this->lblLastName->PreferredRenderMethod = 'RenderWithName';
			$this->lblLastName->LinkedNode = QQN::PersonWithLock()->LastName;
			$this->lblLastName->Text = $this->objPersonWithLock->LastName;
			return $this->lblLastName;
		}



		/**
		 * Create and setup QLabel lblSysTimestamp
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSysTimestamp_Create($strControlId = null) {
			$this->lblSysTimestamp = new QLabel($this->objParentObject, $strControlId);
			$this->lblSysTimestamp->Name = QApplication::Translate('Sys Timestamp');
			$this->lblSysTimestamp->PreferredRenderMethod = 'RenderWithName';
			$this->lblSysTimestamp->LinkedNode = QQN::PersonWithLock()->SysTimestamp;
			$this->lblSysTimestamp->Text =  $this->blnEditMode ? $this->objPersonWithLock->SysTimestamp : QApplication::Translate('N\A');
			return $this->lblSysTimestamp;
		}





		/**
		 * Refresh this ModelConnector with Data from the local PersonWithLock object.
		 * @param boolean $blnReload reload PersonWithLock from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objPersonWithLock); // Notify in development version
			if (!($this->objPersonWithLock)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objPersonWithLock->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objPersonWithLock->Id : QApplication::Translate('N\A');


			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objPersonWithLock->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objPersonWithLock->FirstName;


			if ($this->txtLastName) $this->txtLastName->Text = $this->objPersonWithLock->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objPersonWithLock->LastName;


			if ($this->lblSysTimestamp) $this->lblSysTimestamp->Text =  $this->blnEditMode ? $this->objPersonWithLock->SysTimestamp : QApplication::Translate('N\A');


		}

		/**
		 * Load this ModelConnector with a PersonWithLock object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|PersonWithLock
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objPersonWithLock = PersonWithLock::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objPersonWithLock = new PersonWithLock();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objPersonWithLock) {
				$this->Refresh ();
			}
			return $this->objPersonWithLock;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PERSONWITHLOCK OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's PersonWithLock instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdatePersonWithLock() {
			try {
				// Update any fields for controls that have been created

				if ($this->txtFirstName) $this->objPersonWithLock->FirstName = $this->txtFirstName->Text;

				if ($this->txtLastName) $this->objPersonWithLock->LastName = $this->txtLastName->Text;



				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's PersonWithLock instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePersonWithLock() {
			try {
				$this->UpdatePersonWithLock();

				// Save the PersonWithLock object
				$id = $this->objPersonWithLock->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's PersonWithLock instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePersonWithLock() {
			$this->objPersonWithLock->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General ModelConnectorVariables
				case 'PersonWithLock': return $this->objPersonWithLock;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to PersonWithLock fields -- will be created dynamically if not yet created
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'FirstNameControl':
					if (!$this->txtFirstName) return $this->txtFirstName_Create();
					return $this->txtFirstName;
				case 'FirstNameLabel':
					if (!$this->lblFirstName) return $this->lblFirstName_Create();
					return $this->lblFirstName;
				case 'LastNameControl':
					if (!$this->txtLastName) return $this->txtLastName_Create();
					return $this->txtLastName;
				case 'LastNameLabel':
					if (!$this->lblLastName) return $this->lblLastName_Create();
					return $this->lblLastName;
				case 'SysTimestampLabel':
					if (!$this->lblSysTimestamp) return $this->lblSysTimestamp_Create();
					return $this->lblSysTimestamp;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					case 'Parent':
						$this->objParentObject = $mixValue;
						break;

					// Controls that point to PersonWithLock fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'FirstNameControl':
						return ($this->txtFirstName = QType::Cast($mixValue, 'QTextBox'));
					case 'FirstNameLabel':
						return ($this->lblFirstName = QType::Cast($mixValue, 'QLabel'));
					case 'LastNameControl':
						return ($this->txtLastName = QType::Cast($mixValue, 'QTextBox'));
					case 'LastNameLabel':
						return ($this->lblLastName = QType::Cast($mixValue, 'QLabel'));
					case 'SysTimestampLabel':
						return ($this->lblSysTimestamp = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}