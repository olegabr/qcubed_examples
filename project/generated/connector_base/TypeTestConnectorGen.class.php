<?php
	/**
	 * This is a ModelConnector class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TypeTest class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TypeTest object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TypeTestConnector
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage ModelConnector
	 * @property-read TypeTest $TypeTest the actual TypeTest data class being edited
	 * @property-read QLabel $IdLabel
	 * @property QDateTimePicker $DateControl
	 * @property-read QLabel $DateLabel
	 * @property QDateTimePicker $TimeControl
	 * @property-read QLabel $TimeLabel
	 * @property QDateTimePicker $DateTimeControl
	 * @property-read QLabel $DateTimeLabel
	 * @property QIntegerTextBox $TestIntControl
	 * @property-read QLabel $TestIntLabel
	 * @property QFloatTextBox $TestFloatControl
	 * @property-read QLabel $TestFloatLabel
	 * @property QTextBox $TestTextControl
	 * @property-read QLabel $TestTextLabel
	 * @property QCheckBox $TestBitControl
	 * @property-read QLabel $TestBitLabel
	 * @property QTextBox $TestVarcharControl
	 * @property-read QLabel $TestVarcharLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TypeTestConnectorGen extends QBaseClass {
		// General Variables
		/**
		 * @var TypeTest objTypeTest
		 * @access protected
		 */
		protected $objTypeTest;
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

		// Controls that correspond to TypeTest's individual data fields
		/**
		 * @var QLabel lblId
		 * @access protected
		 */
		protected $lblId;

		/**
		 * @var QDateTimePicker calDate

		 * @access protected
		 */
		protected $calDate;

		/**
		 * @var QLabel lblDate
		 * @access protected
		 */
		protected $lblDate;

		/**
		* @var strDateDateTimeFormat
		* @access protected
		*/
		protected $strDateDateTimeFormat;
		/**
		 * @var QDateTimePicker calTime

		 * @access protected
		 */
		protected $calTime;

		/**
		 * @var QLabel lblTime
		 * @access protected
		 */
		protected $lblTime;

		/**
		* @var strTimeDateTimeFormat
		* @access protected
		*/
		protected $strTimeDateTimeFormat;
		/**
		 * @var QDateTimePicker calDateTime

		 * @access protected
		 */
		protected $calDateTime;

		/**
		 * @var QLabel lblDateTime
		 * @access protected
		 */
		protected $lblDateTime;

		/**
		* @var strDateTimeDateTimeFormat
		* @access protected
		*/
		protected $strDateTimeDateTimeFormat;
		/**
		 * @var QIntegerTextBox txtTestInt

		 * @access protected
		 */
		protected $txtTestInt;

		/**
		 * @var QLabel lblTestInt
		 * @access protected
		 */
		protected $lblTestInt;

		/**
		 * @var QFloatTextBox txtTestFloat

		 * @access protected
		 */
		protected $txtTestFloat;

		/**
		 * @var QLabel lblTestFloat
		 * @access protected
		 */
		protected $lblTestFloat;

		/**
		 * @var QTextBox txtTestText

		 * @access protected
		 */
		protected $txtTestText;

		/**
		 * @var QLabel lblTestText
		 * @access protected
		 */
		protected $lblTestText;

		/**
		 * @var QCheckBox chkTestBit

		 * @access protected
		 */
		protected $chkTestBit;

		/**
		 * @var QLabel lblTestBit
		 * @access protected
		 */
		protected $lblTestBit;

		/**
		 * @var QTextBox txtTestVarchar

		 * @access protected
		 */
		protected $txtTestVarchar;

		/**
		 * @var QLabel lblTestVarchar
		 * @access protected
		 */
		protected $lblTestVarchar;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TypeTestConnector to edit a single TypeTest object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TypeTest object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TypeTestConnector
		 * @param TypeTest $objTypeTest new or existing TypeTest object
		 */
		 public function __construct($objParentObject, TypeTest $objTypeTest) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TypeTestConnector)
			$this->objParentObject = $objParentObject;

			// Setup linked TypeTest object
			$this->objTypeTest = $objTypeTest;

			// Figure out if we're Editing or Creating New
			if ($this->objTypeTest->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TypeTestConnector
		 * @param null|integer $intId primary key value
		 * @param integer $intCreateType rules governing TypeTest object creation - defaults to CreateOrEdit
 		 * @return TypeTestConnector
		 * @throws QCallerException
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objTypeTest = TypeTest::Load($intId);

				// TypeTest was found -- return it!
				if ($objTypeTest)
					return new TypeTestConnector($objParentObject, $objTypeTest);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QModelConnectorCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TypeTest object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QModelConnectorCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TypeTestConnector($objParentObject, new TypeTest());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TypeTestConnector
		 * @param integer $intCreateType rules governing TypeTest object creation - defaults to CreateOrEdit
		 * @return TypeTestConnector
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return TypeTestConnector::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TypeTestConnector
		 * @param integer $intCreateType rules governing TypeTest object creation - defaults to CreateOrEdit
		 * @return TypeTestConnector
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QModelConnectorCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return TypeTestConnector::Create($objParentObject, $intId, $intCreateType);
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
			$this->lblId->LinkedNode = QQN::TypeTest()->Id;
			$this->lblId->Text =  $this->blnEditMode ? $this->objTypeTest->Id : QApplication::Translate('N\A');
			return $this->lblId;
		}



		/**
		 * Create and setup a QDateTimePicker calDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDate_Create($strControlId = null) {
			$this->calDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDate->Name = QApplication::Translate('Date');
			$this->calDate->DateTime = $this->objTypeTest->Date;
			$this->calDate->DateTimePickerType = QDateTimePickerType::Date;
			$this->calDate->PreferredRenderMethod = 'RenderWithName';
			$this->calDate->LinkedNode = QQN::TypeTest()->Date;
			return $this->calDate;
		}

		/**
		 * Create and setup QLabel lblDate
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblDate->Name = QApplication::Translate('Date');
			$this->strDateDateTimeFormat = $strDateTimeFormat;
			$this->lblDate->PreferredRenderMethod = 'RenderWithName';
			$this->lblDate->LinkedNode = QQN::TypeTest()->Date;
			$this->lblDate->Text = $this->objTypeTest->Date ? $this->objTypeTest->Date->qFormat($this->strDateDateTimeFormat) : null;
			return $this->lblDate;
		}



		/**
		 * Create and setup a QDateTimePicker calTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calTime_Create($strControlId = null) {
			$this->calTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTime->Name = QApplication::Translate('Time');
			$this->calTime->DateTime = $this->objTypeTest->Time;
			$this->calTime->DateTimePickerType = QDateTimePickerType::Time;
			$this->calTime->PreferredRenderMethod = 'RenderWithName';
			$this->calTime->LinkedNode = QQN::TypeTest()->Time;
			return $this->calTime;
		}

		/**
		 * Create and setup QLabel lblTime
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblTime_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblTime->Name = QApplication::Translate('Time');
			$this->strTimeDateTimeFormat = $strDateTimeFormat;
			$this->lblTime->PreferredRenderMethod = 'RenderWithName';
			$this->lblTime->LinkedNode = QQN::TypeTest()->Time;
			$this->lblTime->Text = $this->objTypeTest->Time ? $this->objTypeTest->Time->qFormat($this->strTimeDateTimeFormat) : null;
			return $this->lblTime;
		}



		/**
		 * Create and setup a QDateTimePicker calDateTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateTime_Create($strControlId = null) {
			$this->calDateTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateTime->Name = QApplication::Translate('Date Time');
			$this->calDateTime->DateTime = $this->objTypeTest->DateTime;
			$this->calDateTime->DateTimePickerType = QDateTimePickerType::DateTime;
			$this->calDateTime->PreferredRenderMethod = 'RenderWithName';
			$this->calDateTime->LinkedNode = QQN::TypeTest()->DateTime;
			return $this->calDateTime;
		}

		/**
		 * Create and setup QLabel lblDateTime
		 *
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat
		 * @return QLabel
		 */
		public function lblDateTime_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateTime->Name = QApplication::Translate('Date Time');
			$this->strDateTimeDateTimeFormat = $strDateTimeFormat;
			$this->lblDateTime->PreferredRenderMethod = 'RenderWithName';
			$this->lblDateTime->LinkedNode = QQN::TypeTest()->DateTime;
			$this->lblDateTime->Text = $this->objTypeTest->DateTime ? $this->objTypeTest->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;
			return $this->lblDateTime;
		}



		/**
		 * Create and setup a QIntegerTextBox txtTestInt
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtTestInt_Create($strControlId = null) {
			$this->txtTestInt = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTestInt->Name = QApplication::Translate('Test Int');
			$this->txtTestInt->PreferredRenderMethod = 'RenderWithName';
			$this->txtTestInt->LinkedNode = QQN::TypeTest()->TestInt;
			$this->txtTestInt->Text = $this->objTypeTest->TestInt;
			return $this->txtTestInt;
		}

		/**
		 * Create and setup QLabel lblTestInt
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTestInt_Create($strControlId = null) {
			$this->lblTestInt = new QLabel($this->objParentObject, $strControlId);
			$this->lblTestInt->Name = QApplication::Translate('Test Int');
			$this->lblTestInt->PreferredRenderMethod = 'RenderWithName';
			$this->lblTestInt->LinkedNode = QQN::TypeTest()->TestInt;
			$this->lblTestInt->Text = $this->objTypeTest->TestInt;
			return $this->lblTestInt;
		}



		/**
		 * Create and setup a QFloatTextBox txtTestFloat
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtTestFloat_Create($strControlId = null) {
			$this->txtTestFloat = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtTestFloat->Name = QApplication::Translate('Test Float');
			$this->txtTestFloat->PreferredRenderMethod = 'RenderWithName';
			$this->txtTestFloat->LinkedNode = QQN::TypeTest()->TestFloat;
			$this->txtTestFloat->Text = $this->objTypeTest->TestFloat;
			return $this->txtTestFloat;
		}

		/**
		 * Create and setup QLabel lblTestFloat
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTestFloat_Create($strControlId = null) {
			$this->lblTestFloat = new QLabel($this->objParentObject, $strControlId);
			$this->lblTestFloat->Name = QApplication::Translate('Test Float');
			$this->lblTestFloat->PreferredRenderMethod = 'RenderWithName';
			$this->lblTestFloat->LinkedNode = QQN::TypeTest()->TestFloat;
			$this->lblTestFloat->Text = $this->objTypeTest->TestFloat;
			return $this->lblTestFloat;
		}



		/**
		 * Create and setup a QTextBox txtTestText
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTestText_Create($strControlId = null) {
			$this->txtTestText = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTestText->Name = QApplication::Translate('Test Text');
			$this->txtTestText->TextMode = QTextMode::MultiLine;
			$this->txtTestText->PreferredRenderMethod = 'RenderWithName';
			$this->txtTestText->LinkedNode = QQN::TypeTest()->TestText;
			$this->txtTestText->Text = $this->objTypeTest->TestText;
			return $this->txtTestText;
		}

		/**
		 * Create and setup QLabel lblTestText
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTestText_Create($strControlId = null) {
			$this->lblTestText = new QLabel($this->objParentObject, $strControlId);
			$this->lblTestText->Name = QApplication::Translate('Test Text');
			$this->lblTestText->PreferredRenderMethod = 'RenderWithName';
			$this->lblTestText->LinkedNode = QQN::TypeTest()->TestText;
			$this->lblTestText->Text = $this->objTypeTest->TestText;
			return $this->lblTestText;
		}



		/**
		 * Create and setup a QCheckBox chkTestBit
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkTestBit_Create($strControlId = null) {
			$this->chkTestBit = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkTestBit->Name = QApplication::Translate('Test Bit');
			$this->chkTestBit->Checked = $this->objTypeTest->TestBit;
			$this->chkTestBit->PreferredRenderMethod = 'RenderWithName';
			$this->chkTestBit->LinkedNode = QQN::TypeTest()->TestBit;
			return $this->chkTestBit;
		}

		/**
		 * Create and setup QLabel lblTestBit
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTestBit_Create($strControlId = null) {
			$this->lblTestBit = new QLabel($this->objParentObject, $strControlId);
			$this->lblTestBit->Name = QApplication::Translate('Test Bit');
			$this->lblTestBit->PreferredRenderMethod = 'RenderWithName';
			$this->lblTestBit->LinkedNode = QQN::TypeTest()->TestBit;
			$this->lblTestBit->Text = $this->objTypeTest->TestBit ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblTestBit;
		}



		/**
		 * Create and setup a QTextBox txtTestVarchar
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTestVarchar_Create($strControlId = null) {
			$this->txtTestVarchar = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTestVarchar->Name = QApplication::Translate('Test Varchar');
			$this->txtTestVarchar->MaxLength = TypeTest::TestVarcharMaxLength;
			$this->txtTestVarchar->PreferredRenderMethod = 'RenderWithName';
			$this->txtTestVarchar->LinkedNode = QQN::TypeTest()->TestVarchar;
			$this->txtTestVarchar->Text = $this->objTypeTest->TestVarchar;
			return $this->txtTestVarchar;
		}

		/**
		 * Create and setup QLabel lblTestVarchar
		 *
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTestVarchar_Create($strControlId = null) {
			$this->lblTestVarchar = new QLabel($this->objParentObject, $strControlId);
			$this->lblTestVarchar->Name = QApplication::Translate('Test Varchar');
			$this->lblTestVarchar->PreferredRenderMethod = 'RenderWithName';
			$this->lblTestVarchar->LinkedNode = QQN::TypeTest()->TestVarchar;
			$this->lblTestVarchar->Text = $this->objTypeTest->TestVarchar;
			return $this->lblTestVarchar;
		}





		/**
		 * Refresh this ModelConnector with Data from the local TypeTest object.
		 * @param boolean $blnReload reload TypeTest from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			assert($this->objTypeTest); // Notify in development version
			if (!($this->objTypeTest)) return; // Quietly fail in production

			if ($blnReload) {
				$this->objTypeTest->Reload();
			}
			if ($this->lblId) $this->lblId->Text =  $this->blnEditMode ? $this->objTypeTest->Id : QApplication::Translate('N\A');


			if ($this->calDate) $this->calDate->DateTime = $this->objTypeTest->Date;
			if ($this->lblDate) $this->lblDate->Text = $this->objTypeTest->Date ? $this->objTypeTest->Date->qFormat($this->strDateDateTimeFormat) : null;


			if ($this->calTime) $this->calTime->DateTime = $this->objTypeTest->Time;
			if ($this->lblTime) $this->lblTime->Text = $this->objTypeTest->Time ? $this->objTypeTest->Time->qFormat($this->strTimeDateTimeFormat) : null;


			if ($this->calDateTime) $this->calDateTime->DateTime = $this->objTypeTest->DateTime;
			if ($this->lblDateTime) $this->lblDateTime->Text = $this->objTypeTest->DateTime ? $this->objTypeTest->DateTime->qFormat($this->strDateTimeDateTimeFormat) : null;


			if ($this->txtTestInt) $this->txtTestInt->Text = $this->objTypeTest->TestInt;
			if ($this->lblTestInt) $this->lblTestInt->Text = $this->objTypeTest->TestInt;


			if ($this->txtTestFloat) $this->txtTestFloat->Text = $this->objTypeTest->TestFloat;
			if ($this->lblTestFloat) $this->lblTestFloat->Text = $this->objTypeTest->TestFloat;


			if ($this->txtTestText) $this->txtTestText->Text = $this->objTypeTest->TestText;
			if ($this->lblTestText) $this->lblTestText->Text = $this->objTypeTest->TestText;


			if ($this->chkTestBit) $this->chkTestBit->Checked = $this->objTypeTest->TestBit;
			if ($this->lblTestBit) $this->lblTestBit->Text = $this->objTypeTest->TestBit ? QApplication::Translate('Yes') : QApplication::Translate('No');


			if ($this->txtTestVarchar) $this->txtTestVarchar->Text = $this->objTypeTest->TestVarchar;
			if ($this->lblTestVarchar) $this->lblTestVarchar->Text = $this->objTypeTest->TestVarchar;


		}

		/**
		 * Load this ModelConnector with a TypeTest object. Returns the object found, or null if not
		 * successful. The primary reason for failure would be that the key given does not exist in the database. This
		 * might happen due to a programming error, or in a multi-user environment, if the record was recently deleted.
		 * @param null|integer $intId
		 * @param $objClauses
		 * @return null|TypeTest
		 */
		 public function Load($intId = null, $objClauses = null) {
			if (!is_null($intId)) {
				$this->objTypeTest = TypeTest::Load($intId, $objClauses);
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			}
			else {
				$this->objTypeTest = new TypeTest();
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
			if ($this->objTypeTest) {
				$this->Refresh ();
			}
			return $this->objTypeTest;
		}
		 



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TYPETEST OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		* This will update this object's TypeTest instance,
		* updating only the fields which have had a control created for it.
		*/
		public function UpdateTypeTest() {
			try {
				// Update any fields for controls that have been created

				if ($this->calDate) $this->objTypeTest->Date = $this->calDate->DateTime;

				if ($this->calTime) $this->objTypeTest->Time = $this->calTime->DateTime;

				if ($this->calDateTime) $this->objTypeTest->DateTime = $this->calDateTime->DateTime;

				if ($this->txtTestInt) $this->objTypeTest->TestInt = $this->txtTestInt->Text;

				if ($this->txtTestFloat) $this->objTypeTest->TestFloat = $this->txtTestFloat->Text;

				if ($this->txtTestText) $this->objTypeTest->TestText = $this->txtTestText->Text;

				if ($this->chkTestBit) $this->objTypeTest->TestBit = $this->chkTestBit->Checked;

				if ($this->txtTestVarchar) $this->objTypeTest->TestVarchar = $this->txtTestVarchar->Text;


				// Update any UniqueReverseReferences for controls that have been created for it

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


		/**
		 * This will save this object's TypeTest instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTypeTest() {
			try {
				$this->UpdateTypeTest();

				// Save the TypeTest object
				$id = $this->objTypeTest->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			return $id;
		}

		/**
		 * This will DELETE this object's TypeTest instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTypeTest() {
			$this->objTypeTest->Delete();
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
				case 'TypeTest': return $this->objTypeTest;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TypeTest fields -- will be created dynamically if not yet created
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'DateControl':
					if (!$this->calDate) return $this->calDate_Create();
					return $this->calDate;
				case 'DateLabel':
					if (!$this->lblDate) return $this->lblDate_Create();
					return $this->lblDate;
				case 'TimeControl':
					if (!$this->calTime) return $this->calTime_Create();
					return $this->calTime;
				case 'TimeLabel':
					if (!$this->lblTime) return $this->lblTime_Create();
					return $this->lblTime;
				case 'DateTimeControl':
					if (!$this->calDateTime) return $this->calDateTime_Create();
					return $this->calDateTime;
				case 'DateTimeLabel':
					if (!$this->lblDateTime) return $this->lblDateTime_Create();
					return $this->lblDateTime;
				case 'TestIntControl':
					if (!$this->txtTestInt) return $this->txtTestInt_Create();
					return $this->txtTestInt;
				case 'TestIntLabel':
					if (!$this->lblTestInt) return $this->lblTestInt_Create();
					return $this->lblTestInt;
				case 'TestFloatControl':
					if (!$this->txtTestFloat) return $this->txtTestFloat_Create();
					return $this->txtTestFloat;
				case 'TestFloatLabel':
					if (!$this->lblTestFloat) return $this->lblTestFloat_Create();
					return $this->lblTestFloat;
				case 'TestTextControl':
					if (!$this->txtTestText) return $this->txtTestText_Create();
					return $this->txtTestText;
				case 'TestTextLabel':
					if (!$this->lblTestText) return $this->lblTestText_Create();
					return $this->lblTestText;
				case 'TestBitControl':
					if (!$this->chkTestBit) return $this->chkTestBit_Create();
					return $this->chkTestBit;
				case 'TestBitLabel':
					if (!$this->lblTestBit) return $this->lblTestBit_Create();
					return $this->lblTestBit;
				case 'TestVarcharControl':
					if (!$this->txtTestVarchar) return $this->txtTestVarchar_Create();
					return $this->txtTestVarchar;
				case 'TestVarcharLabel':
					if (!$this->lblTestVarchar) return $this->lblTestVarchar_Create();
					return $this->lblTestVarchar;
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

					// Controls that point to TypeTest fields
					case 'IdLabel':
						return ($this->lblId = QType::Cast($mixValue, 'QLabel'));
					case 'DateControl':
						return ($this->calDate = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'DateLabel':
						return ($this->lblDate = QType::Cast($mixValue, 'QLabel'));
					case 'TimeControl':
						return ($this->calTime = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'TimeLabel':
						return ($this->lblTime = QType::Cast($mixValue, 'QLabel'));
					case 'DateTimeControl':
						return ($this->calDateTime = QType::Cast($mixValue, 'QDateTimePicker'));
					case 'DateTimeLabel':
						return ($this->lblDateTime = QType::Cast($mixValue, 'QLabel'));
					case 'TestIntControl':
						return ($this->txtTestInt = QType::Cast($mixValue, 'QIntegerTextBox'));
					case 'TestIntLabel':
						return ($this->lblTestInt = QType::Cast($mixValue, 'QLabel'));
					case 'TestFloatControl':
						return ($this->txtTestFloat = QType::Cast($mixValue, 'QFloatTextBox'));
					case 'TestFloatLabel':
						return ($this->lblTestFloat = QType::Cast($mixValue, 'QLabel'));
					case 'TestTextControl':
						return ($this->txtTestText = QType::Cast($mixValue, 'QTextBox'));
					case 'TestTextLabel':
						return ($this->lblTestText = QType::Cast($mixValue, 'QLabel'));
					case 'TestBitControl':
						return ($this->chkTestBit = QType::Cast($mixValue, 'QCheckBox'));
					case 'TestBitLabel':
						return ($this->lblTestBit = QType::Cast($mixValue, 'QLabel'));
					case 'TestVarcharControl':
						return ($this->txtTestVarchar = QType::Cast($mixValue, 'QTextBox'));
					case 'TestVarcharLabel':
						return ($this->lblTestVarchar = QType::Cast($mixValue, 'QLabel'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}