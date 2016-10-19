<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TwoKey class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TwoKey object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TwoKeyConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read TwoKey $TwoKey the actual TwoKey data class being edited
	 * @property QTextBox $ServerControl
	 * @property-read QLabel $ServerLabel
	 * @property QTextBox $DirectoryControl
	 * @property-read QLabel $DirectoryLabel
	 * @property QTextBox $FileNameControl
	 * @property-read QLabel $FileNameLabel
	 * @property QListBox $PersonIdControl
	 * @property-read QLabel $PersonIdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TwoKeyConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var TwoKey objTwoKey
		 * @access protected
		 */
		protected $objTwoKey;
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

		// Controls that correspond to TwoKey's individual data fields
		/**
		 * @var QTextBox txtServer

		 * @access protected
		 */
		protected $txtServer;

		/**
		 * @var QLabel lblServer
		 * @access protected
		 */
		protected $lblServer;

		/**
		 * @var QTextBox txtDirectory

		 * @access protected
		 */
		protected $txtDirectory;

		/**
		 * @var QLabel lblDirectory
		 * @access protected
		 */
		protected $lblDirectory;

		/**
		 * @var QTextBox txtFileName

		 * @access protected
		 */
		protected $txtFileName;

		/**
		 * @var QLabel lblFileName
		 * @access protected
		 */
		protected $lblFileName;

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
		 * @var QListBox lstProject
		 * @access protected
		 */
		protected $lstProject;

		/**
		 * @var string strProjectNullLabel
		 * @access protected
		 */
		protected $strProjectNullLabel;

		/**
		* @var objProjectCondition
		* @access protected
		*/
		protected $objProjectCondition;

		/**
		* @var objProjectClauses
		* @access protected
		*/
		protected $objProjectClauses;
		/**
		 * @var QLabel lblProject
		 * @access protected
		 */
		protected $lblProject;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TwoKeyConnector to edit a single TwoKey object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TwoKey object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TwoKeyConnector
		 * @param TwoKey $objTwoKey new or existing TwoKey object
		 */
		 public function __construct($objParentObject, TwoKey $objTwoKey) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TwoKeyConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked TwoKey object
			$this->objTwoKey = $objTwoKey;

			// Figure out if we're Editing or Creating New
			if ($this->objTwoKey->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TwoKeyConnector
		 * @param null|string $strServer primary key value
		 * @param null|string $strDirectory primary key value
		 * @param integer $intCreateType rules governing TwoKey object creation - defaults to CreateOrEdit
 		 * @return TwoKeyConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strServer = null, $strDirectory = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strServer) && strlen($strDirectory)) {
				$objTwoKey = TwoKey::Load($strServer, $strDirectory);

				// TwoKey was found -- return it!
				if ($objTwoKey)
					return new TwoKeyConnector($objParentObject, $objTwoKey);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TwoKey object with PK arguments: ' . $strServer . ', ' . $strDirectory);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TwoKeyConnector($objParentObject, new TwoKey());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TwoKeyConnector
		 * @param integer $intCreateType rules governing TwoKey object creation - defaults to CreateOrEdit
		 * @return TwoKeyConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strServer = QApplication::PathInfo(0);
			$strDirectory = QApplication::PathInfo(1);
			return TwoKeyConnector::Create($objParentObject, $strServer, $strDirectory, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TwoKeyConnector
		 * @param integer $intCreateType rules governing TwoKey object creation - defaults to CreateOrEdit
		 * @return TwoKeyConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strServer = QApplication::QueryString('strServer');
			$strDirectory = QApplication::QueryString('strDirectory');
			return TwoKeyConnector::Create($objParentObject, $strServer, $strDirectory, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtServer
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtServer_Create($strControlId = null) {
			$this->txtServer = new QTextBox($this->objParentObject, $strControlId);
			$this->txtServer->Name = QApplication::Translate('Server');
			$this->txtServer->Required = true;
			$this->txtServer->MaxLength = TwoKey::ServerMaxLength;
			$this->txtServer->PreferredRenderMethod = 'RenderWithName';
			$this->txtServer->LinkedNode = QQN::TwoKey()->Server;
			$this->txtServer->Text = $this->objTwoKey->Server;
			return $this->txtServer;
		}

		/**
		 * Create and setup QLabel lblServer
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblServer_Create($strControlId = null) {
			$this->lblServer = new QLabel($this->objParentObject, $strControlId);
			$this->lblServer->Name = QApplication::Translate('Server');
			$this->lblServer->PreferredRenderMethod = 'RenderWithName';
			$this->lblServer->LinkedNode = QQN::TwoKey()->Server;
			$this->lblServer->Text = $this->objTwoKey->Server;
			return $this->lblServer;
		}



		/**
		 * Create and setup a QTextBox txtDirectory
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDirectory_Create($strControlId = null) {
			$this->txtDirectory = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDirectory->Name = QApplication::Translate('Directory');
			$this->txtDirectory->Required = true;
			$this->txtDirectory->MaxLength = TwoKey::DirectoryMaxLength;
			$this->txtDirectory->PreferredRenderMethod = 'RenderWithName';
			$this->txtDirectory->LinkedNode = QQN::TwoKey()->Directory;
			$this->txtDirectory->Text = $this->objTwoKey->Directory;
			return $this->txtDirectory;
		}

		/**
		 * Create and setup QLabel lblDirectory
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDirectory_Create($strControlId = null) {
			$this->lblDirectory = new QLabel($this->objParentObject, $strControlId);
			$this->lblDirectory->Name = QApplication::Translate('Directory');
			$this->lblDirectory->PreferredRenderMethod = 'RenderWithName';
			$this->lblDirectory->LinkedNode = QQN::TwoKey()->Directory;
			$this->lblDirectory->Text = $this->objTwoKey->Directory;
			return $this->lblDirectory;
		}



		/**
		 * Create and setup a QTextBox txtFileName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFileName_Create($strControlId = null) {
			$this->txtFileName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFileName->Name = QApplication::Translate('File Name');
			$this->txtFileName->Required = true;
			$this->txtFileName->MaxLength = TwoKey::FileNameMaxLength;
			$this->txtFileName->PreferredRenderMethod = 'RenderWithName';
			$this->txtFileName->LinkedNode = QQN::TwoKey()->FileName;
			$this->txtFileName->Text = $this->objTwoKey->FileName;
			return $this->txtFileName;
		}

		/**
		 * Create and setup QLabel lblFileName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFileName_Create($strControlId = null) {
			$this->lblFileName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFileName->Name = QApplication::Translate('File Name');
			$this->lblFileName->PreferredRenderMethod = 'RenderWithName';
			$this->lblFileName->LinkedNode = QQN::TwoKey()->FileName;
			$this->lblFileName->Text = $this->objTwoKey->FileName;
			return $this->lblFileName;
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
			$this->lstPerson->Required = true;
			$this->lstPerson->PreferredRenderMethod = 'RenderWithName';
			$this->lstPerson->LinkedNode = QQN::TwoKey()->Person;
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
            $this->lstPerson->SelectedValue = $this->objTwoKey->PersonId;
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
				if (($this->objTwoKey->Person) && ($this->objTwoKey->Person->Id == $objPerson->Id))
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
			$this->lblPerson->LinkedNode = QQN::TwoKey()->Person;
			$this->lblPerson->Text = $this->objTwoKey->Person ? $this->objTwoKey->Person->__toString() : null;
			return $this->lblPerson;
		}



		/**
		 * Create and setup QListBox lstProject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstProject_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objProjectCondition = $objCondition;
			$this->objProjectClauses = $objClauses;
			$this->lstProject = new QListBox($this->objParentObject, $strControlId);
			$this->lstProject->Name = QApplication::Translate('Project');
			$this->lstProject->PreferredRenderMethod = 'RenderWithName';
			$this->lstProject->LinkedNode = QQN::TwoKey()->Project;
            if (!$this->strProjectNullLabel) {
            	if (!$this->lstProject->Required) {
            		$this->strProjectNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strProjectNullLabel = '- Select One -';
            	}
            }
            $this->lstProject->AddItem(QApplication::Translate($this->strProjectNullLabel), null);
            $this->lstProject->AddItems($this->lstProject_GetItems());
            $this->lstProject->SelectedValue = $this->objTwoKey->ProjectId;
			return $this->lstProject;
		}

		/**
		 *	Create item list for use by lstProject
		 */
		 public function lstProject_GetItems() {
			$a = array();
			$objCondition = $this->objProjectCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objProjectCursor = Project::QueryCursor($objCondition, $this->objProjectClauses);

			// Iterate through the Cursor
			while ($objProject = Project::InstantiateCursor($objProjectCursor)) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->Id);
				if (($this->objTwoKey->Project) && ($this->objTwoKey->Project->Id == $objProject->Id))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblProject
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProject_Create($strControlId = null) {
			$this->lblProject = new QLabel($this->objParentObject, $strControlId);
			$this->lblProject->Name = QApplication::Translate('Project');
			$this->lblProject->PreferredRenderMethod = 'RenderWithName';
			$this->lblProject->LinkedNode = QQN::TwoKey()->Project;
			$this->lblProject->Text = $this->objTwoKey->Project ? $this->objTwoKey->Project->__toString() : null;
			return $this->lblProject;
		}





		/**
		 * Refresh this ModelConnector with Data from the local TwoKey object.
		 * @param boolean $blnReload reload TwoKey from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objTwoKey); // Notify in development version
			if (!($this->objTwoKey)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objTwoKey->Reload();
			}
			if ($this->txtServer) $this->txtServer->Text = $this->objTwoKey->Server;
			if ($this->lblServer) $this->lblServer->Text = $this->objTwoKey->Server;


			if ($this->txtDirectory) $this->txtDirectory->Text = $this->objTwoKey->Directory;
			if ($this->lblDirectory) $this->lblDirectory->Text = $this->objTwoKey->Directory;


			if ($this->txtFileName) $this->txtFileName->Text = $this->objTwoKey->FileName;
			if ($this->lblFileName) $this->lblFileName->Text = $this->objTwoKey->FileName;


            if ($this->lstPerson) {
                $this->lstPerson->RemoveAllItems();
                $this->lstPerson->AddItem(QApplication::Translate($this->strPersonNullLabel), null);
                $this->lstPerson->AddItems($this->lstPerson_GetItems());
                $this->lstPerson->SelectedValue = $this->objTwoKey->PersonId;
            
            }
			if ($this->lblPerson) $this->lblPerson->Text = $this->objTwoKey->Person ? $this->objTwoKey->Person->__toString() : null;


            if ($this->lstProject) {
                $this->lstProject->RemoveAllItems();
                $this->lstProject->AddItem(QApplication::Translate($this->strProjectNullLabel), null);
                $this->lstProject->AddItems($this->lstProject_GetItems());
                $this->lstProject->SelectedValue = $this->objTwoKey->ProjectId;
            
            }
			if ($this->lblProject) $this->lblProject->Text = $this->objTwoKey->Project ? $this->objTwoKey->Project->__toString() : null;


		}

		/**
		 * Load this ModelConnector with a TwoKey object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strServer		 * @param null|string $strDirectory
		 * @param $objClauses
		 * @return null|TwoKey
		 */
		 public function Load($strServer = null,$strDirectory = null, $objClauses = null) {
			if (strlen($strServer) && strlen($strDirectory)) {
				$this->objTwoKey = TwoKey::Load($strServer, $strDirectory, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objTwoKey = new TwoKey();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objTwoKey) {
				$this->Refresh ();
			}
			return $this->objTwoKey;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TWOKEY OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's TwoKey instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateTwoKey() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtServer) $this->objTwoKey->Server = $this->txtServer->Text;

				if ($this->txtDirectory) $this->objTwoKey->Directory = $this->txtDirectory->Text;

				if ($this->txtFileName) $this->objTwoKey->FileName = $this->txtFileName->Text;

				if ($this->lstPerson) $this->objTwoKey->PersonId = $this->lstPerson->SelectedValue;

				if ($this->lstProject) $this->objTwoKey->ProjectId = $this->lstProject->SelectedValue;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's TwoKey instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTwoKey() {
			try {
				$this->UpdateTwoKey();

				// Save the TwoKey object
				$id = $this->objTwoKey->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's TwoKey instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTwoKey() {
			$this->objTwoKey->Delete();
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
				case 'TwoKey': return $this->objTwoKey;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TwoKey fields -- will be created dynamically if not yet created
				case 'ServerControl':
					if (!$this->txtServer) return $this->txtServer_Create();
					return $this->txtServer;
				case 'ServerLabel':
					if (!$this->lblServer) return $this->lblServer_Create();
					return $this->lblServer;
				case 'DirectoryControl':
					if (!$this->txtDirectory) return $this->txtDirectory_Create();
					return $this->txtDirectory;
				case 'DirectoryLabel':
					if (!$this->lblDirectory) return $this->lblDirectory_Create();
					return $this->lblDirectory;
				case 'FileNameControl':
					if (!$this->txtFileName) return $this->txtFileName_Create();
					return $this->txtFileName;
				case 'FileNameLabel':
					if (!$this->lblFileName) return $this->lblFileName_Create();
					return $this->lblFileName;
				case 'PersonIdControl':
					if (!$this->lstPerson) return $this->lstPerson_Create();
					return $this->lstPerson;
				case 'PersonIdLabel':
					if (!$this->lblPerson) return $this->lblPerson_Create();
					return $this->lblPerson;
				case 'PersonNullLabel':
					return $this->strPersonNullLabel;
				case 'ProjectIdControl':
					if (!$this->lstProject) return $this->lstProject_Create();
					return $this->lstProject;
				case 'ProjectIdLabel':
					if (!$this->lblProject) return $this->lblProject_Create();
					return $this->lblProject;
				case 'ProjectNullLabel':
					return $this->strProjectNullLabel;
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

					// Controls that point to TwoKey fields
					case 'ServerControl':
						return ($this->txtServer = QType::Cast($mixValue, 'QTextBox'));
					case 'ServerLabel':
						return ($this->lblServer = QType::Cast($mixValue, 'QLabel'));
					case 'DirectoryControl':
						return ($this->txtDirectory = QType::Cast($mixValue, 'QTextBox'));
					case 'DirectoryLabel':
						return ($this->lblDirectory = QType::Cast($mixValue, 'QLabel'));
					case 'FileNameControl':
						return ($this->txtFileName = QType::Cast($mixValue, 'QTextBox'));
					case 'FileNameLabel':
						return ($this->lblFileName = QType::Cast($mixValue, 'QLabel'));
					case 'PersonIdControl':
						return ($this->lstPerson = QType::Cast($mixValue, 'QListBox'));
					case 'PersonIdLabel':
						return ($this->lblPerson = QType::Cast($mixValue, 'QLabel'));
					case 'PersonNullLabel':
						return $this->strPersonNullLabel = $mixValue;
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QListBox'));
					case 'ProjectIdLabel':
						return ($this->lblProject = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectNullLabel':
						return $this->strProjectNullLabel = $mixValue;
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}