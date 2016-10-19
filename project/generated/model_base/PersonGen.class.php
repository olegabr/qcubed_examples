<?php
	/**
	 * The abstract PersonGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Person subclass which
	 * extends this PersonGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Person class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $FirstName the value for strFirstName (Not Null)
	 * @property string $LastName the value for strLastName (Not Null)
	 * @property Login $Login the value for the Login object that uniquely references this Person
	 * @property-read PersonType $_PersonType the value for the protected _intPersonType (Read-Only) if set due to an expansion on the person_persontype_assn association table
	 * @property-read PersonType[] $_PersonTypeArray the value for the protected _intPersonTypeArray (Read-Only) if set due to an ExpandAsArray on the person_persontype_assn association table
	 * @property-read Project $_ProjectAsTeamMember the value for the protected _objProjectAsTeamMember (Read-Only) if set due to an expansion on the team_member_project_assn association table
	 * @property-read Project[] $_ProjectAsTeamMemberArray the value for the protected _objProjectAsTeamMemberArray (Read-Only) if set due to an ExpandAsArray on the team_member_project_assn association table
	* @property-read Address $_Address the value for the protected _objAddress (Read-Only) if set due to an expansion on the address.person_id reverse relationship
	* @property-read Address $Address the value for the protected _objAddress (Read-Only) if set due to an expansion on the address.person_id reverse relationship
	* @property-read Address[] $_AddressArray the value for the protected _objAddressArray (Read-Only) if set due to an ExpandAsArray on the address.person_id reverse relationship
	* @property-read Address[] $AddressArray the value for the protected _objAddressArray (Read-Only) if set due to an ExpandAsArray on the address.person_id reverse relationship
	* @property-read Project $_ProjectAsManager the value for the protected _objProjectAsManager (Read-Only) if set due to an expansion on the project.manager_person_id reverse relationship
	* @property-read Project $ProjectAsManager the value for the protected _objProjectAsManager (Read-Only) if set due to an expansion on the project.manager_person_id reverse relationship
	* @property-read Project[] $_ProjectAsManagerArray the value for the protected _objProjectAsManagerArray (Read-Only) if set due to an ExpandAsArray on the project.manager_person_id reverse relationship
	* @property-read Project[] $ProjectAsManagerArray the value for the protected _objProjectAsManagerArray (Read-Only) if set due to an ExpandAsArray on the project.manager_person_id reverse relationship
	* @property-read TwoKey $_TwoKey the value for the protected _objTwoKey (Read-Only) if set due to an expansion on the two_key.person_id reverse relationship
	* @property-read TwoKey $TwoKey the value for the protected _objTwoKey (Read-Only) if set due to an expansion on the two_key.person_id reverse relationship
	* @property-read TwoKey[] $_TwoKeyArray the value for the protected _objTwoKeyArray (Read-Only) if set due to an ExpandAsArray on the two_key.person_id reverse relationship
	* @property-read TwoKey[] $TwoKeyArray the value for the protected _objTwoKeyArray (Read-Only) if set due to an ExpandAsArray on the two_key.person_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PersonGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var Person[] Short term cached Person objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column person.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column person.first_name
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 50;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column person.last_name
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 50;
		const LastNameDefault = null;


		/**
		 * Protected member variable that stores a PersonType id,
		 * if this Person object was restored with
		 * an expansion on the person_persontype_assn association table.
		 * @var integer _intPersonType;
		 */
		protected $_intPersonType;

		/**
		 * Protected member variable that stores an array of PersonType ids,
		 * if this Person object was restored with
		 * an ExpandAsArray on the PersonType association table.
		 * @var integer[] _intPersonTypeArray;
		 */
		protected $_intPersonTypeArray = null;

		/**
		 * Protected member variable that stores a reference to a single ProjectAsTeamMember object
		 * (of type Project), if this Person object was restored with
		 * an expansion on the team_member_project_assn association table.
		 * @var Project _objProjectAsTeamMember;
		 */
		protected $_objProjectAsTeamMember;

		/**
		 * Protected member variable that stores a reference to an array of ProjectAsTeamMember objects
		 * (of type Project[]), if this Person object was restored with
		 * an ExpandAsArray on the team_member_project_assn association table.
		 * @var Project[] _objProjectAsTeamMemberArray;
		 */
		protected $_objProjectAsTeamMemberArray = null;
		/**
		 * Protected member variable that stores a reference to a single Address object
		 * (of type Address), if this Person object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddress;
		 */
		protected $_objAddress;

		/**
		 * Protected member variable that stores a reference to an array of Address objects
		 * (of type Address[]), if this Person object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressArray;
		 */
		protected $_objAddressArray = null;

		/**
		 * Protected member variable that stores a reference to a single ProjectAsManager object
		 * (of type Project), if this Person object was restored with
		 * an expansion on the project association table.
		 * @var Project _objProjectAsManager;
		 */
		protected $_objProjectAsManager;

		/**
		 * Protected member variable that stores a reference to an array of ProjectAsManager objects
		 * (of type Project[]), if this Person object was restored with
		 * an ExpandAsArray on the project association table.
		 * @var Project[] _objProjectAsManagerArray;
		 */
		protected $_objProjectAsManagerArray = null;

		/**
		 * Protected member variable that stores a reference to a single TwoKey object
		 * (of type TwoKey), if this Person object was restored with
		 * an expansion on the two_key association table.
		 * @var TwoKey _objTwoKey;
		 */
		protected $_objTwoKey;

		/**
		 * Protected member variable that stores a reference to an array of TwoKey objects
		 * (of type TwoKey[]), if this Person object was restored with
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
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column login.person_id.
		 *
		 * NOTE: Always use the Login property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objLogin
		 */
		protected $objLogin;

		/**
		 * Used internally to manage whether the adjoined Login object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyLogin;


		
		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intId = Person::IdDefault;
			$this->strFirstName = Person::FirstNameDefault;
			$this->strLastName = Person::LastNameDefault;
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
		 * Load a Person from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = Person::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Person()->Id, $intId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all People
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Person::QueryArray to perform the LoadAll query
			try {
				return Person::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all People
		 * @return int
		 */
		public static function CountAll() {
			// Call Person::QueryCount to perform the CountAll query
			return Person::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single Person object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Person the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of Person objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Person[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::Person()->Id);
			$objPeople = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objPeople as $objPerson) {
				$pks[] = $objPerson->intId;
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
		 * Instantiate a Person from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Person::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param QBaseClass $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a Person, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the Person object
				$objToReturn = new Person();
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
				$strAlias = $strAliasPrefix . 'first_name';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strFirstName = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'last_name';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strLastName = $mixVal;
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
				$strAliasPrefix = 'person__';


			// Check for Login Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'login__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (array_key_exists ($strAliasName, $strColumns)) {
				if (!is_null($strColumns[$strAliasName])) {
					$objExpansionNode = (empty($objExpansionAliasArray['login']) ? null : $objExpansionAliasArray['login']);
					$objToReturn->objLogin = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'login__', $objExpansionNode, null, $strColumnAliasArray, false, 'person_id', $objToReturn);
				}
				else {
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objLogin = false;
				}
			}

				
			// Check for PersonType Virtual Binding
			$strAlias = $strAliasPrefix . 'persontype__person_type_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['persontype']) ? null : $objExpansionAliasArray['persontype']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_intPersonTypeArray) {
				$objToReturn->_intPersonTypeArray = array();
			}
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_intPersonTypeArray[] = PersonType::InstantiateDbRow($objDbRow, $strAliasPrefix . 'persontype__person_type_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'person', $objToReturn);
				} elseif (is_null($objToReturn->_intPersonType)) {
					$objToReturn->_intPersonType = PersonType::InstantiateDbRow($objDbRow, $strAliasPrefix . 'persontype__person_type_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'person', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'persontype' && $objExpansionParent) {
				$objToReturn->_intPersonType = $objExpansionParent;
			}

			// Check for ProjectAsTeamMember Virtual Binding
			$strAlias = $strAliasPrefix . 'projectasteammember__project_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['projectasteammember']) ? null : $objExpansionAliasArray['projectasteammember']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objProjectAsTeamMemberArray) {
				$objToReturn->_objProjectAsTeamMemberArray = array();
			}
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objProjectAsTeamMemberArray[] = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasteammember__project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'personasteammember', $objToReturn);
				} elseif (is_null($objToReturn->_objProjectAsTeamMember)) {
					$objToReturn->_objProjectAsTeamMember = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasteammember__project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'personasteammember', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'projectasteammember' && $objExpansionParent) {
				$objToReturn->_objProjectAsTeamMember = $objExpansionParent;
			}


			// Check for Address Virtual Binding
			$strAlias = $strAliasPrefix . 'address__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['address']) ? null : $objExpansionAliasArray['address']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objAddressArray)
				$objToReturn->_objAddressArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $objExpansionNode, null, $strColumnAliasArray, false, 'person_id', $objToReturn);
				} elseif (is_null($objToReturn->_objAddress)) {
					$objToReturn->_objAddress = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $objExpansionNode, null, $strColumnAliasArray, false, 'person_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'address' && $objExpansionParent) {
				$objToReturn->_objAddress = $objExpansionParent;
			}

			// Check for ProjectAsManager Virtual Binding
			$strAlias = $strAliasPrefix . 'projectasmanager__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objExpansionNode = (empty($objExpansionAliasArray['projectasmanager']) ? null : $objExpansionAliasArray['projectasmanager']);
			$blnExpanded = ($objExpansionNode && $objExpansionNode->ExpandAsArray);
			if ($blnExpanded && null === $objToReturn->_objProjectAsManagerArray)
				$objToReturn->_objProjectAsManagerArray = array();
			if (isset ($strColumns[$strAliasName])) {
				if ($blnExpanded) {
					$objToReturn->_objProjectAsManagerArray[] = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasmanager__', $objExpansionNode, null, $strColumnAliasArray, false, 'manager_person_id', $objToReturn);
				} elseif (is_null($objToReturn->_objProjectAsManager)) {
					$objToReturn->_objProjectAsManager = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'projectasmanager__', $objExpansionNode, null, $strColumnAliasArray, false, 'manager_person_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'projectasmanager' && $objExpansionParent) {
				$objToReturn->_objProjectAsManager = $objExpansionParent;
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
					$objToReturn->_objTwoKeyArray[] = TwoKey::InstantiateDbRow($objDbRow, $strAliasPrefix . 'twokey__', $objExpansionNode, null, $strColumnAliasArray, false, 'person_id', $objToReturn);
				} elseif (is_null($objToReturn->_objTwoKey)) {
					$objToReturn->_objTwoKey = TwoKey::InstantiateDbRow($objDbRow, $strAliasPrefix . 'twokey__', $objExpansionNode, null, $strColumnAliasArray, false, 'person_id', $objToReturn);
				}
			}
			elseif ($strParentExpansionKey === 'twokey' && $objExpansionParent) {
				$objToReturn->_objTwoKey = $objExpansionParent;
			}

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of People from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return Person[]
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
					$objItem = Person::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Person::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Person object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Person next row resulting from the query
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
			return Person::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Person object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Person::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Person()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Person objects,
		 * by LastName Index(es)
		 * @param string $strLastName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByLastName($strLastName, $objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByLastName query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->LastName, $strLastName),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People
		 * by LastName Index(es)
		 * @param string $strLastName
		 * @return int
		*/
		public static function CountByLastName($strLastName) {
			// Call Person::QueryCount to perform the CountByLastName query
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->LastName, $strLastName)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of PersonType objects for a given PersonType
		 * via the person_persontype_assn table
		 * @param integer $intPersonTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByPersonType($intPersonTypeId, $objClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByPersonType query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->PersonType->PersonTypeId, $intPersonTypeId),
					$objClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People for a given PersonType
		 * via the person_persontype_assn table
		 * @param integer $intPersonTypeId
		 * @return int
		*/
		public static function CountByPersonType($intPersonTypeId) {
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->PersonType->PersonTypeId, $intPersonTypeId)
			);
		}
			/**
		 * Load an array of Project objects for a given ProjectAsTeamMember
		 * via the team_member_project_assn table
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByProjectAsTeamMember($intProjectId, $objClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByProjectAsTeamMember query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->ProjectAsTeamMember->ProjectId, $intProjectId),
					$objClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People for a given ProjectAsTeamMember
		 * via the team_member_project_assn table
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectAsTeamMember($intProjectId) {
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->ProjectAsTeamMember->ProjectId, $intProjectId)
			);
		}




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Person
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `person` (
							`first_name`,
							`last_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('person', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`person`
						SET
							`first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');
				}



				// Update the adjoined Login object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyLogin) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = Login::LoadByPersonId($this->intId)) {
						$objAssociated->PersonId = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objLogin) {
						$this->objLogin->PersonId = $this->intId;
						$this->objLogin->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyLogin = false;
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			$this->DeleteFromCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'person');
			}

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Person
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Person with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();



			// Update the adjoined Login object (if applicable) and perform the unassociation

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = Login::LoadByPersonId($this->intId)) {
				$objAssociated->PersonId = null;
				$objAssociated->Save();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteFromCache();
			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'person');
			}

		}

		/**
		 * Delete all People
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person`');

			static::ClearCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'person');
			}
		}

		/**
		 * Truncate person table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `person`');

			static::ClearCache();
		}

		/**
		 * Reload this Person from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Person object.');

			$this->DeleteFromCache();

			// Reload the Object
			$objReloaded = Person::Load($this->intId);

			// Update $this's local variables to match
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strLastName = $objReloaded->strLastName;
		}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of People keyed by the unique Id property.
		 *	@param Person[]
		 *	@return Person[]
		 **/
		public static function KeyPeopleById($people) {
			if (empty($people)) {
				return $people;
			}
			foreach ($people as $person) {
				$aOut[$person->intId] = $person;
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

				case 'FirstName':
					/**
					 * Gets the value for strFirstName (Not Null)
					 * @return string
					 */
					return $this->strFirstName;

				case 'LastName':
					/**
					 * Gets the value for strLastName (Not Null)
					 * @return string
					 */
					return $this->strLastName;


				///////////////////
				// Member Objects
				///////////////////
				case 'Login':
					/**
					 * Gets the value for the Login object that uniquely references this Person
					 * by objLogin (Unique)
					 * @return Login
					 */
					try {
						if (!$this->__blnRestored ||
								$this->objLogin === false)
							// Either this is a new object, or we've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objLogin)
							$this->objLogin = Login::LoadByPersonId($this->intId);
						return $this->objLogin;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case 'PersonType':
				case '_PersonType': // for backwards compatibility
					/**
					 * Gets the value for the protected _intPersonType (Read-Only)
					 * if set due to an expansion on the person_persontype_assn association table
					 * @return integer
					 */
					return $this->_intPersonType;

				case 'PersonTypeArray':
				case '_PersonTypeArray': // for backwards compatibility
					/**
					 * Gets the value for the protected _intPersonTypeArray (Read-Only)
					 * if set due to an ExpandAsArray on the person_persontype_assn association table
					 * @return integer[]
					 */
					return $this->_intPersonTypeArray;


				case 'ProjectAsTeamMember':
				case '_ProjectAsTeamMember': // for backwards compatibility
					/**
					 * Gets the value for the protected _objProjectAsTeamMember (Read-Only)
					 * if set due to an expansion on the team_member_project_assn association table
					 * @return Project
					 */
					return $this->_objProjectAsTeamMember;

				case 'ProjectAsTeamMemberArray':
				case '_ProjectAsTeamMemberArray': // for backwards compatibility
					/**
					 * Gets the value for the protected _objProjectAsTeamMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the team_member_project_assn association table
					 * @return Project[]
					 */
					return $this->_objProjectAsTeamMemberArray;


				case 'Address':
				case '_Address':
					/**
					 * Gets the value for the protected _objAddress (Read-Only)
					 * if set due to an expansion on the address.person_id reverse relationship
					 * @return Address
					 */
					return $this->_objAddress;

				case 'AddressArray':
				case '_AddressArray':
					/**
					 * Gets the value for the protected _objAddressArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.person_id reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressArray;

				case 'ProjectAsManager':
				case '_ProjectAsManager':
					/**
					 * Gets the value for the protected _objProjectAsManager (Read-Only)
					 * if set due to an expansion on the project.manager_person_id reverse relationship
					 * @return Project
					 */
					return $this->_objProjectAsManager;

				case 'ProjectAsManagerArray':
				case '_ProjectAsManagerArray':
					/**
					 * Gets the value for the protected _objProjectAsManagerArray (Read-Only)
					 * if set due to an ExpandAsArray on the project.manager_person_id reverse relationship
					 * @return Project[]
					 */
					return $this->_objProjectAsManagerArray;

				case 'TwoKey':
				case '_TwoKey':
					/**
					 * Gets the value for the protected _objTwoKey (Read-Only)
					 * if set due to an expansion on the two_key.person_id reverse relationship
					 * @return TwoKey
					 */
					return $this->_objTwoKey;

				case 'TwoKeyArray':
				case '_TwoKeyArray':
					/**
					 * Gets the value for the protected _objTwoKeyArray (Read-Only)
					 * if set due to an ExpandAsArray on the two_key.person_id reverse relationship
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
				case 'FirstName':
					/**
					 * Sets the value for strFirstName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastName':
					/**
					 * Sets the value for strLastName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Login':
					/**
					 * Sets the value for the Login object referenced by objLogin (Unique)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->objLogin = null;

						// Make sure we update the adjoined Login object the next time we call Save()
						$this->blnDirtyLogin = true;

						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objLogin to a DIFFERENT $mixValue?
						if ((!$this->Login) || ($this->Login->Id != $mixValue->Id)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined Login object the next time we call Save()
							$this->blnDirtyLogin = true;

							// Update Local Member Variable
							$this->objLogin = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

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



		// Related Objects' Methods for Address
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Addresses as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Address::LoadArrayByPersonId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Addresses
		 * @return int
		*/
		public function CountAddresses() {
			if ((is_null($this->intId)))
				return 0;

			return Address::CountByPersonId($this->intId);
		}

		/**
		 * Associates a Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddress(Address $objAddress) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . '
			');
		}

		/**
		 * Unassociates a Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddress(Address $objAddress) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all Addresses
		 * @return void
		*/
		public function UnassociateAllAddresses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = null
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddress(Address $objAddress) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated Addresses
		 * @return void
		*/
		public function DeleteAllAddresses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for ProjectAsManager
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProjectsAsManager as an array of Project objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public function GetProjectAsManagerArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Project::LoadArrayByManagerPersonId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProjectsAsManager
		 * @return int
		*/
		public function CountProjectsAsManager() {
			if ((is_null($this->intId)))
				return 0;

			return Project::CountByManagerPersonId($this->intId);
		}

		/**
		 * Associates a ProjectAsManager
		 * @param Project $objProject
		 * @return void
		*/
		public function AssociateProjectAsManager(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsManager on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsManager on this Person with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`project`
				SET
					`manager_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objProject->Id) . '
			');
		}

		/**
		 * Unassociates a ProjectAsManager
		 * @param Project $objProject
		 * @return void
		*/
		public function UnassociateProjectAsManager(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this Person with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`project`
				SET
					`manager_person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objProject->Id) . ' AND
					`manager_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all ProjectsAsManager
		 * @return void
		*/
		public function UnassociateAllProjectsAsManager() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`project`
				SET
					`manager_person_id` = null
				WHERE
					`manager_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated ProjectAsManager
		 * @param Project $objProject
		 * @return void
		*/
		public function DeleteAssociatedProjectAsManager(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this Person with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`project`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objProject->Id) . ' AND
					`manager_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated ProjectsAsManager
		 * @return void
		*/
		public function DeleteAllProjectsAsManager() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsManager on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`project`
				WHERE
					`manager_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				return TwoKey::LoadArrayByPersonId($this->intId, $objOptionalClauses);
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

			return TwoKey::CountByPersonId($this->intId);
		}

		/**
		 * Associates a TwoKey
		 * @param TwoKey $objTwoKey
		 * @return void
		*/
		public function AssociateTwoKey(TwoKey $objTwoKey) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTwoKey on this unsaved Person.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTwoKey on this Person with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Person.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this Person with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`person_id` = null
				WHERE
					`server` = ' . $objDatabase->SqlVariable($objTwoKey->Server) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($objTwoKey->Directory) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all TwoKeies
		 * @return void
		*/
		public function UnassociateAllTwoKeies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`two_key`
				SET
					`person_id` = null
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated TwoKey
		 * @param TwoKey $objTwoKey
		 * @return void
		*/
		public function DeleteAssociatedTwoKey(TwoKey $objTwoKey) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Person.');
			if ((is_null($objTwoKey->Server)) || (is_null($objTwoKey->Directory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this Person with an unsaved TwoKey.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`
				WHERE
					`server` = ' . $objDatabase->SqlVariable($objTwoKey->Server) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($objTwoKey->Directory) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated TwoKeies
		 * @return void
		*/
		public function DeleteAllTwoKeies() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTwoKey on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
   
        // Related Many-to-Many Object Methods for PersonType        
        //-------------------------------------------------------------------
  
        /**
         * Gets all many-to-many associated PersonTypes as an array of id=>name pairs.
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return array
         */ 
        public function GetPersonTypeArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();        
                
            if($objOptionalClauses) 
                throw new QException('Unable to call GetPersonTypeArray with parameters.');
                
            $rowArray = array();
                
            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();
                
            $strQuery = sprintf("SELECT person_type_id FROM person_persontype_assn WHERE person_id = %s", $this->intId);
            
            // Perform the Query
            $objDbResult = $objDatabase->Query($strQuery);
            
            while ($mixRow = $objDbResult->FetchArray()) {                                   
                $rowArray[$mixRow['person_type_id']] =   PersonType::ToString($mixRow['person_type_id']);
            }

            return $rowArray;
        }
        
        /**
         * Counts all many-to-many associated PersonTypes         
         * @return int
         */ 
        public function CountPersonTypes() {
            if ((is_null($this->intId)))
                return 0;                 

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();
            
            $strQuery = sprintf("SELECT count(*) as total_count FROM person_persontype_assn WHERE person_id = %s", $this->intId);
            
            // Perform the Query
            $objDbResult = $objDatabase->Query($strQuery);                            
            $row = $objDbResult->FetchArray();
            return $row['total_count'];
        }        
        
        /**
         * Checks to see if an association exists with a specific PersonType         
         * @param PersonType $objPersonType         
         * @return bool
         */
        public function IsPersonTypeAssociated($intId) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPersonTypeAssociated on this unsaved Person.');
                        

            $intRowCount = Person::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Person()->Id, $this->intId),
                    QQ::Equal(QQN::Person()->PersonType->PersonTypeId, $intId )
                )
            );

            return ($intRowCount > 0);        
        }    
        
        /**
         * Associates a PersonType         
         * @param mixed $mixId	id or array of ids.
         * @return void
         */ 
        public function AssociatePersonType($mixId) {
        
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonType on this unsaved Person.');
            

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

			if(!is_array($mixId)) {
				$mixId = array($mixId);
			}
			foreach ($mixId as $intId) {
	            // Perform the SQL Query
	            $objDatabase->NonQuery('
	                INSERT INTO `person_persontype_assn` (
	                    `person_id`,
	                    `person_type_id`	                ) VALUES (
	                    ' . $objDatabase->SqlVariable($this->intId) . ',
	                    ' . $objDatabase->SqlVariable($intId) . '
	                )
	            ');
			}
        }
        
        /**
         * Unassociates a PersonType         
         * @param mixed $mixId	id or array of ids
         * @return void
         */ 
        public function UnassociatePersonType($mixId) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonType on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

 			if(!is_array($mixId)) {
				$mixId = array($mixId);
			}
			foreach ($mixId as $intId) {
	            // Perform the SQL Query
	            $objDatabase->NonQuery('
					DELETE FROM
						`person_persontype_assn`	                WHERE
	                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
	                    `person_type_id` = ' . $objDatabase->SqlVariable($intId) . '
	            ');
			}
        }        
        
        /**
         * Unassociates all PersonTypes         
         * @return void
         */ 
        public function UnassociateAllPersonTypes() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPersonTypeArray on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person_persontype_assn`                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }        



		// Related Many-to-Many Objects' Methods for ProjectAsTeamMember
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ProjectsAsTeamMember as an array of Project objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Project[]
		*/
		public function GetProjectAsTeamMemberArray($objClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Project::LoadArrayByPersonAsTeamMember($this->intId, $objClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		public function GetProjectAsTeamMemberKeys() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call GetProjectAsTeamMemberIds on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objResult = $objDatabase->Query('
				SELECT `project_id`
				FROM `team_member_project_assn`
				WHERE `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			$keys = array();
			while ($row = $objResult->FetchRow()) {
				$keys[] = $row[0];
			}
			return $keys;
		}


		/**
		 * Counts all many-to-many associated ProjectsAsTeamMember
		 * @return int
		*/
		public function CountProjectsAsTeamMember() {
			if ((is_null($this->intId)))
				return 0;

			return Project::CountByPersonAsTeamMember($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ProjectAsTeamMember
		 * @param Project $objProject
		 * @return bool
		*/
		public function IsProjectAsTeamMemberAssociated(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsProjectAsTeamMemberAssociated on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsProjectAsTeamMemberAssociated on this Person with an unsaved Project.');

			$intRowCount = Person::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Person()->Id, $this->intId),
					QQ::Equal(QQN::Person()->ProjectAsTeamMember->ProjectId, $objProject->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Associates a ProjectAsTeamMember
		 * @param Project $objProject
		 * @return void
		*/
		public function AssociateProjectAsTeamMember(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsTeamMember on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsTeamMember on this Person with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `team_member_project_assn` (
					`person_id`,
					`project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objProject->Id) . '
				)
			');
		}

		/**
		 * Associates a ProjectAsTeamMember by its primary key.

		 * @param integer $intProjectId
		 * @return void
		*/
		public function AssociateProjectAsTeamMemberByKey($intProjectId) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProjectAsTeamMember on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `team_member_project_assn` (
					`person_id`,
					`project_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intProjectId) . '
				)
			');
		}


		/**
		 * Unassociates a ProjectAsTeamMember
		 * @param Project $objProject
		 * @return void
		*/
		public function UnassociateProjectAsTeamMember(Project $objProject) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsTeamMember on this unsaved Person.');
			if ((is_null($objProject->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProjectAsTeamMember on this Person with an unsaved Project.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`team_member_project_assn`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($objProject->Id) . '
			');
		}

		/**
		 * Unassociates all ProjectsAsTeamMember
		 * @return void
		*/
		public function UnassociateAllProjectsAsTeamMember() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllProjectAsTeamMemberArray on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`team_member_project_assn`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
			return "person";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Person::GetDatabaseIndex()]->Database;
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
			return QQN::Person();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Person"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Person', $strComplexTypeArray)) {
				$strComplexTypeArray['Person'] = Person::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Person::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Person();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Person::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['LastName'] = $this->strLastName;
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
     * @property-read QQColumnNode $PersonTypeId
     * @property-read QQNodePersonType $PersonType
     * @property-read QQNodePersonType $_ChildTableNode
     **/
	class QQNodePersonPersonType extends QQAssociationNode {
		protected $strType = QType::Association;
		protected $strName = 'persontype';

		protected $strTableName = 'person_persontype_assn';
		protected $strPrimaryKey = 'person_id';
		protected $strClassName = 'PersonType';
		protected $strPropertyName = 'PersonType';
		protected $strAlias = 'persontype';

		public function __get($strName) {
			switch ($strName) {
				case 'PersonTypeId':
					return new QQColumnNode('person_type_id', 'PersonTypeId', 'Integer', $this);
				case 'PersonType':
					return new QQNodePersonType('person_type_id', 'PersonTypeId', 'Integer', $this);
				case '_ChildTableNode':
					return new QQNodePersonType('person_type_id', 'PersonTypeId', 'Integer', $this);
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
	class QQNodePersonProjectAsTeamMember extends QQAssociationNode {
		protected $strType = QType::Association;
		protected $strName = 'projectasteammember';

		protected $strTableName = 'team_member_project_assn';
		protected $strPrimaryKey = 'person_id';
		protected $strClassName = 'Project';
		protected $strPropertyName = 'ProjectAsTeamMember';
		protected $strAlias = 'projectasteammember';

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
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $Id
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $LastName
     *
     * @property-read QQNodePersonPersonType $PersonType
     * @property-read QQNodePersonProjectAsTeamMember $ProjectAsTeamMember
     *
     * @property-read QQReverseReferenceNodeAddress $Address
     * @property-read QQReverseReferenceNodeLogin $Login
     * @property-read QQReverseReferenceNodeProject $ProjectAsManager
     * @property-read QQReverseReferenceNodeTwoKey $TwoKey

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePerson extends QQTableNode {
		protected $strTableName = 'person';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Person';

		public function Fields() {
			return [
				"id",
				"first_name",
				"last_name",
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
				case 'FirstName':
					return new QQColumnNode('first_name', 'FirstName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('last_name', 'LastName', 'VarChar', $this);
				case 'PersonType':
					return new QQNodePersonPersonType($this);
				case 'ProjectAsTeamMember':
					return new QQNodePersonProjectAsTeamMember($this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', QType::ReverseReference, 'person_id', 'Address');
				case 'Login':
					return new QQReverseReferenceNodeLogin($this, 'login', QType::ReverseReference, 'person_id', 'Login');
				case 'ProjectAsManager':
					return new QQReverseReferenceNodeProject($this, 'projectasmanager', QType::ReverseReference, 'manager_person_id', 'ProjectAsManager');
				case 'TwoKey':
					return new QQReverseReferenceNodeTwoKey($this, 'twokey', QType::ReverseReference, 'person_id', 'TwoKey');

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
     * @property-read QQColumnNode $FirstName
     * @property-read QQColumnNode $LastName
     *
     * @property-read QQNodePersonPersonType $PersonType
     * @property-read QQNodePersonProjectAsTeamMember $ProjectAsTeamMember
     *
     * @property-read QQReverseReferenceNodeAddress $Address
     * @property-read QQReverseReferenceNodeLogin $Login
     * @property-read QQReverseReferenceNodeProject $ProjectAsManager
     * @property-read QQReverseReferenceNodeTwoKey $TwoKey

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePerson extends QQReverseReferenceNode {
		protected $strTableName = 'person';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Person';

		public function Fields() {
			return [
				"id",
				"first_name",
				"last_name",
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
				case 'FirstName':
					return new QQColumnNode('first_name', 'FirstName', 'VarChar', $this);
				case 'LastName':
					return new QQColumnNode('last_name', 'LastName', 'VarChar', $this);
				case 'PersonType':
					return new QQNodePersonPersonType($this);
				case 'ProjectAsTeamMember':
					return new QQNodePersonProjectAsTeamMember($this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', QType::ReverseReference, 'person_id', 'Address');
				case 'Login':
					return new QQReverseReferenceNodeLogin($this, 'login', QType::ReverseReference, 'person_id', 'Login');
				case 'ProjectAsManager':
					return new QQReverseReferenceNodeProject($this, 'projectasmanager', QType::ReverseReference, 'manager_person_id', 'ProjectAsManager');
				case 'TwoKey':
					return new QQReverseReferenceNodeTwoKey($this, 'twokey', QType::ReverseReference, 'person_id', 'TwoKey');

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
