<?php
	/**
	 * The PersonType class defined here contains
	 * code for the PersonType enumerated type.  It represents
	 * the enumerated values found in the "person_type" table
	 * in the database.
	 *
	 * To use, you should use the PersonType subclass which
	 * extends this PersonTypeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the PersonType class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class PersonTypeGen extends QBaseClass {
		const Contractor = 1;
		const Manager = 2;
		const Inactive = 3;
		const CompanyCar = 4;
		const WorksFromHome = 5;

		const MaxId = 5;

		public static $NameArray = array(
			1 => 'Contractor',
			2 => 'Manager',
			3 => 'Inactive',
			4 => 'Company Car',
			5 => 'Works From Home');

		public static $TokenArray = array(
			1 => 'Contractor',
			2 => 'Manager',
			3 => 'Inactive',
			4 => 'CompanyCar',
			5 => 'WorksFromHome');

		public static function ToString($intPersonTypeId) {
			switch ($intPersonTypeId) {
				case 1: return 'Contractor';
				case 2: return 'Manager';
				case 3: return 'Inactive';
				case 4: return 'Company Car';
				case 5: return 'Works From Home';
				default:
					throw new QCallerException(sprintf('Invalid intPersonTypeId: %s', $intPersonTypeId));
			}
		}

		public static function ToToken($intPersonTypeId) {
			switch ($intPersonTypeId) {
				case 1: return 'Contractor';
				case 2: return 'Manager';
				case 3: return 'Inactive';
				case 4: return 'CompanyCar';
				case 5: return 'WorksFromHome';
				default:
					throw new QCallerException(sprintf('Invalid intPersonTypeId: %s', $intPersonTypeId));
			}
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a PersonType from a Database Row.
		 * Simply returns the integer id corresponding to this item.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this PersonType::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string|null $strAliasPrefix
		 * @param string|null $strExpandAsArrayNodes
		 * @param QBaseClass|null $arrPreviousItem
		 * @param string[]|null $strColumnAliasArray
		 * @return PersonType
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$intId = $objDbRow->GetColumn($strAliasName, QDatabaseFieldType::Integer);
			return $intId;
		}
	}


    /**
     * @uses QQNode
     *
     * @property-read QQNode $Id
     * @property-read QQNode $Name
     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePersonType extends QQTableNode {
		protected $strTableName = 'person_type';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'PersonType';
		protected $blnIsType = true;

		public function Fields() {
			return ["id", "name"];
		}

		public function PrimaryKeyFields() {
			return ["id"];
		}

		public function __get($strName) {
			switch ($strName) {
			 	case 'Id':
					return new QQColumnNode('id', 'Id', 'Integer', $this);
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
