<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Person class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Person object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PersonConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Person $Person the actual Person data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QTextBox $FirstNameControl
	 * @property-read QLabel $FirstNameLabel
	 * @property QTextBox $LastNameControl
	 * @property-read QLabel $LastNameLabel
	 * @property QListBox $LoginControl
	 * @property-read QLabel $LoginLabel
	 * @property QCheckBoxList $PersonTypeControl
	 * @property-read QLabel $PersonTypeLabel
	 * @property QCheckBoxList $ProjectAsTeamMemberControl
	 * @property-read QLabel $ProjectAsTeamMemberLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class PersonConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Person objPerson
		 * @access protected
		 */
		protected $objPerson;
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

		// Controls that correspond to Person's individual data fields
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


		// Controls to edit Unique ReverseReferences and ManyToMany References

		/**
		 * @var QListBox lstLogin
		 * @access protected
		 */
		protected $lstLogin;

		/**
		 * @var string strLoginNullLabel
		 * @access protected
		 */
		protected $strLoginNullLabel;

		/**
		* @var objLoginCondition
		* @access protected
		*/
		protected $objLoginCondition;

		/**
		* @var objLoginClauses
		* @access protected
		*/
		protected $objLoginClauses;
		/**
		 * @var QLabel lblLogin
		 * @access protected
		 */
		protected $lblLogin;

		/**
		 * @var QCheckBoxList lstPersonTypes
		 * @access protected
		 */
		protected $lstPersonTypes;

		/**
		 * @var string strPersonTypesNullLabel
		 * @access protected
		 */
		protected $strPersonTypesNullLabel;

		/**
		 * @var QLabel lblPersonTypes
		 * @access protected
		 */
		protected $lblPersonTypes;

		protected $strPersonTypeGlue = ', ';
		/**
		 * @var QCheckBoxList lstProjectsAsTeamMember
		 * @access protected
		 */
		protected $lstProjectsAsTeamMember;

		/**
		 * @var string strProjectsAsTeamMemberNullLabel
		 * @access protected
		 */
		protected $strProjectsAsTeamMemberNullLabel;

		/**
		* @var objProjectsAsTeamMemberCondition
		* @access protected
		*/
		protected $objProjectsAsTeamMemberCondition;

		/**
		* @var objProjectsAsTeamMemberClauses
		* @access protected
		*/
		protected $objProjectsAsTeamMemberClauses;
		/**
		 * @var QLabel lblProjectsAsTeamMember
		 * @access protected
		 */
		protected $lblProjectsAsTeamMember;

		protected $strProjectAsTeamMemberGlue = ', ';


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * PersonConnector to edit a single Person object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Person object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonConnector
		 * @param Person $objPerson new or existing Person object
		 */
		 public function __construct($objParentObject, Person $objPerson) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PersonConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Person object
			$this->objPerson = $objPerson;

			// Figure out if we're Editing or Creating New
			if ($this->objPerson->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing Person object creation - defaults to CreateOrEdit
 		 * @return PersonConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objPerson = Person::Load($intId);

				// Person was found -- return it!
				if ($objPerson)
					return new PersonConnector($objParentObject, $objPerson);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Person object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PersonConnector($objParentObject, new Person());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonConnector
		 * @param integer $intCreateType rules governing Person object creation - defaults to CreateOrEdit
		 * @return PersonConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return PersonConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonConnector
		 * @param integer $intCreateType rules governing Person object creation - defaults to CreateOrEdit
		 * @return PersonConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return PersonConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::Person()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objPerson->Id : QApplication::Translate('N\A');
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
			$this->txtFirstName->MaxLength = Person::FirstNameMaxLength;
			$this->txtFirstName->PreferredRenderMethod = 'RenderWithName';
			$this->txtFirstName->LinkedNode = QQN::Person()->FirstName;
			$this->txtFirstName->Text = $this->objPerson->FirstName;
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
			$this->lblFirstName->LinkedNode = QQN::Person()->FirstName;
			$this->lblFirstName->Text = $this->objPerson->FirstName;
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
			$this->txtLastName->MaxLength = Person::LastNameMaxLength;
			$this->txtLastName->PreferredRenderMethod = 'RenderWithName';
			$this->txtLastName->LinkedNode = QQN::Person()->LastName;
			$this->txtLastName->Text = $this->objPerson->LastName;
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
			$this->lblLastName->LinkedNode = QQN::Person()->LastName;
			$this->lblLastName->Text = $this->objPerson->LastName;
			return $this->lblLastName;
		}



		/**
		 * Create and setup QListBox lstLogin
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstLogin_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objLoginCondition = $objCondition;
			$this->objLoginClauses = $objClauses;
			$this->lstLogin = new QListBox($this->objParentObject, $strControlId);
			$this->lstLogin->Name = QApplication::Translate('Login');
			$this->lstLogin->PreferredRenderMethod = 'RenderWithName';
			$this->lstLogin->LinkedNode = QQN::Person()->Login;
            if (!$this->strLoginNullLabel) {
            	if (!$this->lstLogin->Required) {
            		$this->strLoginNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strLoginNullLabel = '- Select One -';
            	}
            }
            $this->lstLogin->AddItem(QApplication::Translate($this->strLoginNullLabel), null);
            $this->lstLogin->AddItems($this->lstLogin_GetItems());
            if ($this->objPerson->Login)
                $this->lstLogin->SelectedValue = $this->objPerson->Login->Id;
			return $this->lstLogin;
		}

		/**
		 *	Create item list for use by lstLogin
		 */
		 public function lstLogin_GetItems() {
			$a = array();
			$objCondition = $this->objLoginCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objLoginCursor = Login::QueryCursor($objCondition, $this->objLoginClauses);

			// Iterate through the Cursor
			while ($objLogin = Login::InstantiateCursor($objLoginCursor)) {
				$objListItem = new QListItem($objLogin->__toString(), $objLogin->Id);
				if (($this->objPerson->Login) && ($this->objPerson->Login->Id == $objLogin->Id))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblLogin
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLogin_Create($strControlId = null) {
			$this->lblLogin = new QLabel($this->objParentObject, $strControlId);
			$this->lblLogin->Name = QApplication::Translate('Login');
			$this->lblLogin->PreferredRenderMethod = 'RenderWithName';
			$this->lblLogin->LinkedNode = QQN::Person()->Login;
			$this->lblLogin->Text = $this->objPerson->Login ? $this->objPerson->Login->__toString() : null;
			return $this->lblLogin;
		}



		/**
		 * Create and setup QCheckBoxList lstPersonTypes
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBoxList
		 */

		public function lstPersonTypes_Create($strControlId = null) {
			$this->lstPersonTypes = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstPersonTypes->Name = QApplication::Translate('Person Types');
			$this->lstPersonTypes->PreferredRenderMethod = 'RenderWithName';
			$this->lstPersonTypes->LinkedNode = QQN::Person()->PersonType;
            if (!$this->strPersonTypesNullLabel) {
            	if (!$this->lstPersonTypes->Required) {
            		$this->strPersonTypesNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strPersonTypesNullLabel = '- Select One -';
            	}
            }
            $this->lstPersonTypes->AddItem(QApplication::Translate($this->strPersonTypesNullLabel), null);
            $this->lstPersonTypes->AddItems($this->lstPersonTypes_GetItems());
            $this->lstPersonTypes->SelectedValues = array_keys($this->objPerson->GetPersonTypeArray());
			return $this->lstPersonTypes;
		}

		/**
		 *	Create item list for use by lstPersonTypes
		 */
		public function lstPersonTypes_GetItems() {
			return PersonType::$NameArray;
		}

		/**
		 * Create and setup QLabel lblPersonTypes
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPersonTypes_Create($strControlId = null) {
			$this->lblPersonTypes = new QLabel($this->objParentObject, $strControlId);
			$this->lblPersonTypes->Name = QApplication::Translate('Person Types');
			$this->lblPersonTypes->PreferredRenderMethod = 'RenderWithName';
			$this->lblPersonTypes->LinkedNode = QQN::Person()->PersonType;
			$this->lblPersonTypes->Text = implode($this->strPersonTypeGlue, $this->objPerson->GetPersonTypeArray());
			return $this->lblPersonTypes;
		}



		/**
		 * Create and setup QCheckBoxList lstProjectsAsTeamMember
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstProjectsAsTeamMember_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objProjectsAsTeamMemberCondition = $objCondition;
			$this->objProjectsAsTeamMemberClauses = $objClauses;
			$this->lstProjectsAsTeamMember = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstProjectsAsTeamMember->Name = QApplication::Translate('Projects As Team Member');
			$this->lstProjectsAsTeamMember->PreferredRenderMethod = 'RenderWithName';
			$this->lstProjectsAsTeamMember->LinkedNode = QQN::Person()->ProjectAsTeamMember;
            if (!$this->strProjectsAsTeamMemberNullLabel) {
            	if (!$this->lstProjectsAsTeamMember->Required) {
            		$this->strProjectsAsTeamMemberNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strProjectsAsTeamMemberNullLabel = '- Select One -';
            	}
            }
            $this->lstProjectsAsTeamMember->AddItem(QApplication::Translate($this->strProjectsAsTeamMemberNullLabel), null);
            $this->lstProjectsAsTeamMember->AddItems($this->lstProjectsAsTeamMember_GetItems());
			return $this->lstProjectsAsTeamMember;
		}
		/**
		 *	Create item list for use by lstProjectsAsTeamMember
		 */
		public function lstProjectsAsTeamMember_GetItems() {
			$a = array();
			$objCondition = $this->objProjectsAsTeamMemberCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objClauses = $this->objProjectsAsTeamMemberClauses;

			$objClauses[] =
				QQ::Expand(QQN::Project()->PersonAsTeamMember->Person, QQ::Equal(QQN::Project()->PersonAsTeamMember->PersonId, $this->objPerson->Id));

			$objProjectCursor = Project::QueryCursor($objCondition, $objClauses);

			// Iterate through the Cursor
			while ($objProject = Project::InstantiateCursor($objProjectCursor)) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->Id, $objProject->_PersonAsTeamMember !== null);
				$a[] = $objListItem;
			}
			return $a;
		}
		/**
		 * Create and setup QLabel lblProjectsAsTeamMember
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectsAsTeamMember_Create($strControlId = null) {
			$this->lblProjectsAsTeamMember = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectsAsTeamMember->Name = QApplication::Translate('Projects As Team Member');
			$this->lblProjectsAsTeamMember->PreferredRenderMethod = 'RenderWithName';
			$this->lblProjectsAsTeamMember->LinkedNode = QQN::Person()->ProjectAsTeamMember;
			$this->lblProjectsAsTeamMember->Text = implode($this->strProjectAsTeamMemberGlue, $this->objPerson->GetProjectAsTeamMemberArray());
			return $this->lblProjectsAsTeamMember;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Person object.
		 * @param boolean $blnReload reload Person from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objPerson); // Notify in development version
			if (!($this->objPerson)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objPerson->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objPerson->Id : QApplication::Translate('N\A');


			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objPerson->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objPerson->FirstName;


			if ($this->txtLastName) $this->txtLastName->Text = $this->objPerson->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objPerson->LastName;


            if ($this->lstLogin) {
                $this->lstLogin->RemoveAllItems();
                $this->lstLogin->AddItem(QApplication::Translate($this->strLoginNullLabel), null);
                $this->lstLogin->AddItems($this->lstLogin_GetItems());
                if ($this->objPerson->Login)
                    $this->lstLogin->SelectedValue = $this->objPerson->Login->Id;
            
            }
			if ($this->lblLogin) $this->lblLogin->Text = $this->objPerson->Login ? $this->objPerson->Login->__toString() : null;


            if ($this->lstPersonTypes) {
                $this->lstPersonTypes->RemoveAllItems();
                $this->lstPersonTypes->AddItem(QApplication::Translate($this->strPersonTypesNullLabel), null);
                $this->lstPersonTypes->AddItems($this->lstPersonTypes_GetItems());
                $this->lstPersonTypes->SelectedValues = array_keys($this->objPerson->GetPersonTypeArray());
            
            }
			if ($this->lblPersonTypes) $this->lblPersonTypes->Text = implode($this->strPersonTypeGlue, $this->objPerson->GetPersonTypeArray());


            if ($this->lstProjectsAsTeamMember) {
                $this->lstProjectsAsTeamMember->RemoveAllItems();
                $this->lstProjectsAsTeamMember->AddItem(QApplication::Translate($this->strProjectsAsTeamMemberNullLabel), null);
                $this->lstProjectsAsTeamMember->AddItems($this->lstProjectsAsTeamMember_GetItems());
            
            }
			if ($this->lblProjectsAsTeamMember) $this->lblProjectsAsTeamMember->Text = implode($this->strProjectAsTeamMemberGlue, $this->objPerson->GetProjectAsTeamMemberArray());


		}

		/**
		 * Load this ModelConnector with a Person object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|Person
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objPerson = Person::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objPerson = new Person();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objPerson) {
				$this->Refresh ();
			}
			return $this->objPerson;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////


		protected function lstPersonTypes_Update() {
			if ($this->lstPersonTypes) {
				$this->objPerson->UnassociateAllPersonTypes();
				$this->objPerson->AssociatePersonType($this->lstPersonTypes->SelectedValues);
			}
		}
		protected function lstProjectsAsTeamMember_Update() {
			if ($this->lstProjectsAsTeamMember) {
				$this->objPerson->UnassociateAllProjectsAsTeamMember();
				foreach($this->lstProjectsAsTeamMember->SelectedValues as $id) {
					$this->objPerson->AssociateProjectAsTeamMemberByKey($id);
				}
			}
		}



		///////////////////////////////////////////////
		// PUBLIC PERSON OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Person instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdatePerson() {
			try {
				// Update any fields for controls that have been created

				if ($this->txtFirstName) $this->objPerson->FirstName = $this->txtFirstName->Text;

				if ($this->txtLastName) $this->objPerson->LastName = $this->txtLastName->Text;


				// Update any UniqueReverseReferences for controls that have been created for it
				if ($this->lstLogin) $this->objPerson->Login = Login::Load($this->lstLogin->SelectedValue);


			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Person instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePerson() {
			try {
				$this->UpdatePerson();

				// Save the Person object
				$id = $this->objPerson->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstPersonTypes_Update();
				$this->lstProjectsAsTeamMember_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Person instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePerson() {
			$this->objPerson->UnassociateAllPersonTypes();
			$this->objPerson->UnassociateAllProjectsAsTeamMember();
			$this->objPerson->Delete();
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
				case 'Person': return $this->objPerson;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Person fields -- will be created dynamically if not yet created
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
				case 'LoginControl':
					if (!$this->lstLogin) return $this->lstLogin_Create();
					return $this->lstLogin;
				case 'LoginLabel':
					if (!$this->lblLogin) return $this->lblLogin_Create();
					return $this->lblLogin;

				case 'PersonTypeControl':
					if (!$this->lstPersonTypes) return $this->lstPersonTypes_Create();
					return $this->lstPersonTypes;
				case 'PersonTypeLabel':
					if (!$this->lblPersonTypes) return $this->lblPersonTypes_Create();
					return $this->lblPersonTypes;

				case 'ProjectAsTeamMemberControl':
					if (!$this->lstProjectsAsTeamMember) return $this->lstProjectsAsTeamMember_Create();
					return $this->lstProjectsAsTeamMember;
				case 'ProjectAsTeamMemberLabel':
					if (!$this->lblProjectsAsTeamMember) return $this->lblProjectsAsTeamMember_Create();
					return $this->lblProjectsAsTeamMember;

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

					// Controls that point to Person fields
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
					case 'LoginControl':
						return ($this->lstLogin = QType::Cast($mixValue, 'QListBox'));
					case 'LoginLabel':
						return ($this->lblLogin = QType::Cast($mixValue, 'QLabel'));

					case 'PersonTypeControl':
						return ($this->lstPersonTypes = QType::Cast($mixValue, 'QCheckBoxList'));
					case 'PersonTypeLabel':
						return ($this->lblPersonTypes = QType::Cast($mixValue, 'QLabel'));

					case 'ProjectAsTeamMemberControl':
						return ($this->lstProjectsAsTeamMember = QType::Cast($mixValue, 'QCheckBoxList'));
					case 'ProjectAsTeamMemberLabel':
						return ($this->lblProjectsAsTeamMember = QType::Cast($mixValue, 'QLabel'));

					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}