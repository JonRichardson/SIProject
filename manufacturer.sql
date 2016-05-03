CREATE DATABASE `scenarios` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `scenarios`;

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apparel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consumerGoods` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `electronics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aeroDefense` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industrial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `manufacturer` (`region`, `apparel`, `consumerGoods`, `electronics`, `aeroDefense`, 'industrial') VALUES('US & Canada', 'AAFA RSL, CCPSA, CA Safer Consumer Products...', 'CA Safer Consumer Products, Prop 65, CCPSA...', 'EWRA (2003 Cal ALS 526)', 'DF 1502, 48-CFR-252.225–7007, DFARS');
INSERT INTO `manufacturer` (`region`, `apparel`, `consumerGoods`, `electronics`, `aeroDefense`, 'industrial') VALUES('EU', 'REACH, RoHS', 'REACH, RoHS', 'REACH, RoHS', 'REACH, RoHS', 'REACH, RoHS');
INSERT INTO `manufacturer` (`region`, `apparel`, `consumerGoods`, `electronics`, `aeroDefense`, 'industrial') VALUES('Asia', 'Chinas GB18401-2003, Japans Household Goods Quality Labeling Act', 'Chinas Food Hygiene Law, Chinas General Rules for the Amount of Use of Additives,
Chinas General Rules for the Labeling of Prepackaged Foods...', 'China RoHS, Japan RoHS, Korea RoHS', 'China RoHS, Japan RoHS, Korea RoHS', 'China RoHS, Japan RoHS, Korea RoHS');
INSERT INTO `manufacturer` (`region`, `apparel`, `consumerGoods`, `electronics`, `aeroDefense`, 'industrial') VALUES('Rest of World', 'Australian Consumer Law (ACL)', 'Australian Consumer Law (ACL), MERCOSUR Technical Regulations (MTR)', 'MERCOSUR Technical Regulations (MTR),  Normas Oficales Mexicanas
(NOM)', '', 'NOM: labeling regulations, INMETRO');
