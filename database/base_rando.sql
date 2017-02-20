

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `base_rando`
--
CREATE DATABASE IF NOT EXISTS `base_rando` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `base_rando`;

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `difficulty` enum('très facile','facile','moyen','difficile','très difficile') NOT NULL,
  `distance` int(11) NOT NULL COMMENT 'in km',
  `duration` time NOT NULL,
  `height_difference` int(6) NOT NULL COMMENT 'in m',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
