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

// REGISTERES URI RESOLVER

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vocabulary']['resolver'] = [
    't3' => Digicademy\Vocabulary\Resolver\T3Resolver::class,
    'http' => Digicademy\Vocabulary\Resolver\HttpResolver::class,
    'https' => Digicademy\Vocabulary\Resolver\HttpsResolver::class,
];
