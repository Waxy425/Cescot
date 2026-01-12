-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 12, 2026 alle 11:32
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestione_corsi`
--
CREATE DATABASE IF NOT EXISTS `gestione_corsi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestione_corsi`;

-- --------------------------------------------------------

--
-- Struttura della tabella `aule`
--

DROP TABLE IF EXISTS `aule`;
CREATE TABLE `aule` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `capienza` int(11) NOT NULL,
  `numero` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `aule`
--

INSERT INTO `aule` (`id`, `nome`, `capienza`, `numero`) VALUES
(1, 'Aula Magna', 100, 'A01'),
(2, 'Laboratorio', 35, 'L02'),
(3, 'Aula Standard', 50, 'S03');

-- --------------------------------------------------------

--
-- Struttura della tabella `certificazioni`
--

DROP TABLE IF EXISTS `certificazioni`;
CREATE TABLE `certificazioni` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_certificazione` date NOT NULL,
  `punteggio_minimo` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `certificazioni`
--

INSERT INTO `certificazioni` (`id`, `nome`, `data_certificazione`, `punteggio_minimo`) VALUES
(1, 'Certificazione SQL', '2023-04-15', 70.00),
(2, 'Certificazione MySQL', '2023-05-20', 75.50),
(3, 'Certificazione PHP', '2023-06-10', 80.00);

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

DROP TABLE IF EXISTS `corsi`;
CREATE TABLE `corsi` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `durata_ore` int(11) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`id`, `nome`, `descrizione`, `durata_ore`, `costo`, `data_inizio`, `data_fine`) VALUES
(1, 'SQL Base', 'Corso introduttivo a SQL', 40, 270.00, '2023-04-01', '2023-04-30'),
(2, 'MySQL Avanzato', 'Approfondimenti su MySQL', 60, 450.50, '2023-05-08', '2023-06-15'),
(3, 'Programmazione PHP', 'Corso di programmazione con PHP', 50, 350.75, '2023-06-01', '2023-06-30');

-- --------------------------------------------------------

--
-- Struttura della tabella `corsisti`
--

DROP TABLE IF EXISTS `corsisti`;
CREATE TABLE `corsisti` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `data_nascita` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `corsisti`
--

INSERT INTO `corsisti` (`id`, `nome`, `cognome`, `data_nascita`, `email`, `telefono`) VALUES
(1, 'Mario', 'Rossi', '1985-04-15', 'mario.rossi@example.com', '1112223334'),
(2, 'Anna', 'Bianchi', '1990-07-20', 'anna.bianchi@example.com', '0987654321'),
(3, 'Luca', 'Verdi', '1988-11-30', 'luca.verdi@example.com', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi_frequentati`
--

DROP TABLE IF EXISTS `corsi_frequentati`;
CREATE TABLE `corsi_frequentati` (
  `id` int(11) NOT NULL,
  `corsista_id` int(11) NOT NULL,
  `corso_id` int(11) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL,
  `voto_finale` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `corsi_frequentati`
--

INSERT INTO `corsi_frequentati` (`id`, `corsista_id`, `corso_id`, `data_inizio`, `data_fine`, `voto_finale`) VALUES
(1, 1, 1, '2023-04-01', '2023-04-30', 8.50),
(2, 1, 2, '2023-05-01', '2023-06-15', 7.00),
(3, 2, 1, '2023-04-01', '2023-04-30', 9.00),
(4, 2, 3, '2023-06-01', '2023-06-30', 8.00);

-- --------------------------------------------------------

--
-- Struttura della tabella `docenti`
--

DROP TABLE IF EXISTS `docenti`;
CREATE TABLE `docenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `data_assunzione` date NOT NULL,
  `stipendio` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `docenti`
--

INSERT INTO `docenti` (`id`, `nome`, `cognome`, `data_assunzione`, `stipendio`) VALUES
(1, 'Giovanni', 'Neri', '2020-01-15', 2650.00),
(2, 'Sara', 'Gialli', '2021-03-10', 2700.50),
(3, 'Marco', 'Blu', '2019-07-25', 3000.00);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aule`
--
ALTER TABLE `aule`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `certificazioni`
--
ALTER TABLE `certificazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `corsisti`
--
ALTER TABLE `corsisti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- Indici per le tabelle `corsi_frequentati`
--
ALTER TABLE `corsi_frequentati`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_corso_frequentato` (`corsista_id`,`corso_id`),
  ADD KEY `fk_corso` (`corso_id`);

--
-- Indici per le tabelle `docenti`
--
ALTER TABLE `docenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `aule`
--
ALTER TABLE `aule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `certificazioni`
--
ALTER TABLE `certificazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `corsisti`
--
ALTER TABLE `corsisti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `corsi_frequentati`
--
ALTER TABLE `corsi_frequentati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `docenti`
--
ALTER TABLE `docenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `corsi_frequentati`
--
ALTER TABLE `corsi_frequentati`
  ADD CONSTRAINT `fk_corsista` FOREIGN KEY (`corsista_id`) REFERENCES `corsisti` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_corso` FOREIGN KEY (`corso_id`) REFERENCES `corsi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
