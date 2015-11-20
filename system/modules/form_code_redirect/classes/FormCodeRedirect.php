<?php

/**
 * form_code_redirect hook for Contao Open Source CMS
 *
 * Copyright (C) 2015 Fritz Michael Gschwantner
 *
 * @package form_code_redirect hook
 * @author  Fritz Michael Gschwantner <https://github.com/fritzmg>
 */


class FormCodeRedirect
{
	public function processFormData( $arrSubmitted, $arrData, $arrFiles, $arrLabels, \Form $objForm )
	{
		// check if there is a form field which we use as the code
		if( ( $objField = \FormFieldModel::findBy( array("pid = ?", "useCode = '1'"), array( $objForm->id ) ) ) === null )
			return;

		// check if there is submitted data for the form field
		if( !isset( $arrSubmitted[ $objField->name ] ) )
			return;

		// get the code
		$code = $arrSubmitted[ $objField->name ];

		// check if there is a page present for this alias
		if( ( $objPage = \PageModel::findPublishedByIdOrAlias( $code ) ) === null )
			return;

		// redirect to page
		\Controller::redirect( \Controller::generateFrontendUrl( $objPage->row(), null, null, true ) );
	}
}
