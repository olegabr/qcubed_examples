<?php
	// This is the HTML template include file (.tpl.php) for the type_test_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this file out of this directory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	global $gObjectName;
	global $gObjectNamePlural;

	$gObjectName =  QApplication::Translate('TypeTest');
	$gObjectNamePlural =  QApplication::Translate('TypeTests');

	$strPageTitle = $gObjectName . ' ' . QApplication::Translate('List');
	require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<?php $this->pnlNav->Render(); ?>
<?php $this->pnlTypeTestList->Render(); ?>


<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>