<?php
	require(__MODEL_GEN__ . '/QcWatchersGen.class.php');

	/**
	 * The QcWatchers class defined here contains any
	 * customized code for the QcWatchers class in the
	 * Object Relational Model.  It represents the "qc_watchers" table
	 * in the database, and extends from the code generated abstract QcWatchersGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package My QCubed Application
	 * @subpackage DataObjects
	 *
	 */
	class QcWatchers extends QcWatchersGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objQcWatchers->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('QcWatchers Object %s',  $this->strTableKey);
		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of QcWatchers objects
			return QcWatchers::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::QcWatchers()->Param1, $strParam1),
					QQ::GreaterThan(QQN::QcWatchers()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single QcWatchers object
			return QcWatchers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::QcWatchers()->Param1, $strParam1),
					QQ::GreaterThan(QQN::QcWatchers()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of QcWatchers objects
			return QcWatchers::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::QcWatchers()->Param1, $strParam1),
					QQ::Equal(QQN::QcWatchers()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = QcWatchers::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`qc_watchers`.*
				FROM
					`qc_watchers` AS `qc_watchers`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return QcWatchers::InstantiateDbResult($objDbResult);
		}
*/



		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/


		
/*
		// Initialize each property with default values from database definition
		public function __construct()
		{
			$this->Initialize();
		}
*/

/*
		public function Initialize()
		{
			parent::Initialize();
			// You additional initializations here
		}
*/
	}