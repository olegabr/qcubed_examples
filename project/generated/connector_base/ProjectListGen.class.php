<?php
/**
 * This is the generated connector class for the List functionality
 * of the Project class.  This code-generated class
 * subclasses a Project class and can be used to display
 * a collection of Project objects.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create an instance of this object in a QForm or QPanel.
 *
 * Any and all changes to this file will be overwritten with any subsequent re-
 * code generation.
 *
 * @package My QCubed Application
 * @property QQCondition 	$Condition Any condition to use during binding
 * @property QQClauses 		$Clauses Any clauses to use during binding
 * @subpackage ModelConnector
 *
 */

class ProjectListGen extends QDataGrid {
	/**
	 * @var null|QQCondition	Condition to use to filter the list.
	 * @access protected
	 */
	protected $objCondition;

	/**
	 * @var null|QQClause[]		Clauses to attach to the query.
	 * @access protected
	 */
	protected $objClauses;

	// Publicly accessible columns that allow parent controls to directly manipulate them after creation.
	/** @var QHtmlTableNodeColumn */
	public $colId;
	/** @var QHtmlTableNodeColumn */
	public $colProjectStatusType;
	/** @var QHtmlTableNodeColumn */
	public $colManagerPerson;
	/** @var QHtmlTableNodeColumn */
	public $colName;
	/** @var QHtmlTableNodeColumn */
	public $colDescription;
	/** @var QHtmlTableNodeColumn */
	public $colStartDate;
	/** @var QHtmlTableNodeColumn */
	public $colEndDate;
	/** @var QHtmlTableNodeColumn */
	public $colBudget;
	/** @var QHtmlTableNodeColumn */
	public $colSpent;


	/**
	 * QDataGrid constructor. The default creates a paginator, sets a default data binder, and sets the grid up
	 * watch the data. Columns are set up by the parent control. Feel free to override the constructor to do things differently.
	 *
	 * @param QControl|QForm $objParent
	 * @param null|string $strControlId
	 */
	public function __construct($objParent, $strControlId = false) {
		parent::__construct($objParent, $strControlId);
		$this->CreatePaginator();
		$this->SetDataBinder('BindData', $this);
		$this->Watch(QQN::Project());
	}

	/**
	 * Creates the paginator. Override to add an additional paginator, or to remove it.
	 */
	protected function CreatePaginator() {
		$this->Paginator = new QPaginator($this);
		$this->ItemsPerPage = __FORM_LIST_ITEMS_PER_PAGE__;
	}
	/**
	 * Creates the columns for the table. Override to customize, or use the ModelConnectorEditor to turn on and off 
	 * individual columns. This is a public function and called by the parent control.
	 */
	public function CreateColumns() {
		$this->colId = $this->CreateNodeColumn("Id", QQN::Project()->Id);
		$this->colProjectStatusType = $this->CreateNodeColumn("Project Status Type", QQN::Project()->ProjectStatusType);
		$this->colManagerPerson = $this->CreateNodeColumn("Manager Person", QQN::Project()->ManagerPerson);
		$this->colName = $this->CreateNodeColumn("Name", QQN::Project()->Name);
		$this->colDescription = $this->CreateNodeColumn("Description", QQN::Project()->Description);
		$this->colStartDate = $this->CreateNodeColumn("Start Date", QQN::Project()->StartDate);
		$this->colEndDate = $this->CreateNodeColumn("End Date", QQN::Project()->EndDate);
		$this->colBudget = $this->CreateNodeColumn("Budget", QQN::Project()->Budget);
		$this->colSpent = $this->CreateNodeColumn("Spent", QQN::Project()->Spent);
	}

   /**
	* Called by the framework to access the data for the control and load it into the table. By default, this function will be
	* the data binder for the control, with no additional conditions or clauses. To change what data is displayed in the list,
	* you have many options:
	* - Override this method in the Connector.
	* - Set ->Condition and ->Clauses properties for semi-permanent conditions and clauses
	* - Override the GetCondition and GetClauses methods in the Connector.
	* - For situations where the data might change every time you draw, like if the data is filtered by other controls,
	*   you should call SetDataBinder after the parent creates this control, and in your custom data binder, call this function,
	*   passing in the conditions and clauses you want this data binder to use.
	*
	*	This binder will automatically add the orderby and limit clauses from the paginator, if present.
	**/
	public function BindData($objAdditionalCondition = null, $objAdditionalClauses = null) {
		$objCondition = $this->GetCondition($objAdditionalCondition);
		$objClauses = $this->GetClauses($objAdditionalClauses);

		if ($this->Paginator) {
			$this->TotalItemCount = Project::QueryCount($objCondition, $objClauses);
		}

		// If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
		// the OrderByClause to the $objClauses array
		if ($objClause = $this->OrderByClause) {
			$objClauses[] = $objClause;
		}

		// Add the LimitClause information, as well
		if ($objClause = $this->LimitClause) {
			$objClauses[] = $objClause;
		}

		$this->DataSource = Project::QueryArray($objCondition, $objClauses);
	}

	/**
	 * Returns the condition to use when querying the data. Default is to return the condition put in the local
	 * objCondition member variable. You can also override this to return a condition. 
	 *
	 * @return QQCondition
	 */
	protected function GetCondition($objAdditionalCondition = null) {
		// Get passed in condition, possibly coming from subclass or enclosing control or form
		$objCondition = $objAdditionalCondition;
		if (!$objCondition) {
			$objCondition = QQ::All();
		}
		// Get condition more permanently bound
		if ($this->objCondition) {
			$objCondition = QQ::AndCondition($objCondition, $this->objCondition);
		}

		return $objCondition;
	}

	/**
	 * Returns the clauses to use when querying the data. Default is to return the clauses put in the local
	 * objClauses member variable. You can also override this to return clauses.
	 *
	 * @return QQClause[]
	 */
	protected function GetClauses($objAdditionalClauses = null) {
		$objClauses = $objAdditionalClauses;
		if (!$objClauses) {
			$objClauses = [];
		}
		if ($this->objClauses) {
			$objClauses = array_merge($objClauses, $this->objClauses);
		}

		return $objClauses;
	}

	/**
	 * This will get the value of $strName
	 *
	 * @param string $strName Name of the property to get
	 * @return mixed
	 */
	public function __get($strName) {
		switch ($strName) {
			case 'Condition':
				return $this->objCondition;
			case 'Clauses':
				return $this->objClauses;
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
	 * This will set the property $strName to be $mixValue
	 *
	 * @param string $strName Name of the property to set
	 * @param string $mixValue New value of the property
	 * @return mixed
	 */
	public function __set($strName, $mixValue) {
		switch ($strName) {
			case 'Condition':
				try {
					$this->objCondition = QType::Cast($mixValue, 'QQCondition');
					$this->MarkAsModified();
					return;
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
			case 'Clauses':
				try {
					$this->objClauses = QType::Cast($mixValue, QType::ArrayType);
					$this->MarkAsModified();
					return;
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
			default:
				try {
					parent::__set($strName, $mixValue);
					break;
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		}
	}

}
