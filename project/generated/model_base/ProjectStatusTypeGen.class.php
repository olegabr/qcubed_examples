<?php
	/**
	 * The ProjectStatusType class defined here contains
	 * code for the ProjectStatusType enumerated type.  It represents
	 * the enumerated values found in the "project_status_type" table
	 * in the database.
	 *
	 * To use, you should use the ProjectStatusType subclass which
	 * extends this ProjectStatusTypeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ProjectStatusType class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class ProjectStatusTypeGen extends QBaseClass {
		const Open = 1;
		const Cancelled = 2;
		const Completed = 3;

		const MaxId = 3;

		public static $NameArray = array(
			1 => 'Open',
			2 => 'Cancelled',
			3 => 'Completed');

		public static $TokenArray = array(
			1 => 'Open',
			2 => 'Cancelled',
			3 => 'Completed');

		public static $ExtraColumnNamesArray = array(
			'Description',
			'Guidelines',
			'IsActive'
		);

		public static $ExtraColumnValuesArray = array(
			1 => array (
				'Description' => 'The project is currently active',
				'Guidelines' => 'All projects that we are working on should be in this state',
				'IsActive' => true
			),
			2 => array (
				'Description' => 'The project has been canned',
				'Guidelines' => null,
				'IsActive' => true
			),
			3 => array (
				'Description' => 'The project has been completed successfully',
				'Guidelines' => 'Celebrate successes!',
				'IsActive' => true
			)
		);


		public static $DescriptionArray = array(
			'1' => 'The project is currently active',
			'2' => 'The project has been canned',
			'3' => 'The project has been completed successfully'
		);

		public static $GuidelinesArray = array(
			'1' => 'All projects that we are working on should be in this state',
			'2' => null,
			'3' => 'Celebrate successes!'
		);

		public static $IsActiveArray = array(
			'1' => true,
			'2' => true,
			'3' => true
		);



		public static function ToString($intProjectStatusTypeId) {
			switch ($intProjectStatusTypeId) {
				case 1: return 'Open';
				case 2: return 'Cancelled';
				case 3: return 'Completed';
				default:
					throw new QCallerException(sprintf('Invalid intProjectStatusTypeId: %s', $intProjectStatusTypeId));
			}
		}

		public static function ToToken($intProjectStatusTypeId) {
			switch ($intProjectStatusTypeId) {
				case 1: return 'Open';
				case 2: return 'Cancelled';
				case 3: return 'Completed';
				default:
					throw new QCallerException(sprintf('Invalid intProjectStatusTypeId: %s', $intProjectStatusTypeId));
			}
		}

		public static function ToDescription($intProjectStatusTypeId) {
			switch ($intProjectStatusTypeId) {
				case 1: return 'The project is currently active';
				case 2: return 'The project has been canned';
				case 3: return 'The project has been completed successfully';
				default:
					throw new QCallerException(sprintf('Invalid intProjectStatusTypeId: %s', $intProjectStatusTypeId));
			}
		}

		public static function ToGuidelines($intProjectStatusTypeId) {
			switch ($intProjectStatusTypeId) {
				case 1: return 'All projects that we are working on should be in this state';
				case 2: return null;
				case 3: return 'Celebrate successes!';
				default:
					throw new QCallerException(sprintf('Invalid intProjectStatusTypeId: %s', $intProjectStatusTypeId));
			}
		}

		public static function ToIsActive($intProjectStatusTypeId) {
			switch ($intProjectStatusTypeId) {
				case 1: return true;
				case 2: return true;
				case 3: return true;
				default:
					throw new QCallerException(sprintf('Invalid intProjectStatusTypeId: %s', $intProjectStatusTypeId));
			}
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ProjectStatusType from a Database Row.
		 * Simply returns the integer id corresponding to this item.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ProjectStatusType::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string|null $strAliasPrefix
		 * @param string|null $strExpandAsArrayNodes
		 * @param QBaseClass|null $arrPreviousItem
		 * @param string[]|null $strColumnAliasArray
		 * @return ProjectStatusType
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
	class QQNodeProjectStatusType extends QQTableNode {
		protected $strTableName = 'project_status_type';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ProjectStatusType';
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
