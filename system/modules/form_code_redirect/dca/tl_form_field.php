<?php

/**
 * form_code_redirect hook for Contao Open Source CMS
 *
 * Copyright (C) 2015 Fritz Michael Gschwantner
 *
 * @package form_code_redirect hook
 * @author  Fritz Michael Gschwantner <https://github.com/fritzmg>
 */


$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCode'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useCode'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array( 'tl_class' => 'w50' ),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['mandatory']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] = str_replace( 'mandatory', 'mandatory,useCode', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] );
