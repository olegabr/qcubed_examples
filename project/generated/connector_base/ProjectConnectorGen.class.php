<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Project class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Project object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ProjectConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read Project $Project the actual Project data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QListBox $ProjectStatusTypeIdControl
	 * @property-read QLabel $ProjectStatusTypeIdLabel
	 * @property QListBox $ManagerPersonIdControl
	 * @property-read QLabel $ManagerPersonIdLabel
	 * @property QTextBox $NameControl
	 * @property-read QLabel $NameLabel
	 * @property QTextBox $DescriptionControl
	 * @property-read QLabel $DescriptionLabel
	 * @property QDateTimePicker $StartDateControl
	 * @property-read QLabel $StartDateLabel
	 * @property QDateTimePicker $EndDateControl
	 * @property-read QLabel $EndDateLabel
	 * @property QTextBox $BudgetControl
	 * @property-read QLabel $BudgetLabel
	 * @property QTextBox $SpentControl
	 * @property-read QLabel $SpentLabel
	 * @property QCheckBoxList $ProjectAsRelatedControl
	 * @property-read QLabel $ProjectAsRelatedLabel
	 * @property QCheckBoxList $ParentProjectAsRelatedControl
	 * @property-read QLabel $ParentProjectAsRelatedLabel
	 * @property QCheckBoxList $PersonAsTeamMemberControl
	 * @property-read QLabel $PersonAsTeamMemberLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ProjectConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var Project objProject
		 * @access protected
		 */
		protected $objProject;
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

		// Controls that correspond to Project's individual data fields
		/**
		 * @var QLabel lblId
		 * @access protected
		 */
		protected $lblId;

		/**
		 * @var QListBox lstProjectStatusType
		 * @access protected
		 */
		protected $lstProjectStatusType;

		/**
		 * @var string strProjectStatusTypeNullLabel
		 * @access protected
		 */
		protected $strProjectStatusTypeNullLabel;

		/**
		 * @var QLabel lblProjectStatusType
		 * @access protected
		 */
		protected $lblProjectStatusType;

		/**
		 * @var QListBox lstManagerPerson
		 * @access protected
		 */
		protected $lstManagerPerson;

		/**
		 * @var string strManagerPersonNullLabel
		 * @access protected
		 */
		protected $strManagerPersonNullLabel;

		/**
		* @var objManagerPersonCondition
		* @access protected
		*/
		protected $objManagerPersonCondition;

		/**
		* @var objManagerPersonClauses
		* @access protected
		*/
		protected $objManagerPersonClauses;
		/**
		 * @var QLabel lblManagerPerson
		 * @access protected
		 */
		protected $lblManagerPerson;

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
		 * @var QTextBox txtDescription

		 * @access protected
		 */
		protected $txtDescription;

		/**
		 * @var QLabel lblDescription
		 * @access protected
		 */
		protected $lblDescription;

		/**
		 * @var QDateTimePicker calStartDate

		 * @access protected
		 */
		protected $calStartDate;

		/**
		 * @var QLabel lblStartDate
		 * @access protected
		 */
		protected $lblStartDate;

		/**
		* @var strStartDateDateTimeFormat
		* @access protected
		*/
		protected $strStartDateDateTimeFormat;
		/**
		 * @var QDateTimePicker calEndDate

		 * @access protected
		 */
		protected $calEndDate;

		/**
		 * @var QLabel lblEndDate
		 * @access protected
		 */
		protected $lblEndDate;

		/**
		* @var strEndDateDateTimeFormat
		* @access protected
		*/
		protected $strEndDateDateTimeFormat;
		/**
		 * @var QTextBox txtBudget

		 * @access protected
		 */
		protected $txtBudget;

		/**
		 * @var QLabel lblBudget
		 * @access protected
		 */
		protected $lblBudget;

		/**
		 * @var QTextBox txtSpent

		 * @access protected
		 */
		protected $txtSpent;

		/**
		 * @var QLabel lblSpent
		 * @access protected
		 */
		protected $lblSpent;


		// Controls to edit Unique ReverseReferences and ManyToMany References

		/**
		 * @var QCheckBoxList lstProjectsAsRelated
		 * @access protected
		 */
		protected $lstProjectsAsRelated;

		/**
		 * @var string strProjectsAsRelatedNullLabel
		 * @access protected
		 */
		protected $strProjectsAsRelatedNullLabel;

		/**
		* @var objProjectsAsRelatedCondition
		* @access protected
		*/
		protected $objProjectsAsRelatedCondition;

		/**
		* @var objProjectsAsRelatedClauses
		* @access protected
		*/
		protected $objProjectsAsRelatedClauses;
		/**
		 * @var QLabel lblProjectsAsRelated
		 * @access protected
		 */
		protected $lblProjectsAsRelated;

		protected $strProjectAsRelatedGlue = ', ';
		/**
		 * @var QCheckBoxList lstParentProjectsAsRelated
		 * @access protected
		 */
		protected $lstParentProjectsAsRelated;

		/**
		 * @var string strParentProjectsAsRelatedNullLabel
		 * @access protected
		 */
		protected $strParentProjectsAsRelatedNullLabel;

		/**
		* @var objParentProjectsAsRelatedCondition
		* @access protected
		*/
		protected $objParentProjectsAsRelatedCondition;

		/**
		* @var objParentProjectsAsRelatedClauses
		* @access protected
		*/
		protected $objParentProjectsAsRelatedClauses;
		/**
		 * @var QLabel lblParentProjectsAsRelated
		 * @access protected
		 */
		protected $lblParentProjectsAsRelated;

		protected $strParentProjectAsRelatedGlue = ', ';
		/**
		 * @var QCheckBoxList lstPeopleAsTeamMember
		 * @access protected
		 */
		protected $lstPeopleAsTeamMember;

		/**
		 * @var string strPeopleAsTeamMemberNullLabel
		 * @access protected
		 */
		protected $strPeopleAsTeamMemberNullLabel;

		/**
		* @var objPeopleAsTeamMemberCondition
		* @access protected
		*/
		protected $objPeopleAsTeamMemberCondition;

		/**
		* @var objPeopleAsTeamMemberClauses
		* @access protected
		*/
		protected $objPeopleAsTeamMemberClauses;
		/**
		 * @var QLabel lblPeopleAsTeamMember
		 * @access protected
		 */
		protected $lblPeopleAsTeamMember;

		protected $strPersonAsTeamMemberGlue = ', ';


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ProjectConnector to edit a single Project object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Project object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProjectConnector
		 * @param Project $objProject new or existing Project object
		 */
		 public function __construct($objParentObject, Project $objProject) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ProjectConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked Project object
			$this->objProject = $objProject;

			// Figure out if we're Editing or Creating New
			if ($this->objProject->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProjectConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing Project object creation - defaults to CreateOrEdit
 		 * @return ProjectConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objProject = Project::Load($intId);

				// Project was found -- return it!
				if ($objProject)
					return new ProjectConnector($objParentObject, $objProject);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Project object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ProjectConnector($objParentObject, new Project());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProjectConnector
		 * @param integer $intCreateType rules governing Project object creation - defaults to CreateOrEdit
		 * @return ProjectConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ProjectConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProjectConnector
		 * @param integer $intCreateType rules governing Project object creation - defaults to CreateOrEdit
		 * @return ProjectConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ProjectConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::Project()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objProject->Id : QApplication::Translate('N\A');
			return $this->lblId;
		}



		/**
		 * Create and setup QListBox lstProjectStatusType
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */

		public function lstProjectStatusType_Create($strControlId = null) {
			$this->lstProjectStatusType = new QListBox($this->objParentObject, $strControlId);
			$this->lstProjectStatusType->Name = QApplication::Translate('Project Status Type');
			$this->lstProjectStatusType->Required = true;
			$this->lstProjectStatusType->PreferredRenderMethod = 'RenderWithName';
			$this->lstProjectStatusType->LinkedNode = QQN::Project()->ProjectStatusTypeId;
            if (!$this->strProjectStatusTypeNullLabel) {
            	if (!$this->lstProjectStatusType->Required) {
            		$this->strProjectStatusTypeNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strProjectStatusTypeNullLabel = '- Select One -';
            	}
            }
            $this->lstProjectStatusType->AddItem(QApplication::Translate($this->strProjectStatusTypeNullLabel), null);
            $this->lstProjectStatusType->AddItems($this->lstProjectStatusType_GetItems());
            $this->lstProjectStatusType->SelectedValue = $this->objProject->ProjectStatusTypeId;
			return $this->lstProjectStatusType;
		}

		/**
		 *	Create item list for use by lstProjectStatusType
		 */
		public function lstProjectStatusType_GetItems() {
			return ProjectStatusType::$NameArray;
		}

		/**
		 * Create and setup QLabel lblProjectStatusType
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectStatusType_Create($strControlId = null) {
			$this->lblProjectStatusType = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectStatusType->Name = QApplication::Translate('Project Status Type');
			$this->lblProjectStatusType->PreferredRenderMethod = 'RenderWithName';
			$this->lblProjectStatusType->LinkedNode = QQN::Project()->ProjectStatusTypeId;
			$this->lblProjectStatusType->Text = $this->objProject->ProjectStatusTypeId ? ProjectStatusType::$NameArray[$this->objProject->ProjectStatusTypeId] : null;
			return $this->lblProjectStatusType;
		}



		/**
		 * Create and setup QListBox lstManagerPerson
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstManagerPerson_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objManagerPersonCondition = $objCondition;
			$this->objManagerPersonClauses = $objClauses;
			$this->lstManagerPerson = new QListBox($this->objParentObject, $strControlId);
			$this->lstManagerPerson->Name = QApplication::Translate('Manager Person');
			$this->lstManagerPerson->PreferredRenderMethod = 'RenderWithName';
			$this->lstManagerPerson->LinkedNode = QQN::Project()->ManagerPerson;
            if (!$this->strManagerPersonNullLabel) {
            	if (!$this->lstManagerPerson->Required) {
            		$this->strManagerPersonNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strManagerPersonNullLabel = '- Select One -';
            	}
            }
            $this->lstManagerPerson->AddItem(QApplication::Translate($this->strManagerPersonNullLabel), null);
            $this->lstManagerPerson->AddItems($this->lstManagerPerson_GetItems());
            $this->lstManagerPerson->SelectedValue = $this->objProject->ManagerPersonId;
			return $this->lstManagerPerson;
		}

		/**
		 *	Create item list for use by lstManagerPerson
		 */
		 public function lstManagerPerson_GetItems() {
			$a = array();
			$objCondition = $this->objManagerPersonCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objManagerPersonCursor = Person::QueryCursor($objCondition, $this->objManagerPersonClauses);

			// Iterate through the Cursor
			while ($objManagerPerson = Person::InstantiateCursor($objManagerPersonCursor)) {
				$objListItem = new QListItem($objManagerPerson->__toString(), $objManagerPerson->Id);
				if (($this->objProject->ManagerPerson) && ($this->objProject->ManagerPerson->Id == $objManagerPerson->Id))
					$objListItem->Selected = true;
				$a[] = $objListItem;
			}
			return $a;
		 }

		/**
		 * Create and setup QLabel lblManagerPerson
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblManagerPerson_Create($strControlId = null) {
			$this->lblManagerPerson = new QLabel($this->objParentObject, $strControlId);
			$this->lblManagerPerson->Name = QApplication::Translate('Manager Person');
			$this->lblManagerPerson->PreferredRenderMethod = 'RenderWithName';
			$this->lblManagerPerson->LinkedNode = QQN::Project()->ManagerPerson;
			$this->lblManagerPerson->Text = $this->objProject->ManagerPerson ? $this->objProject->ManagerPerson->__toString() : null;
			return $this->lblManagerPerson;
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
			$this->txtName->MaxLength = Project::NameMaxLength;
			$this->txtName->PreferredRenderMethod = 'RenderWithName';
			$this->txtName->LinkedNode = QQN::Project()->Name;
			$this->txtName->Text = $this->objProject->Name;
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
			$this->lblName->LinkedNode = QQN::Project()->Name;
			$this->lblName->Text = $this->objProject->Name;
			return $this->lblName;
		}



		/**
		 * Create and setup a QTextBox txtDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescription_Create($strControlId = null) {
			$this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescription->Name = QApplication::Translate('Description');
			$this->txtDescription->TextMode = QTextMode::MultiLine;
			$this->txtDescription->PreferredRenderMethod = 'RenderWithName';
			$this->txtDescription->LinkedNode = QQN::Project()->Description;
			$this->txtDescription->Text = $this->objProject->Description;
			return $this->txtDescription;
		}

		/**
		 * Create and setup QLabel lblDescription
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescription_Create($strControlId = null) {
			$this->lblDescription = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescription->Name = QApplication::Translate('Description');
			$this->lblDescription->PreferredRenderMethod = 'RenderWithName';
			$this->lblDescription->LinkedNode = QQN::Project()->Description;
			$this->lblDescription->Text = $this->objProject->Description;
			return $this->lblDescription;
		}



		/**
		 * Create and setup a QDateTimePicker calStartDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calStartDate_Create($strControlId = null) {
			$this->calStartDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calStartDate->Name = QApplication::Translate('Start Date');
			$this->calStartDate->DateTime = $this->objProject->StartDate;
			$this->calStartDate->DateTimePickerType = QDateTimePickerType::Date;
			$this->calStartDate->PreferredRenderMethod = 'RenderWithName';
			$this->calStartDate->LinkedNode = QQN::Project()->StartDate;
			return $this->calStartDate;
		}

		/**
		 * Create and setup QLabel lblStartDate
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblStartDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblStartDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblStartDate->Name = QApplication::Translate('Start Date');
			$this->strStartDateDateTimeFormat = $strDateTimeFormat;
			$this->lblStartDate->PreferredRenderMethod = 'RenderWithName';
			$this->lblStartDate->LinkedNode = QQN::Project()->StartDate;
			$this->lblStartDate->Text = $this->objProject->StartDate ? $this->objProject->StartDate->qFormat($this->strStartDateDateTimeFormat) : null;
			return $this->lblStartDate;
		}



		/**
		 * Create and setup a QDateTimePicker calEndDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calEndDate_Create($strControlId = null) {
			$this->calEndDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calEndDate->Name = QApplication::Translate('End Date');
			$this->calEndDate->DateTime = $this->objProject->EndDate;
			$this->calEndDate->DateTimePickerType = QDateTimePickerType::Date;
			$this->calEndDate->PreferredRenderMethod = 'RenderWithName';
			$this->calEndDate->LinkedNode = QQN::Project()->EndDate;
			return $this->calEndDate;
		}

		/**
		 * Create and setup QLabel lblEndDate
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblEndDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblEndDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblEndDate->Name = QApplication::Translate('End Date');
			$this->strEndDateDateTimeFormat = $strDateTimeFormat;
			$this->lblEndDate->PreferredRenderMethod = 'RenderWithName';
			$this->lblEndDate->LinkedNode = QQN::Project()->EndDate;
			$this->lblEndDate->Text = $this->objProject->EndDate ? $this->objProject->EndDate->qFormat($this->strEndDateDateTimeFormat) : null;
			return $this->lblEndDate;
		}



		/**
		 * Create and setup a QTextBox txtBudget
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBudget_Create($strControlId = null) {
			$this->txtBudget = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBudget->Name = QApplication::Translate('Budget');
			$this->txtBudget->MaxLength = Project::BudgetMaxLength;
			$this->txtBudget->PreferredRenderMethod = 'RenderWithName';
			$this->txtBudget->LinkedNode = QQN::Project()->Budget;
			$this->txtBudget->Text = $this->objProject->Budget;
			return $this->txtBudget;
		}

		/**
		 * Create and setup QLabel lblBudget
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBudget_Create($strControlId = null) {
			$this->lblBudget = new QLabel($this->objParentObject, $strControlId);
			$this->lblBudget->Name = QApplication::Translate('Budget');
			$this->lblBudget->PreferredRenderMethod = 'RenderWithName';
			$this->lblBudget->LinkedNode = QQN::Project()->Budget;
			$this->lblBudget->Text = $this->objProject->Budget;
			return $this->lblBudget;
		}



		/**
		 * Create and setup a QTextBox txtSpent
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSpent_Create($strControlId = null) {
			$this->txtSpent = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSpent->Name = QApplication::Translate('Spent');
			$this->txtSpent->MaxLength = Project::SpentMaxLength;
			$this->txtSpent->PreferredRenderMethod = 'RenderWithName';
			$this->txtSpent->LinkedNode = QQN::Project()->Spent;
			$this->txtSpent->Text = $this->objProject->Spent;
			return $this->txtSpent;
		}

		/**
		 * Create and setup QLabel lblSpent
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSpent_Create($strControlId = null) {
			$this->lblSpent = new QLabel($this->objParentObject, $strControlId);
			$this->lblSpent->Name = QApplication::Translate('Spent');
			$this->lblSpent->PreferredRenderMethod = 'RenderWithName';
			$this->lblSpent->LinkedNode = QQN::Project()->Spent;
			$this->lblSpent->Text = $this->objProject->Spent;
			return $this->lblSpent;
		}



		/**
		 * Create and setup QCheckBoxList lstProjectsAsRelated
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstProjectsAsRelated_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objProjectsAsRelatedCondition = $objCondition;
			$this->objProjectsAsRelatedClauses = $objClauses;
			$this->lstProjectsAsRelated = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstProjectsAsRelated->Name = QApplication::Translate('Projects As Related');
			$this->lstProjectsAsRelated->PreferredRenderMethod = 'RenderWithName';
			$this->lstProjectsAsRelated->LinkedNode = QQN::Project()->ProjectAsRelated;
            if (!$this->strProjectsAsRelatedNullLabel) {
            	if (!$this->lstProjectsAsRelated->Required) {
            		$this->strProjectsAsRelatedNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strProjectsAsRelatedNullLabel = '- Select One -';
            	}
            }
            $this->lstProjectsAsRelated->AddItem(QApplication::Translate($this->strProjectsAsRelatedNullLabel), null);
            $this->lstProjectsAsRelated->AddItems($this->lstProjectsAsRelated_GetItems());
			return $this->lstProjectsAsRelated;
		}
		/**
		 *	Create item list for use by lstProjectsAsRelated
		 */
		public function lstProjectsAsRelated_GetItems() {
			$a = array();
			$objCondition = $this->objProjectsAsRelatedCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objClauses = $this->objProjectsAsRelatedClauses;

			$objClauses[] =
				QQ::Expand(QQN::Project()->ParentProjectAsRelated->Project, QQ::Equal(QQN::Project()->ParentProjectAsRelated->ProjectId, $this->objProject->Id));

			$objProjectCursor = Project::QueryCursor($objCondition, $objClauses);

			// Iterate through the Cursor
			while ($objProject = Project::InstantiateCursor($objProjectCursor)) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->Id, $objProject->_ParentProjectAsRelated !== null);
				$a[] = $objListItem;
			}
			return $a;
		}
		/**
		 * Create and setup QLabel lblProjectsAsRelated
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblProjectsAsRelated_Create($strControlId = null) {
			$this->lblProjectsAsRelated = new QLabel($this->objParentObject, $strControlId);
			$this->lblProjectsAsRelated->Name = QApplication::Translate('Projects As Related');
			$this->lblProjectsAsRelated->PreferredRenderMethod = 'RenderWithName';
			$this->lblProjectsAsRelated->LinkedNode = QQN::Project()->ProjectAsRelated;
			$this->lblProjectsAsRelated->Text = implode($this->strProjectAsRelatedGlue, $this->objProject->GetProjectAsRelatedArray());
			return $this->lblProjectsAsRelated;
		}



		/**
		 * Create and setup QCheckBoxList lstParentProjectsAsRelated
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstParentProjectsAsRelated_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objParentProjectsAsRelatedCondition = $objCondition;
			$this->objParentProjectsAsRelatedClauses = $objClauses;
			$this->lstParentProjectsAsRelated = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstParentProjectsAsRelated->Name = QApplication::Translate('Parent Projects As Related');
			$this->lstParentProjectsAsRelated->PreferredRenderMethod = 'RenderWithName';
			$this->lstParentProjectsAsRelated->LinkedNode = QQN::Project()->ParentProjectAsRelated;
            if (!$this->strParentProjectsAsRelatedNullLabel) {
            	if (!$this->lstParentProjectsAsRelated->Required) {
            		$this->strParentProjectsAsRelatedNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strParentProjectsAsRelatedNullLabel = '- Select One -';
            	}
            }
            $this->lstParentProjectsAsRelated->AddItem(QApplication::Translate($this->strParentProjectsAsRelatedNullLabel), null);
            $this->lstParentProjectsAsRelated->AddItems($this->lstParentProjectsAsRelated_GetItems());
			return $this->lstParentProjectsAsRelated;
		}
		/**
		 *	Create item list for use by lstParentProjectsAsRelated
		 */
		public function lstParentProjectsAsRelated_GetItems() {
			$a = array();
			$objCondition = $this->objParentProjectsAsRelatedCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objClauses = $this->objParentProjectsAsRelatedClauses;

			$objClauses[] =
				QQ::Expand(QQN::Project()->ProjectAsRelated->Project, QQ::Equal(QQN::Project()->ProjectAsRelated->ChildProjectId, $this->objProject->Id));

			$objProjectCursor = Project::QueryCursor($objCondition, $objClauses);

			// Iterate through the Cursor
			while ($objProject = Project::InstantiateCursor($objProjectCursor)) {
				$objListItem = new QListItem($objProject->__toString(), $objProject->Id, $objProject->_ProjectAsRelated !== null);
				$a[] = $objListItem;
			}
			return $a;
		}
		/**
		 * Create and setup QLabel lblParentProjectsAsRelated
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblParentProjectsAsRelated_Create($strControlId = null) {
			$this->lblParentProjectsAsRelated = new QLabel($this->objParentObject, $strControlId);
			$this->lblParentProjectsAsRelated->Name = QApplication::Translate('Parent Projects As Related');
			$this->lblParentProjectsAsRelated->PreferredRenderMethod = 'RenderWithName';
			$this->lblParentProjectsAsRelated->LinkedNode = QQN::Project()->ParentProjectAsRelated;
			$this->lblParentProjectsAsRelated->Text = implode($this->strParentProjectAsRelatedGlue, $this->objProject->GetParentProjectAsRelatedArray());
			return $this->lblParentProjectsAsRelated;
		}



		/**
		 * Create and setup QCheckBoxList lstPeopleAsTeamMember
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objClauses additional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */

		public function lstPeopleAsTeamMember_Create($strControlId = null, QQCondition $objCondition = null, $objClauses = null) {
			$this->objPeopleAsTeamMemberCondition = $objCondition;
			$this->objPeopleAsTeamMemberClauses = $objClauses;
			$this->lstPeopleAsTeamMember = new QCheckBoxList($this->objParentObject, $strControlId);
			$this->lstPeopleAsTeamMember->Name = QApplication::Translate('People As Team Member');
			$this->lstPeopleAsTeamMember->PreferredRenderMethod = 'RenderWithName';
			$this->lstPeopleAsTeamMember->LinkedNode = QQN::Project()->PersonAsTeamMember;
            if (!$this->strPeopleAsTeamMemberNullLabel) {
            	if (!$this->lstPeopleAsTeamMember->Required) {
            		$this->strPeopleAsTeamMemberNullLabel = '- None -';
            	}
            	elseif (!$this->blnEditMode) {
            		$this->strPeopleAsTeamMemberNullLabel = '- Select One -';
            	}
            }
            $this->lstPeopleAsTeamMember->AddItem(QApplication::Translate($this->strPeopleAsTeamMemberNullLabel), null);
            $this->lstPeopleAsTeamMember->AddItems($this->lstPeopleAsTeamMember_GetItems());
			return $this->lstPeopleAsTeamMember;
		}
		/**
		 *	Create item list for use by lstPeopleAsTeamMember
		 */
		public function lstPeopleAsTeamMember_GetItems() {
			$a = array();
			$objCondition = $this->objPeopleAsTeamMemberCondition;
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objClauses = $this->objPeopleAsTeamMemberClauses;

			$objClauses[] =
				QQ::Expand(QQN::Person()->ProjectAsTeamMember->Project, QQ::Equal(QQN::Person()->ProjectAsTeamMember->ProjectId, $this->objProject->Id));

			$objPersonCursor = Person::QueryCursor($objCondition, $objClauses);

			// Iterate through the Cursor
			while ($objPerson = Person::InstantiateCursor($objPersonCursor)) {
				$objListItem = new QListItem($objPerson->__toString(), $objPerson->Id, $objPerson->_ProjectAsTeamMember !== null);
				$a[] = $objListItem;
			}
			return $a;
		}
		/**
		 * Create and setup QLabel lblPeopleAsTeamMember
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPeopleAsTeamMember_Create($strControlId = null) {
			$this->lblPeopleAsTeamMember = new QLabel($this->objParentObject, $strControlId);
			$this->lblPeopleAsTeamMember->Name = QApplication::Translate('People As Team Member');
			$this->lblPeopleAsTeamMember->PreferredRenderMethod = 'RenderWithName';
			$this->lblPeopleAsTeamMember->LinkedNode = QQN::Project()->PersonAsTeamMember;
			$this->lblPeopleAsTeamMember->Text = implode($this->strPersonAsTeamMemberGlue, $this->objProject->GetPersonAsTeamMemberArray());
			return $this->lblPeopleAsTeamMember;
		}





		/**
		 * Refresh this ModelConnector with Data from the local Project object.
		 * @param boolean $blnReload reload Project from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objProject); // Notify in development version
			if (!($this->objProject)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objProject->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objProject->Id : QApplication::Translate('N\A');


            if ($this->lstProjectStatusType) {
                $this->lstProjectStatusType->RemoveAllItems();
                $this->lstProjectStatusType->AddItem(QApplication::Translate($this->strProjectStatusTypeNullLabel), null);
                $this->lstProjectStatusType->AddItems($this->lstProjectStatusType_GetItems());
                $this->lstProjectStatusType->SelectedValue = $this->objProject->ProjectStatusTypeId;
            
            }
			if ($this->lblProjectStatusType) $this->lblProjectStatusType->Text = $this->objProject->ProjectStatusTypeId ? ProjectStatusType::$NameArray[$this->objProject->ProjectStatusTypeId] : null;


            if ($this->lstManagerPerson) {
                $this->lstManagerPerson->RemoveAllItems();
                $this->lstManagerPerson->AddItem(QApplication::Translate($this->strManagerPersonNullLabel), null);
                $this->lstManagerPerson->AddItems($this->lstManagerPerson_GetItems());
                $this->lstManagerPerson->SelectedValue = $this->objProject->ManagerPersonId;
            
            }
			if ($this->lblManagerPerson) $this->lblManagerPerson->Text = $this->objProject->ManagerPerson ? $this->objProject->ManagerPerson->__toString() : null;


			if ($this->txtName) $this->txtName->Text = $this->objProject->Name;
			if ($this->lblName) $this->lblName->Text = $this->objProject->Name;


			if ($this->txtDescription) $this->txtDescription->Text = $this->objProject->Description;
			if ($this->lblDescription) $this->lblDescription->Text = $this->objProject->Description;


			if ($this->calStartDate) $this->calStartDate->DateTime = $this->objProject->StartDate;
			if ($this->lblStartDate) $this->lblStartDate->Text = $this->objProject->StartDate ? $this->objProject->StartDate->qFormat($this->strStartDateDateTimeFormat) : null;


			if ($this->calEndDate) $this->calEndDate->DateTime = $this->objProject->EndDate;
			if ($this->lblEndDate) $this->lblEndDate->Text = $this->objProject->EndDate ? $this->objProject->EndDate->qFormat($this->strEndDateDateTimeFormat) : null;


			if ($this->txtBudget) $this->txtBudget->Text = $this->objProject->Budget;
			if ($this->lblBudget) $this->lblBudget->Text = $this->objProject->Budget;


			if ($this->txtSpent) $this->txtSpent->Text = $this->objProject->Spent;
			if ($this->lblSpent) $this->lblSpent->Text = $this->objProject->Spent;


            if ($this->lstProjectsAsRelated) {
                $this->lstProjectsAsRelated->RemoveAllItems();
                $this->lstProjectsAsRelated->AddItem(QApplication::Translate($this->strProjectsAsRelatedNullLabel), null);
                $this->lstProjectsAsRelated->AddItems($this->lstProjectsAsRelated_GetItems());
            
            }
			if ($this->lblProjectsAsRelated) $this->lblProjectsAsRelated->Text = implode($this->strProjectAsRelatedGlue, $this->objProject->GetProjectAsRelatedArray());


            if ($this->lstParentProjectsAsRelated) {
                $this->lstParentProjectsAsRelated->RemoveAllItems();
                $this->lstParentProjectsAsRelated->AddItem(QApplication::Translate($this->strParentProjectsAsRelatedNullLabel), null);
                $this->lstParentProjectsAsRelated->AddItems($this->lstParentProjectsAsRelated_GetItems());
            
            }
			if ($this->lblParentProjectsAsRelated) $this->lblParentProjectsAsRelated->Text = implode($this->strParentProjectAsRelatedGlue, $this->objProject->GetParentProjectAsRelatedArray());


            if ($this->lstPeopleAsTeamMember) {
                $this->lstPeopleAsTeamMember->RemoveAllItems();
                $this->lstPeopleAsTeamMember->AddItem(QApplication::Translate($this->strPeopleAsTeamMemberNullLabel), null);
                $this->lstPeopleAsTeamMember->AddItems($this->lstPeopleAsTeamMember_GetItems());
            
            }
			if ($this->lblPeopleAsTeamMember) $this->lblPeopleAsTeamMember->Text = implode($this->strPersonAsTeamMemberGlue, $this->objProject->GetPersonAsTeamMemberArray());


		}

		/**
		 * Load this ModelConnector with a Project object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|Project
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objProject = Project::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objProject = new Project();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objProject) {
				$this->Refresh ();
			}
			return $this->objProject;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////


		protected function lstProjectsAsRelated_Update() {
			if ($this->lstProjectsAsRelated) {
				$this->objProject->UnassociateAllProjectsAsRelated();
				foreach($this->lstProjectsAsRelated->SelectedValues as $id) {
					$this->objProject->AssociateProjectAsRelatedByKey($id);
				}
			}
		}
		protected function lstParentProjectsAsRelated_Update() {
			if ($this->lstParentProjectsAsRelated) {
				$this->objProject->UnassociateAllParentProjectsAsRelated();
				foreach($this->lstParentProjectsAsRelated->SelectedValues as $id) {
					$this->objProject->AssociateParentProjectAsRelatedByKey($id);
				}
			}
		}
		protected function lstPeopleAsTeamMember_Update() {
			if ($this->lstPeopleAsTeamMember) {
				$this->objProject->UnassociateAllPeopleAsTeamMember();
				foreach($this->lstPeopleAsTeamMember->SelectedValues as $id) {
					$this->objProject->AssociatePersonAsTeamMemberByKey($id);
				}
			}
		}



		///////////////////////////////////////////////
		// PUBLIC PROJECT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's Project instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateProject() {
			try {
				// Update any fields for controls that have been created

				if ($this->lstProjectStatusType) $this->objProject->ProjectStatusTypeId = $this->lstProjectStatusType->SelectedValue;

				if ($this->lstManagerPerson) $this->objProject->ManagerPersonId = $this->lstManagerPerson->SelectedValue;

				if ($this->txtName) $this->objProject->Name = $this->txtName->Text;

				if ($this->txtDescription) $this->objProject->Description = $this->txtDescription->Text;

				if ($this->calStartDate) $this->objProject->StartDate = $this->calStartDate->DateTime;

				if ($this->calEndDate) $this->objProject->EndDate = $this->calEndDate->DateTime;

				if ($this->txtBudget) $this->objProject->Budget = $this->txtBudget->Text;

				if ($this->txtSpent) $this->objProject->Spent = $this->txtSpent->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's Project instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveProject() {
			try {
				$this->UpdateProject();

				// Save the Project object
				$id = $this->objProject->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstProjectsAsRelated_Update();
				$this->lstParentProjectsAsRelated_Update();
				$this->lstPeopleAsTeamMember_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's Project instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteProject() {
			$this->objProject->UnassociateAllProjectsAsRelated();
			$this->objProject->UnassociateAllParentProjectsAsRelated();
			$this->objProject->UnassociateAllPeopleAsTeamMember();
			$this->objProject->Delete();
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
				case 'Project': return $this->objProject;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Project fields -- will be created dynamically if not yet created
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ProjectStatusTypeIdControl':
					if (!$this->lstProjectStatusType) return $this->lstProjectStatusType_Create();
					return $this->lstProjectStatusType;
				case 'ProjectStatusTypeIdLabel':
					if (!$this->lblProjectStatusType) return $this->lblProjectStatusType_Create();
					return $this->lblProjectStatusType;
				case 'ProjectStatusTypeNullLabel':
					return $this->strProjectStatusTypeNullLabel;
				case 'ManagerPersonIdControl':
					if (!$this->lstManagerPerson) return $this->lstManagerPerson_Create();
					return $this->lstManagerPerson;
				case 'ManagerPersonIdLabel':
					if (!$this->lblManagerPerson) return $this->lblManagerPerson_Create();
					return $this->lblManagerPerson;
				case 'ManagerPersonNullLabel':
					return $this->strManagerPersonNullLabel;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'DescriptionControl':
					if (!$this->txtDescription) return $this->txtDescription_Create();
					return $this->txtDescription;
				case 'DescriptionLabel':
					if (!$this->lblDescription) return $this->lblDescription_Create();
					return $this->lblDescription;
				case 'StartDateControl':
					if (!$this->calStartDate) return $this->calStartDate_Create();
					return $this->calStartDate;
				case 'StartDateLabel':
					if (!$this->lblStartDate) return $this->lblStartDate_Create();
					return $this->lblStartDate;
				case 'EndDateControl':
					if (!$this->calEndDate) return $this->calEndDate_Create();
					return $this->calEndDate;
				case 'EndDateLabel':
					if (!$this->lblEndDate) return $this->lblEndDate_Create();
					return $this->lblEndDate;
				case 'BudgetControl':
					if (!$this->txtBudget) return $this->txtBudget_Create();
					return $this->txtBudget;
				case 'BudgetLabel':
					if (!$this->lblBudget) return $this->lblBudget_Create();
					return $this->lblBudget;
				case 'SpentControl':
					if (!$this->txtSpent) return $this->txtSpent_Create();
					return $this->txtSpent;
				case 'SpentLabel':
					if (!$this->lblSpent) return $this->lblSpent_Create();
					return $this->lblSpent;
				case 'ProjectAsRelatedControl':
					if (!$this->lstProjectsAsRelated) return $this->lstProjectsAsRelated_Create();
					return $this->lstProjectsAsRelated;
				case 'ProjectAsRelatedLabel':
					if (!$this->lblProjectsAsRelated) return $this->lblProjectsAsRelated_Create();
					return $this->lblProjectsAsRelated;

				case 'ParentProjectAsRelatedControl':
					if (!$this->lstParentProjectsAsRelated) return $this->lstParentProjectsAsRelated_Create();
					return $this->lstParentProjectsAsRelated;
				case 'ParentProjectAsRelatedLabel':
					if (!$this->lblParentProjectsAsRelated) return $this->lblParentProjectsAsRelated_Create();
					return $this->lblParentProjectsAsRelated;

				case 'PersonAsTeamMemberControl':
					if (!$this->lstPeopleAsTeamMember) return $this->lstPeopleAsTeamMember_Create();
					return $this->lstPeopleAsTeamMember;
				case 'PersonAsTeamMemberLabel':
					if (!$this->lblPeopleAsTeamMember) return $this->lblPeopleAsTeamMember_Create();
					return $this->lblPeopleAsTeamMember;

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

					// Controls that point to Project fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectStatusTypeIdControl':
						return ($this->lstProjectStatusType = QType::Cast($mixValue, 'QListBox'));
					case 'ProjectStatusTypeIdLabel':
						return ($this->lblProjectStatusType = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectStatusTypeNullLabel':
						return $this->strProjectStatusTypeNullLabel = $mixValue;
					case 'ManagerPersonIdControl':
						return ($this->lstManagerPerson = QType::Cast($mixValue, 'QListBox'));
					case 'ManagerPersonIdLabel':
						return ($this->lblManagerPerson = QType::Cast($mixValue, 'QLabel'));
					case 'ManagerPersonNullLabel':
						return $this->strManagerPersonNullLabel = $mixValue;
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QTextBox'));
					case 'NameLabel':
						return ($this->lblName = QType::Cast($mixValue, 'QLabel'));
					case 'DescriptionControl':
						return ($this->txtDescription = QType::Cast($mixValue, 'QTextBox'));
					case 'DescriptionLabel':
						return ($this->lblDescription = QType::Cast($mixValue, 'QLabel'));
					case 'StartDateControl':
						return ($this->calStartDate = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'StartDateLabel':
						return ($this->lblStartDate = QType::Cast($mixValue, 'QLabel'));
					case 'EndDateControl':
						return ($this->calEndDate = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'EndDateLabel':
						return ($this->lblEndDate = QType::Cast($mixValue, 'QLabel'));
					case 'BudgetControl':
						return ($this->txtBudget = QType::Cast($mixValue, 'QTextBox'));
					case 'BudgetLabel':
						return ($this->lblBudget = QType::Cast($mixValue, 'QLabel'));
					case 'SpentControl':
						return ($this->txtSpent = QType::Cast($mixValue, 'QTextBox'));
					case 'SpentLabel':
						return ($this->lblSpent = QType::Cast($mixValue, 'QLabel'));
					case 'ProjectAsRelatedControl':
						return ($this->lstProjectsAsRelated = QType::Cast($mixValue, 'QCheckBoxList'));
					case 'ProjectAsRelatedLabel':
						return ($this->lblProjectsAsRelated = QType::Cast($mixValue, 'QLabel'));

					case 'ParentProjectAsRelatedControl':
						return ($this->lstParentProjectsAsRelated = QType::Cast($mixValue, 'QCheckBoxList'));
					case 'ParentProjectAsRelatedLabel':
						return ($this->lblParentProjectsAsRelated = QType::Cast($mixValue, 'QLabel'));

					case 'PersonAsTeamMemberControl':
						return ($this->lstPeopleAsTeamMember = QType::Cast($mixValue, 'QCheckBoxList'));
					case 'PersonAsTeamMemberLabel':
						return ($this->lblPeopleAsTeamMember = QType::Cast($mixValue, 'QLabel'));

					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}