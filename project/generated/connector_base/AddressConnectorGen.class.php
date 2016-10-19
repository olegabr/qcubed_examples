<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Address class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Address object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AddressConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Address $Address the actual Address data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QListBox $PersonIdControl
	 * @property-read QLabel $PersonIdLabel
	 * @property QTextBox $StreetControl
	 * @property-read QLabel $StreetLabel
	 * @property QTextBox $CityControl
	 * @property-read QLabel $CityLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AddressConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Address objAddress
		 * @access protected
		 */
		protected $objAddress;
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

		// Controls that correspond to Address's individual data fields
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
		 * @var QTextBox txtStreet

		 * @access protected
		 */
		protected $txtStreet;

		/**
		 * @var QLabel lblStreet
		 * @access protected
		 */
		protected $lblStreet;

		/**
		 * @var QTextBox txtCity

		 * @access protected
		 */
		protected $txtCity;

		/**
		 * @var QLabel lblCity
		 * @access protected
		 */
		protected $lblCity;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AddressConnector to edit a single Address object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Address object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressConnector
		 * @param Address $objAddress new or existing Address object
		 */
		 public function __construct($objParentObject, Address $objAddress) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AddressConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Address object
			$this->objAddress = $objAddress;

			// Figure out if we're Editing or Creating New
			if ($this->objAddress->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing Address object creation - defaults to CreateOrEdit
 		 * @return AddressConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAddress = Address::Load($intId);

				// Address was found -- return it!
				if ($objAddress)
					return new AddressConnector($objParentObject, $objAddress);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Address object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AddressConnector($objParentObject, new Address());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressConnector
		 * @param integer $intCreateType rules governing Address object creation - defaults to CreateOrEdit
		 * @return AddressConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AddressConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressConnector
		 * @param integer $intCreateType rules governing Address object creation - defaults to CreateOrEdit
		 * @return AddressConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AddressConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::Address()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objAddress->Id : QApplication::Translate('N\A');
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
			$this->lstPerson->LinkedNode = QQN::Address()->Person;
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
            $this->lstPerson->SelectedValue = $this->objAddress->PersonId;
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
				if (($this->objAddress->Person) && ($this->objAddress->Person->Id == $objPerson->Id))
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
			$this->lblPerson->LinkedNode = QQN::Address()->Person;
			$this->lblPerson->Text = $this->objAddress->Person ? $this->objAddress->Person->__toString() : null;
			return $this->lblPerson;
		}



		/**
		 * Create and setup a QTextBox txtStreet
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStreet_Create($strControlId = null) {
			$this->txtStreet = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStreet->Name = QApplication::Translate('Street');
			$this->txtStreet->Required = true;
			$this->txtStreet->MaxLength = Address::StreetMaxLength;
			$this->txtStreet->PreferredRenderMethod = 'RenderWithName';
			$this->txtStreet->LinkedNode = QQN::Address()->Street;
			$this->txtStreet->Text = $this->objAddress->Street;
			return $this->txtStreet;
		}

		/**
		 * Create and setup QLabel lblStreet
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStreet_Create($strControlId = null) {
			$this->lblStreet = new QLabel($this->objParentObject, $strControlId);
			$this->lblStreet->Name = QApplication::Translate('Street');
			$this->lblStreet->PreferredRenderMethod = 'RenderWithName';
			$this->lblStreet->LinkedNode = QQN::Address()->Street;
			$this->lblStreet->Text = $this->objAddress->Street;
			return $this->lblStreet;
		}



		/**
		 * Create and setup a QTextBox txtCity
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCity_Create($strControlId = null) {
			$this->txtCity = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCity->Name = QApplication::Translate('City');
			$this->txtCity->MaxLength = Address::CityMaxLength;
			$this->txtCity->PreferredRenderMethod = 'RenderWithName';
			$this->txtCity->LinkedNode = QQN::Address()->City;
			$this->txtCity->Text = $this->objAddress->City;
			return $this->txtCity;
		}

		/**
		 * Create and setup QLabel lblCity
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCity_Create($strControlId = null) {
			$this->lblCity = new QLabel($this->objParentObject, $strControlId);
			$this->lblCity->Name = QApplication::Translate('City');
			$this->lblCity->PreferredRenderMethod = 'RenderWithName';
			$this->lblCity->LinkedNode = QQN::Address()->City;
			$this->lblCity->Text = $this->objAddress->City;
			return $this->lblCity;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Address object.
		 * @param boolean $blnReload reload Address from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objAddress); // Notify in development version
			if (!($this->objAddress)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objAddress->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objAddress->Id : QApplication::Translate('N\A');


            if ($this->lstPerson) {
                $this->lstPerson->RemoveAllItems();
                $this->lstPerson->AddItem(QApplication::Translate($this->strPersonNullLabel), null);
                $this->lstPerson->AddItems($this->lstPerson_GetItems());
                $this->lstPerson->SelectedValue = $this->objAddress->PersonId;
            
            }
			if ($this->lblPerson) $this->lblPerson->Text = $this->objAddress->Person ? $this->objAddress->Person->__toString() : null;


			if ($this->txtStreet) $this->txtStreet->Text = $this->objAddress->Street;
			if ($this->lblStreet) $this->lblStreet->Text = $this->objAddress->Street;


			if ($this->txtCity) $this->txtCity->Text = $this->objAddress->City;
			if ($this->lblCity) $this->lblCity->Text = $this->objAddress->City;


		}

		/**
		 * Load this ModelConnector with a Address object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|Address
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objAddress = Address::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objAddress = new Address();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objAddress) {
				$this->Refresh ();
			}
			return $this->objAddress;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ADDRESS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Address instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateAddress() {
			try {
				// Update any fields for controls that have been created

				if ($this->lstPerson) $this->objAddress->PersonId = $this->lstPerson->SelectedValue;

				if ($this->txtStreet) $this->objAddress->Street = $this->txtStreet->Text;

				if ($this->txtCity) $this->objAddress->City = $this->txtCity->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Address instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAddress() {
			try {
				$this->UpdateAddress();

				// Save the Address object
				$id = $this->objAddress->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Address instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAddress() {
			$this->objAddress->Delete();
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
				case 'Address': return $this->objAddress;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Address fields -- will be created dynamically if not yet created
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
				case 'StreetControl':
					if (!$this->txtStreet) return $this->txtStreet_Create();
					return $this->txtStreet;
				case 'StreetLabel':
					if (!$this->lblStreet) return $this->lblStreet_Create();
					return $this->lblStreet;
				case 'CityControl':
					if (!$this->txtCity) return $this->txtCity_Create();
					return $this->txtCity;
				case 'CityLabel':
					if (!$this->lblCity) return $this->lblCity_Create();
					return $this->lblCity;
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

					// Controls that point to Address fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'PersonIdControl':
						return ($this->lstPerson = QType::Cast($mixValue, 'QListBox'));
					case 'PersonIdLabel':
						return ($this->lblPerson = QType::Cast($mixValue, 'QLabel'));
					case 'PersonNullLabel':
						return $this->strPersonNullLabel = $mixValue;
					case 'StreetControl':
						return ($this->txtStreet = QType::Cast($mixValue, 'QTextBox'));
					case 'StreetLabel':
						return ($this->lblStreet = QType::Cast($mixValue, 'QLabel'));
					case 'CityControl':
						return ($this->txtCity = QType::Cast($mixValue, 'QTextBox'));
					case 'CityLabel':
						return ($this->lblCity = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}