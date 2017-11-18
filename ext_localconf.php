<?php
if (!defined ('TYPO3_MODE'))     die ('Access denied.');

// PLUGINS

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Digicademy.' . $_EXTKEY,
    'Terms',
    array(
        'Terms' => 'listSelectedTerms',
    ),
    array(
        'Terms' => '',
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Digicademy.' . $_EXTKEY,
    'Vocab',
    array(
        'Vocabularies' => 'showSelectedVocabulary',
    ),
    array(
        'Vocabularies' => '',
    )
);
