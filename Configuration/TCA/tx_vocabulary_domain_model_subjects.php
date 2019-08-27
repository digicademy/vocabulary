<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects',
        'label' => 'title',
        'label_alt' => 'value',
        'default_sortby' => 'title,value',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'type' => 'type',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,value,',
        'iconfile' => 'EXT:vocabulary/Resources/Public/Icons/tx_vocabulary_domain_model_subjects.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            hidden, 
            type, 
            title, 
            description, 
            value, 
            tablename, 
            record,
            representation',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden, type, title, description, namespace, value, representation, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '2' => array('showitem' => 'hidden, type, title, description, value, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '3' => array('showitem' => 'hidden, type, title, description, namespace, tablename, record, value, representation, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
                'behaviour' => array(
                    'allowLanguageSynchronization' => true,
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
                'behaviour' => array(
                    'allowLanguageSynchronization' => true,
                ),
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.description',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.type',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.type.I.1', 1),
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.type.I.2', 2),
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.type.I.3', 3),
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
        ),
        'namespace' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.namespace',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_vocabulary_domain_model_namespaces',
                'foreign_table_where' => 'AND tx_vocabulary_domain_model_namespaces.pid IN (###PAGE_TSCONFIG_IDLIST###) ORDER BY tx_vocabulary_domain_model_namespaces.title',
                'items' => array(
                    array('', 0),
                ),
                'size' => 1,
                'maxitems' => 1,
                'fieldControl' => array(
                    'addRecord' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Create new',
                            'table' => 'tx_vocabulary_domain_model_namespaces',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'set',
                        ),
                    ),
                    'editPopup' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Edit',
                        ),
                    ),
                ),
            ),
        ),
        'value' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.value',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'tablename' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.tablename',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'tables'
            ),
        ),
        'record' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.record',
            'config' => array(
                'type' => 'group',
                'allowed' => '*',
                'internal_type' => 'db',
                'prepend_tname' => false,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'fieldControl' => array(
                    'editPopup' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Edit',
                        ),
                    ),
                ),
            )
        ),
        'representation' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_subjects.representation',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_vocabulary_domain_model_representations',
                'foreign_field' => 'parent',
                'foreign_table_field' => 'tablename',
                'minitems' => 0,
                'maxitems' => 999,
                'appearance' => array(
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ),
            ),
        ),
    ),
);
