<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_tcetutorial_container'] = array (
	'ctrl' => $TCA['tx_tcetutorial_container']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title,elements_csv,elements_foreignfield,elements_mm,categories_csv,categories_mm'
	),
	'feInterface' => $TCA['tx_tcetutorial_container']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'elements_csv' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.elements_csv',		
			'config' => array (
				'type' => 'inline',	
				'foreign_table' => 'tx_tcetutorial_element',	
				'foreign_table_where' => 'ORDER BY tx_tcetutorial_element.uid',	
				'minitems' => 0,
				'maxitems' => 100,
			)
		),
		'elements_foreignfield' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.elements_foreignfield',		
			'config' => array (
				'type' => 'inline',	
				'foreign_table' => 'tx_tcetutorial_element',	
				'foreign_table_where' => 'ORDER BY tx_tcetutorial_element.uid',
				'foreign_field' => 'parent_container',
				'minitems' => 0,
				'maxitems' => 100,
			)
		),
		'elements_mm' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.elements_mm',		
			'config' => array (
				'type' => 'inline',	
				'foreign_table' => 'tx_tcetutorial_element',	
				'foreign_table_where' => 'ORDER BY tx_tcetutorial_element.uid',	
				'minitems' => 0,
				'maxitems' => 100,	
				"MM" => "tx_tcetutorial_container_elements_mm_mm",
			)
		),
		'categories_csv' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.categories_csv',		
			'config' => array (
				'type' => 'group',	
				'internal_type' => 'db',	
				'allowed' => 'tx_tcetutorial_category',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,
			)
		),
		'categories_mm' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_container.categories_mm',		
			'config' => array (
				'type' => 'group',	
				'internal_type' => 'db',	
				'allowed' => 'tx_tcetutorial_category',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,	
				"MM" => "tx_tcetutorial_container_categories_mm_mm",
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, elements_csv;;;;3-3-3, elements_foreignfield, elements_mm, categories_csv, categories_mm')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_tcetutorial_element'] = array (
	'ctrl' => $TCA['tx_tcetutorial_element']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title,categories_csv,categories_mm'
	),
	'feInterface' => $TCA['tx_tcetutorial_element']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_element.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'categories_csv' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_element.categories_csv',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'tx_tcetutorial_category',	
				'foreign_table_where' => 'ORDER BY tx_tcetutorial_category.uid',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,
			)
		),
		'categories_mm' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_element.categories_mm',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'tx_tcetutorial_category',	
				'foreign_table_where' => 'ORDER BY tx_tcetutorial_category.uid',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,	
				"MM" => "tx_tcetutorial_element_categories_mm_mm",
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, categories_csv;;;;3-3-3, categories_foreignfield, categories_mm')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_tcetutorial_category'] = array (
	'ctrl' => $TCA['tx_tcetutorial_category']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title'
	),
	'feInterface' => $TCA['tx_tcetutorial_category']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:tce_tutorial/locallang_db.xml:tx_tcetutorial_category.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>