<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects',
        'label' => 'value',
        'default_sortby' => 'value',
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
        'searchFields' => 'type,value,lang,datatype,',
        'iconfile' => 'EXT:vocabulary/Resources/Public/Icons/tx_vocabulary_domain_model_objects.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, type, namespace, value, lang, datatype, tablename, record',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden, type, namespace, value, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '2' => array('showitem' => 'hidden, type, value, lang, datatype, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '3' => array('showitem' => 'hidden, type, value, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
        '4' => array('showitem' => 'hidden, type, namespace, tablename, record, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.type',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.type.I.1', 1),
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.type.I.2', 2),
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.type.I.3', 3),
                    array('LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.type.I.4', 4),
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
        ),
        'namespace' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.namespace',
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
                'wizards' => array(
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
                            'table' => 'tx_vocabulary_domain_model_namespaces',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'set'
                        ),
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
                        ),
                    ),
                ),
            ),
        ),
        'value' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.value',
            'config' => array(
                'type' => 'text',
                'cols' => '25',
                'rows' => '5',
                'eval' => 'trim'
            ),
        ),
        'lang' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.lang',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', ''),
                    array('de', 'de'),
                    array('en', 'en'),
                ),
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ),
        ),
        'datatype' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.datatype',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', ''),
                    array('boolean', 'http://www.w3.org/2000/01/rdf-schema#boolean'),
                    array('decimal', 'http://www.w3.org/2001/XMLSchema#decimal'),
                    array('date', 'http://www.w3.org/2000/01/rdf-schema#date'),
                    array('real', 'http://www.w3.org/2000/01/rdf-schema#real'),
                    array('string', 'http://www.w3.org/2000/01/rdf-schema#string'),
                ),
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ),
        ),
        'tablename' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.tablename',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'tables'
            ),
        ),
        'record' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:tx_vocabulary_domain_model_objects.record',
            'config' => array(
                'type' => 'group',
                'allowed' => '*',
                'internal_type' => 'db',
                'prepend_tname' => false,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'wizards' => array(
                    'edit' => Array(
                        'type' => 'popup',
                        'title' => 'Edit',
                        'icon' => 'actions-open',
                        'JSopenParams' => 'height=550,width=900,status=0,menubar=0,scrollbars=1',
                        'popup_onlyOpenIfSelected' => 1,
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                ),
            )
        ),
    ),
);
