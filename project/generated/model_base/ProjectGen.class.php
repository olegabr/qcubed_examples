<?php
	/**
	 * The abstract ProjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Project subclass which
	 * extends this ProjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Project class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $ProjectStatusTypeId the value for intProjectStatusTypeId (Not Null)
	 * @property integer $ManagerPersonId the value for intManagerPersonId 
	 * @property string $Name the value for strName (Not Null)
	 * @property string $Description the value for strDescription 
	 * @property QDateTime $StartDate the value for dttStartDate 
	 * @property QDateTime $EndDate the value for dttEndDate 
	 * @property string $Budget the value for strBudget 
	 * @property string $Spent the value for strSpent 
	 * @property Person $ManagerPerson the value for the Person object referenced by intManagerPersonId 
	 * @property-read Project $_ProjectAsRelated the value for the protected _objProjectAsRelated (Read-Only) if set due to an expansion on the related_project_assn association table
	 * @property-read Project[] $_ProjectAsRelatedArray the value for the protected _objProjectAsRelatedArray (Read-Only) if set due to an ExpandAsArray on the related_project_assn association table
	 * @property-read Project $_ParentProjectAsRelated the value for the protected _objParentProjectAsRelated (Read-Only) if set due to an expansion on the related_project_assn association table
	 * @property-read Project[] $_ParentProjectAsRelatedArray the value for the protected _objParentProjectAsRelatedArray (Read-Only) if set due to an ExpandAsArray on the related_project_assn association table
	 * @property-read Person $_PersonAsTeamMember the value for the protected _objPersonAsTeamMember (Read-Only) if set due to an expansion on the team_member_project_assn association table
	 * @property-read Person[] $_PersonAsTeamMemberArray the value for the protected _objPersonAsTeamMemberArray (Read-Only) if set due to an ExpandAsArray on the team_member_project_assn association table
	* @property-read Milestone $_Milestone the value for the protected _objMilestone (Read-Only) if set due to an expansion on the milestone.project_id reverse relationship
	* @property-read Milestone $Milestone the value for the protected _objMilestone (Read-Only) if set due to an expansion on the milestone.project_id reverse relationship
	* @property-read Milestone[] $_MilestoneArray the value for the protected _objMilestoneArray (Read-Only) if set due to an ExpandAsArray on the milestone.project_id reverse relationship
	* @property-read Milestone[] $MilestoneArray the value for the protected _objMilestoneArray (Read-Only) if set due to an ExpandAsArray on the milestone.project_id reverse relationship
	* @property-read TwoKey $_TwoKey the value for the protected _objTwoKey (Read-Only) if set due to an expansion on the two_key.project_id reverse relationship
	* @property-read TwoKey $TwoKey the value for the protected _objTwoKey (Read-Only) if set due to an expansion on the two_key.project_id reverse relationship
	* @property-read TwoKey[] $_TwoKeyArray the value for the protected _objTwoKeyArray (Read-Only) if set due to an ExpandAsArray on the two_key.project_id reverse relationship
	* @property-read TwoKey[] $TwoKeyArray the value for the protected _objTwoKeyArray (Read-Only) if set due to an ExpandAsArray on the two_key.project_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProjectGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Project[] Short term cached Project objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column project.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column project.project_status_type_id
		 * @var integer intProjectStatusTypeId
		 */
		protected $intProjectStatusTypeId;
		const ProjectStatusTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column project.manager_person_id
		 * @var integer intManagerPersonId
		 */
		protected $intManagerPersonId;
		const ManagerPersonIdDefault = null;


		/**
		 * Protected member variable that maps to the database column project.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 100;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column project.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column project.start_date
		 * @var QDateTime dttStartDate
		 */
		protected $dttStartDate;
		const StartDateDefault = null;


		/**
		 * Protected member variable that maps to the database column project.end_date
		 * @var QDateTime dttEndDate
		 */
		protected $dttEndDate;
		const EndDateDefault = null;


		/**
		 * Protected member variable that maps to the database column project.budget
		 * @var string strBudget
		 */
		protected $strBudget;
		const BudgetMaxLength = 13;
		const BudgetDefault = null;


		/**
		 * Protected member variable that maps to the database column project.spent
		 * @var string strSpent
		 */
		protected $strSpent;
		const SpentMaxLength = 13;
		const SpentDefault = null;


		/**
		 * Protected member variable that stores a reference to a single ProjectAsRelated object
		 * (of type Project), if this Project object was restored with
		 * an expansion on the related_project_assn association table.
		 * @var Project _objProjectAsRelated;
		 */
		protected $_objProjectAsRelated;

		/**
		 * Protected member variable that stores a reference to an array of ProjectAsRelated objects
		 * (of type Project[]), if this Project object was restored with
		 * an ExpandAsArray on the related_project_assn association table.
		 * @var Project[] _objProjectAsRelatedArray;
		 */
		protected $_objProjectAsRelatedArray = null;
		/**
		 * Protected member variable that stores a reference to a single ParentProjectAsRelated object
		 * (of type Project), if this Project object was restored with
		 * an expansion on the related_project_assn association table.
		 * @var Project _objParentProjectAsRelated;
		 */
		protected $_objParentProjectAsRelated;

		/**
		 * Protected member variable that stores a reference to an array of ParentProjectAsRelated objects
		 * (of type Project[]), if this Project object was restored with
		 * an ExpandAsArray on the related_project_assn association table.
		 * @var Project[] _objParentProjectAsRelatedArray;
		 */
		protected $_objParentProjectAsRelatedArray = null;
		/**
		 * Protected member variable that stores a reference to a single PersonAsTeamMember object
		 * (of type Person), if this Project object was restored with
		 * an expansion on the team_member_project_assn association table.
		 * @var Person _objPersonAsTeamMember;
		 */
		protected $_objPersonAsTeamMember;

		/**
		 * Protected member variable that stores a reference to an array of PersonAsTeamMember objects
		 * (of type Person[]), if this Project object was restored with
		 * an ExpandAsArray on the team_member_project_assn association table.
		 * @var Person[] _objPersonAsTeamMemberArray;
		 */
		protected $_objPersonAsTeamMemberArray = null;
		/**
		 * Protected member variable that stores a reference to a single Milestone object
		 * (of type Milestone), if this Project object was restored with
		 * an expansion on the milestone association table.
		 * @var Milestone _objMilestone;
		 */
		protected $_objMilestone;

		/**
		 * Protected member variable that stores a reference to an array of Milestone objects
		 * (of type Milestone[]), if this Project object was restored with
		 * an ExpandAsArray on the milestone association table.
		 * @var Milestone[] _objMilestoneArray;
		 */
		protected $_objMilestoneArray = null;

		/**
		 * Protected member variable that stores a reference to a single TwoKey object
		 * (of type TwoKey), if this Project object was restored with
		 * an expansion on the two_key association table.
		 * @var TwoKey _objTwoKey;
		 */
		protected $_objTwoKey;

		/**
		 * Protected member variable that stores a reference to an array of TwoKey objects
		 * (of type TwoKey[]), if this Project object was restored with
		 * an ExpandAsArray on the two_key association table.
		 * @var TwoKey[] _objTwoKeyArray;
		 */
		protected $_objTwoKeyArray = null;

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;

		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column project.manager_person_id.
		 *
		 * NOTE: Always use the ManagerPerson property getter to correctly retrieve this Person object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Person objManagerPerson
		 */
		protected $objManagerPerson;


		
		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intId = Project::IdDefault;
			$this->intProjectStatusTypeId = Project::ProjectStatusTypeIdDefault;
			$this->intManagerPersonId = Project::ManagerPersonIdDefault;
			$this->strName = Project::NameDefault;
			$this->strDescription = Project::DescriptionDefault;
			$this->dttStartDate = (Project::StartDateDefault === null)?null:new QDateTime(Project::StartDateDefault);
			$this->dttEndDate = (Project::EndDateDefault === null)?null:new QDateTime(Project::EndDateDefault);
			$this->strBudget = Project::BudgetDefault;
			$this->strSpent = Project::SpentDefault;
		}

		

		/**
		* Returns a single unique value representing the primary key.
		* @return mixed
		*/
		public function PrimaryKey() {
			return $this->intId;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param DatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return int|null
		**/
		protected static function GetRowPrimaryKey($objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$strColumns = $objDbRow->GetColumnNameArray();
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			$mixVal = (integer)$mixVal;
			return $mixVal;
		}

		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Project from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Project::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Project()->Id, $intId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all Projects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Project::QueryArray to perform the LoadAll query
			try {
				return Project::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Projects
		 * @return int
		 */
		public static function CountAll() {
			// Call Project::QueryCount to perform the CountAll query
			return Project::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Project object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Project the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Project objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Project[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Project()->Id);
			$objProjects = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objProjects as $objProject) {
				$pks[] = $objProject->intId;
			}
			return $pks;
		}

		// See QModelTrait.trait.php for the following
		// protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
		// public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
		// public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
		// public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Project from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Project::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param QBaseClass $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Project, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
		*/
		public static function InstantiateDbRow(
				$objDbRow,
				$strAliasPrefix = null,
				$objExpandAsArrayNode = null,
				$objPreviousItemArray = null,
				$strColumnAliasArray = array(),
				$blnCheckDuplicate = false,
				$strParentExpansionKey = null,
				$objExpansionParent = null) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			$strColumns = $objDbRow->GetColumnNameArray();
			$strColumnKeys = array_fill_keys(array_keys($strColumns), 1); // to be able to use isset

			$key = static::GetRowPrimaryKey ($objDbRow, $strAliasPrefix, $strColumnAliasArray);
			if (empty ($strAliasPrefix) && $objPreviousItemArray) {
				$objPreviousItemArray = (!empty ($objPreviousItemArray[$key]) ? $objPreviousItemArray[$key] : null);
			}
			
			
			// See if we're doing an array expansion on the previous item
			if ($objExpandAsArrayNode && 
					is_array($objPreviousItemArray) && 
					count($objPreviousItemArray)) {

				$expansionStatus = static::ExpandArray ($objDbRow, $strAliasPrefix, $objExpandAsArrayNode, $objPreviousItemArray, $strColumnAliasArray);
				if ($expansionStatus) {
					return false; // db row was used but no new object was created
				} elseif ($expansionStatus === null) {
					$blnCheckDuplicate = true;
				}
			}


			$objToReturn = static::GetFromCache ($key);
			if (empty($objToReturn)) {
				// Create a new instance of the Project object
				$objToReturn = new Project();
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intId = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'project_status_type_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intProjectStatusTypeId = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'manager_person_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intManagerPersonId = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'name';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strName = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'description';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDescription = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'start_date';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal, null, QDateTime::DateOnlyType);
					}
					$objToReturn->dttStartDate = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'end_date';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal, null, QDateTime::DateOnlyType);
					}
					$objToReturn->dttEndDate = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'budget';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strBudget = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'spent';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strSpent = $mixVal;
				}
				else {
					$blnNoCache = true;
				}

				assert ('$key === null || $objToReturn->PrimaryKey() == $key');

				if (!$blnNoCache) {
					$objToReturn->WriteToCache();
				}
			}

			if (isset($objPreviousItemArray) && is_array($objPreviousItemArray) && $blnCheckDuplicate) {
				foreach ($objPreviousItemArray as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					// this is a duplicate in a complex join
					return null; // indicates no object created and the db row has not been used
				}
			}
			
			// Instantiate Virtual Attributes
			$strVirtualPrefix = $strAliasPrefix . '__';
			$strVirtualPrefixLength = strlen($strVirtualPrefix);
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}


			// Prepare to Check for Early/Virtual Binding

			$objExpansionAliasArray = array();
			if ($objExpandAsArrayNode) {
				$objExpansionAliasArray = $objExpandAsArrayNode->ChildNodeArray;
			}

			if (!$strAliasPrefix)
				$strAliasPrefix = 'project__';

			// Check for ManagerPerson Early Binding
			$strAlias = $strAliasPrefix . 'manager_person_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['manager_person_id']) ? null : $objExpansionAliasArray['manager_person_id']);
				$objToReturn->objManagerPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'manager_person_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'projectasmanager', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'manager_person_id' && $objExpansionParent) {
				$objToReturn->objManagerPerson = $objExpansionParent;
		    }

	
				
			// Check for ProjectAsRelated Virtual Binding
			$strAlias = $strAliasPrefix . 'projectasrelated__child_project_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['projectasrelated']) ? null : $objExpansionAliasArray['projectasrelated']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objProjectAsRelatedArray) {
				$objToReturn->_objProjectAsRelatedArray = array();
			}
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objProjectAsRelatedArray[] = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasrelated__child_project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'parentprojectasrelated', $objToReturn);
				} elseif (is_null($objToReturn->_objProjectAsRelated)) {
					$objToReturn->_objProjectAsRelated = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasrelated__child_project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'parentprojectasrelated', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'projectasrelated' && $objExpansionParent) {
				$objToReturn->_objProjectAsRelated = $objExpansionParent;
			}

			// Check for ParentProjectAsRelated Virtual Binding
			$strAlias = $strAliasPrefix . 'parentprojectasrelated__project_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['parentprojectasrelated']) ? null : $objExpansionAliasArray['parentprojectasrelated']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objParentProjectAsRelatedArray) {
				$objToReturn->_objParentProjectAsRelatedArray = array();
			}
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objParentProjectAsRelatedArray[] = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentprojectasrelated__project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'projectasrelated', $objToReturn);
				} elseif (is_null($objToReturn->_objParentProjectAsRelated)) {
					$objToReturn->_objParentProjectAsRelated = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentprojectasrelated__project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'projectasrelated', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'parentprojectasrelated' && $objExpansionParent) {
				$objToReturn->_objParentProjectAsRelated = $objExpansionParent;
			}

			// Check for PersonAsTeamMember Virtual Binding
			$strAlias = $strAliasPrefix . 'personasteammember__person_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['personasteammember']) ? null : $objExpansionAliasArray['personasteammember']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objPersonAsTeamMemberArray) {
				$objToReturn->_objPersonAsTeamMemberArray = array();
			}
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objPersonAsTeamMemberArray[] = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasteammember__person_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'projectasteammember', $objToReturn);
				} elseif (is_null($objToReturn->_objPersonAsTeamMember)) {
					$objToReturn->_objPersonAsTeamMember = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasteammember__person_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'projectasteammember', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'personasteammember' && $objExpansionParent) {
				$objToReturn->_objPersonAsTeamMember = $objExpansionParent;
			}


			// Check for Milestone Virtual Binding
			$strAlias = $strAliasPrefix . 'milestone__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['milestone']) ? null : $objExpansionAliasArray['milestone']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objMilestoneArray)
				$objToReturn->_objMilestoneArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objMilestoneArray[] = Milestone::InstantiateDbRow($objDbRow, $strAliasPrefix . 'milestone__', $objExpansionNode, null, $strColumnAliasArray, false, 'project_id', $objToReturn);
				} elseif (is_null($objToReturn->_objMilestone)) {
					$objToReturn->_objMilestone = Milestone::InstantiateDbRow($objDbRow, $strAliasPrefix . 'milestone__', $objExpansionNode, null, $strColumnAliasArray, false, 'project_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'milestone' && $objExpansionParent) {
				$objToReturn->_objMilestone = $objExpansionParent;
			}

			// Check for TwoKey Virtual Binding
			$strAlias = $strAliasPrefix . 'twokey__server';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['twokey']) ? null : $objExpansionAliasArray['twokey']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objTwoKeyArray)
				$objToReturn->_objTwoKeyArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objTwoKeyArray[] = TwoKey::InstantiateDbRow($objDbRow, $strAliasPrefix . 'twokey__', $objExpansionNode, null, $strColumnAliasArray, false, 'project_id', $objToReturn);
				} elseif (is_null($objToReturn->_objTwoKey)) {
					$objToReturn->_objTwoKey = TwoKey::InstantiateDbRow($objDbRow, $strAliasPrefix . 'twokey__', $objExpansionNode, null, $strColumnAliasArray, false, 'project_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'twokey' && $objExpansionParent) {
				$objToReturn->_objTwoKey = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of Projects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Project[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $objExpandAsArrayNode = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($objExpandAsArrayNode) {
				$objToReturn = array();
				$objPrevItemArray = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Project::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Project::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Project object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Project next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions
			$objExpandAsArrayNode = $objDbResult->QueryBuilder->ExpandAsArrayNode;
			if (!empty ($objExpandAsArrayNode)) {
				throw new QCallerException ("Cannot use InstantiateCursor with ExpandAsArray");
			}

			// Load up the return result with a row and return it
			return Project::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Project object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Project::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Project()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Project objects,
		 * by ProjectStatusTypeId Index(es)
		 * @param integer $intProjectStatusTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public static function LoadArrayByProjectStatusTypeId($intProjectStatusTypeId, $objOptionalClauses = null) {
			// Call Project::QueryArray to perform the LoadArrayByProjectStatusTypeId query
			try {
				return Project::QueryArray(
					QQ::Equal(QQN::Project()->ProjectStatusTypeId, $intProjectStatusTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Projects
		 * by ProjectStatusTypeId Index(es)
		 * @param integer $intProjectStatusTypeId
		 * @return int
		*/
		public static function CountByProjectStatusTypeId($intProjectStatusTypeId) {
			// Call Project::QueryCount to perform the CountByProjectStatusTypeId query
			return Project::QueryCount(
				QQ::Equal(QQN::Project()->ProjectStatusTypeId, $intProjectStatusTypeId)
			);
		}

		/**
		 * Load an array of Project objects,
		 * by ManagerPersonId Index(es)
		 * @param integer $intManagerPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public static function LoadArrayByManagerPersonId($intManagerPersonId, $objOptionalClauses = null) {
			// Call Project::QueryArray to perform the LoadArrayByManagerPersonId query
			try {
				return Project::QueryArray(
					QQ::Equal(QQN::Project()->ManagerPersonId, $intManagerPersonId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Projects
		 * by ManagerPersonId Index(es)
		 * @param integer $intManagerPersonId
		 * @return int
		*/
		public static function CountByManagerPersonId($intManagerPersonId) {
			// Call Project::QueryCount to perform the CountByManagerPersonId query
			return Project::QueryCount(
				QQ::Equal(QQN::Project()->ManagerPersonId, $intManagerPersonId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Project objects for a given ProjectAsRelated
		 * via the related_project_assn table
		 * @param integer $intChildProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public static function LoadArrayByProjectAsRelated($intChildProjectId, $objClauses = null) {
			// Call Project::QueryArray to perform the LoadArrayByProjectAsRelated query
			try {
				return Project::QueryArray(
					QQ::Equal(QQN::Project()->ProjectAsRelated->ChildProjectId, $intChildProjectId),
					$objClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Projects for a given ProjectAsRelated
		 * via the related_project_assn table
		 * @param integer $intChildProjectId
		 * @return int
		*/
		public static function CountByProjectAsRelated($intChildProjectId) {
			return Project::QueryCount(
				QQ::Equal(QQN::Project()->ProjectAsRelated->ChildProjectId, $intChildProjectId)
			);
		}
			/**
		 * Load an array of Project objects for a given ParentProjectAsRelated
		 * via the related_project_assn table
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public static function LoadArrayByParentProjectAsRelated($intProjectId, $objClauses = null) {
			// Call Project::QueryArray to perform the LoadArrayByParentProjectAsRelated query
			try {
				return Project::QueryArray(
					QQ::Equal(QQN::Project()->ParentProjectAsRelated->ProjectId, $intProjectId),
					$objClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Projects for a given ParentProjectAsRelated
		 * via the related_project_assn table
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByParentProjectAsRelated($intProjectId) {
			return Project::QueryCount(
				QQ::Equal(QQN::Project()->ParentProjectAsRelated->ProjectId, $intProjectId)
			);
		}
			/**
		 * Load an array of Person objects for a given PersonAsTeamMember
		 * via the team_member_project_assn table
		 * @param integer $intPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public static function LoadArrayByPersonAsTeamMember($intPersonId, $objClauses = null) {
			// Call Project::QueryArray to perform the LoadArrayByPersonAsTeamMember query
			try {
				return Project::QueryArray(
					QQ::Equal(QQN::Project()->PersonAsTeamMember->PersonId, $intPersonId),
					$objClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Projects for a given PersonAsTeamMember
		 * via the team_member_project_assn table
		 * @param integer $intPersonId
		 * @return int
		*/
		public static function CountByPersonAsTeamMember($intPersonId) {
			return Project::QueryCount(
				QQ::Equal(QQN::Project()->PersonAsTeamMember->PersonId, $intPersonId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Project
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `project` (
							`project_status_type_id`,
							`manager_person_id`,
							`name`,
							`description`,
							`start_date`,
							`end_date`,
							`budget`,
							`spent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intProjectStatusTypeId) . ',
							' . $objDatabase->SqlVariable($this->intManagerPersonId) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->dttStartDate) . ',
							' . $objDatabase->SqlVariable($this->dttEndDate) . ',
							' . $objDatabase->SqlVariable($this->strBudget) . ',
							' . $objDatabase->SqlVariable($this->strSpent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('project', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`project`
						SET
							`project_status_type_id` = ' . $objDatabase->SqlVariable($this->intProjectStatusTypeId) . ',
							`manager_person_id` = ' . $objDatabase->SqlVariable($this->intManagerPersonId) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`start_date` = ' . $objDatabase->SqlVariable($this->dttStartDate) . ',
							`end_date` = ' . $objDatabase->SqlVariable($this->dttEndDate) . ',
							`budget` = ' . $objDatabase->SqlVariable($this->strBudget) . ',
							`spent` = ' . $objDatabase->SqlVariable($this->strSpent) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			$this->DeleteFromCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'project');
			}

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Project
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Project with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`project`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteFromCache();
			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'project');
			}

		}

		/**
		 * Delete all Projects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`project`');

			static::ClearCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'project');
			}
		}

		/**
		 * Truncate project table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `project`');

			static::ClearCache();
		}

		/**
		 * Reload this Project from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Project object.');

			$this->DeleteFromCache();

			// Reload the Object
			$objReloaded = Project::Load($this->intId);

			// Update $this's local variables to match
			$this->ProjectStatusTypeId = $objReloaded->ProjectStatusTypeId;
			$this->ManagerPersonId = $objReloaded->ManagerPersonId;
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->dttStartDate = $objReloaded->dttStartDate;
			$this->dttEndDate = $objReloaded->dttEndDate;
			$this->strBudget = $objReloaded->strBudget;
			$this->strSpent = $objReloaded->strSpent;
		}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of Projects keyed by the unique Id property.
		 *	@param Project[]
		 *	@return Project[]
		 **/
		public static function KeyProjectsById($projects) {
			if (empty($projects)) {
				return $projects;
			}
			foreach ($projects as $project) {
				$aOut[$project->intId] = $project;
			}
			return $aOut;
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'ProjectStatusTypeId':
					/**
					 * Gets the value for intProjectStatusTypeId (Not Null)
					 * @return integer
					 */
					return $this->intProjectStatusTypeId;

				case 'ManagerPersonId':
					/**
					 * Gets the value for intManagerPersonId 
					 * @return integer
					 */
					return $this->intManagerPersonId;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'StartDate':
					/**
					 * Gets the value for dttStartDate 
					 * @return QDateTime
					 */
					return $this->dttStartDate;

				case 'EndDate':
					/**
					 * Gets the value for dttEndDate 
					 * @return QDateTime
					 */
					return $this->dttEndDate;

				case 'Budget':
					/**
					 * Gets the value for strBudget 
					 * @return string
					 */
					return $this->strBudget;

				case 'Spent':
					/**
					 * Gets the value for strSpent 
					 * @return string
					 */
					return $this->strSpent;


				///////////////////
				// Member Objects
				///////////////////
				case 'ProjectStatusType':
					/**
					 * Gets the value for the ProjectStatusType type referenced by intProjectStatusTypeId					 * @return string
					 */
					if ($this->intProjectStatusTypeId) {
						return ProjectStatusType::ToString($this->intProjectStatusTypeId);
					} else {
						return '';
					}

				case 'ManagerPerson':
					/**
					 * Gets the value for the Person object referenced by intManagerPersonId 
					 * @return Person
					 */
					try {
						if ((!$this->objManagerPerson) && (!is_null($this->intManagerPersonId)))
							$this->objManagerPerson = Person::Load($this->intManagerPersonId);
						return $this->objManagerPerson;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case 'ProjectAsRelated':
				case '_ProjectAsRelated': // for backwards compatibility
					/**
					 * Gets the value for the protected _objProjectAsRelated (Read-Only)
					 * if set due to an expansion on the related_project_assn association table
					 * @return Project
					 */
					return $this->_objProjectAsRelated;

				case 'ProjectAsRelatedArray':
				case '_ProjectAsRelatedArray': // for backwards compatibility
					/**
					 * Gets the value for the protected _objProjectAsRelatedArray (Read-Only)
					 * if set due to an ExpandAsArray on the related_project_assn association table
					 * @return Project[]
					 */
					return $this->_objProjectAsRelatedArray;


				case 'ParentProjectAsRelated':
				case '_ParentProjectAsRelated': // for backwards compatibility
					/**
					 * Gets the value for the protected _objParentProjectAsRelated (Read-Only)
					 * if set due to an expansion on the related_project_assn association table
					 * @return Project
					 */
					return $this->_objParentProjectAsRelated;

				case 'ParentProjectAsRelatedArray':
				case '_ParentProjectAsRelatedArray': // for backwards compatibility
					/**
					 * Gets the value for the protected _objParentProjectAsRelatedArray (Read-Only)
					 * if set due to an ExpandAsArray on the related_project_assn association table
					 * @return Project[]
					 */
					return $this->_objParentProjectAsRelatedArray;


				case 'PersonAsTeamMember':
				case '_PersonAsTeamMember': // for backwards compatibility
					/**
					 * Gets the value for the protected _objPersonAsTeamMember (Read-Only)
					 * if set due to an expansion on the team_member_project_assn association table
					 * @return Person
					 */
					return $this->_objPersonAsTeamMember;

				case 'PersonAsTeamMemberArray':
				case '_PersonAsTeamMemberArray': // for backwards compatibility
					/**
					 * Gets the value for the protected _objPersonAsTeamMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the team_member_project_assn association table
					 * @return Person[]
					 */
					return $this->_objPersonAsTeamMemberArray;


				case 'Milestone':
				case '_Milestone':
					/**
					 * Gets the value for the protected _objMilestone (Read-Only)
					 * if set due to an expansion on the milestone.project_id reverse relationship
					 * @return Milestone
					 */
					return $this->_objMilestone;

				case 'MilestoneArray':
				case '_MilestoneArray':
					/**
					 * Gets the value for the protected _objMilestoneArray (Read-Only)
					 * if set due to an ExpandAsArray on the milestone.project_id reverse relationship
					 * @return Milestone[]
					 */
					return $this->_objMilestoneArray;

				case 'TwoKey':
				case '_TwoKey':
					/**
					 * Gets the value for the protected _objTwoKey (Read-Only)
					 * if set due to an expansion on the two_key.project_id reverse relationship
					 * @return TwoKey
					 */
					return $this->_objTwoKey;

				case 'TwoKeyArray':
				case '_TwoKeyArray':
					/**
					 * Gets the value for the protected _objTwoKeyArray (Read-Only)
					 * if set due to an ExpandAsArray on the two_key.project_id reverse relationship
					 * @return TwoKey[]
					 */
					return $this->_objTwoKeyArray;


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'ProjectStatusTypeId':
					/**
					 * Sets the value for intProjectStatusTypeId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intProjectStatusTypeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ManagerPersonId':
					/**
					 * Sets the value for intManagerPersonId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objManagerPerson = null;
						return ($this->intManagerPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StartDate':
					/**
					 * Sets the value for dttStartDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttStartDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EndDate':
					/**
					 * Sets the value for dttEndDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttEndDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Budget':
					/**
					 * Sets the value for strBudget 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBudget = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Spent':
					/**
					 * Sets the value for strSpent 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSpent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ManagerPerson':
					/**
					 * Sets the value for the Person object referenced by intManagerPersonId 
					 * @param Person $mixValue
					 * @return Person
					 */
					if (is_null($mixValue)) {
						$this->intManagerPersonId = null;
						$this->objManagerPerson = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Person object
						try {
							$mixValue = QType::Cast($mixValue, 'Person');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Person object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ManagerPerson for this Project');

						// Update Local Member Variables
						$this->objManagerPerson = $mixValue;
						$this->intManagerPersonId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string|null
		 */
		public function GetVirtualAttribute($strName) {
			$strName = QQ::GetVirtualAlias($strName);
			if (isset($this->__strVirtualAttributeArray[$strName])) {
				return $this->__strVirtualAttributeArray[$strName];
			}
			return null;
		}

		/**
		 * Returns true if a virtual attribute exists. Useful for telling that the attribute exists, but is null.
		 * @param string $strName
		 * @return boolean
		 */
		public function HasVirtualAttribute($strName) {
			$strName = QQ::GetVirtualAlias($strName);
			if (array_key_exists($strName, $this->__strVirtualAttributeArray)) {
				return true;
			}
			return false;
		}

		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////



		// Related Objects' Methods for Milestone
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Milestones as an array of Milestone objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Milestone[]
		*/
		public function GetMilestoneArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Milestone::LoadArrayByProjectId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Milestones
		 * @return int
		*/
		public function CountMilestones() {
			if ((is_null($this->intId)))
				return 0;

			return Milestone::CountByProjectId($this->intId);
		}

		/**
		 * Associates a Milestone
		 * @param Milestone $objMilestone
		 * @return void
		*/
		public function AssociateMilestone(Milestone $objMilestone) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMilestone on this unsaved Project.');
			if ((is_null($objMilestone->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMilestone on this Project with an unsaved Milestone.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`milestone`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMilestone->Id) . '
			');
		}

		/**
		 * Unassociates a Milestone
		 * @param Milestone $objMilestone
		 * @return void
		*/
		public function UnassociateMilestone(Milestone $objMilestone) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this unsaved Project.');
			if ((is_null($objMilestone->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this Project with an unsaved Milestone.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`milestone`
				SET
					`project_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMilestone->Id) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Milestones
		 * @return void
		*/
		public function UnassociateAllMilestones() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`milestone`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Milestone
		 * @param Milestone $objMilestone
		 * @return void
		*/
		public function DeleteAssociatedMilestone(Milestone $objMilestone) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this unsaved Project.');
			if ((is_null($objMilestone->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this Project with an unsaved Milestone.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`milestone`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objMilestone->Id) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Milestones
		 * @return void
		*/
		public function DeleteAllMilestones() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMilestone on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`milestone`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for TwoKey
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TwoKeies as an array of TwoKey objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey[]
		*/
		public function GetTwoKeyArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return TwoKey::LoadArrayByProjectId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TwoKeies
		 * @return int
		*/
		public function CountTwoKeies() {
			if ((is_null($this->intId)))
				return 0;

			return TwoKey::CountByProjectId($this->intId);
		}

		/**
		 * Associates a TwoKey
		 * @param TwoKey $objTwoKey
		 * @return void
		*/
		public function AssociateTwoKey(TwoKey $objTwoKey) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTwoKey on this unsaved Project.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTwoKey on this Project with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`server` = ' . $objDatabase->SqlVariable($objTwoKey->Server) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($objTwoKey->Directory) . '
			');
		}

		/**
		 * Unassociates a TwoKey
		 * @param TwoKey $objTwoKey
		 * @return void
		*/
		public function UnassociateTwoKey(TwoKey $objTwoKey) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Project.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this Project with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`project_id` = null
				WHERE
					`server` = ' . $objDatabase->SqlVariable($objTwoKey->Server) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($objTwoKey->Directory) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all TwoKeies
		 * @return void
		*/
		public function UnassociateAllTwoKeies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated TwoKey
		 * @param TwoKey $objTwoKey
		 * @return void
		*/
		public function DeleteAssociatedTwoKey(TwoKey $objTwoKey) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Project.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this Project with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`
				WHERE
					`server` = ' . $objDatabase->SqlVariable($objTwoKey->Server) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($objTwoKey->Directory) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated TwoKeies
		 * @return void
		*/
		public function DeleteAllTwoKeies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Many-to-Many Objects' Methods for ProjectAsRelated
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ProjectsAsRelated as an array of Project objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public function GetProjectAsRelatedArray($objClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Project::LoadArrayByParentProjectAsRelated($this->intId, $objClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		public function GetProjectAsRelatedKeys() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call GetProjectAsRelatedIds on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objResult = $objDatabase->Query('
				SELECT `child_project_id`
				FROM `related_project_assn`
				WHERE `project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			$keys = array();
			while ($row = $objResult->FetchRow()) {
				$keys[] = $row[0];
			}
			return $keys;
		}


		/**
		 * Counts all many-to-many associated ProjectsAsRelated
		 * @return int
		*/
		public function CountProjectsAsRelated() {
			if ((is_null($this->intId)))
				return 0;

			return Project::CountByParentProjectAsRelated($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ProjectAsRelated
		 * @param Project $objProject
		 * @return bool
		*/
		public function IsProjectAsRelatedAssociated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsProjectAsRelatedAssociated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsProjectAsRelatedAssociated on this Project with an unsaved Project.');

			$intRowCount = Project::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Project()->Id, $this->intId),
					QQ::Equal(QQN::Project()->ProjectAsRelated->ChildProjectId, $objProject->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a ProjectAsRelated
		 * @param Project $objProject
		 * @return void
		*/
		public function AssociateProjectAsRelated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsRelated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsRelated on this Project with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `related_project_assn` (
					`project_id`,
					`child_project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objProject->Id) . '
				)
			');
		}

		/**
		 * Associates a ProjectAsRelated by its primary key.

		 * @param integer $intChildProjectId
		 * @return void
		*/
		public function AssociateProjectAsRelatedByKey($intChildProjectId) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsRelated on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `related_project_assn` (
					`project_id`,
					`child_project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intChildProjectId) . '
				)
			');
		}


		/**
		 * Unassociates a ProjectAsRelated
		 * @param Project $objProject
		 * @return void
		*/
		public function UnassociateProjectAsRelated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsRelated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsRelated on this Project with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`related_project_assn`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`child_project_id` = ' . $objDatabase->SqlVariable($objProject->Id) . '
			');
		}

		/**
		 * Unassociates all ProjectsAsRelated
		 * @return void
		*/
		public function UnassociateAllProjectsAsRelated() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllProjectAsRelatedArray on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`related_project_assn`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		// Related Many-to-Many Objects' Methods for ParentProjectAsRelated
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ParentProjectsAsRelated as an array of Project objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public function GetParentProjectAsRelatedArray($objClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Project::LoadArrayByProjectAsRelated($this->intId, $objClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		public function GetParentProjectAsRelatedKeys() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call GetParentProjectAsRelatedIds on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objResult = $objDatabase->Query('
				SELECT `project_id`
				FROM `related_project_assn`
				WHERE `child_project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			$keys = array();
			while ($row = $objResult->FetchRow()) {
				$keys[] = $row[0];
			}
			return $keys;
		}


		/**
		 * Counts all many-to-many associated ParentProjectsAsRelated
		 * @return int
		*/
		public function CountParentProjectsAsRelated() {
			if ((is_null($this->intId)))
				return 0;

			return Project::CountByProjectAsRelated($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ParentProjectAsRelated
		 * @param Project $objProject
		 * @return bool
		*/
		public function IsParentProjectAsRelatedAssociated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentProjectAsRelatedAssociated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentProjectAsRelatedAssociated on this Project with an unsaved Project.');

			$intRowCount = Project::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Project()->Id, $this->intId),
					QQ::Equal(QQN::Project()->ParentProjectAsRelated->ProjectId, $objProject->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a ParentProjectAsRelated
		 * @param Project $objProject
		 * @return void
		*/
		public function AssociateParentProjectAsRelated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentProjectAsRelated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentProjectAsRelated on this Project with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `related_project_assn` (
					`child_project_id`,
					`project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objProject->Id) . '
				)
			');
		}

		/**
		 * Associates a ParentProjectAsRelated by its primary key.

		 * @param integer $intProjectId
		 * @return void
		*/
		public function AssociateParentProjectAsRelatedByKey($intProjectId) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentProjectAsRelated on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `related_project_assn` (
					`child_project_id`,
					`project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intProjectId) . '
				)
			');
		}


		/**
		 * Unassociates a ParentProjectAsRelated
		 * @param Project $objProject
		 * @return void
		*/
		public function UnassociateParentProjectAsRelated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentProjectAsRelated on this unsaved Project.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentProjectAsRelated on this Project with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`related_project_assn`
				WHERE
					`child_project_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($objProject->Id) . '
			');
		}

		/**
		 * Unassociates all ParentProjectsAsRelated
		 * @return void
		*/
		public function UnassociateAllParentProjectsAsRelated() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllParentProjectAsRelatedArray on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`related_project_assn`
				WHERE
					`child_project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		// Related Many-to-Many Objects' Methods for PersonAsTeamMember
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated PeopleAsTeamMember as an array of Person objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public function GetPersonAsTeamMemberArray($objClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Person::LoadArrayByProjectAsTeamMember($this->intId, $objClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		public function GetPersonAsTeamMemberKeys() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call GetPersonAsTeamMemberIds on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objResult = $objDatabase->Query('
				SELECT `person_id`
				FROM `team_member_project_assn`
				WHERE `project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			$keys = array();
			while ($row = $objResult->FetchRow()) {
				$keys[] = $row[0];
			}
			return $keys;
		}


		/**
		 * Counts all many-to-many associated PeopleAsTeamMember
		 * @return int
		*/
		public function CountPeopleAsTeamMember() {
			if ((is_null($this->intId)))
				return 0;

			return Person::CountByProjectAsTeamMember($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific PersonAsTeamMember
		 * @param Person $objPerson
		 * @return bool
		*/
		public function IsPersonAsTeamMemberAssociated(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsPersonAsTeamMemberAssociated on this unsaved Project.');
			if ((is_null($objPerson->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsPersonAsTeamMemberAssociated on this Project with an unsaved Person.');

			$intRowCount = Project::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Project()->Id, $this->intId),
					QQ::Equal(QQN::Project()->PersonAsTeamMember->PersonId, $objPerson->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a PersonAsTeamMember
		 * @param Person $objPerson
		 * @return void
		*/
		public function AssociatePersonAsTeamMember(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsTeamMember on this unsaved Project.');
			if ((is_null($objPerson->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsTeamMember on this Project with an unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `team_member_project_assn` (
					`project_id`,
					`person_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objPerson->Id) . '
				)
			');
		}

		/**
		 * Associates a PersonAsTeamMember by its primary key.

		 * @param integer $intPersonId
		 * @return void
		*/
		public function AssociatePersonAsTeamMemberByKey($intPersonId) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsTeamMember on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `team_member_project_assn` (
					`project_id`,
					`person_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intPersonId) . '
				)
			');
		}


		/**
		 * Unassociates a PersonAsTeamMember
		 * @param Person $objPerson
		 * @return void
		*/
		public function UnassociatePersonAsTeamMember(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsTeamMember on this unsaved Project.');
			if ((is_null($objPerson->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsTeamMember on this Project with an unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`team_member_project_assn`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($objPerson->Id) . '
			');
		}

		/**
		 * Unassociates all PeopleAsTeamMember
		 * @return void
		*/
		public function UnassociateAllPeopleAsTeamMember() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPersonAsTeamMemberArray on this unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Project::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`team_member_project_assn`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Table name that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "project";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Project::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 1;
		}

		/**
		 * Return the base node corresponding to this table.
		 * @return int position or index of the database in the config file.
		 */
		public static function BaseNode() {
			return QQN::Project();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Project"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="ProjectStatusTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="ManagerPerson" type="xsd1:Person"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="StartDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="EndDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Budget" type="xsd:string"/>';
			$strToReturn .= '<element name="Spent" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Project', $strComplexTypeArray)) {
				$strComplexTypeArray['Project'] = Project::GetSoapComplexTypeXml();
				Person::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Project::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Project();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'ProjectStatusTypeId'))
				$objToReturn->intProjectStatusTypeId = $objSoapObject->ProjectStatusTypeId;
			if ((property_exists($objSoapObject, 'ManagerPerson')) &&
				($objSoapObject->ManagerPerson))
				$objToReturn->ManagerPerson = Person::GetObjectFromSoapObject($objSoapObject->ManagerPerson);
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'StartDate'))
				$objToReturn->dttStartDate = new QDateTime($objSoapObject->StartDate);
			if (property_exists($objSoapObject, 'EndDate'))
				$objToReturn->dttEndDate = new QDateTime($objSoapObject->EndDate);
			if (property_exists($objSoapObject, 'Budget'))
				$objToReturn->strBudget = $objSoapObject->Budget;
			if (property_exists($objSoapObject, 'Spent'))
				$objToReturn->strSpent = $objSoapObject->Spent;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Project::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objManagerPerson)
				$objObject->objManagerPerson = Person::GetSoapObjectFromObject($objObject->objManagerPerson, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intManagerPersonId = null;
			if ($objObject->dttStartDate)
				$objObject->dttStartDate = $objObject->dttStartDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttEndDate)
				$objObject->dttEndDate = $objObject->dttEndDate->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Id'] = $this->intId;
			$iArray['ProjectStatusTypeId'] = $this->intProjectStatusTypeId;
			$iArray['ManagerPersonId'] = $this->intManagerPersonId;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
			$iArray['StartDate'] = $this->dttStartDate;
			$iArray['EndDate'] = $this->dttEndDate;
			$iArray['Budget'] = $this->strBudget;
			$iArray['Spent'] = $this->strSpent;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}

		/**
		 * Default "toJsObject" handler
		 * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
		 * value and label differently.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return an array that specifies how to display the object
		 */
		public function toJsObject () {
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intId ));
		}

		/**
		 * Default "jsonSerialize" handler
		 * Specifies how the object should be serialized using json_encode. This is primarily for the purpose of selection in a list.
		 * Override if you need something more.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return an array that specifies how to display the object
		 */
		public function jsonSerialize () {
			return array('value' => $this->__toString(), 'id' =>  $this->intId );
		}




		

	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQAssociationNode
     *
     * @property-read QQColumnNode $ChildProjectId
     * @property-read QQNodeProject $Project
     * @property-read QQNodeProject $_ChildTableNode
     **/
	class QQNodeProjectProjectAsRelated extends QQAssociationNode {
		protected $strType = QType::Association;
		protected $strName = 'projectasrelated';

		protected $strTableName = 'related_project_assn';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'Project';
		protected $strPropertyName = 'ProjectAsRelated';
		protected $strAlias = 'projectasrelated';

		public function __get($strName) {
			switch ($strName) {
				case 'ChildProjectId':
					return new QQColumnNode('child_project_id', 'ChildProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeProject('child_project_id', 'ChildProjectId', 'Integer', $this);
				case '_ChildTableNode':
					return new QQNodeProject('child_project_id', 'ChildProjectId', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @uses QQAssociationNode
     *
     * @property-read QQColumnNode $ProjectId
     * @property-read QQNodeProject $Project
     * @property-read QQNodeProject $_ChildTableNode
     **/
	class QQNodeProjectParentProjectAsRelated extends QQAssociationNode {
		protected $strType = QType::Association;
		protected $strName = 'parentprojectasrelated';

		protected $strTableName = 'related_project_assn';
		protected $strPrimaryKey = 'child_project_id';
		protected $strClassName = 'Project';
		protected $strPropertyName = 'ParentProjectAsRelated';
		protected $strAlias = 'parentprojectasrelated';

		public function __get($strName) {
			switch ($strName) {
				case 'ProjectId':
					return new QQColumnNode('project_id', 'ProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeProject('project_id', 'ProjectId', 'Integer', $this);
				case '_ChildTableNode':
					return new QQNodeProject('project_id', 'ProjectId', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @uses QQAssociationNode
     *
     * @property-read QQColumnNode $PersonId
     * @property-read QQNodePerson $Person
     * @property-read QQNodePerson $_ChildTableNode
     **/
	class QQNodeProjectPersonAsTeamMember extends QQAssociationNode {
		protected $strType = QType::Association;
		protected $strName = 'personasteammember';

		protected $strTableName = 'team_member_project_assn';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'Person';
		protected $strPropertyName = 'PersonAsTeamMember';
		protected $strAlias = 'personasteammember';

		public function __get($strName) {
			switch ($strName) {
				case 'PersonId':
					return new QQColumnNode('person_id', 'PersonId', 'Integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'PersonId', 'Integer', $this);
				case '_ChildTableNode':
					return new QQNodePerson('person_id', 'PersonId', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $Id
     * @property-read QQColumnNode $ProjectStatusTypeId
     * @property-read QQNodeProjectStatusType $ProjectStatusType
     * @property-read QQColumnNode $ManagerPersonId
     * @property-read QQNodePerson $ManagerPerson
     * @property-read QQColumnNode $Name
     * @property-read QQColumnNode $Description
     * @property-read QQColumnNode $StartDate
     * @property-read QQColumnNode $EndDate
     * @property-read QQColumnNode $Budget
     * @property-read QQColumnNode $Spent
     *
     * @property-read QQNodeProjectProjectAsRelated $ProjectAsRelated
     * @property-read QQNodeProjectParentProjectAsRelated $ParentProjectAsRelated
     * @property-read QQNodeProjectPersonAsTeamMember $PersonAsTeamMember
     *
     * @property-read QQReverseReferenceNodeMilestone $Milestone
     * @property-read QQReverseReferenceNodeTwoKey $TwoKey

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProject extends QQTableNode {
		protected $strTableName = 'project';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Project';

		public function Fields() {
			return [
				"id",
				"project_status_type_id",
				"manager_person_id",
				"name",
				"description",
				"start_date",
				"end_date",
				"budget",
				"spent",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"id",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQColumnNode('id', 'Id', 'Integer', $this);
				case 'ProjectStatusTypeId':
					return new QQColumnNode('project_status_type_id', 'ProjectStatusTypeId', 'Integer', $this);
				case 'ProjectStatusType':
					return new QQNodeProjectStatusType('project_status_type_id', 'ProjectStatusType', 'Integer', $this);
				case 'ManagerPersonId':
					return new QQColumnNode('manager_person_id', 'ManagerPersonId', 'Integer', $this);
				case 'ManagerPerson':
					return new QQNodePerson('manager_person_id', 'ManagerPerson', 'Integer', $this);
				case 'Name':
					return new QQColumnNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQColumnNode('description', 'Description', 'Blob', $this);
				case 'StartDate':
					return new QQColumnNode('start_date', 'StartDate', 'Date', $this);
				case 'EndDate':
					return new QQColumnNode('end_date', 'EndDate', 'Date', $this);
				case 'Budget':
					return new QQColumnNode('budget', 'Budget', 'VarChar', $this);
				case 'Spent':
					return new QQColumnNode('spent', 'Spent', 'VarChar', $this);
				case 'ProjectAsRelated':
					return new QQNodeProjectProjectAsRelated($this);
				case 'ParentProjectAsRelated':
					return new QQNodeProjectParentProjectAsRelated($this);
				case 'PersonAsTeamMember':
					return new QQNodeProjectPersonAsTeamMember($this);
				case 'Milestone':
					return new QQReverseReferenceNodeMilestone($this, 'milestone', QType::ReverseReference, 'project_id', 'Milestone');
				case 'TwoKey':
					return new QQReverseReferenceNodeTwoKey($this, 'twokey', QType::ReverseReference, 'project_id', 'TwoKey');

				case '_PrimaryKeyNode':
					return new QQColumnNode('id', 'Id', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQColumnNode $Id
     * @property-read QQColumnNode $ProjectStatusTypeId
     * @property-read QQColumnNode $ManagerPersonId
     * @property-read QQNodePerson $ManagerPerson
     * @property-read QQColumnNode $Name
     * @property-read QQColumnNode $Description
     * @property-read QQColumnNode $StartDate
     * @property-read QQColumnNode $EndDate
     * @property-read QQColumnNode $Budget
     * @property-read QQColumnNode $Spent
     *
     * @property-read QQNodeProjectProjectAsRelated $ProjectAsRelated
     * @property-read QQNodeProjectParentProjectAsRelated $ParentProjectAsRelated
     * @property-read QQNodeProjectPersonAsTeamMember $PersonAsTeamMember
     *
     * @property-read QQReverseReferenceNodeMilestone $Milestone
     * @property-read QQReverseReferenceNodeTwoKey $TwoKey

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProject extends QQReverseReferenceNode {
		protected $strTableName = 'project';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Project';

		public function Fields() {
			return [
				"id",
				"project_status_type_id",
				"manager_person_id",
				"name",
				"description",
				"start_date",
				"end_date",
				"budget",
				"spent",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"id",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQColumnNode('id', 'Id', 'Integer', $this);
				case 'ProjectStatusTypeId':
					return new QQColumnNode('project_status_type_id', 'ProjectStatusTypeId', 'Integer', $this);
				case 'ManagerPersonId':
					return new QQColumnNode('manager_person_id', 'ManagerPersonId', 'Integer', $this);
				case 'ManagerPerson':
					return new QQNodePerson('manager_person_id', 'ManagerPerson', 'Integer', $this);
				case 'Name':
					return new QQColumnNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQColumnNode('description', 'Description', 'Blob', $this);
				case 'StartDate':
					return new QQColumnNode('start_date', 'StartDate', 'Date', $this);
				case 'EndDate':
					return new QQColumnNode('end_date', 'EndDate', 'Date', $this);
				case 'Budget':
					return new QQColumnNode('budget', 'Budget', 'VarChar', $this);
				case 'Spent':
					return new QQColumnNode('spent', 'Spent', 'VarChar', $this);
				case 'ProjectAsRelated':
					return new QQNodeProjectProjectAsRelated($this);
				case 'ParentProjectAsRelated':
					return new QQNodeProjectParentProjectAsRelated($this);
				case 'PersonAsTeamMember':
					return new QQNodeProjectPersonAsTeamMember($this);
				case 'Milestone':
					return new QQReverseReferenceNodeMilestone($this, 'milestone', QType::ReverseReference, 'project_id', 'Milestone');
				case 'TwoKey':
					return new QQReverseReferenceNodeTwoKey($this, 'twokey', QType::ReverseReference, 'project_id', 'TwoKey');

				case '_PrimaryKeyNode':
					return new QQColumnNode('id', 'Id', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
