<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the QcWatchers class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single QcWatchers object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a QcWatchersConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read QcWatchers $QcWatchers the actual QcWatchers data class being edited
	 * @property QTextBox $TableKeyControl
	 * @property-read QLabel $TableKeyLabel
	 * @property QTextBox $TsControl
	 * @property-read QLabel $TsLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class QcWatchersConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var QcWatchers objQcWatchers
		 * @access protected
		 */
		protected $objQcWatchers;
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

		// Controls that correspond to QcWatchers's individual data fields
		/**
		 * @var QTextBox txtTableKey

		 * @access protected
		 */
		protected $txtTableKey;

		/**
		 * @var QLabel lblTableKey
		 * @access protected
		 */
		protected $lblTableKey;

		/**
		 * @var QTextBox txtTs

		 * @access protected
		 */
		protected $txtTs;

		/**
		 * @var QLabel lblTs
		 * @access protected
		 */
		protected $lblTs;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * QcWatchersConnector to edit a single QcWatchers object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single QcWatchers object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this QcWatchersConnector
		 * @param QcWatchers $objQcWatchers new or existing QcWatchers object
		 */
		 public function __construct($objParentObject, QcWatchers $objQcWatchers) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this QcWatchersConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked QcWatchers object
			$this->objQcWatchers = $objQcWatchers;

			// Figure out if we're Editing or Creating New
			if ($this->objQcWatchers->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this QcWatchersConnector
		 * @param null|string $strTableKey primary key value
		 * @param integer $intCreateType rules governing QcWatchers object creation - defaults to CreateOrEdit
 		 * @return QcWatchersConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $strTableKey = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($strTableKey)) {
				$objQcWatchers = QcWatchers::Load($strTableKey);

				// QcWatchers was found -- return it!
				if ($objQcWatchers)
					return new QcWatchersConnector($objParentObject, $objQcWatchers);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a QcWatchers object with PK arguments: ' . $strTableKey);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new QcWatchersConnector($objParentObject, new QcWatchers());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this QcWatchersConnector
		 * @param integer $intCreateType rules governing QcWatchers object creation - defaults to CreateOrEdit
		 * @return QcWatchersConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strTableKey = QApplication::PathInfo(0);
			return QcWatchersConnector::Create($objParentObject, $strTableKey, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this QcWatchersConnector
		 * @param integer $intCreateType rules governing QcWatchers object creation - defaults to CreateOrEdit
		 * @return QcWatchersConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$strTableKey = QApplication::QueryString('strTableKey');
			return QcWatchersConnector::Create($objParentObject, $strTableKey, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup a QTextBox txtTableKey
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTableKey_Create($strControlId = null) {
			$this->txtTableKey = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTableKey->Name = QApplication::Translate('Table Key');
			$this->txtTableKey->Required = true;
			$this->txtTableKey->MaxLength = QcWatchers::TableKeyMaxLength;
			$this->txtTableKey->PreferredRenderMethod = 'RenderWithName';
			$this->txtTableKey->LinkedNode = QQN::QcWatchers()->TableKey;
			$this->txtTableKey->Text = $this->objQcWatchers->TableKey;
			return $this->txtTableKey;
		}

		/**
		 * Create and setup QLabel lblTableKey
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTableKey_Create($strControlId = null) {
			$this->lblTableKey = new QLabel($this->objParentObject, $strControlId);
			$this->lblTableKey->Name = QApplication::Translate('Table Key');
			$this->lblTableKey->PreferredRenderMethod = 'RenderWithName';
			$this->lblTableKey->LinkedNode = QQN::QcWatchers()->TableKey;
			$this->lblTableKey->Text = $this->objQcWatchers->TableKey;
			return $this->lblTableKey;
		}



		/**
		 * Create and setup a QTextBox txtTs
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTs_Create($strControlId = null) {
			$this->txtTs = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTs->Name = QApplication::Translate('Ts');
			$this->txtTs->Required = true;
			$this->txtTs->MaxLength = QcWatchers::TsMaxLength;
			$this->txtTs->PreferredRenderMethod = 'RenderWithName';
			$this->txtTs->LinkedNode = QQN::QcWatchers()->Ts;
			$this->txtTs->Text = $this->objQcWatchers->Ts;
			return $this->txtTs;
		}

		/**
		 * Create and setup QLabel lblTs
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTs_Create($strControlId = null) {
			$this->lblTs = new QLabel($this->objParentObject, $strControlId);
			$this->lblTs->Name = QApplication::Translate('Ts');
			$this->lblTs->PreferredRenderMethod = 'RenderWithName';
			$this->lblTs->LinkedNode = QQN::QcWatchers()->Ts;
			$this->lblTs->Text = $this->objQcWatchers->Ts;
			return $this->lblTs;
		}





		/**
		 * Refresh this ModelConnector with Data from the local QcWatchers object.
		 * @param boolean $blnReload reload QcWatchers from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objQcWatchers); // Notify in development version
			if (!($this->objQcWatchers)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objQcWatchers->Reload();
			}
			if ($this->txtTableKey) $this->txtTableKey->Text = $this->objQcWatchers->TableKey;
			if ($this->lblTableKey) $this->lblTableKey->Text = $this->objQcWatchers->TableKey;


			if ($this->txtTs) $this->txtTs->Text = $this->objQcWatchers->Ts;
			if ($this->lblTs) $this->lblTs->Text = $this->objQcWatchers->Ts;


		}

		/**
		 * Load this ModelConnector with a QcWatchers object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|string $strTableKey
		 * @param $objClauses
		 * @return null|QcWatchers
		 */
		 public function Load($strTableKey = null, $objClauses = null) {
			if (strlen($strTableKey)) {
				$this->objQcWatchers = QcWatchers::Load($strTableKey, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objQcWatchers = new QcWatchers();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objQcWatchers) {
				$this->Refresh ();
			}
			return $this->objQcWatchers;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC QCWATCHERS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's QcWatchers instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateQcWatchers() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTableKey) $this->objQcWatchers->TableKey = $this->txtTableKey->Text;

				if ($this->txtTs) $this->objQcWatchers->Ts = $this->txtTs->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's QcWatchers instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveQcWatchers() {
			try {
				$this->UpdateQcWatchers();

				// Save the QcWatchers object
				$id = $this->objQcWatchers->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's QcWatchers instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteQcWatchers() {
			$this->objQcWatchers->Delete();
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
				case 'QcWatchers': return $this->objQcWatchers;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to QcWatchers fields -- will be created dynamically if not yet created
				case 'TableKeyControl':
					if (!$this->txtTableKey) return $this->txtTableKey_Create();
					return $this->txtTableKey;
				case 'TableKeyLabel':
					if (!$this->lblTableKey) return $this->lblTableKey_Create();
					return $this->lblTableKey;
				case 'TsControl':
					if (!$this->txtTs) return $this->txtTs_Create();
					return $this->txtTs;
				case 'TsLabel':
					if (!$this->lblTs) return $this->lblTs_Create();
					return $this->lblTs;
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

					// Controls that point to QcWatchers fields
					case 'TableKeyControl':
						return ($this->txtTableKey = QType::Cast($mixValue, 'QTextBox'));
					case 'TableKeyLabel':
						return ($this->lblTableKey = QType::Cast($mixValue, 'QLabel'));
					case 'TsControl':
						return ($this->txtTs = QType::Cast($mixValue, 'QTextBox'));
					case 'TsLabel':
						return ($this->lblTs = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}