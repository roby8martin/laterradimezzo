-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 25, 2021 alle 22:33
-- Versione del server: 10.4.20-MariaDB
-- Versione PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email-backup-byter`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `backup`
--

CREATE TABLE `backup` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IDCLIENTE` int(10) UNSIGNED NOT NULL,
  `EFFETTUATO` int(1) NOT NULL,
  `NOTE_ERRORE` text NOT NULL,
  `AVVERTITO` int(1) NOT NULL,
  `DATA_INTERVENTO` varchar(12) NOT NULL,
  `CONTROLLATO` int(10) UNSIGNED NOT NULL,
  `DATA_INIZIO` varchar(12) NOT NULL,
  `DATA_FINE` varchar(12) NOT NULL,
  `DATA_DOMENICA` varchar(12) NOT NULL,
  `VISUALIZZA` int(1) NOT NULL,
  `DATA_ORA` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `backup`
--

INSERT INTO `backup` (`ID`, `IDCLIENTE`, `EFFETTUATO`, `NOTE_ERRORE`, `AVVERTITO`, `DATA_INTERVENTO`, `CONTROLLATO`, `DATA_INIZIO`, `DATA_FINE`, `DATA_DOMENICA`, `VISUALIZZA`, `DATA_ORA`) VALUES
(1, 1, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(2, 2, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(3, 3, 0, 'NAS Bauer su FILSERVER esito negativo dal 21 al 18 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(4, 4, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(5, 5, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(6, 6, 1, 'Nas Ceei completato parziale dal 20 al 16 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(7, 7, 0, 'Nas Finestre Gallera fallito dal 22 al 16 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(8, 8, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(9, 9, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(10, 10, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(11, 11, 0, 'Nas Gazzola completato parziale dal 22 al 16 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(12, 12, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(13, 13, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(14, 14, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(15, 15, 0, 'NAS Ktech esito negativo dal 22 al 16 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(16, 16, 0, 'Errore -114 NAS Calderaro backup su USB dal 17 al 22 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(17, 17, 0, 'Errore backup NAS in genarale email:18/08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(18, 18, 0, 'Nas file server errore backup dal 16 al 22 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(19, 19, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(20, 20, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(21, 21, 0, 'Render Veeam copia atena errore dal 16 al 22 mese 08', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(22, 22, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(23, 23, 0, 'Backup file server e office 365', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(24, 24, 0, 'Backup Dylog da server-gepa errore ', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(25, 25, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(26, 26, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(27, 27, 0, 'Server Zarattini WG-Dimension ???', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '2021-08-25'),
(28, 28, 0, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, ''),
(29, 29, 1, '', 0, '', 1, '2021-08-23', '2021-08-30', '2021-08-29', 1, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CONTRATTO` int(1) NOT NULL,
  `ATTIVO` int(1) NOT NULL,
  `NEL_CESTINO` int(1) NOT NULL,
  `CESTINATO` int(1) NOT NULL,
  `NOTE` text NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `DATA_CREAZIONE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`ID`, `NOME`, `CONTRATTO`, `ATTIVO`, `NEL_CESTINO`, `CESTINATO`, `NOTE`, `EMAIL`, `DATA_CREAZIONE`) VALUES
(1, 'AUTOTRASPORTI SARTORE', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:39'),
(2, 'BASSO ARREDAMENTI', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:40'),
(3, 'BAUER', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:40'),
(4, 'BBWA', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:40'),
(5, 'CARLON', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:40'),
(6, 'CEEI SRL', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:40'),
(7, 'FINESTRE DESIGN', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:41'),
(8, 'FISIO AND SPORT', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:41'),
(9, 'GAIA INTERNI', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:41'),
(10, 'GALFIN', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:42'),
(11, 'GAZZOLA', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:42'),
(12, 'GUIDOLIN STAMPI', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:43'),
(13, 'HIGOLD', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:43'),
(14, 'INTERMEDIA', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:43'),
(15, 'KTECH', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:43'),
(16, 'MACCHINA CALDERARO', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:44'),
(17, 'NEUROSCIENZE', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:44'),
(18, 'OFFICINA BATTAGLIA', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:44'),
(19, 'PELLIZZARI SRL', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:44'),
(20, 'REALIZZANDO', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:44'),
(21, 'RENDER TECH', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(22, 'RINO TULLIS', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(23, 'SIDE', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(24, 'TIPOGRAFIA SARTORE', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(25, 'TREVISAN ATUOSERVICE', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(26, 'WWD', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:45'),
(27, 'ZARATTINI', 1, 1, 0, 0, '', 'a@A.com', '23-08-2021 13:46'),
(28, 'RIVA NUOVA', 1, 1, 0, 0, '', 'A@a.com', '25-08-2021 22:22'),
(29, 'LINEA 3000', 1, 1, 0, 0, '', 'A@a.com', '25-08-2021 22:23');

-- --------------------------------------------------------

--
-- Struttura della tabella `email`
--

CREATE TABLE `email` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IDCLIENTE` int(10) UNSIGNED NOT NULL,
  `EFFETTUATO` int(10) UNSIGNED NOT NULL,
  `NOTE_ERRORE` int(10) UNSIGNED NOT NULL,
  `TIPO_EMAIL` int(1) NOT NULL,
  `NOTE_EMAIL` text NOT NULL,
  `DATA_INZIO` varchar(255) NOT NULL,
  `INVIA` int(1) NOT NULL,
  `INVIATO` int(1) NOT NULL,
  `TOKEN` varchar(125) NOT NULL,
  `CONFERMA` int(1) NOT NULL,
  `DATA_ORA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `TOKEN` varchar(255) NOT NULL,
  `ATTIVO` int(1) NOT NULL,
  `ADMIN` int(1) NOT NULL,
  `CESTINO` int(1) NOT NULL,
  `BAN` int(1) NOT NULL,
  `MOTIVOBAN` text NOT NULL,
  `DATA` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `TOKEN`, `ATTIVO`, `ADMIN`, `CESTINO`, `BAN`, `MOTIVOBAN`, `DATA`) VALUES
(1, 'Admin', 'c484731969b767820934f6fb74a803f05b382e4b5b10383f6819a5374fcda0fb8d0d7e14f9cf6ef8f76d406669c081821fc6f32d068e98b3f831b163c8a0f84b', '', 1, 1, 0, 0, '', '08/08/2021');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`),
  ADD KEY `CONTROLLATO` (`CONTROLLATO`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`),
  ADD KEY `EFFETTUATO` (`EFFETTUATO`),
  ADD KEY `NOTE_ERRORE` (`NOTE_ERRORE`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `backup`
--
ALTER TABLE `backup`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT per la tabella `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `backup`
--
ALTER TABLE `backup`
  ADD CONSTRAINT `backup_ibfk_1` FOREIGN KEY (`IDCLIENTE`) REFERENCES `clienti` (`ID`),
  ADD CONSTRAINT `backup_ibfk_2` FOREIGN KEY (`CONTROLLATO`) REFERENCES `users` (`ID`);

--
-- Limiti per la tabella `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`IDCLIENTE`) REFERENCES `clienti` (`ID`),
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`EFFETTUATO`) REFERENCES `backup` (`ID`),
  ADD CONSTRAINT `email_ibfk_3` FOREIGN KEY (`NOTE_ERRORE`) REFERENCES `backup` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
