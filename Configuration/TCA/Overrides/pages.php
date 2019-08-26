<?php
defined('TYPO3_MODE') or die();

$tca = array(
    'statements' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_vocabulary_domain_model_statements',
            'foreign_table' => 'tx_vocabulary_domain_model_statements',
            'MM' => 'tx_vocabulary_statements_records_mm',
            'MM_match_fields' => array(
                // ident field as workaround for possible bug in line 544 of \TYPO3\CMS\Core\Database\RelationHandler
                // tablenames must be name of foreign table (statements) whereas ident is needed to distinguish between records from different tables
                // otherwise relations are not kept/displayed correctly in this field
                'ident' => 'pages',
                'tablenames' => 'tx_vocabulary_domain_model_statements',
                'fieldname' => 'statements',
            ),
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 9999,
            'fieldControl' => array(
                'addRecord' => array(
                    'disabled' => false,
                    'options' => array(
                        'title' => 'Create new',
                        'table' => 'tx_vocabulary_domain_model_statements',
                        'pid' => '###PAGE_TSCONFIG_ID###',
                        'setValue' => 'prepend',
                    ),
                ),
                'editPopup' => array(
                    'disabled' => false,
                    'options' => array(
                        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:wizard_edit',
                    ),
                ),
            ),
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tca);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'statements',
    '',
    ''
);
