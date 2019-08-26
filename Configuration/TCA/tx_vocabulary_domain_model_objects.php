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
                'fieldControl' => array(
                    'editPopup' => array(
                        'disabled' => false,
                        'options' => array(
                            'title' => 'Edit',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
