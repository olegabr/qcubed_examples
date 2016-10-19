<?php
/**
 * QDataTables is an interface to the DataTables jquery control. It is based on a QHtmlTable, and provides
 * a number of unique styling options that can be very difficult to implement, including:
 * - Javascript only table handling if wanted, such that the entire table can be searched, sorted, paged
 *   and scrolled all in javascript
 * - Server-side processing through ajax, that can do similar things to data coming from an ajax source. 
 * - Fixed column and fixed header options that allow you to scroll data while keeping the header on top
 * 	 and possibly some columns on the left and right, as well as a footer, fixed in place, similar to Excel's
 *   ability to freeze panes.
 * 
 * Notes: 
 * QDataTables only works in Javscript mode or Ajax mode. It does not do traditional server posts,
 * so it will only work if javascript is enabled.
 * 
 * When QDatatables delivers data to the javascript control via ajax, it delivers the data only, and
 * not the tags around the data. If you have data specific parameters you are injecting into the tags,
 * like by using GetCellParams, GetCellClass, etc. you will need to deal with that by creating javascript
 * functions and assigning them to callback functions that are part of datatables. The only direct support
 * for extra parameter information is for the row class and row id.
 * 
 * One strategy for sending additional data to influence the display is to:
 * 1) turn on UseMData,
 * 2) Add additional data to the aaData array that is returned to the javascript, and then 
 * 3) Create a javascript function  and assign it to fnRowCallback to modify the DOM before 
 *    final drawing. fnRowCallback will be given the data returned by step #2.
 *
 * This file is designed to be modified. If you do modify it, then move it out of the composer
 * controlled directory into some other location so that it will not get overwritten by composer
 * on Update. The preferred location is __INCLUDES__ . /plugins
 * 
 * @link http://www.datatables.net/
 *
 */

/* Extras that still need to be added. If you do, consider adding it to the Base file and
 * sending the change to us so we can incorporate it into the plugin. See
 * FixedColumns for an example. */

/* AutoFill */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/AutoFill/media/js/AutoFill.min.js");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/AutoFill/media/css/AutoFill.css");
*/

/* ColReorder */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/ColReorder/media/js/ColReorder.min.js");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/ColReorder/media/css/ColReorder.css");
*/

/* ColVis */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/ColVis/media/js/ColVis.min.js");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/ColVis/media/css/ColVis.css");
*/


/* FixedHeader */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/FixedHeader/media/js/FixedHeader.min.js");
*/

/* KeyTable */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/KeyTable/media/js/KeyTable.min.js");
*/

/* Scroller */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/Scroller/media/js/Scroller.min.js");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/Scroller/media/css/Scroller.css");
*/

/* TableTools */
/*
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/TableTools/media/js/TableTools.min.js");
$this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/TableTools/media/js/ZeroClipboard.js");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/TableTools/media/css/TableTools.css");
$this->AddPluginCssFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/TableTools/media/css/TableTools_JUI.css");
*/



class QDataTable extends QDataTableBase
{
	public function  __construct($objParentObject, $strControlId = null) {
		parent::__construct($objParentObject, $strControlId);
		$this->AddPluginJavascriptFile("datatables", __VENDOR_ASSETS__ . "/datatables/datatables/media/js/jquery.dataTables.js");

		// Datatables doc says only one css file should be included. Since we are including the jqueryUI file below, we don't use the main css file, as it will conflict.
		//$this->AddPluginCssFile("datatables", __VENDOR_ASSETS__ . "/datatables/datatables/media/css/jquery.dataTables.css");

		//JQuery UI Themeroller integration
		//See DataTables documentation for other integrations
		$this->AddCssFile("//cdn.datatables.net/plug-ins/1.10.7/integration/jqueryui/dataTables.jqueryui.css");
		$this->AddJavascriptFile("//cdn.datatables.net/plug-ins/1.10.7/integration/jqueryui/dataTables.jqueryui.js");

	}
}
