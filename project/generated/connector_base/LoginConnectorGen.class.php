<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Login class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Login object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a LoginConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Login $Login the actual Login data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QListBox $PersonIdControl
	 * @property-read QLabel $PersonIdLabel
	 * @property QTextBox $UsernameControl
	 * @property-read QLabel $UsernameLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QCheckBox $IsEnabledControl
	 * @property-read QLabel $IsEnabledLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class LoginConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Login objLogin
		 * @access protected
		 */
		protected $objLogin;
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

		// Controls that correspond to Login's individual data fields
		/**
		 * @var QLabel lblId
		 * @access protected
		 */
		protected $lblId;

		/**
		 * @var QListBox lstPerson
		 * @access protected
		 */
		protected $lstPerson;

		/**
		 * @var string strPersonNullLabel
		 * @access protected
		 */
		protected $strPersonNullLabel;

		/**
		* @var objPersonCondition
		* @access protected
		*/
		protected $objPersonCondition;

		/**
		* @var objPersonClauses
		* @access protected
		*/
		protected $objPersonClauses;
		/**
		 * @var QLabel lblPerson
		 * @access protected
		 */
		protected $lblPerson;

		/**
		 * @var QTextBox txtUsername

		 * @access protected
		 */
		protected $txtUsername;

		/**
		 * @var QLabel lblUsername
		 * @access protected
		 */
		protected $lblUsername;

		/**
		 * @var QTextBox txtPassword

		 * @access protected
		 */
		protected $txtPassword;

		/**
		 * @var QLabel lblPassword
		 * @access protected
		 */
		protected $lblPassword;

		/**
		 * @var QCheckBox chkIsEnabled

		 * @access protected
		 */
		protected $chkIsEnabled;

		/**
		 * @var QLabel lblIsEnabled
		 * @access protected
		 */
		protected $lblIsEnabled;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * LoginConnector to edit a single Login object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Login object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LoginConnector
		 * @param Login $objLogin new or existing Login object
		 */
		 public function __construct($objParentObject, Login $objLogin) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this LoginConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Login object
			$this->objLogin = $objLogin;

			// Figure out if we're Editing or Creating New
			if ($this->objLogin->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this LoginConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing Login object creation - defaults to CreateOrEdit
 		 * @return LoginConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objLogin = Login::Load($intId);

				// Login was found -- return it!
				if ($objLogin)
					return new LoginConnector($objParentObject, $objLogin);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Login object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new LoginConnector($objParentObject, new Login());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LoginConnector
		 * @param integer $intCreateType rules governing Login object creation - defaults to CreateOrEdit
		 * @return LoginConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return LoginConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LoginConnector
		 * @param integer $intCreateType rules governing Login object creation - defaults to CreateOrEdit
		 * @return LoginConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return LoginConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::Login()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objLogin->Id : QApplication::Translate('N\A');
			return $this->lblId;
		}



		/**
		 * Create and setup QListBox lstPerson
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstPerson_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objPersonCondition = $objCondition;
			$this->objPersonClauses = $objClauses;
			$this->lstPerson = new QListBox($this->objParentObject, $strControlId);
			$this->lstPerson->Name = QApplication::Translate('Person');
			$this->lstPerson->PreferredRenderMethod = 'RenderWithName';
			$this->lstPerson->LinkedNode = QQN::Login()->Person;
            if (!$this->strPersonNullLabel) {
            	if (!$this->lstPerson->Required) {
            		$this->strPersonNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strPersonNullLabel = '- Select One -';
            	}
            }
            $this->lstPerson->AddItem(QApplication::Translate($this->strPersonNullLabel), null);
            $this->lstPerson->AddItems($this->lstPerson_GetItems());
            $this->lstPerson->SelectedValue = $this->objLogin->PersonId;
			return $this->lstPerson;
		}

		/**
		 *	Create item list for use by lstPerson
		 */
		 public function lstPerson_GetItems() {
			$a = array();
			$objCondition = $this->objPersonCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPersonCursor = Person::QueryCursor($objCondition, $this->objPersonClauses);

			// Iterate through the Cursor
			while ($objPerson = Person::InstantiateCursor($objPersonCursor)) {
				$objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
				if (($this->objLogin->Person) && ($this->objLogin->Person->Id == $objPerson->Id))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblPerson
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPerson_Create($strControlId = null) {
			$this->lblPerson = new QLabel($this->objParentObject, $strControlId);
			$this->lblPerson->Name = QApplication::Translate('Person');
			$this->lblPerson->PreferredRenderMethod = 'RenderWithName';
			$this->lblPerson->LinkedNode = QQN::Login()->Person;
			$this->lblPerson->Text = $this->objLogin->Person ? $this->objLogin->Person->__toString() : null;
			return $this->lblPerson;
		}



		/**
		 * Create and setup a QTextBox txtUsername
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUsername_Create($strControlId = null) {
			$this->txtUsername = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUsername->Name = QApplication::Translate('Username');
			$this->txtUsername->Required = true;
			$this->txtUsername->MaxLength = Login::UsernameMaxLength;
			$this->txtUsername->PreferredRenderMethod = 'RenderWithName';
			$this->txtUsername->LinkedNode = QQN::Login()->Username;
			$this->txtUsername->Text = $this->objLogin->Username;
			return $this->txtUsername;
		}

		/**
		 * Create and setup QLabel lblUsername
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUsername_Create($strControlId = null) {
			$this->lblUsername = new QLabel($this->objParentObject, $strControlId);
			$this->lblUsername->Name = QApplication::Translate('Username');
			$this->lblUsername->PreferredRenderMethod = 'RenderWithName';
			$this->lblUsername->LinkedNode = QQN::Login()->Username;
			$this->lblUsername->Text = $this->objLogin->Username;
			return $this->lblUsername;
		}



		/**
		 * Create and setup a QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->MaxLength = Login::PasswordMaxLength;
			$this->txtPassword->PreferredRenderMethod = 'RenderWithName';
			$this->txtPassword->LinkedNode = QQN::Login()->Password;
			$this->txtPassword->Text = $this->objLogin->Password;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->PreferredRenderMethod = 'RenderWithName';
			$this->lblPassword->LinkedNode = QQN::Login()->Password;
			$this->lblPassword->Text = $this->objLogin->Password;
			return $this->lblPassword;
		}



		/**
		 * Create and setup a QCheckBox chkIsEnabled
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkIsEnabled_Create($strControlId = null) {
			$this->chkIsEnabled = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkIsEnabled->Name = QApplication::Translate('Is Enabled');
			$this->chkIsEnabled->Checked = $this->objLogin->IsEnabled;
			$this->chkIsEnabled->PreferredRenderMethod = 'RenderWithName';
			$this->chkIsEnabled->LinkedNode = QQN::Login()->IsEnabled;
			return $this->chkIsEnabled;
		}

		/**
		 * Create and setup QLabel lblIsEnabled
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIsEnabled_Create($strControlId = null) {
			$this->lblIsEnabled = new QLabel($this->objParentObject, $strControlId);
			$this->lblIsEnabled->Name = QApplication::Translate('Is Enabled');
			$this->lblIsEnabled->PreferredRenderMethod = 'RenderWithName';
			$this->lblIsEnabled->LinkedNode = QQN::Login()->IsEnabled;
			$this->lblIsEnabled->Text = $this->objLogin->IsEnabled ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblIsEnabled;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Login object.
		 * @param boolean $blnReload reload Login from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objLogin); // Notify in development version
			if (!($this->objLogin)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objLogin->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objLogin->Id : QApplication::Translate('N\A');


            if ($this->lstPerson) {
                $this->lstPerson->RemoveAllItems();
                $this->lstPerson->AddItem(QApplication::Translate($this->strPersonNullLabel), null);
                $this->lstPerson->AddItems($this->lstPerson_GetItems());
                $this->lstPerson->SelectedValue = $this->objLogin->PersonId;
            
            }
			if ($this->lblPerson) $this->lblPerson->Text = $this->objLogin->Person ? $this->objLogin->Person->__toString() : null;


			if ($this->txtUsername) $this->txtUsername->Text = $this->objLogin->Username;
			if ($this->lblUsername) $this->lblUsername->Text = $this->objLogin->Username;


			if ($this->txtPassword) $this->txtPassword->Text = $this->objLogin->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objLogin->Password;


			if ($this->chkIsEnabled) $this->chkIsEnabled->Checked = $this->objLogin->IsEnabled;
			if ($this->lblIsEnabled) $this->lblIsEnabled->Text = $this->objLogin->IsEnabled ? QApplication::Translate('Yes') : QApplication::Translate('No');


		}

		/**
		 * Load this ModelConnector with a Login object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|Login
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objLogin = Login::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objLogin = new Login();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objLogin) {
				$this->Refresh ();
			}
			return $this->objLogin;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC LOGIN OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Login instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateLogin() {
			try {
				// Update any fields for controls that have been created

				if ($this->lstPerson) $this->objLogin->PersonId = $this->lstPerson->SelectedValue;

				if ($this->txtUsername) $this->objLogin->Username = $this->txtUsername->Text;

				if ($this->txtPassword) $this->objLogin->Password = $this->txtPassword->Text;

				if ($this->chkIsEnabled) $this->objLogin->IsEnabled = $this->chkIsEnabled->Checked;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Login instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveLogin() {
			try {
				$this->UpdateLogin();

				// Save the Login object
				$id = $this->objLogin->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Login instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteLogin() {
			$this->objLogin->Delete();
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
				case 'Login': return $this->objLogin;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Login fields -- will be created dynamically if not yet created
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'PersonIdControl':
					if (!$this->lstPerson) return $this->lstPerson_Create();
					return $this->lstPerson;
				case 'PersonIdLabel':
					if (!$this->lblPerson) return $this->lblPerson_Create();
					return $this->lblPerson;
				case 'PersonNullLabel':
					return $this->strPersonNullLabel;
				case 'UsernameControl':
					if (!$this->txtUsername) return $this->txtUsername_Create();
					return $this->txtUsername;
				case 'UsernameLabel':
					if (!$this->lblUsername) return $this->lblUsername_Create();
					return $this->lblUsername;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
				case 'IsEnabledControl':
					if (!$this->chkIsEnabled) return $this->chkIsEnabled_Create();
					return $this->chkIsEnabled;
				case 'IsEnabledLabel':
					if (!$this->lblIsEnabled) return $this->lblIsEnabled_Create();
					return $this->lblIsEnabled;
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

					// Controls that point to Login fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'PersonIdControl':
						return ($this->lstPerson = QType::Cast($mixValue, 'QListBox'));
					case 'PersonIdLabel':
						return ($this->lblPerson = QType::Cast($mixValue, 'QLabel'));
					case 'PersonNullLabel':
						return $this->strPersonNullLabel = $mixValue;
					case 'UsernameControl':
						return ($this->txtUsername = QType::Cast($mixValue, 'QTextBox'));
					case 'UsernameLabel':
						return ($this->lblUsername = QType::Cast($mixValue, 'QLabel'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QTextBox'));
					case 'PasswordLabel':
						return ($this->lblPassword = QType::Cast($mixValue, 'QLabel'));
					case 'IsEnabledControl':
						return ($this->chkIsEnabled = QType::Cast($mixValue, 'QCheckBox'));
					case 'IsEnabledLabel':
						return ($this->lblIsEnabled = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}