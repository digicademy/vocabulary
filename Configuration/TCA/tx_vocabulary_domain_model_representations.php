<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations',
        'label' => 'content_type',
        'default_sortby' => 'ORDER BY parent, tablename',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'searchFields' => 'content_type, content_language, parameters',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('vocabulary') . 'Resources/Public/Icons/tx_vocabulary_domain_model_representations.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            parent,
            tablename,
            scheme,
            authority,
            path,
            query,
            fragment,
            content_type,
            content_language
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
                hidden,
                parent,
                tablename,
                scheme,
                authority,
                path,
                query,
                fragment,
                content_type,
                content_language,
            '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'parent' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'tablename' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'scheme' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.scheme',
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'eval' => 'trim'
            ),
        ),
        'authority' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.authority',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'path' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.path',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'query' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.query',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'fragment' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.fragment',
            'config' => array(
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ),
        ),
        'content_type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.content_type',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'content_language' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_representations.content_language',
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'eval' => 'trim'
            ),
        ),
    ),
);
