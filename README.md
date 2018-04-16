# Eveskin-for-Mediawiki
This is a modified version of the MonoBook skin for wikimedia whose stylesheet has been edited to look like CCP's late wiki EVElopedia. 

Assets used in this skin are property of CCP games and should not be used for commercial use without permission.

Install by copying the folder into the \htdocs\*yourwikiname*\skins directory. Replace the existing MonoBook skin and clear your browser cache, or your development server should update automatically. Make sure the active skin in LocalSettings.php is changed accordingly.

You will need to change to the logo by adding the new desired logo to the \htdocs\resources directory and updating the filename in LocalSettings.php. You will also need to add the included copyright icons, keep in mind this is technically a breach of the user agreement for mediawiki, so if it's for commercial use please double check this. You will also change the site favicon using this method.

For full functionality this skin requires MediaWiki breadcrumbs to be enabled, either through an extension or the option defined in LocalSettings.php
