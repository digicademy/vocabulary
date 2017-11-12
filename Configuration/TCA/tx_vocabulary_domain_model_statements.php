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
                'wizards' => array(
                    'suggest' => Array(
                        'type' => 'suggest',
                        'title' => 'Find records',
                        'default' => array(
                            'pidList' => '###PLACEHOLDER###',
                            'additionalSearchFields' => 'description,value',
                        ),
                    ),
                    'edit' => array(
                        'type' => 'popup',
                        'title' => 'Edit',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                    'add' => Array(
                        'type' => 'popup',
                        'title' => 'Create new',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                        'params' => array(
                            'table' => 'tx_vocabulary_domain_model_subjects',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend'
                        ),
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
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
                'wizards' => array(
                    'suggest' => Array(
                        'type' => 'suggest',
                        'title' => 'Find records',
                        'default' => array(
                            'pidList' => '###PLACEHOLDER###',
                            'additionalSearchFields' => 'description,value',
                        ),
                    ),
                    'edit' => array(
                        'type' => 'popup',
                        'title' => 'Edit',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                    'add' => Array(
                        'type' => 'popup',
                        'title' => 'Create new',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                        'params' => array(
                            'table' => 'tx_vocabulary_domain_model_predicates',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend'
                        ),
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
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
                'wizards' => array(
                    'suggest' => Array(
                        'type' => 'suggest',
                        'title' => 'Find records',
                        'default' => array(
                            'pidList' => '###PLACEHOLDER###',
                            'additionalSearchFields' => 'value,lang,datatype',
                        ),
                    ),
                    'edit' => Array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:hisodat/Resources/Private/Language/locallang_db.xml:tx_hisodat_tca_wizards.edit',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                        'JSopenParams' => 'height=550,width=900,status=0,menubar=0,scrollbars=1',
                        'popup_onlyOpenIfSelected' => 1,
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                    'add' => Array(
                        'type' => 'popup',
                        'title' => 'Create new',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                        'params' => array(
                            'table' => 'tx_vocabulary_domain_model_objects',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend'
                        ),
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
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
