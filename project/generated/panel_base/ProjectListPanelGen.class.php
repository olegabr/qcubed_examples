<?php



/**
 * This is the base list class for the  Project class.
 *
 * Do not edit this file, this file is overwritten on any code regenerations. Make any changes you need to the subclass.
 *
 * @package My QCubed Application
 * @subpackage PanelBaseObjects
 */
abstract class ProjectListPanelGen extends QPanel {
	/** @var QPanel **/
	protected $pnlFilter;

	/** @var QTextBox **/
	protected $txtFilter;

	/** @var QPanel **/
	protected $pnlButtons;

	/** @var QButton **/
	protected $btnNew;

	/** @var ProjectList **/
	protected $dtgProjects;


	public function __construct($objParent, $strControlId = null) {
		parent::__construct($objParent, $strControlId);

		$this->CreateFilterPanel();
		$this->dtgProjects_Create();
		$this->dtgProjects->SetDataBinder('BindData', $this);
		$this->CreateButtonPanel();
	}

   /**
	* Creates the data grid and prepares it to be row clickable. Override for additional creation operations.
	**/
	protected function dtgProjects_Create() {
		$this->dtgProjects = new ProjectList($this);
		$this->dtgProjects_CreateColumns();
		$this->dtgProjects_MakeEditable();
		$this->dtgProjects->RowParamsCallback = [$this, "dtgProjects_GetRowParams"];
			$this->dtgProjects->LinkedNode = QQN::Project();
	}

   /**
	* Calls the list connector to add the columns. Override to customize column creation.
	**/
	protected function dtgProjects_CreateColumns() {
		$this->dtgProjects->CreateColumns();
	}

	protected function dtgProjects_MakeEditable() {
		$this->dtgProjects->AddAction(new QCellClickEvent(), new QAjaxControlAction($this, 'dtgProjects_CellClick', null, null, '$j(this).parent().data("value")'));
		$this->dtgProjects->AddCssClass('clickable-rows');
	}

	protected function dtgProjects_CellClick($strFormId, $strControlId, $strParameter) {
		if ($strParameter) {
			$this->EditItem($strParameter);
		}
	}
	public function dtgProjects_GetRowParams($objRowObject, $intRowIndex) {
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
		$this->dtgProjects->Refresh();
	}

	/**
	 *	Bind Data to the list control.
	 **/
	public function BindData() {
		$objCondition = $this->GetCondition();
		$this->dtgProjects->BindData($objCondition);
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
				QQ::Equal(QQN::Project()->Id, $strSearchValue),
            QQ::Equal(QQN::Project()->ProjectStatusTypeId, $strSearchValue),
            QQ::Equal(QQN::Project()->ManagerPersonId, $strSearchValue),
            QQ::Like(QQN::Project()->Name, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Project()->Description, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Project()->Budget, "%" . $strSearchValue . "%"),
            QQ::Like(QQN::Project()->Spent, "%" . $strSearchValue . "%")
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
		$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORMS__ . '/project_edit.php' . $strQuery;
		QApplication::Redirect ($strEditPageUrl);
	}

}