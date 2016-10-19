<?php

/**
 * The CKEditor override file. This file gets installed into project/includes/plugins duing the initial installation
 * of the plugin. After that, it is not touched. Feel free to modify this file as needed.
 */

namespace QCubed\Plugin;


class QCKEditor extends QCKEditorBase
{
	public function  __construct($objParentObject, $strControlId = null) {
		parent::__construct($objParentObject, $strControlId);
	}

}
