CREATE TABLE tx_vocabulary_domain_model_namespaces (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,
    prefix varchar(20) DEFAULT '' NOT NULL,
    uri varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_subjects (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    type int(11) DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,
    value varchar(255) DEFAULT '' NOT NULL,

    namespace int(11) DEFAULT '0' NOT NULL,

    tablename varchar(255) DEFAULT '' NOT NULL,
    record varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_predicates (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,
    value varchar(255) DEFAULT '' NOT NULL,

    namespace int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_objects (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    type int(11) DEFAULT '0' NOT NULL,
    value text NOT NULL,
    lang varchar(2) DEFAULT '' NOT NULL,
    datatype varchar(255) DEFAULT '' NOT NULL,

    namespace int(11) DEFAULT '0' NOT NULL,

    tablename varchar(255) DEFAULT '' NOT NULL,
    record varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_statements (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,

    subject int(11) unsigned DEFAULT '0',
    predicate int(11) unsigned DEFAULT '0',
    object int(11) unsigned DEFAULT '0',
    term int(11) unsigned DEFAULT '0' NOT NULL,
    records int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_terms (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,

    statements int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_domain_model_vocabularies (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,

    terms int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),

);

CREATE TABLE tx_vocabulary_vocabularies_terms_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)

) ENGINE=MyISAM;

CREATE TABLE tx_vocabulary_statements_records_mm (

    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

    ident varchar(255) DEFAULT '' NOT NULL,
    tablenames varchar(255) DEFAULT '' NOT NULL,
    fieldname varchar(255) DEFAULT '' NOT NULL,

    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)

) ENGINE=MyISAM;

CREATE TABLE pages (

    statements int(11) unsigned DEFAULT '0' NOT NULL,

);

CREATE TABLE tt_content (

    statements int(11) unsigned DEFAULT '0' NOT NULL,

);
