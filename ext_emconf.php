<?php

########################################################################
# Extension Manager/Repository config file for ext "tce_tutorial".
#
# Auto generated 19-12-2011 22:44
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TCE/TCA Tutorial with UnitTests',
	'description' => 'Shows TCA/TCE Core functions and ships unittests for Core-Features which are only testable with static data.',
	'category' => 'misc',
	'author' => 'Steffen Ritter',
	'author_email' => 'steffen.ritter@typo3.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'TYPO3 Core Team',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.7.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:16:"ext_autoload.php";s:4:"ea4b";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"0468";s:14:"ext_tables.php";s:4:"7788";s:14:"ext_tables.sql";s:4:"19e2";s:25:"ext_tables_static+adt.sql";s:4:"5df4";s:32:"icon_tx_tcetutorial_category.gif";s:4:"1e24";s:33:"icon_tx_tcetutorial_container.gif";s:4:"475a";s:31:"icon_tx_tcetutorial_element.gif";s:4:"dc05";s:16:"locallang_db.xml";s:4:"5b26";s:7:"tca.php";s:4:"187a";s:47:"tests/tx_tcetutorial_TcaRelationserviceTest.php";s:4:"ebcb";}',
	'suggests' => array(
	),
);

?>