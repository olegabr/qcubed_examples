<?php
	/**
	 * The abstract QcWatchersGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the QcWatchers subclass which
	 * extends this QcWatchersGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QcWatchers class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $TableKey the value for strTableKey (PK)
	 * @property string $Ts the value for strTs (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class QcWatchersGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var QcWatchers[] Short term cached QcWatchers objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column qc_watchers.table_key
		 * @var string strTableKey
		 */
		protected $strTableKey;
		const TableKeyMaxLength = 200;
		const TableKeyDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strTableKey;
		 */
		protected $__strTableKey;

		/**
		 * Protected member variable that maps to the database column qc_watchers.ts
		 * @var string strTs
		 */
		protected $strTs;
		const TsMaxLength = 40;
		const TsDefault = null;


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
			$this->strTableKey = QcWatchers::TableKeyDefault;
			$this->strTs = QcWatchers::TsDefault;
		}

		

		/**
		* Returns a single unique value representing the primary key.
		* @return mixed
		*/
		public function PrimaryKey() {
			return $this->strTableKey;
		}

		/**
		* Returns the primary key directly from a database row.
		* @param DatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return int|null
		**/
		protected static function GetRowPrimaryKey($objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strAlias = $strAliasPrefix . 'table_key';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$strColumns = $objDbRow->GetColumnNameArray();
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			
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
		 * Load a QcWatchers from PK Info
		 * @param string $strTableKey
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return QcWatchers
		 */
		public static function Load($strTableKey, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$objCachedObject = static::GetFromCache ($strTableKey);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = QcWatchers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::QcWatchers()->TableKey, $strTableKey)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all QcWatcherses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return QcWatchers[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call QcWatchers::QueryArray to perform the LoadAll query
			try {
				return QcWatchers::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all QcWatcherses
		 * @return int
		 */
		public static function CountAll() {
			// Call QcWatchers::QueryCount to perform the CountAll query
			return QcWatchers::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single QcWatchers object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QcWatchers the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of QcWatchers objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QcWatchers[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
		}

		public static function QueryPrimaryKeys(QQCondition $objConditions = null) {
			if ($objConditions === null) {
				$objConditions = QQ::All();
			}
			$clauses[] = QQ::Select(QQN::QcWatchers()->TableKey);
			$objQcWatcherses = self::QueryArray($objConditions, $clauses);
			$pks = [];
			foreach ($objQcWatcherses as $objQcWatchers) {
				$pks[] = $objQcWatchers->strTableKey;
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
		 * Instantiate a QcWatchers from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this QcWatchers::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param QBaseClass $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a QcWatchers, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the QcWatchers object
				$objToReturn = new QcWatchers();
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'table_key';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTableKey = $mixVal;
					$objToReturn->__strTableKey = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'ts';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strTs = $mixVal;
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
					if ($objToReturn->TableKey != $objPreviousItem->TableKey) {
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
				$strAliasPrefix = 'qc_watchers__';


				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of QcWatcherses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return QcWatchers[]
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
					$objItem = QcWatchers::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strTableKey][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = QcWatchers::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single QcWatchers object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return QcWatchers next row resulting from the query
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
			return QcWatchers::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single QcWatchers object,
		 * by TableKey Index(es)
		 * @param string $strTableKey
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return QcWatchers
		*/
		public static function LoadByTableKey($strTableKey, $objOptionalClauses = null) {
			return QcWatchers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::QcWatchers()->TableKey, $strTableKey)
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
		 * Save this QcWatchers
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = QcWatchers::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `qc_watchers` (
							`table_key`,
							`ts`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTableKey) . ',
							' . $objDatabase->SqlVariable($this->strTs) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`qc_watchers`
						SET
							`table_key` = ' . $objDatabase->SqlVariable($this->strTableKey) . ',
							`ts` = ' . $objDatabase->SqlVariable($this->strTs) . '
						WHERE
							`table_key` = ' . $objDatabase->SqlVariable($this->__strTableKey) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strTableKey = $this->strTableKey;


			$this->DeleteFromCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'qc_watchers');
			}

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this QcWatchers
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strTableKey)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this QcWatchers with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = QcWatchers::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`qc_watchers`
				WHERE
					`table_key` = ' . $objDatabase->SqlVariable($this->strTableKey) . '');

			$this->DeleteFromCache();
			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'qc_watchers');
			}

		}

		/**
		 * Delete all QcWatcherses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = QcWatchers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`qc_watchers`');

			static::ClearCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'qc_watchers');
			}
		}

		/**
		 * Truncate qc_watchers table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = QcWatchers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `qc_watchers`');

			static::ClearCache();
		}

		/**
		 * Reload this QcWatchers from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved QcWatchers object.');

			$this->DeleteFromCache();

			// Reload the Object
			$objReloaded = QcWatchers::Load($this->strTableKey);

			// Update $this's local variables to match
			$this->strTableKey = $objReloaded->strTableKey;
			$this->__strTableKey = $this->strTableKey;
			$this->strTs = $objReloaded->strTs;
		}
		////////////////////
		// UTILITIES
		////////////////////
		
		/**
		 *  Return an array of QcWatcherses keyed by the unique TableKey property.
		 *	@param QcWatchers[]
		 *	@return QcWatchers[]
		 **/
		public static function KeyQcWatchersesByTableKey($qcwatcherses) {
			if (empty($qcwatcherses)) {
				return $qcwatcherses;
			}
			foreach ($qcwatcherses as $qcwatchers) {
				$aOut[$qcwatchers->strTableKey] = $qcwatchers;
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
				case 'TableKey':
					/**
					 * Gets the value for strTableKey (PK)
					 * @return string
					 */
					return $this->strTableKey;

				case 'Ts':
					/**
					 * Gets the value for strTs (Not Null)
					 * @return string
					 */
					return $this->strTs;


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
				case 'TableKey':
					/**
					 * Sets the value for strTableKey (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTableKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ts':
					/**
					 * Sets the value for strTs (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTs = QType::Cast($mixValue, QType::String));
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
			return "qc_watchers";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[QcWatchers::GetDatabaseIndex()]->Database;
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
			return QQN::QcWatchers();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="QcWatchers"><sequence>';
			$strToReturn .= '<element name="TableKey" type="xsd:string"/>';
			$strToReturn .= '<element name="Ts" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('QcWatchers', $strComplexTypeArray)) {
				$strComplexTypeArray['QcWatchers'] = QcWatchers::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, QcWatchers::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new QcWatchers();
			if (property_exists($objSoapObject, 'TableKey'))
				$objToReturn->strTableKey = $objSoapObject->TableKey;
			if (property_exists($objSoapObject, 'Ts'))
				$objToReturn->strTs = $objSoapObject->Ts;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, QcWatchers::GetSoapObjectFromObject($objObject, true));

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
			$iArray['TableKey'] = $this->strTableKey;
			$iArray['Ts'] = $this->strTs;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->strTableKey ));
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
			return array('value' => $this->__toString(), 'id' =>  $this->strTableKey );
		}




		

	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $TableKey
     * @property-read QQColumnNode $Ts
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeQcWatchers extends QQTableNode {
		protected $strTableName = 'qc_watchers';
		protected $strPrimaryKey = 'table_key';
		protected $strClassName = 'QcWatchers';

		public function Fields() {
			return [
				"table_key",
				"ts",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"table_key",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'TableKey':
					return new QQColumnNode('table_key', 'TableKey', 'VarChar', $this);
				case 'Ts':
					return new QQColumnNode('ts', 'Ts', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('table_key', 'TableKey', 'VarChar', $this);
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
     * @property-read QQColumnNode $TableKey
     * @property-read QQColumnNode $Ts
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeQcWatchers extends QQReverseReferenceNode {
		protected $strTableName = 'qc_watchers';
		protected $strPrimaryKey = 'table_key';
		protected $strClassName = 'QcWatchers';

		public function Fields() {
			return [
				"table_key",
				"ts",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"table_key",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'TableKey':
					return new QQColumnNode('table_key', 'TableKey', 'VarChar', $this);
				case 'Ts':
					return new QQColumnNode('ts', 'Ts', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('table_key', 'TableKey', 'VarChar', $this);
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
