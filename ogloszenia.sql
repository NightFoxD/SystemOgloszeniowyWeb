-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: PaĹş 30, 2023 at 02:00 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `position_name` varchar(75) NOT NULL,
  `position_level` enum('Praktykant / StaÄąÄ˝ysta','Asystent','MÄąâ€šodszy specjalista (Junior)','Specjalista (Mid/Regular)','Starszy Specjalista (Senior)','Ekspert','Kierownik / koordynator','MenedÄąÄ˝er','Dyrektor','Prezes','Pracownik fizyczny') NOT NULL,
  `contract_type` enum('Umowa o pracĂ„â„˘','Umowa o dzieÄąâ€šo','Umowa zlecenie','Kontrakt B2B','Umowa na zastĂ„â„˘pstwo','Umowa agencyjna','Umowa o pracĂ„â„˘ tymczasowĂ„â€¦','Umowa o staÄąÄ˝ / praktyki') NOT NULL,
  `working_time` enum('CzĂ„â„˘Äąâ€şĂ„â€ˇ etatu','Dodatkowa / tymczasowa','PeÄąâ€šny etat','') NOT NULL,
  `work_type` enum('Praca stacjonarna','Praca hybrydowa','Praca zdalna','Praca mobilna') NOT NULL,
  `working_hours` varchar(11) NOT NULL,
  `expire_date` date NOT NULL,
  `duties` text NOT NULL,
  `requirements` text NOT NULL,
  `benefits` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_category`
--

CREATE TABLE `announcement_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_subcategory`
--

CREATE TABLE `announcement_subcategory` (
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_working_days`
--

CREATE TABLE `announcement_working_days` (
  `working_days_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `monday` tinyint(1) NOT NULL,
  `tuesday` tinyint(1) NOT NULL,
  `wednesday` tinyint(1) NOT NULL,
  `thursday` tinyint(1) NOT NULL,
  `friday` tinyint(1) NOT NULL,
  `saturday` tinyint(1) NOT NULL,
  `sunday` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE `company` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(75) NOT NULL,
  `localization_link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_application`
--

CREATE TABLE `user_application` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_course`
--

CREATE TABLE `user_course` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `organizer` varchar(40) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE `user_data` (
  `user_data_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_number` decimal(9,0) NOT NULL,
  `pfp` blob NOT NULL,
  `city` varchar(35) NOT NULL,
  `currnent_occupation` varchar(75) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_education`
--

CREATE TABLE `user_education` (
  `education_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(75) NOT NULL,
  `city` varchar(35) NOT NULL,
  `level` enum('podstawowe','zawodowe','Äąâ€şrednie','licencjat','inÄąÄ˝ynier','magister','doktor','doktor habilitowany','profesor') NOT NULL,
  `specialization` varchar(75) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_experience`
--

CREATE TABLE `user_experience` (
  `experience_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(75) NOT NULL,
  `company` varchar(50) NOT NULL,
  `localization` varchar(35) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `duties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_language`
--

CREATE TABLE `user_language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(35) NOT NULL,
  `level` enum('podstawowy',' Äąâ€şrednio-zaawansowany','zaawansowany','') NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_link`
--

CREATE TABLE `user_link` (
  `link_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` enum('Linked','GitHub','Facebook','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_saved`
--

CREATE TABLE `user_saved` (
  `saved_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_skill`
--

CREATE TABLE `user_skill` (
  `skill_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` enum(' obsÄąâ€šuga pakietu xxx','prawo jazdy kategorii xxx','operator maszyn CNC','licencja na helikopter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutĂłw tabel
--

--
-- Indeksy dla tabeli `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indeksy dla tabeli `announcement_category`
--
ALTER TABLE `announcement_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `announcement_subcategory`
--
ALTER TABLE `announcement_subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `announcement_working_days`
--
ALTER TABLE `announcement_working_days`
  ADD PRIMARY KEY (`working_days_id`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- Indeksy dla tabeli `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeksy dla tabeli `user_application`
--
ALTER TABLE `user_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_data_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_language`
--
ALTER TABLE `user_language`
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_link`
--
ALTER TABLE `user_link`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeksy dla tabeli `user_saved`
--
ALTER TABLE `user_saved`
  ADD PRIMARY KEY (`saved_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_skill`
--
ALTER TABLE `user_skill`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement_category`
--
ALTER TABLE `announcement_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement_subcategory`
--
ALTER TABLE `announcement_subcategory`
  MODIFY `subcategory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement_working_days`
--
ALTER TABLE `announcement_working_days`
  MODIFY `working_days_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_application`
--
ALTER TABLE `user_application`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `education_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `experience_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_link`
--
ALTER TABLE `user_link`
  MODIFY `link_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_saved`
--
ALTER TABLE `user_saved`
  MODIFY `saved_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_skill`
--
ALTER TABLE `user_skill`
  MODIFY `skill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `announcement_subcategory` (`subcategory_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `announcement_category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `announcement_subcategory`
--
ALTER TABLE `announcement_subcategory`
  ADD CONSTRAINT `announcement_subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `announcement_category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `announcement_working_days`
--
ALTER TABLE `announcement_working_days`
  ADD CONSTRAINT `announcement_working_days_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_application`
--
ALTER TABLE `user_application`
  ADD CONSTRAINT `user_application_ibfk_2` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_application_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_education`
--
ALTER TABLE `user_education`
  ADD CONSTRAINT `user_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD CONSTRAINT `user_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_language`
--
ALTER TABLE `user_language`
  ADD CONSTRAINT `user_language_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_link`
--
ALTER TABLE `user_link`
  ADD CONSTRAINT `user_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_saved`
--
ALTER TABLE `user_saved`
  ADD CONSTRAINT `user_saved_ibfk_2` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_saved_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD CONSTRAINT `user_skill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
