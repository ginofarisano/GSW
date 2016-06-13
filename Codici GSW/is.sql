-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Dic 14, 2011 alle 09:31
-- Versione del server: 5.5.16
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `is`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `azienda`
--

CREATE TABLE IF NOT EXISTS `azienda` (
  `NomeAzienda` varchar(50) NOT NULL,
  `Settore` varchar(50) NOT NULL,
  `NumeroDipendenti` varchar(50) NOT NULL,
  `Indirizzo` varchar(50) NOT NULL,
  `Cap` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Comune` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SitoWeb` varchar(50) NOT NULL,
  `PartitaIva` varchar(50) NOT NULL,
  `CodiceFiscale` varchar(50) NOT NULL,
  `NomeReferente` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `azienda`
--

INSERT INTO `azienda` (`NomeAzienda`, `Settore`, `NumeroDipendenti`, `Indirizzo`, `Cap`, `Provincia`, `Comune`, `Telefono`, `Fax`, `Email`, `SitoWeb`, `PartitaIva`, `CodiceFiscale`, `NomeReferente`, `Username`, `Password`) VALUES
('FMA', 'meccanico', '120', 'Via Nazionale Delle Puglie', '83039', 'Avellino', 'Avellino', '825477777', '0', 'fma@lib.it', 'www.fma.com', '789956214', 'fmaava84e12a509l', '', 'fma', '121212'),
('Gestione servizi web', 'informatico', '5', 'via ponte don melillo', '83100', 'Salerno', 'Fisciano', '82444444', '0', 'gsw@libero.it', 'www.gsw.it', '78965411', 'gswprt84e13e506l', '', 'gsw', '151515');

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Indirizzo` varchar(50) NOT NULL,
  `Comune` varchar(50) NOT NULL,
  `CAP` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `CodiceFiscale` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sesso` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`Nome`, `Cognome`, `Indirizzo`, `Comune`, `CAP`, `Provincia`, `CodiceFiscale`, `Telefono`, `Fax`, `Email`, `Sesso`, `Username`, `Password`) VALUES
('Giuseppe', 'D''ambrosio', 'via sianana', 'fontanarosa', '83040', 'Avellino', 'dmbgpp84e12a509l', '2147483647', '0', 'gius.dambrosio@libero.it', 'M', 'jd', '120212'),
('Pasquale ', 'Giardino', 'via stillo', 'Ariano irpino', '83040', 'Avellino', 'grdpql86e28a561l', '2147483647', '0', 'p_giardino@hotmali.it', 'M', 'pgiardino', '455454'),
('Antonio ', 'Prota', 'via numero uno', 'Scafati', '83100', 'Salerno', 'prtant89a5620l', '2147483647', '0', 's_p_k_@libero.it', 'M', 'figo', '8888'),
('Dario', 'Nocerino', 'via roma', 'scafati', '83100', 'salerno', 'darncr88e562g', '345896514', '0', 'principino@libero.it', 'M', 'principino', '99999'),
('Gino', 'Farisano', 'via rossi', 'fisciano', '83020', 'Salerno', 'gnofar88s562l', '356998456', '0', 'gino#gmail.com', 'M', 'ginof', '47895');

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` varchar(50) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`Id`, `Nome`, `Password`) VALUES
('1', 'giuseppe', '1111'),
('2', 'prota', '4444'),
('3', 'farisano', '2222'),
('4', 'nocerino', '3333'),
('5', 'giardino', '5555');

-- --------------------------------------------------------

--
-- Struttura della tabella `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `Id` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `provincia`
--

INSERT INTO `provincia` (`Id`, `Provincia`) VALUES
('1', 'Avellino'),
('2', 'Napoli'),
('3', 'Roma'),
('4', 'Bari'),
('5', 'Milano'),
('6', 'Torino'),
('7', 'Benevento'),
('8', 'Perugia'),
('9', 'Venezia'),
('10', 'Bologna');

-- --------------------------------------------------------

--
-- Struttura della tabella `settore`
--

CREATE TABLE IF NOT EXISTS `settore` (
  `Id` varchar(50) NOT NULL,
  `Settore` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `settore`
--

INSERT INTO `settore` (`Id`, `Settore`) VALUES
('1', 'Informatico'),
('2', 'Edile'),
('3', 'Pubblico'),
('4', 'Attività economiche'),
('5', 'LIbero professionista');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
