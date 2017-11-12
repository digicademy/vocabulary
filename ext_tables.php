<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'vocabulary', 'Configuration/TypoScript', 'Vocabulary'
);

// TSCONFIG

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:vocabulary/Configuration/TSConfig/setup.txt">
');

// PLUGINS

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ADWLM.vocabulary',
    'Terms',
    'RDF Vocabulary: Selected Terms'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ADWLM.vocabulary',
    'Vocabulary',
    'RDF Vocabulary: Selected Vocabulary'
);

// FLEXFORMS

$TCA['tt_content']['types']['list']['subtypes_addlist']['vocabulary_terms'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('vocabulary_terms', 'FILE:EXT:vocabulary/Configuration/FlexForms/TermsPlugin.xml');

$TCA['tt_content']['types']['list']['subtypes_addlist']['vocabulary_vocab'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('vocabulary_vocab', 'FILE:EXT:vocabulary/Configuration/FlexForms/VocabPlugin.xml');

// TABLES

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_namespaces');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_subjects');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_predicates');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_objects');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_statements');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_terms');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vocabulary_domain_model_vocabularies');
