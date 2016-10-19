<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Milestone class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Milestone object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a MilestoneConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Milestone $Milestone the actual Milestone data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QListBox $ProjectIdControl
	 * @property-read QLabel $ProjectIdLabel
	 * @property QTextBox $NameControl
	 * @property-read QLabel $NameLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class MilestoneConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Milestone objMilestone
		 * @access protected
		 */
		protected $objMilestone;
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

		// Controls that correspond to Milestone's individual data fields
		/**
		 * @var QLabel lblId
		 * @access protected
		 */
		protected $lblId;

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
		 * @var QTextBox txtName

		 * @access protected
		 */
		protected $txtName;

		/**
		 * @var QLabel lblName
		 * @access protected
		 */
		protected $lblName;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * MilestoneConnector to edit a single Milestone object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Milestone object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MilestoneConnector
		 * @param Milestone $objMilestone new or existing Milestone object
		 */
		 public function __construct($objParentObject, Milestone $objMilestone) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this MilestoneConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Milestone object
			$this->objMilestone = $objMilestone;

			// Figure out if we're Editing or Creating New
			if ($this->objMilestone->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this MilestoneConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing Milestone object creation - defaults to CreateOrEdit
 		 * @return MilestoneConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objMilestone = Milestone::Load($intId);

				// Milestone was found -- return it!
				if ($objMilestone)
					return new MilestoneConnector($objParentObject, $objMilestone);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Milestone object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new MilestoneConnector($objParentObject, new Milestone());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MilestoneConnector
		 * @param integer $intCreateType rules governing Milestone object creation - defaults to CreateOrEdit
		 * @return MilestoneConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return MilestoneConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this MilestoneConnector
		 * @param integer $intCreateType rules governing Milestone object creation - defaults to CreateOrEdit
		 * @return MilestoneConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return MilestoneConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::Milestone()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objMilestone->Id : QApplication::Translate('N\A');
			return $this->lblId;
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
			$this->lstProject->Required = true;
			$this->lstProject->PreferredRenderMethod = 'RenderWithName';
			$this->lstProject->LinkedNode = QQN::Milestone()->Project;
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
            $this->lstProject->SelectedValue = $this->objMilestone->ProjectId;
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
				if (($this->objMilestone->Project) && ($this->objMilestone->Project->Id == $objProject->Id))
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
			$this->lblProject->LinkedNode = QQN::Milestone()->Project;
			$this->lblProject->Text = $this->objMilestone->Project ? $this->objMilestone->Project->__toString() : null;
			return $this->lblProject;
		}



		/**
		 * Create and setup a QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Milestone::NameMaxLength;
			$this->txtName->PreferredRenderMethod = 'RenderWithName';
			$this->txtName->LinkedNode = QQN::Milestone()->Name;
			$this->txtName->Text = $this->objMilestone->Name;
			return $this->txtName;
		}

		/**
		 * Create and setup QLabel lblName
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblName_Create($strControlId = null) {
			$this->lblName = new QLabel($this->objParentObject, $strControlId);
			$this->lblName->Name = QApplication::Translate('Name');
			$this->lblName->PreferredRenderMethod = 'RenderWithName';
			$this->lblName->LinkedNode = QQN::Milestone()->Name;
			$this->lblName->Text = $this->objMilestone->Name;
			return $this->lblName;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Milestone object.
		 * @param boolean $blnReload reload Milestone from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objMilestone); // Notify in development version
			if (!($this->objMilestone)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objMilestone->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objMilestone->Id : QApplication::Translate('N\A');


            if ($this->lstProject) {
                $this->lstProject->RemoveAllItems();
                $this->lstProject->AddItem(QApplication::Translate($this->strProjectNullLabel), null);
                $this->lstProject->AddItems($this->lstProject_GetItems());
                $this->lstProject->SelectedValue = $this->objMilestone->ProjectId;
            
            }
			if ($this->lblProject) $this->lblProject->Text = $this->objMilestone->Project ? $this->objMilestone->Project->__toString() : null;


			if ($this->txtName) $this->txtName->Text = $this->objMilestone->Name;
			if ($this->lblName) $this->lblName->Text = $this->objMilestone->Name;


		}

		/**
		 * Load this ModelConnector with a Milestone object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|Milestone
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objMilestone = Milestone::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objMilestone = new Milestone();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objMilestone) {
				$this->Refresh ();
			}
			return $this->objMilestone;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC MILESTONE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Milestone instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateMilestone() {
			try {
				// Update any fields for controls that have been created

				if ($this->lstProject) $this->objMilestone->ProjectId = $this->lstProject->SelectedValue;

				if ($this->txtName) $this->objMilestone->Name = $this->txtName->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Milestone instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveMilestone() {
			try {
				$this->UpdateMilestone();

				// Save the Milestone object
				$id = $this->objMilestone->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Milestone instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteMilestone() {
			$this->objMilestone->Delete();
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
				case 'Milestone': return $this->objMilestone;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Milestone fields -- will be created dynamically if not yet created
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ProjectIdControl':
					if (!$this->lstProject) return $this->lstProject_Create();
					return $this->lstProject;
				case 'ProjectIdLabel':
					if (!$this->lblProject) return $this->lblProject_Create();
					return $this->lblProject;
				case 'ProjectNullLabel':
					return $this->strProjectNullLabel;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
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

					// Controls that point to Milestone fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectIdControl':
						return ($this->lstProject = QType::Cast($mixValue, 'QListBox'));
					case 'ProjectIdLabel':
						return ($this->lblProject = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectNullLabel':
						return $this->strProjectNullLabel = $mixValue;
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QTextBox'));
					case 'NameLabel':
						return ($this->lblName = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}