-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 12 nov 2026 om 09:40
-- Serverversie: 10.6.23-MariaDB-0ubuntu0.22.04.1
-- PHP-versie: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Recepten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `koken`
--

CREATE TABLE `koken` (
  `ID` int(11) NOT NULL,
  `recept_image` text NOT NULL,
  `naamrecept` varchar(50) NOT NULL,
  `beschrijving` varchar(1000) NOT NULL,
  `tijd` tinyint(2) NOT NULL,
  `vegan` tinyint(1) NOT NULL,
  `ingredienten` text NOT NULL,
  `stappen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `koken`
--

INSERT INTO `koken` (`ID`, `recept_image`, `naamrecept`, `beschrijving`, `tijd`, `vegan`, `ingredienten`, `stappen`) VALUES
(4, 'recept_6af4ca7262018.png', 'Macaroni', 'Heerlijke macaroni met ketchup, ham en kaas.<br> Simpel en lekker voor kinderen.', 20, 0, '300 g macaroni - 150 g hamblokjes - 1 ui - 1 rode paprika - 150 g geraspte kaas - 4 el ketchup - 1 el tomatenpuree - 1 tl Italiaanse kruiden - 1 el olie - peper en zout -', '1. Kook de macaroni volgens de verpakking en giet hem af.\r\n2. Snipper de ui en snijd de paprika in kleine blokjes.\r\n3. Bak de ui, paprika en hamblokjes 5 minuten in olie.\r\n4. Roer de tomatenpuree, ketchup en kruiden erdoor en bak 1 minuut mee.\r\n5. Meng de macaroni door de saus en breng op smaak met peper en zout.\r\n6. Strooi de kaas erover en laat hem smelten onder een deksel, of zet de pan 5 minuten in een oven van 200 graden.'),
(8, 'recept_6af4ca728cc08.png', 'Tteobokki', 'Een lekker Koreaans recept met ramen en rijstcake.<br> Perfect voor 1 pan.', 30, 1, '300 g tteok (Koreaanse rijstcakes) - 1 pakje ramen noedels (zonder kruidenzakje) - 2 el gochujang - 1 tl gochugaru (Koreaans chilipoeder) - 1 el sojasaus - 1 el suiker - 500 ml water of groentebouillon - 2 bosuitjes - 1/2 spitskool - 1 tl sesamzaadjes -', '1. Week de tteok 10 minuten in koud water als ze hard zijn.\r\n2. Breng het water of de bouillon aan de kook in een brede pan.\r\n3. Roer de gochujang, gochugaru, sojasaus en suiker erdoor tot een rode saus.\r\n4. Doe de tteok en de kool in reepjes erbij en laat 8 minuten zachtjes koken. Roer af en toe zodat niets aan de bodem plakt.\r\n5. Voeg de ramen noedels toe en kook nog 3 minuten tot de noedels zacht zijn en de saus dikker is.\r\n6. Strooi de bosuitjes en sesamzaadjes erover en eet het meteen.'),
(14, 'recept_6af4ca7233e6f.jpg', 'Gozleme kapsalon', 'Kapsalon in een Turks jasje: gozleme gevuld met kip, kaas en groenten.<br> Lekker met knoflooksaus en een frisse salade.', 20, 0, '2 grote yufkavellen of tortilla wraps - 250 g kipdijfilet - 1 tl shoarmakruiden - 150 g geraspte Goudse kaas - 100 g feta - 1 ui - 1 tomaat - ijsbergsla - 1/2 komkommer - 4 el knoflooksaus - 1 el sambal of chilisaus - 1 el olijfolie -', '1. Snijd de kip in reepjes en bak ze met de shoarmakruiden in olijfolie tot ze goudbruin en gaar zijn.\r\n2. Snipper de ui en bak die kort mee.\r\n3. Leg een yufkavel neer en verdeel de helft van de kip, kaas en verkruimelde feta over een helft van het vel.\r\n4. Vouw het vel dubbel en druk de randen goed aan.\r\n5. Bak de gozleme in een droge koekenpan aan beide kanten 3 tot 4 minuten tot hij krokant is en de kaas gesmolten is. Herhaal met het tweede vel.\r\n6. Snijd de sla, tomaat en komkommer en leg dit op de gozleme.\r\n7. Maak af met knoflooksaus en sambal.'),
(37, 'recept_6af4ca030c903.png', 'Pasta pesto met kip', 'Snelle pasta met groene pesto, kip en cherrytomaatjes.<br> Klaar in 20 minuten, ideaal na school of werk.', 20, 0, '250 g penne - 2 kipfilets - 4 el groene pesto - 250 g cherrytomaatjes - 1 teen knoflook - 50 g geraspte Parmezaanse kaas - handje rucola - 1 el olijfolie - peper en zout -', '1. Kook de penne volgens de verpakking.\r\n2. Snijd de kip in blokjes en bak ze 6-8 minuten in olijfolie tot ze gaar zijn. Breng op smaak met peper en zout.\r\n3. Snijd de cherrytomaatjes doormidden en bak ze samen met de knoflook 2 minuten mee.\r\n4. Giet de pasta af en meng met de pesto, kip en tomaatjes.\r\n5. Serveer met rucola en Parmezaanse kaas erover.'),
(38, 'recept_6af4ca281c8a4.png', 'Shakshuka', 'Eieren gegaard in een pittige saus van tomaat en paprika.<br> Lekker met vers brood als ontbijt of lunch.', 25, 0, '4 eieren - 1 blik tomatenblokjes (400 g) - 1 rode paprika - 1 ui - 2 tenen knoflook - 1 tl komijn - 1 tl paprikapoeder - snufje chilivlokken - 1 el olijfolie - verse peterselie - peper en zout - stokbrood of pita -', '1. Snipper de ui, snijd de paprika in reepjes en hak de knoflook fijn.\r\n2. Bak de ui en paprika 5 minuten in olijfolie in een koekenpan. Voeg knoflook en kruiden toe en bak 1 minuut mee.\r\n3. Voeg de tomatenblokjes toe en laat 8 minuten zachtjes koken. Breng op smaak met peper en zout.\r\n4. Maak 4 kuiltjes in de saus en breek in elk kuiltje een ei.\r\n5. Doe een deksel op de pan en laat 5-7 minuten garen tot het eiwit stevig is.\r\n6. Strooi peterselie erover en eet het met brood.'),
(39, 'recept_6af4ca294350d.png', 'Rode linzensoep', 'Romige Turkse soep (mercimek) van rode linzen.<br> Goedkoop, gezond en vult goed.', 35, 1, '250 g rode linzen - 1 ui - 1 wortel - 1 aardappel - 2 tenen knoflook - 1 el tomatenpuree - 1 tl komijn - 1 tl paprikapoeder - 1,2 liter groentebouillon - 2 el olijfolie - 1 citroen - peper en zout -', '1. Spoel de linzen af in een zeef.\r\n2. Snipper de ui en snijd de wortel en aardappel in kleine blokjes.\r\n3. Bak de ui in olijfolie tot hij zacht is. Voeg knoflook, tomatenpuree en kruiden toe en bak 1 minuut.\r\n4. Doe de linzen, wortel, aardappel en bouillon erbij en laat 25 minuten zachtjes koken.\r\n5. Pureer de soep glad met een staafmixer.\r\n6. Breng op smaak met peper en zout en serveer met een partje citroen.'),
(40, 'recept_6af4ca71d16b3.png', 'Nasi goreng', 'Gebakken rijst met kip, groenten en een gebakken ei.<br> Een goede manier om rijst van gisteren op te maken.', 30, 0, '300 g gekookte rijst (van een dag oud) - 200 g kipfilet - 1 ui - 2 tenen knoflook - 1 prei of 2 bosuitjes - 1 wortel - 2 el ketjap manis - 1 tl sambal - 2 eieren - 2 el zonnebloemolie - kroepoek -', '1. Snijd de kip in blokjes, snipper de ui en snijd de prei en wortel in dunne stukjes.\r\n2. Bak de kip in een wok in 1 el olie tot hij gaar is en haal hem uit de pan.\r\n3. Bak de ui, knoflook, wortel en prei 4 minuten.\r\n4. Doe de rijst erbij en roerbak 5 minuten op hoog vuur.\r\n5. Voeg de kip, ketjap en sambal toe en roer goed door.\r\n6. Bak in een andere pan 2 eieren en leg ze op de nasi. Serveer met kroepoek.'),
(41, 'recept_6af4ca72131a9.png', 'Falafel wraps', 'Volkoren wraps met falafel, hummus en verse groenten.<br> Snel klaar en makkelijk mee te nemen.', 20, 1, '4 volkoren wraps - 12 falafelballetjes (uit de winkel) - 4 el hummus - 1 komkommer - 2 tomaten - 1/2 rode ui - ijsbergsla - 1 el tahin - sap van 1/2 citroen -', '1. Verwarm de falafel in de oven of airfryer volgens de verpakking (ongeveer 10 minuten).\r\n2. Snijd de komkommer, tomaten en rode ui in kleine stukjes en de sla in reepjes.\r\n3. Roer de tahin los met het citroensap en een scheutje water tot een dunne saus.\r\n4. Verwarm de wraps kort in een droge pan.\r\n5. Smeer hummus op elke wrap, beleg met sla, groenten en 3 falafelballetjes.\r\n6. Doe er wat tahinsaus over, rol de wrap op en snijd hem doormidden.'),
(42, 'recept_6af4ca2ca9a48.png', 'Pannenkoeken', 'Ouderwetse Hollandse pannenkoeken.<br> Lekker met stroop, poedersuiker of appel.', 30, 0, '250 g bloem - 500 ml melk - 2 eieren - snufje zout - boter om in te bakken - stroop of poedersuiker -', '1. Doe de bloem en het zout in een kom en maak een kuiltje in het midden.\r\n2. Breek de eieren in het kuiltje en giet er de helft van de melk bij.\r\n3. Klop alles met een garde tot een glad beslag zonder klontjes. Voeg dan de rest van de melk toe.\r\n4. Laat het beslag 10 minuten rusten.\r\n5. Smelt een klontje boter in een koekenpan en schep er een soeplepel beslag in. Draai de pan zodat de bodem bedekt is.\r\n6. Bak de pannenkoek tot de bovenkant droog is, draai hem om en bak de andere kant goudbruin.\r\n7. Herhaal tot het beslag op is en serveer met stroop of poedersuiker.'),
(43, 'recept_6af4ca2dcf403.png', 'Chili sin carne', 'Stevige chili met bonen, mais en paprika, zonder vlees.<br> Maak een grote pan, de volgende dag is hij nog lekkerder.', 40, 1, '1 blik kidneybonen - 1 blik zwarte bonen - 1 blikje mais - 1 blik tomatenblokjes - 1 ui - 2 tenen knoflook - 1 rode paprika - 2 el tomatenpuree - 2 tl chilipoeder - 1 tl komijn - 1 tl gerookt paprikapoeder - 1 el olijfolie - 200 g rijst - verse koriander -', '1. Kook de rijst volgens de verpakking.\r\n2. Snipper de ui, hak de knoflook fijn en snijd de paprika in blokjes.\r\n3. Bak de ui en paprika 5 minuten in olijfolie. Voeg knoflook, tomatenpuree en kruiden toe en bak 1 minuut mee.\r\n4. Spoel de bonen en mais af en doe ze samen met de tomatenblokjes in de pan.\r\n5. Laat de chili 20 minuten zachtjes koken en roer af en toe.\r\n6. Proef en voeg eventueel zout toe. Serveer met rijst en koriander.'),
(44, 'recept_6af4ca2f000a7.png', 'Overnight oats', 'Havermout die je de avond ervoor klaarmaakt.<br> s Ochtends meteen een gezond ontbijt.', 5, 1, '50 g havermout - 150 ml havermelk - 1 el chiazaad - 1 tl ahornsiroop - 1/2 banaan - handje blauwe bessen - 1 el pindakaas -', '1. Doe de havermout, havermelk, chiazaad en ahornsiroop in een pot of bakje en roer goed.\r\n2. Doe er een deksel op en zet het een nacht in de koelkast.\r\n3. Roer de oats de volgende ochtend even door. Is het te dik, doe er dan een scheutje melk bij.\r\n4. Leg de banaan in plakjes en de blauwe bessen erop en eindig met een lepel pindakaas.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `koken`
--
ALTER TABLE `koken`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `koken`
--
ALTER TABLE `koken`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
