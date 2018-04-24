<?php

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'eveskin' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['eveskin'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for MonoBook skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the eveskin skin requires MediaWiki 1.25+' );
}
