<?php
if (!defined ('TYPO3_MODE'))     die ('Access denied.');

// PLUGINS

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Digicademy.vocabulary',
    'Terms',
    array(
        'Terms' => 'listSelectedTerms',
    ),
    array(
        'Terms' => '',
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Digicademy.vocabulary',
    'Vocab',
    array(
        'Vocabularies' => 'showSelectedVocabulary',
    ),
    array(
        'Vocabularies' => '',
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Digicademy.vocabulary',
    'About',
    array(
        'Subjects' => 'list, about',
    ),
    array(
        'Subjects' => '',
    )
);
