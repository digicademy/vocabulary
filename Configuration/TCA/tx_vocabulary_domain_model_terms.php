<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_terms',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,',
        'iconfile' => 'EXT:vocabulary/Resources/Public/Icons/tx_vocabulary_domain_model_terms.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, title, description, statements',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden, title, description, statements, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_terms.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'required,trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_terms.description',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'statements' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_terms.statements',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_vocabulary_domain_model_statements',
                'foreign_field' => 'term',
                'foreign_sortby' => 'sorting',
                'maxitems' => 9999,
                'appearance' => array(
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                    'levelLinksPosition' => 'bottom',
                    'newRecordLinkAddTitle' => 1,
                    'useSortable' => 1,
                ),
                'behaviour' => array(
                    'disableMovingChildrenWithParent' => 1,
                ),
            ),
        ),
    ),
);
