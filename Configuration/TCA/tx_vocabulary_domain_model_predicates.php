<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_predicates',
        'label' => 'title',
        'label_alt' => 'value',
        'sortby' => 'sorting',
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
        'searchFields' => 'title,description,value,',
        'iconfile' => 'EXT:vocabulary/Resources/Public/Icons/tx_vocabulary_domain_model_predicates.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, title, description, namespace, value',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden, title, description, namespace, value, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_predicates.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_predicates.description',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'namespace' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_predicates.namespace',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_vocabulary_domain_model_namespaces',
                'foreign_table_where' => 'AND tx_vocabulary_domain_model_namespaces.pid IN (###PAGE_TSCONFIG_IDLIST###) ORDER BY tx_vocabulary_domain_model_namespaces.title',
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
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_predicates.value',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'required,trim'
            ),
        ),
    ),
);
