<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements',
        'label' => 'subject',
        'label_alt' => 'predicate,object',
        'label_alt_force' => 1,
        'default_sortby' => 'subject,predicate,object',
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
        'searchFields' => 'title,description,subject,predicate,object,',
        'iconfile' => 'EXT:vocabulary/Resources/Public/Icons/tx_vocabulary_domain_model_statements.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, title, description, subject, predicate, object',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden, title, description, subject, predicate, object, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements.description',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'subject' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements.subject',
            'config' => array(
                'type' => 'group',
                'allowed' => 'tx_vocabulary_domain_model_subjects',
                // prevent http://wiki.typo3.org/Exception/CMS/1353170925
                'foreign_table' => 'tx_vocabulary_domain_model_subjects',
                'internal_type' => 'db',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'suggestOptions' => array(
                    'default' => array(
                        'pidList' => '###PLACEHOLDER###',
                        'additionalSearchFields' => 'description,value',
                    ),
                ),
                'fieldControl' => array(
                    'addRecord' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Create new',
                            'table' => 'tx_vocabulary_domain_model_subjects',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend',
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
        'predicate' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements.predicate',
            'config' => array(
                'type' => 'group',
                'allowed' => 'tx_vocabulary_domain_model_predicates',
                // prevent http://wiki.typo3.org/Exception/CMS/1353170925
                'foreign_table' => 'tx_vocabulary_domain_model_predicates',
                'internal_type' => 'db',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'suggestOptions' => array(
                    'default' => array(
                        'pidList' => '###PLACEHOLDER###',
                        'additionalSearchFields' => 'description,value',
                    ),
                ),
                'fieldControl' => array(
                    'addRecord' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Create new',
                            'table' => 'tx_vocabulary_domain_model_predicates',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend',
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
        'object' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_statements.object',
            'config' => array(
                'type' => 'group',
                'allowed' => 'tx_vocabulary_domain_model_objects',
                // prevent http://wiki.typo3.org/Exception/CMS/1353170925
                'foreign_table' => 'tx_vocabulary_domain_model_objects',
                'internal_type' => 'db',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'suggestOptions' => array(
                    'default' => array(
                        'pidList' => '###PLACEHOLDER###',
                        'additionalSearchFields' => 'value,lang,datatype',
                    ),
                ),
                'fieldControl' => array(
                    'addRecord' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Create new',
                            'table' => 'tx_vocabulary_domain_model_objects',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend',
                        ),
                    ),
                    'editPopup' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'LLL:EXT:hisodat/Resources/Private/Language/locallang_db.xml:tx_hisodat_tca_wizards.edit',
                        ),
                    ),
                ),
            ),
        ),
        'term' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
    ),
);
