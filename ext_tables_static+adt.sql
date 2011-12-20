
#
# Table structure for table "tx_tcetutorial_container_elements_mm_mm"
#
DROP TABLE IF EXISTS tx_tcetutorial_container_elements_mm_mm;
CREATE TABLE tx_tcetutorial_container_elements_mm_mm (
  uid_local int(11) NOT NULL default '0',
  uid_foreign int(11) NOT NULL default '0',
  tablenames varchar(30) NOT NULL default '',
  sorting int(11) NOT NULL default '0',
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);


INSERT INTO tx_tcetutorial_container_elements_mm_mm VALUES ('1', '1', '', '1');
INSERT INTO tx_tcetutorial_container_elements_mm_mm VALUES ('1', '2', '', '2');




#
# Table structure for table "tx_tcetutorial_container_categories_mm_mm"
#
DROP TABLE IF EXISTS tx_tcetutorial_container_categories_mm_mm;
CREATE TABLE tx_tcetutorial_container_categories_mm_mm (
  uid_local int(11) NOT NULL default '0',
  uid_foreign int(11) NOT NULL default '0',
  tablenames varchar(30) NOT NULL default '',
  sorting int(11) NOT NULL default '0',
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);


INSERT INTO tx_tcetutorial_container_categories_mm_mm VALUES ('1', '1', '', '1');
INSERT INTO tx_tcetutorial_container_categories_mm_mm VALUES ('1', '2', '', '2');
INSERT INTO tx_tcetutorial_container_categories_mm_mm VALUES ('1', '4', '', '3');


# TYPO3 Extension Manager dump 1.1
#
# Host: localhost    Database: typo3_up-ste-claire
#--------------------------------------------------------


#
# Table structure for table "tx_tcetutorial_container"
#
DROP TABLE IF EXISTS tx_tcetutorial_container;
CREATE TABLE tx_tcetutorial_container (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL default '0',
  tstamp int(11) NOT NULL default '0',
  crdate int(11) NOT NULL default '0',
  cruser_id int(11) NOT NULL default '0',
  sorting int(10) NOT NULL default '0',
  deleted tinyint(4) NOT NULL default '0',
  hidden tinyint(4) NOT NULL default '0',
  title tinytext,
  elements_csv text,
  elements_foreignfield text,
  elements_mm int(11) NOT NULL default '0',
  categories_csv text,
  categories_mm int(11) NOT NULL default '0',
  PRIMARY KEY (uid),
  KEY parent (pid)
);


INSERT INTO tx_tcetutorial_container VALUES ('1', '139', '1324323384', '1324320996', '11', '256', '0', '0', 'One', '1,2', '2', '2', '1,2,4', '3');
INSERT INTO tx_tcetutorial_container VALUES ('2', '139', '1324323026', '1324323026', '11', '128', '0', '0', 'Dummy with no references', '', '0', '0', '', '0');


#
# Table structure for table "tx_tcetutorial_element_categories_mm_mm"
#
DROP TABLE IF EXISTS tx_tcetutorial_element_categories_mm_mm;
CREATE TABLE tx_tcetutorial_element_categories_mm_mm (
  uid_local int(11) NOT NULL default '0',
  uid_foreign int(11) NOT NULL default '0',
  tablenames varchar(30) NOT NULL default '',
  sorting int(11) NOT NULL default '0',
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);


INSERT INTO tx_tcetutorial_element_categories_mm_mm VALUES ('1', '1', '', '1');
INSERT INTO tx_tcetutorial_element_categories_mm_mm VALUES ('1', '2', '', '2');
INSERT INTO tx_tcetutorial_element_categories_mm_mm VALUES ('2', '4', '', '1');


# TYPO3 Extension Manager dump 1.1
#
# Host: localhost    Database: typo3_up-ste-claire
#--------------------------------------------------------


#
# Table structure for table "tx_tcetutorial_element"
#
DROP TABLE IF EXISTS tx_tcetutorial_element;
CREATE TABLE tx_tcetutorial_element (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL default '0',
  tstamp int(11) NOT NULL default '0',
  crdate int(11) NOT NULL default '0',
  cruser_id int(11) NOT NULL default '0',
  deleted tinyint(4) NOT NULL default '0',
  hidden tinyint(4) NOT NULL default '0',
  title tinytext,
  categories_csv text,
  categories_mm int(11) NOT NULL default '0',
  parent_container int(11) NOT NULL default '0',
  PRIMARY KEY (uid),
  KEY parent (pid)
);


INSERT INTO tx_tcetutorial_element VALUES ('1', '139', '1324329923', '1324321280', '11', '0', '0', 'Element One', '1,2', '2', '1');
INSERT INTO tx_tcetutorial_element VALUES ('2', '139', '1324329935', '1324321305', '11', '0', '0', 'Element 2', '4', '1', '1');
INSERT INTO tx_tcetutorial_element VALUES ('3', '139', '1324328932', '1324323001', '11', '0', '0', 'Not referenced', '', '0', '0');


#
# Table structure for table "tx_tcetutorial_category"
#
DROP TABLE IF EXISTS tx_tcetutorial_category;
CREATE TABLE tx_tcetutorial_category (
  uid int(11) NOT NULL auto_increment,
  pid int(11) NOT NULL default '0',
  tstamp int(11) NOT NULL default '0',
  crdate int(11) NOT NULL default '0',
  cruser_id int(11) NOT NULL default '0',
  deleted tinyint(4) NOT NULL default '0',
  hidden tinyint(4) NOT NULL default '0',
  title tinytext,
  parent_element int(11) NOT NULL default '0',
  PRIMARY KEY (uid),
  KEY parent (pid)
);


INSERT INTO tx_tcetutorial_category VALUES ('1', '139', '1324323039', '1324323039', '11', '0', '0', 'C1', '0');
INSERT INTO tx_tcetutorial_category VALUES ('2', '139', '1324323044', '1324323044', '11', '0', '0', 'C2', '0');
INSERT INTO tx_tcetutorial_category VALUES ('3', '139', '1324323074', '1324323049', '11', '0', '0', 'C3 - nr', '0');
INSERT INTO tx_tcetutorial_category VALUES ('4', '139', '1324323064', '1324323064', '11', '0', '0', 'C4 ', '0');