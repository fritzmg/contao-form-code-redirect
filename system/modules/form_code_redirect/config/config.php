<?php

/**
 * form_code_redirect hook for Contao Open Source CMS
 *
 * Copyright (C) 2015 Fritz Michael Gschwantner
 *
 * @package form_code_redirect hook
 * @author  Fritz Michael Gschwantner <https://github.com/fritzmg>
 */


$GLOBALS['TL_HOOKS']['processFormData'][] = array( 'FormCodeRedirect', 'processFormData' );
