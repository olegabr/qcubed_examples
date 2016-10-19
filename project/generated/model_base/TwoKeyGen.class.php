<?php
	/**
	 * The abstract TwoKeyGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TwoKey subclass which
	 * extends this TwoKeyGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TwoKey class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Server the value for strServer (PK)
	 * @property string $Directory the value for strDirectory (PK)
	 * @property string $FileName the value for strFileName (Not Null)
	 * @property integer $PersonId the value for intPersonId (Not Null)
	 * @property integer $ProjectId the value for intProjectId 
	 * @property Person $Person the value for the Person object referenced by intPersonId (Not Null)
	 * @property Project $Project the value for the Project object referenced by intProjectId 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TwoKeyGen extends QBaseClass implements IteratorAggregate, JsonSerializable {

		use QModelTrait;

		/** @var boolean Set to false in superclass to save a little time if this db object should not be watched for changes. */
		public static $blnWatchChanges = true;

		/** @var TwoKey[] Short term cached TwoKey objects */
		protected static $objCacheArray = array();

	///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column two_key.server
		 * @var string strServer
		 */
		protected $strServer;
		const ServerMaxLength = 50;
		const ServerDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strServer;
		 */
		protected $__strServer;

		/**
		 * Protected member variable that maps to the database PK column two_key.directory
		 * @var string strDirectory
		 */
		protected $strDirectory;
		const DirectoryMaxLength = 50;
		const DirectoryDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strDirectory;
		 */
		protected $__strDirectory;

		/**
		 * Protected member variable that maps to the database column two_key.file_name
		 * @var string strFileName
		 */
		protected $strFileName;
		const FileNameMaxLength = 50;
		const FileNameDefault = null;


		/**
		 * Protected member variable that maps to the database column two_key.person_id
		 * @var integer intPersonId
		 */
		protected $intPersonId;
		const PersonIdDefault = null;


		/**
		 * Protected member variable that maps to the database column two_key.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


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
		 * in the database column two_key.person_id.
		 *
		 * NOTE: Always use the Person property getter to correctly retrieve this Person object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Person objPerson
		 */
		protected $objPerson;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column two_key.project_id.
		 *
		 * NOTE: Always use the Project property getter to correctly retrieve this Project object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Project objProject
		 */
		protected $objProject;


		
		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strServer = TwoKey::ServerDefault;
			$this->strDirectory = TwoKey::DirectoryDefault;
			$this->strFileName = TwoKey::FileNameDefault;
			$this->intPersonId = TwoKey::PersonIdDefault;
			$this->intProjectId = TwoKey::ProjectIdDefault;
		}

		
		/**
		* Convert the composite key to a single unique value suitable for use in caching. Override to provide
		* a more suitable method of combining the keys if necessary.
		* @var mixed[] array of values to use as the key.
		*/

		protected static function MakeMultiKey($keyValues) {
			return implode (':', $keyValues);
		}

		/**
		* Returns a single unique value representing the primary key.
		* @return mixed
		*/
		public function PrimaryKey() {
			return static::MakeMultiKey (array($this->strServer, $this->strDirectory));
		}

		/**
		* Returns the primary key directly from a database row.
		* @param DatabaseRowBase $objDbRow
		* @param string $strAliasPrefix
		* @param string[] $strColumnAliasArray
		* @return int|null
		**/
		protected static function GetRowPrimaryKey($objDbRow, $strAliasPrefix, $strColumnAliasArray) {
			$strColumns = $objDbRow->GetColumnNameArray();
			$strAlias = $strAliasPrefix . 'server';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			if ($mixVal === null) return null;
			$values[] = $mixVal;
			$strAlias = $strAliasPrefix . 'directory';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$mixVal = (isset ($strColumns[$strAliasName]) ? $strColumns[$strAliasName] : null);
			if ($mixVal === null) return null;
			$values[] = $mixVal;

			return static::MakeMultiKey ($values);
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
		 * Load a TwoKey from PK Info
		 * @param string $strServer		 * @param string $strDirectory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey
		 */
		public static function Load($strServer, $strDirectory, $objOptionalClauses = null) {
			if (!$objOptionalClauses) {
				$strCacheKey = static::MakeMultiKey (array($strServer, $strDirectory));
				$objCachedObject = static::GetFromCache ($strCacheKey);
				if ($objCachedObject) return $objCachedObject;
			}

			// Use QuerySingle to Perform the Query
			$objToReturn = TwoKey::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TwoKey()->Server, $strServer),
					QQ::Equal(QQN::TwoKey()->Directory, $strDirectory)
				),
				$objOptionalClauses
			);
			return $objToReturn;
		}


		/**
		 * Load all TwoKeies
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TwoKey::QueryArray to perform the LoadAll query
			try {
				return TwoKey::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TwoKeies
		 * @return int
		 */
		public static function CountAll() {
			// Call TwoKey::QueryCount to perform the CountAll query
			return TwoKey::QueryCount(QQ::All());
		}

		
		/**
		 * Static Qcubed Query method to query for a single TwoKey object.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TwoKey the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QuerySingle($objConditions, $objOptionalClauses, $mixParameterArray);
		}

		/**
		 * Static Qcubed Query method to query for an array of TwoKey objects.
		 * Offloads work to QModelTrait.trait.php
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TwoKey[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			return static::_QueryArray($objConditions, $objOptionalClauses, $mixParameterArray); 
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
		 * Instantiate a TwoKey from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TwoKey::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param QQNode $objExpandAsArrayNode
		 * @param QBaseClass $objPreviousItemArray Used by expansion code to aid in expanding arrays
		 * @param string[] $strColumnAliasArray Array of column aliases mapping names in the query to items in the object
		 * @param boolean $blnCheckDuplicate Used by ExpandArray to indicate we should not create a new object if this is a duplicate of a previoius object
		 * @param string $strParentExpansionKey If this is part of an expansion, indicates what the parent item is
		 * @param mixed $objExpansionParent If this is part of an expansion, is the object corresponding to the key so that we can refer back to the parent object
		 * @return mixed Either a TwoKey, or false to indicate the dbrow was used in an expansion, or null to indicate that this leaf is a duplicate.
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
				// Create a new instance of the TwoKey object
				$objToReturn = new TwoKey();
				$objToReturn->__blnRestored = true;
				$blnNoCache = false;

				$strAlias = $strAliasPrefix . 'server';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strServer = $mixVal;
					$objToReturn->__strServer = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'directory';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strDirectory = $mixVal;
					$objToReturn->__strDirectory = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'file_name';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					$objToReturn->strFileName = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'person_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intPersonId = $mixVal;
				}
				else {
					$blnNoCache = true;
				}
				$strAlias = $strAliasPrefix . 'project_id';
				$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if (isset ($strColumnKeys[$strAliasName])) {
					$mixVal = $strColumns[$strAliasName];
					if ($mixVal !== null) {
						$mixVal = (integer)$mixVal;
					}
					$objToReturn->intProjectId = $mixVal;
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
					if ($objToReturn->Server != $objPreviousItem->Server) {
						continue;
					}
					if ($objToReturn->Directory != $objPreviousItem->Directory) {
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
				$strAliasPrefix = 'two_key__';

			// Check for Person Early Binding
			$strAlias = $strAliasPrefix . 'person_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['person_id']) ? null : $objExpansionAliasArray['person_id']);
				$objToReturn->objPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'person_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'twokey', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'person_id' && $objExpansionParent) {
				$objToReturn->objPerson = $objExpansionParent;
		    }

				// Check for Project Early Binding
			$strAlias = $strAliasPrefix . 'project_id__id';
			$strAliasName = !empty($strColumnAliasArray[$strAlias]) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (isset ($strColumns[$strAliasName])) {
				$objExpansionNode = (empty($objExpansionAliasArray['project_id']) ? null : $objExpansionAliasArray['project_id']);
				$objToReturn->objProject = Project::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $objExpansionNode, null, $strColumnAliasArray, false, 'twokey', $objToReturn);
			}
		    elseif ($strParentExpansionKey === 'project_id' && $objExpansionParent) {
				$objToReturn->objProject = $objExpansionParent;
		    }

	
				

			return $objToReturn;
		}
		
		/**
		 * Instantiate an array of TwoKeies from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param QQNode $objExpandAsArrayNode
		 * @param string[] $strColumnAliasArray
		 * @return TwoKey[]
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
					$objItem = TwoKey::InstantiateDbRow($objDbRow, null, $objExpandAsArrayNode, $objPrevItemArray, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objPrevItemArray[$objItem->strServer][] = $objItem;
		
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TwoKey::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TwoKey object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TwoKey next row resulting from the query
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
			return TwoKey::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
		}


		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TwoKey object,
		 * by Server, Directory Index(es)
		 * @param string $strServer
		 * @param string $strDirectory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey
		*/
		public static function LoadByServerDirectory($strServer, $strDirectory, $objOptionalClauses = null) {
			return TwoKey::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TwoKey()->Server, $strServer),
					QQ::Equal(QQN::TwoKey()->Directory, $strDirectory)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of TwoKey objects,
		 * by PersonId Index(es)
		 * @param integer $intPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey[]
		*/
		public static function LoadArrayByPersonId($intPersonId, $objOptionalClauses = null) {
			// Call TwoKey::QueryArray to perform the LoadArrayByPersonId query
			try {
				return TwoKey::QueryArray(
					QQ::Equal(QQN::TwoKey()->PersonId, $intPersonId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TwoKeies
		 * by PersonId Index(es)
		 * @param integer $intPersonId
		 * @return int
		*/
		public static function CountByPersonId($intPersonId) {
			// Call TwoKey::QueryCount to perform the CountByPersonId query
			return TwoKey::QueryCount(
				QQ::Equal(QQN::TwoKey()->PersonId, $intPersonId)
			);
		}

		/**
		 * Load an array of TwoKey objects,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TwoKey[]
		*/
		public static function LoadArrayByProjectId($intProjectId, $objOptionalClauses = null) {
			// Call TwoKey::QueryArray to perform the LoadArrayByProjectId query
			try {
				return TwoKey::QueryArray(
					QQ::Equal(QQN::TwoKey()->ProjectId, $intProjectId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TwoKeies
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectId($intProjectId) {
			// Call TwoKey::QueryCount to perform the CountByProjectId query
			return TwoKey::QueryCount(
				QQ::Equal(QQN::TwoKey()->ProjectId, $intProjectId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this TwoKey
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TwoKey::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored && !$blnForceUpdate) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `two_key` (
							`server`,
							`directory`,
							`file_name`,
							`person_id`,
							`project_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strServer) . ',
							' . $objDatabase->SqlVariable($this->strDirectory) . ',
							' . $objDatabase->SqlVariable($this->strFileName) . ',
							' . $objDatabase->SqlVariable($this->intPersonId) . ',
							' . $objDatabase->SqlVariable($this->intProjectId) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`two_key`
						SET
							`server` = ' . $objDatabase->SqlVariable($this->strServer) . ',
							`directory` = ' . $objDatabase->SqlVariable($this->strDirectory) . ',
							`file_name` = ' . $objDatabase->SqlVariable($this->strFileName) . ',
							`person_id` = ' . $objDatabase->SqlVariable($this->intPersonId) . ',
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
						WHERE
							`server` = ' . $objDatabase->SqlVariable($this->__strServer) . ' AND 
							`directory` = ' . $objDatabase->SqlVariable($this->__strDirectory) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strServer = $this->strServer;
			$this->__strDirectory = $this->strDirectory;


			$this->DeleteFromCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'two_key');
			}

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this TwoKey
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strServer)) || (is_null($this->strDirectory)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TwoKey with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TwoKey::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`
				WHERE
					`server` = ' . $objDatabase->SqlVariable($this->strServer) . ' AND
					`directory` = ' . $objDatabase->SqlVariable($this->strDirectory) . '');

			$this->DeleteFromCache();
			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'two_key');
			}

		}

		/**
		 * Delete all TwoKeies
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TwoKey::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`two_key`');

			static::ClearCache();

			if (static::$blnWatchChanges) {
				QWatcher::MarkTableModified (static::GetDatabase()->Database, 'two_key');
			}
		}

		/**
		 * Truncate two_key table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TwoKey::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `two_key`');

			static::ClearCache();
		}

		/**
		 * Reload this TwoKey from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TwoKey object.');

			$this->DeleteFromCache();

			// Reload the Object
			$objReloaded = TwoKey::Load($this->strServer, $this->strDirectory);

			// Update $this's local variables to match
			$this->strServer = $objReloaded->strServer;
			$this->__strServer = $this->strServer;
			$this->strDirectory = $objReloaded->strDirectory;
			$this->__strDirectory = $this->strDirectory;
			$this->strFileName = $objReloaded->strFileName;
			$this->PersonId = $objReloaded->PersonId;
			$this->ProjectId = $objReloaded->ProjectId;
		}
		////////////////////
		// UTILITIES
		////////////////////
		


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
				case 'Server':
					/**
					 * Gets the value for strServer (PK)
					 * @return string
					 */
					return $this->strServer;

				case 'Directory':
					/**
					 * Gets the value for strDirectory (PK)
					 * @return string
					 */
					return $this->strDirectory;

				case 'FileName':
					/**
					 * Gets the value for strFileName (Not Null)
					 * @return string
					 */
					return $this->strFileName;

				case 'PersonId':
					/**
					 * Gets the value for intPersonId (Not Null)
					 * @return integer
					 */
					return $this->intPersonId;

				case 'ProjectId':
					/**
					 * Gets the value for intProjectId 
					 * @return integer
					 */
					return $this->intProjectId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Person':
					/**
					 * Gets the value for the Person object referenced by intPersonId (Not Null)
					 * @return Person
					 */
					try {
						if ((!$this->objPerson) && (!is_null($this->intPersonId)))
							$this->objPerson = Person::Load($this->intPersonId);
						return $this->objPerson;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Project':
					/**
					 * Gets the value for the Project object referenced by intProjectId 
					 * @return Project
					 */
					try {
						if ((!$this->objProject) && (!is_null($this->intProjectId)))
							$this->objProject = Project::Load($this->intProjectId);
						return $this->objProject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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
				case 'Server':
					/**
					 * Sets the value for strServer (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strServer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Directory':
					/**
					 * Sets the value for strDirectory (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDirectory = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FileName':
					/**
					 * Sets the value for strFileName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFileName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PersonId':
					/**
					 * Sets the value for intPersonId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPerson = null;
						return ($this->intPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectId':
					/**
					 * Sets the value for intProjectId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProject = null;
						return ($this->intProjectId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Person':
					/**
					 * Sets the value for the Person object referenced by intPersonId (Not Null)
					 * @param Person $mixValue
					 * @return Person
					 */
					if (is_null($mixValue)) {
						$this->intPersonId = null;
						$this->objPerson = null;
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
							throw new QCallerException('Unable to set an unsaved Person for this TwoKey');

						// Update Local Member Variables
						$this->objPerson = $mixValue;
						$this->intPersonId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Project':
					/**
					 * Sets the value for the Project object referenced by intProjectId 
					 * @param Project $mixValue
					 * @return Project
					 */
					if (is_null($mixValue)) {
						$this->intProjectId = null;
						$this->objProject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Project object
						try {
							$mixValue = QType::Cast($mixValue, 'Project');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Project object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Project for this TwoKey');

						// Update Local Member Variables
						$this->objProject = $mixValue;
						$this->intProjectId = $mixValue->Id;

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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Table name that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "two_key";
		}

		/**
		 * Static method to retrieve the Database name from which this class has been created.
		 * @return string Name of the database from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TwoKey::GetDatabaseIndex()]->Database;
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
			return QQN::TwoKey();
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="TwoKey"><sequence>';
			$strToReturn .= '<element name="Server" type="xsd:string"/>';
			$strToReturn .= '<element name="Directory" type="xsd:string"/>';
			$strToReturn .= '<element name="FileName" type="xsd:string"/>';
			$strToReturn .= '<element name="Person" type="xsd1:Person"/>';
			$strToReturn .= '<element name="Project" type="xsd1:Project"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TwoKey', $strComplexTypeArray)) {
				$strComplexTypeArray['TwoKey'] = TwoKey::GetSoapComplexTypeXml();
				Person::AlterSoapComplexTypeArray($strComplexTypeArray);
				Project::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TwoKey::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TwoKey();
			if (property_exists($objSoapObject, 'Server'))
				$objToReturn->strServer = $objSoapObject->Server;
			if (property_exists($objSoapObject, 'Directory'))
				$objToReturn->strDirectory = $objSoapObject->Directory;
			if (property_exists($objSoapObject, 'FileName'))
				$objToReturn->strFileName = $objSoapObject->FileName;
			if ((property_exists($objSoapObject, 'Person')) &&
				($objSoapObject->Person))
				$objToReturn->Person = Person::GetObjectFromSoapObject($objSoapObject->Person);
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = Project::GetObjectFromSoapObject($objSoapObject->Project);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TwoKey::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPerson)
				$objObject->objPerson = Person::GetSoapObjectFromObject($objObject->objPerson, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPersonId = null;
			if ($objObject->objProject)
				$objObject->objProject = Project::GetSoapObjectFromObject($objObject->objProject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectId = null;
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
			$iArray['Server'] = $this->strServer;
			$iArray['Directory'] = $this->strDirectory;
			$iArray['FileName'] = $this->strFileName;
			$iArray['PersonId'] = $this->intPersonId;
			$iArray['ProjectId'] = $this->intProjectId;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->strServer,  $this->strDirectory) ));
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
			return array('value' => $this->__toString(), 'id' =>  array( $this->strServer,  $this->strDirectory) );
		}




		

	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQTableNode
     *
     * @property-read QQColumnNode $Server
     * @property-read QQColumnNode $Directory
     * @property-read QQColumnNode $FileName
     * @property-read QQColumnNode $PersonId
     * @property-read QQNodePerson $Person
     * @property-read QQColumnNode $ProjectId
     * @property-read QQNodeProject $Project
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTwoKey extends QQTableNode {
		protected $strTableName = 'two_key';
		protected $strPrimaryKey = 'server';
		protected $strClassName = 'TwoKey';

		public function Fields() {
			return [
				"server",
				"directory",
				"file_name",
				"person_id",
				"project_id",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"server",
				"directory",
			];
		}

		protected function database() {
			return QApplication::$Database[1];
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Server':
					return new QQColumnNode('server', 'Server', 'VarChar', $this);
				case 'Directory':
					return new QQColumnNode('directory', 'Directory', 'VarChar', $this);
				case 'FileName':
					return new QQColumnNode('file_name', 'FileName', 'VarChar', $this);
				case 'PersonId':
					return new QQColumnNode('person_id', 'PersonId', 'Integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'Person', 'Integer', $this);
				case 'ProjectId':
					return new QQColumnNode('project_id', 'ProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeProject('project_id', 'Project', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('server', 'Server', 'VarChar', $this);
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
     * @property-read QQColumnNode $Server
     * @property-read QQColumnNode $Directory
     * @property-read QQColumnNode $FileName
     * @property-read QQColumnNode $PersonId
     * @property-read QQNodePerson $Person
     * @property-read QQColumnNode $ProjectId
     * @property-read QQNodeProject $Project
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTwoKey extends QQReverseReferenceNode {
		protected $strTableName = 'two_key';
		protected $strPrimaryKey = 'server';
		protected $strClassName = 'TwoKey';

		public function Fields() {
			return [
				"server",
				"directory",
				"file_name",
				"person_id",
				"project_id",
			];
		}

		public function PrimaryKeyFields() {
			return [
				"server",
				"directory",
			];
		}

		public function __get($strName) {
			switch ($strName) {
				case 'Server':
					return new QQColumnNode('server', 'Server', 'VarChar', $this);
				case 'Directory':
					return new QQColumnNode('directory', 'Directory', 'VarChar', $this);
				case 'FileName':
					return new QQColumnNode('file_name', 'FileName', 'VarChar', $this);
				case 'PersonId':
					return new QQColumnNode('person_id', 'PersonId', 'Integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'Person', 'Integer', $this);
				case 'ProjectId':
					return new QQColumnNode('project_id', 'ProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeProject('project_id', 'Project', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQColumnNode('server', 'Server', 'VarChar', $this);
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
