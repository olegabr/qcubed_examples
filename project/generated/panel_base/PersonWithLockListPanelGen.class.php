<?php



/**
 * This is the base list class for the  PersonWithLock class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class PersonWithLockListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var PersonWithLockList **/
	protected $dtgPersonWithLocks;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgPersonWithLocks_Create();
		$this->dtgPersonWithLocks->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgPersonWithLocks_Create() {
		$this->dtgPersonWithLocks = new PersonWithLockList($this);
		$this->dtgPersonWithLocks_CreateColumns();
		$this->dtgPersonWithLocks_MakeEditable();
		$this->dtgPersonWithLocks->RowParamsCallback = [$this, "dtgPersonWithLocks_GetRowParams"];
			$this->dtgPersonWithLocks->LinkedNode = QQN::PersonWithLock();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgPersonWithLocks_CreateColumns() {
		$this->dtgPersonWithLocks->CreateColumns();
	}

	protected function dtgPersonWithLocks_MakeEditable() {
		$this->dtgPersonWithLocks->AddAction(new QCellClickEvent(), new QAjaxControlAction($this, 'dtgPersonWithLocks_CellClick', null, null, '$j(this).parent().data("value")'));
		$this->dtgPersonWithLocks->AddCssClass('clickable-rows');
	}

	protected function dtgPersonWithLocks_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgPersonWithLocks_GetRowParams($objRowObject, $intRowIndex) {
		$strKey = $objRowObject->PrimaryKey();
		$params['data-value'] = $strKey;
		return $params;
	}

	/**
	 *
	 **/
	protected function CreateFilterPanel() {
		$this->pnlFilter = new QPanel($this);	// div wrapper for filter objects
		$this->pnlFilter->AutoRenderChildren = true;

		$this->txtFilter = new QTextBox($this->pnlFilter);
		$this->txtFilter->Placeholder = QApplication::Translate('Search...');
		$this->txtFilter->TextMode = QTextMode::Search;
		$this->AddFilterActions();
	}

	protected function AddFilterActions() {
		$this->txtFilter->AddAction(new QInputEvent(300), new QAjaxControlAction ($this, 'FilterChanged'));
		$this->txtFilter->AddActionArray(new QEnterKeyEvent(),
			[
				new QAjaxControlAction($this, 'FilterChanged'),
				new QTerminateAction()
			]
		);
	}

	protected function FilterChanged() {
		$this->dtgPersonWithLocks->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgPersonWithLocks->BindData($objCondition);
	}


	/**
	 *  Get the condition for the data binder.
	 *  @return QQCondition;
	 **/
	protected function GetCondition() {
		$strSearchValue = $this->txtFilter->Text;
		$strSearchValue = trim($strSearchValue);

		if (is_null($strSearchValue) || $strSearchValue === '') {
			 return QQ::All();
		} else {
			return QQ::OrCondition(
				QQ::Equal(QQN::PersonWithLock()->Id, $strSearchValue),
            QQ::Like(QQN::PersonWithLock()->FirstName, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::PersonWithLock()->LastName, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::PersonWithLock()->SysTimestamp, "%" . $strSearchValue . "%")
			);
		}

	}



	/**
	 *
	 **/
	protected function CreateButtonPanel() {
		$this->pnlButtons = new QPanel ($this);
		$this->pnlButtons->AutoRenderChildren = true;

		$this->btnNew = new QJqButton ($this->pnlButtons);
		$this->btnNew->Text = QApplication::Translate ('New');
		$this->btnNew->AddAction (new QClickEvent(), new QAjaxControlAction ($this, 'btnNew_Click'));
	}

	protected function btnNew_Click($strFormId, $strControlId, $strParameter) {
		$this->EditItem();
	}

	protected function EditItem ($strKey = null) {
		$strQuery = '';
		if ($strKey) {
			$strQuery =  '?intId=' . $strKey;
		}
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/person_with_lock_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}
