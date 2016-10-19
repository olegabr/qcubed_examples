<?php
	/**
	 * The abstract TypeTestGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TypeTest subclass which
	 * extends this TypeTestGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TypeTest class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property QDateTime $Time the value for dttTime 
	 * @property QDateTime $DateTime the value for dttDateTime 
	 * @property integer $TestInt the value for intTestInt 
	 * @property double $TestFloat the value for fltTestFloat 
	 * @property string $TestText the value for strTestText 
	 * @property boolean $TestBit the value for blnTestBit 
	 * @property string $TestVarchar the value for strTestVarchar 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TypeTestGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var TypeTest[] Short term cached TypeTest objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column type_test.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.time
		 * @var QDateTime dttTime
		 */
		protected $dttTime;
		const TimeDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.date_time
		 * @var QDateTime dttDateTime
		 */
		protected $dttDateTime;
		const DateTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.test_int
		 * @var integer intTestInt
		 */
		protected $intTestInt;
		const TestIntDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.test_float
		 * @var double fltTestFloat
		 */
		protected $fltTestFloat;
		const TestFloatDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.test_text
		 * @var string strTestText
		 */
		protected $strTestText;
		const TestTextDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.test_bit
		 * @var boolean blnTestBit
		 */
		protected $blnTestBit;
		const TestBitDefault = null;


		/**
		 * Protected member variable that maps to the database column type_test.test_varchar
		 * @var string strTestVarchar
		 */
		protected $strTestVarchar;
		const TestVarcharMaxLength = 10;
		const TestVarcharDefault = null;


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
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intId = TypeTest::IdDefault;
			$this->dttDate = (TypeTest::DateDefault === null)?null:new QDateTime(TypeTest::DateDefault);
			$this->dttTime = (TypeTest::TimeDefault === null)?null:new QDateTime(TypeTest::TimeDefault);
			$this->dttDateTime = (TypeTest::DateTimeDefault === null)?null:new QDateTime(TypeTest::DateTimeDefault);
			$this->intTestInt = TypeTest::TestIntDefault;
			$this->fltTestFloat = TypeTest::TestFloatDefault;
			$this->strTestText = TypeTest::TestTextDefault;
			$this->blnTestBit = TypeTest::TestBitDefault;
			$this->strTestVarchar = TypeTest::TestVarcharDefault;
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
		 * Load a TypeTest from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TypeTest
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($intId);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = TypeTest::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TypeTest()->Id, $intId)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all TypeTests
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TypeTest[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TypeTest::QueryArray to perform the LoadAll query
			try {
				return TypeTest::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TypeTests
		 * @return int
		 */
		public static function CountAll() {
			// Call TypeTest::QueryCount to perform the CountAll query
			return TypeTest::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single TypeTest object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TypeTest the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of TypeTest objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TypeTest[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::TypeTest()->Id);
			$objTypeTests = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objTypeTests as $objTypeTest) {
				$pks[] = $objTypeTest->intId;
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
		 * Instantiate a TypeTest from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TypeTest::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param QBaseClass $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a TypeTest, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
			
			


			$objToReturn = static::GetFromCache ($key);
			if (empty($objToReturn)) {
				// Create a new instance of the TypeTest object
				$objToReturn = new TypeTest();
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
				$strAlias = $strAliasPrefix . 'date';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal, null, QDateTime::DateOnlyType);
					}
					$objToReturn->dttDate = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'time';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal, null, QDateTime::TimeOnlyType);
					}
					$objToReturn->dttTime = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'date_time';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = new QDateTime($mixVal);
					}
					$objToReturn->dttDateTime = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'test_int';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intTestInt = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'test_float';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (double)$mixVal;
					}
					$objToReturn->fltTestFloat = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'test_text';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTestText = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'test_bit';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->blnTestBit = $objDbRow->ResolveBooleanValue($mixVal);
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'test_varchar';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTestVarchar = $mixVal;
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
				$strAliasPrefix = 'type_test__';


				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of TypeTests from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return TypeTest[]
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
					$objItem = TypeTest::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->intId][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TypeTest::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TypeTest object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TypeTest next row resulting from the query
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
			return TypeTest::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TypeTest object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TypeTest
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return TypeTest::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TypeTest()->Id, $intId)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this TypeTest
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TypeTest::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `type_test` (
							`date`,
							`time`,
							`date_time`,
							`test_int`,
							`test_float`,
							`test_text`,
							`test_bit`,
							`test_varchar`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->dttTime) . ',
							' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							' . $objDatabase->SqlVariable($this->intTestInt) . ',
							' . $objDatabase->SqlVariable($this->fltTestFloat) . ',
							' . $objDatabase->SqlVariable($this->strTestText) . ',
							' . $objDatabase->SqlVariable($this->blnTestBit) . ',
							' . $objDatabase->SqlVariable($this->strTestVarchar) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('type_test', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`type_test`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`time` = ' . $objDatabase->SqlVariable($this->dttTime) . ',
							`date_time` = ' . $objDatabase->SqlVariable($this->dttDateTime) . ',
							`test_int` = ' . $objDatabase->SqlVariable($this->intTestInt) . ',
							`test_float` = ' . $objDatabase->SqlVariable($this->fltTestFloat) . ',
							`test_text` = ' . $objDatabase->SqlVariable($this->strTestText) . ',
							`test_bit` = ' . $objDatabase->SqlVariable($this->blnTestBit) . ',
							`test_varchar` = ' . $objDatabase->SqlVariable($this->strTestVarchar) . '
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
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'type_test');
			}

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this TypeTest
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TypeTest with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TypeTest::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`type_test`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteFromCache();
			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'type_test');
			}

		}

		/**
		 * Delete all TypeTests
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TypeTest::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`type_test`');

			static::ClearCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'type_test');
			}
		}

		/**
		 * Truncate type_test table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TypeTest::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `type_test`');

			static::ClearCache();
		}

		/**
		 * Reload this TypeTest from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TypeTest object.');

			$this->DeleteFromCache();

			// Reload the Object
			$objReloaded = TypeTest::Load($this->intId);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->dttTime = $objReloaded->dttTime;
			$this->dttDateTime = $objReloaded->dttDateTime;
			$this->intTestInt = $objReloaded->intTestInt;
			$this->fltTestFloat = $objReloaded->fltTestFloat;
			$this->strTestText = $objReloaded->strTestText;
			$this->blnTestBit = $objReloaded->blnTestBit;
			$this->strTestVarchar = $objReloaded->strTestVarchar;
		}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of TypeTests keyed by the unique Id property.
		 *	@param TypeTest[]
		 *	@return TypeTest[]
		 **/
		public static function KeyTypeTestsById($typetests) {
			if (empty($typetests)) {
				return $typetests;
			}
			foreach ($typetests as $typetest) {
				$aOut[$typetest->intId] = $typetest;
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

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Time':
					/**
					 * Gets the value for dttTime 
					 * @return QDateTime
					 */
					return $this->dttTime;

				case 'DateTime':
					/**
					 * Gets the value for dttDateTime 
					 * @return QDateTime
					 */
					return $this->dttDateTime;

				case 'TestInt':
					/**
					 * Gets the value for intTestInt 
					 * @return integer
					 */
					return $this->intTestInt;

				case 'TestFloat':
					/**
					 * Gets the value for fltTestFloat 
					 * @return double
					 */
					return $this->fltTestFloat;

				case 'TestText':
					/**
					 * Gets the value for strTestText 
					 * @return string
					 */
					return $this->strTestText;

				case 'TestBit':
					/**
					 * Gets the value for blnTestBit 
					 * @return boolean
					 */
					return $this->blnTestBit;

				case 'TestVarchar':
					/**
					 * Gets the value for strTestVarchar 
					 * @return string
					 */
					return $this->strTestVarchar;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'Date':
					/**
					 * Sets the value for dttDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Time':
					/**
					 * Sets the value for dttTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DateTime':
					/**
					 * Sets the value for dttDateTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDateTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TestInt':
					/**
					 * Sets the value for intTestInt 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTestInt = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TestFloat':
					/**
					 * Sets the value for fltTestFloat 
					 * @param double $mixValue
					 * @return double
					 */
					try {
						return ($this->fltTestFloat = QType::Cast($mixValue, QType::Float));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TestText':
					/**
					 * Sets the value for strTestText 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTestText = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TestBit':
					/**
					 * Sets the value for blnTestBit 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnTestBit = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TestVarchar':
					/**
					 * Sets the value for strTestVarchar 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTestVarchar = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Table name that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "type_test";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TypeTest::GetDatabaseIndex()]->Database;
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
			return QQN::TypeTest();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="TypeTest"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Time" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DateTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="TestInt" type="xsd:int"/>';
			$strToReturn .= '<element name="TestFloat" type="xsd:float"/>';
			$strToReturn .= '<element name="TestText" type="xsd:string"/>';
			$strToReturn .= '<element name="TestBit" type="xsd:boolean"/>';
			$strToReturn .= '<element name="TestVarchar" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TypeTest', $strComplexTypeArray)) {
				$strComplexTypeArray['TypeTest'] = TypeTest::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TypeTest::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TypeTest();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'Time'))
				$objToReturn->dttTime = new QDateTime($objSoapObject->Time);
			if (property_exists($objSoapObject, 'DateTime'))
				$objToReturn->dttDateTime = new QDateTime($objSoapObject->DateTime);
			if (property_exists($objSoapObject, 'TestInt'))
				$objToReturn->intTestInt = $objSoapObject->TestInt;
			if (property_exists($objSoapObject, 'TestFloat'))
				$objToReturn->fltTestFloat = $objSoapObject->TestFloat;
			if (property_exists($objSoapObject, 'TestText'))
				$objToReturn->strTestText = $objSoapObject->TestText;
			if (property_exists($objSoapObject, 'TestBit'))
				$objToReturn->blnTestBit = $objSoapObject->TestBit;
			if (property_exists($objSoapObject, 'TestVarchar'))
				$objToReturn->strTestVarchar = $objSoapObject->TestVarchar;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TypeTest::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTime)
				$objObject->dttTime = $objObject->dttTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttDateTime)
				$objObject->dttDateTime = $objObject->dttDateTime->qFormat(QDateTime::FormatSoap);
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
			$iArray['Date'] = $this->dttDate;
			$iArray['Time'] = $this->dttTime;
			$iArray['DateTime'] = $this->dttDateTime;
			$iArray['TestInt'] = $this->intTestInt;
			$iArray['TestFloat'] = $this->fltTestFloat;
			$iArray['TestText'] = $this->strTestText;
			$iArray['TestBit'] = $this->blnTestBit;
			$iArray['TestVarchar'] = $this->strTestVarchar;
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
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $Id
     * @property-read QQColumnNode $Date
     * @property-read QQColumnNode $Time
     * @property-read QQColumnNode $DateTime
     * @property-read QQColumnNode $TestInt
     * @property-read QQColumnNode $TestFloat
     * @property-read QQColumnNode $TestText
     * @property-read QQColumnNode $TestBit
     * @property-read QQColumnNode $TestVarchar
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTypeTest extends QQTableNode {
		protected $strTableName = 'type_test';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'TypeTest';

		public function Fields() {
			return [
				"id",
				"date",
				"time",
				"date_time",
				"test_int",
				"test_float",
				"test_text",
				"test_bit",
				"test_varchar",
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
				case 'Date':
					return new QQColumnNode('date', 'Date', 'Date', $this);
				case 'Time':
					return new QQColumnNode('time', 'Time', 'Time', $this);
				case 'DateTime':
					return new QQColumnNode('date_time', 'DateTime', 'DateTime', $this);
				case 'TestInt':
					return new QQColumnNode('test_int', 'TestInt', 'Integer', $this);
				case 'TestFloat':
					return new QQColumnNode('test_float', 'TestFloat', 'Float', $this);
				case 'TestText':
					return new QQColumnNode('test_text', 'TestText', 'Blob', $this);
				case 'TestBit':
					return new QQColumnNode('test_bit', 'TestBit', 'Bit', $this);
				case 'TestVarchar':
					return new QQColumnNode('test_varchar', 'TestVarchar', 'VarChar', $this);

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
     * @property-read QQColumnNode $Date
     * @property-read QQColumnNode $Time
     * @property-read QQColumnNode $DateTime
     * @property-read QQColumnNode $TestInt
     * @property-read QQColumnNode $TestFloat
     * @property-read QQColumnNode $TestText
     * @property-read QQColumnNode $TestBit
     * @property-read QQColumnNode $TestVarchar
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTypeTest extends QQReverseReferenceNode {
		protected $strTableName = 'type_test';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'TypeTest';

		public function Fields() {
			return [
				"id",
				"date",
				"time",
				"date_time",
				"test_int",
				"test_float",
				"test_text",
				"test_bit",
				"test_varchar",
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
				case 'Date':
					return new QQColumnNode('date', 'Date', 'Date', $this);
				case 'Time':
					return new QQColumnNode('time', 'Time', 'Time', $this);
				case 'DateTime':
					return new QQColumnNode('date_time', 'DateTime', 'DateTime', $this);
				case 'TestInt':
					return new QQColumnNode('test_int', 'TestInt', 'Integer', $this);
				case 'TestFloat':
					return new QQColumnNode('test_float', 'TestFloat', 'Float', $this);
				case 'TestText':
					return new QQColumnNode('test_text', 'TestText', 'Blob', $this);
				case 'TestBit':
					return new QQColumnNode('test_bit', 'TestBit', 'Bit', $this);
				case 'TestVarchar':
					return new QQColumnNode('test_varchar', 'TestVarchar', 'VarChar', $this);

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
