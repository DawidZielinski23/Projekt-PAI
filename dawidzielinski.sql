-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 22 Paź 2022, 20:13
-- Wersja serwera: 10.5.15-MariaDB-10+deb11u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dawidzielinski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `elementy`
--

CREATE TABLE `elementy` (
  `id` int(11) NOT NULL,
  `kategoria_id` int(11) DEFAULT NULL,
  `nazwa` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `img_tn` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `elementy`
--

INSERT INTO `elementy` (`id`, `kategoria_id`, `nazwa`, `opis`, `img`, `img_tn`) VALUES
(1, 1, 'TK-3', 'TK-3 (również TK) – polska tankietka z czasów dwudziestolecia międzywojennego. Obok czołgu 7TP była podstawową bronią polskich sił pancernych.<br> Konstrukcyjnie oparta była na angielskiej tankietce Carden-Loyd. Seryjna produkcja tych pojazdów odbywała się w fabryce Ursus w Czechowicach pod Warszawą. W latach 1931–1933 powstało ok. 300 tych wozów. W oparciu o TK-3 powstały prototypowe pojazdy – tankietka z wieżą (TKW) i działo samobieżne (TKD), a także głęboko zmodernizowana tankietka TKS. W roku 1938 tankietki TK-3 wykorzystywano w operacji zajmowania Zaolzia. Podczas kampanii wrześniowej ok. 470 tankietek TK-3 i TKS służyło głównie do zadań rozpoznawczych i patrolowych, poza tym do wspierania atakującej kawalerii i piechoty, a także do osłony wycofujących się jednostek. Do września 1939 jedynym użytkownikiem tych tankietek było Wojsko Polskie. Po kampanii wrześniowej część wozów trafiła do armii niemieckiej oraz węgierskiej.', 'TK-3.jpg', 'TK-3_tn.jpg'),
(2, 1, 'TKS', 'TKS – polska tankietka z okresu przed II wojną światową. Obok czołgu 7TP był podstawową bronią polskich sił pancernych podczas kampanii wrześniowej 1939.\r\n      TKS był ulepszoną wersją czołgu TK-3. Został skonstruowany w Biurze Studiów PZInż. przez zespół pod kierunkiem inż. Edwarda Habicha. Główną zmianą była modernizacja kształtu przedniej części kadłuba, wymiana silnika oraz dodanie peryskopu dla dowódcy, zmiana opancerzenia, instalacji elektrycznej, ulepszenie układu jezdnego. Produkcja seryjna ruszyła w 1934. Wyprodukowano łącznie 280 egzemplarzy. Ponieważ uzbrojenie czołgu TKS uznano za niewystarczające, na początku 1939 roku (po wcześniejszych próbach jesienią 1938) postanowiono przezbroić 250 czołgów (TK-3 i TKS łącznie) w nkm wz. 38FK kal. 20 mm., polskiej konstrukcji. Do grudnia 1939 miano przezbroić 50 czołgów TK-3 i 60 TKS[1]. Ogólna liczba czołgów planowanych do przezbrojenia: 70 TK-3 i 80 TKS. Cykl ten miał się zakończyć z końcem lutego 1940. Do wybuchu wojny zakładom PZInż. dostarczono 26 sztuk nowego uzbrojenia. Ile zdołano przezbroić dokładnie czołgów, nie wiadomo, dość, że w linii znalazły się 23 TKS-y (24) z działkiem 20 mm.', 'tks.jpg', 'tks_tn.jpg'),
(3, 1, '7TP', '7TP (skrót od siedmiotonowy, polski) – polski czołg lekki skonstruowany przed II wojną światową. Obok tankietek TK-3 i TKS był podstawową bronią polskich sił pancernych podczas wojny obronnej 1939.\r\n      Konstrukcja czołgu 7TP była polskim rozwinięciem brytyjskiego czołgu Vickers E, którego licencję zakupiła Polska w dwudziestoleciu międzywojennym. Czołg został zatwierdzony do produkcji wiosną 1935 roku. W porównaniu z czołgiem Vickers, 7TP miał mocniejszy silnik wysokoprężny i był pierwszym w Europie oraz jednym z pierwszych na świecie czołgów wyposażonych w tego rodzaju silnik (obok czołgów japońskich tego okresu, produkowanych jednak w małych ilościach). Oprócz Polaków, silnik dieslowski docenił również ZSRR, który rozpoczął w tamtym okresie montaż czołgów BT-7M. Takie rozwiązanie było znacznie bezpieczniejsze, niż stosowane powszechnie w tamtym okresie silniki benzynowe, ze względu na mniejszą łatwopalność oleju napędowego. Zmiany układu napędowego pociągnęły za sobą zmianę sylwetki czołgu, wóz otrzymał też nieco grubszy pancerz.', '7_TP_tank.png', '7_TP_tank_tn.jpg'),
(4, 2, 'T-34', 'T-34 – radziecki czołg średni produkowany w latach 1941–1958.\r\nW chwili pojawienia się na froncie II wojny światowej stanowił zaskoczenie dla Niemców ze względu na duży kaliber armaty i grubość pancerza. Miał opinię pojazdu, którego wykorzystanie znacząco wpłynęło na przebieg wojny. Początkowo produkowany w Charkowskiej Fabryce Parowozów im. Kominternu, był podstawą uzbrojenia radzieckich sił pancernych w latach 1941–1945. Podczas wojny był pojazdem pancernym wyprodukowanym w największej liczbie egzemplarzy. Był też drugim, pod względem wielkości produkcji, czołgiem wszech czasów – po swoim następcy, czołgu serii T-54/55[3]. W 1996 roku T-34 był nadal używany przez 27 krajów świata.', 't34.jpg', 't34_tn.jpg'),
(5, 2, 'Cromwell', 'A27M Cruiser Tank VIII Cromwell – brytyjski czołg pościgowy nazwany na cześć Olivera Cromwella, był to jeden z bardziej udanych brytyjskich czołgów pościgowych, pierwsza konstrukcja tego typu dorównująca ówczesnym czołgom średnim. Był to pierwszy brytyjski czołg z działem „uniwersalnym” (z armatą przeciwpancerną przystosowaną także do strzelania amunicją burzącą i odłamkową), miał dużą mobilność i dobre opancerzenie. W końcowym okresie II wojny światowej w niektórych jednostkach brytyjskich zastąpił amerykańskie czołgi M4 Sherman. Na jego konstrukcji bazował Comet, uważany za pierwszy nowoczesny czołg podstawowy.', 'Cromwell.jpg', 'Cromwell_tn.jpg'),
(6, 2, 'M4 Sherman', 'M4 Sherman (oficjalnie Medium Tank, M4) – amerykański czołg średni, produkowany w czasie II wojny światowej. Armia brytyjska stosowała nazwę M4 General Sherman. Czołg nazwany na cześć generała Williama Shermana.\r\nSherman bazował na podwoziu i wielu podzespołach czołgu M3 Lee, na którym zamontowano wieżę z działem 75 mm. Umożliwiło to szybkie przestawienie się zakładów na produkcję nowego pojazdu. Dlatego w okresie od lutego 1942 r. do końca II wojny światowej, wyprodukowano łącznie 49 000 sztuk wszystkich wersji. Używany, między innymi, przez armie USA, Wielkiej Brytanii, Polski, Francji i ZSRR. Zbudowano także wersje specjalne, takie jak: pływający Sherman DD (Duplex Drive – podwójny napęd), Sherman Crab (z trałem przeciwminowym), Sherman Dozer (czołg inżynieryjny ze spychaczem z przodu – do rozminowywania i prac inżynierskich), Sherman Zippo (Sherman z zamontowanym miotaczem ognia zamiast głównego działa).', 'M4.jpg', 'M4_tn.jpg'),
(7, 1, 'Samochód pancerny wz. 34', 'Samochód pancerny wz. 34 – lekki samochód pancerny produkcji polskiej z okresu dwudziestolecia międzywojennego. Był to podstawowy sprzęt Wojska Polskiego tej kategorii w kampanii wrześniowej.\r\nPo odzyskaniu przez Polskę niepodległości w roku 1918 w tworzonym Wojsku Polskim rozpoczęto organizowanie oddziałów samochodowych uzbrojonych m.in. w samochody pancerne. Początkowo wykorzystywano pojazdy pozostawione przez zaborców oraz zdobyte w czasie walk o granice. Ponadto zakupiono we Francji niewielkie partie samochodów Peugeot.\r\nW połowie lat 20. XX wieku postanowiono opracować lub pozyskać za granicą nowe samochody pancerne, które zastąpiłyby w Wojsku Polskim starsze konstrukcje. Początkowo, w roku 1925, planowano zbudować własne samochody pancerne w oparciu o sprowadzone do Polski w latach 1924-1925 podwozia Citroën-Kegresse B-10CV. Projekt opancerzenia podwozi opracował inż. Robert Gabeau z Biura Konstrukcyjnego Wojskowego Instytutu Badań Inżynierii (BK WIBI) przy współpracy z inż. Józefem Chacińskim z Centralnych Warsztatów Samochodowych (CWS). Dwa prototypowe samochody zbudowano w roku 1925. Wzięły one udział w ćwiczeniach na Wołyniu odbywających się we wrześniu tego samego roku. Na podstawie zdobytych doświadczeń Komitet do Spraw Uzbrojenia i Sprzętu (KSUS) zatwierdził 17 października 1925 roku projekt opancerzenia i polecił zabudowanie według tego wzoru kolejnych 90 podwozi Citroën-Kegresse. Pojawił się jednak zarzut, że podwozia te nie nadają się do tego celu. Zainteresowano się w efekcie projektem włoskiej firmy Ansaldo, która zaproponowała samochód pancerny „Polonia” powstały przez modyfikację ciągników artyleryjskich Pavesi. W styczniu 1926 roku komisja, której przewodniczącym był mjr Romiszowski, dokonała prób porównawczych samochodów firmy Ansaldo z samochodami półgąsienicowymi Citroën-Kegresse. Ostatecznie pozostano przy budowie samochodów pancernych w oparciu o podwozia półgąsienicowe. Z powodu braku pieniędzy przebudowa przebiegała z opóźnieniem i pojazdy oficjalnie przyjęto na wyposażenie Wojska Polskiego dopiero w roku 1928 pod oznaczeniem samochód pancerny wz. 28. Dostawy pojazdów zakończono w roku 1930', 'Armored_car_pattern_34.jpg', 'Armored_car_pattern_34_tn.jpg'),
(8, 3, 'PZInż 10TP', 'PZInż 10TP – prototyp polskiego czołgu pościgowego (kołowo-gąsienicowego), zbudowanego przed II wojną światową.\r\nW 1936 roku w Biurze Badań Technicznych Broni Pancernych przystąpiono do opracowania projektu czołgu kołowo-gąsienicowego 10TP, opartego na konstrukcjach czołgów amerykańskiego inż. Waltera Christie. Jeden wykonany w BBT czołg 10TP przeszedł w 1937 roku pierwsze próby fabryczne. W czołgu tym zastosowano wieżę Boforsa oraz silnik American LaFrance o mocy katalogowej 240 KM (w istocie podczas badań na hamowni BBT osiągnął on jedynie około 210 KM). Dalsze intensywne próby czołgu 10TP przeprowadzone na przełomie 1938/1939 roku wykazały szereg usterek. Najczęściej zawodziła skomplikowana wymienna trakcja kołowo-gąsienicowa czołgu. Dlatego też po pewnych doświadczeniach, projekt został anulowany na korzyść 14TP. Czołg został zniszczony we wrześniu 1939 roku, prawdopodobnie w wyniku walk z Niemcami.', '10TP.jpg', '10TP_tn.jpg'),
(9, 2, 'IS-2', 'IS-2 (ros. ИС-2) – czołg ciężki konstrukcji radzieckiej z okresu II wojny światowej.\r\nLatem 1943 roku powstał w zakładach w Czelabińsku pierwszy model nowego czołgu ciężkiego. Początkowo nosił on oznaczenie \"obiekt 237\". Jego głównym konstruktorem był N. F. Szaszmurin. 8 sierpnia 1943 czołg został przyjęty do uzbrojenia Armii Czerwonej. Nowy pojazd otrzymał oznaczenie IS-1 (IS – Iosif Stalin) lub IS-85. Czołg był uzbrojony w armatę D-5T kal. 85 mm. Miał masę ok. 44 t. Wyprodukowano tylko 107 egzemplarzy IS-1. Ponieważ w tym okresie powstał czołg średni T-34-85 uzbrojony w identyczną armatę, zaszła potrzeba wzmocnienia uzbrojenia czołgu ciężkiego. Szybko wdrożono do produkcji czołg uzbrojony w armatę D-25T kalibru 122 mm. Nosił on początkowo oznaczenie \"obiekt 240\". Po przyjęciu do uzbrojenia zmieniono je na IS-2. W trakcie produkcji czołg ulegał modernizacji. Wprowadzono w jego armacie półautomatyczny zamek klinowy w celu zwiększenia szybkostrzelności działa. Modernizacji uległ kadłub czołgu, a zwłaszcza kształt jego przednich płyt. Na włazie dowódcy zamontowano podstawę dla wielkokalibrowego karabinu maszynowego DSzK kal. 12,7 mm. Zmodernizowane pojazdy nosiły oznaczenie IS-2M. Do zakończenia wojny ogółem zbudowano ok. 3400 czołgów IS-1 i IS-2.\r\nNa podwoziu czołgu IS-2 powstały działa pancerne ISU-152 i ISU-122.', 'Js2.jpg', 'Js2_tn.jpg'),
(10, 2, 'M3/M5 Stuart', 'M3/M5 – amerykański czołg lekki z okresu II wojny światowej.\r\nNadana mu przez Brytyjczyków potoczna nazwa Stuart pochodzi od nazwiska amerykańskiego generała z okresu wojny secesyjnej – Jeba Stuarta.\r\nPrzez długie lata Amerykanie nie przykładali zbyt wielkiej wagi do rozwoju swojej broni pancernej. W latach 20. XX wieku zbudowali kilka lekkich czołgów wsparcia piechoty, ale nie rozwinęli ich produkcji na dużą skalę. Na początku lat trzydziestych na bazie tych konstrukcji powstał nowy typ czołgu lekkiego M2. Pod wpływem wojennych doświadczeń z Europy, wiosną 1940, Departament Zaopatrzenia opracował projekt gruntownie ulepszonej odmiany czołgu M2A4. W wyniku tych prac powstał czołg lekki M3. Otrzymał on grubszy pancerz (38-51 mm), a także poprawione zawieszenie. W czerwcu 1940 r. projekt ten został zatwierdzony i przyjęty do produkcji, którą rozpoczęto w marcu następnego roku. Wóz był kilkakrotnie modernizowany, między innymi zmieniono nitowaną wieżę na spawaną. Na początku 1942 r. wprowadzono spawany kadłub. Część pojazdów dostała nowe silniki Diesla. Powstały wersje M3, M3 (diesel), M3A1, M3A1 (diesel), M3A3, M5, M5A1. Ogółem w latach 1941-1944 wyprodukowano 22743 czołgi wszystkich wersji.', 'm3.jpg', 'm3_tn.jpg'),
(11, 3, '4TP', '4TP (oznaczenie fabryczne PZInż.140) – prototyp polskiego lekkiego czołgu rozpoznawczego z okresu przed II wojny światowej.\r\n\r\nNależał do rodziny nowoczesnych pojazdów gąsienicowych, skonstruowanych w całości w Polsce pod koniec lat trzydziestych przez inż. E. Habicha. Ten czołg miał szansę wejść na uzbrojenie wojsk pancernych Wojska Polskiego, w miejsce używanych dotąd tankietek TK/TKS.', '4TP.jpg', '4TP_tn.jpg'),
(12, 3, '20/25TP', '20/25TP – projekt polskiego czołgu średniego z czasów dwudziestolecia międzywojennego.\r\nKoncepcja wyposażenia Wojska Polskiego w czołgi średnie pojawiła się już w połowie lat 20. XX wieku. Uznano wtedy, że powinien to być pojazd o masie do 20 t, szybki, a także w dostatecznym stopniu opancerzony i uzbrojony. Jednakże w ciągu następnych lat prace nad budową czołgu średniego nie posuwały się naprzód. Nie istniała możliwość wzorowania się na czołgach zagranicznych (odpowiednich czołgów albo nie było, albo trzymano ich projekty w tajemnicy). Brakowało także w kraju specjalistów z odpowiednim doświadczeniem oraz przemysłu zdolnego do produkcji takiego pojazdu. Ważnym powodem był również brak wystarczających środków pieniężnych.', '2025TP.jpg', '2025TP_tn.jpg'),
(13, 2, 'T-34-85', 'T-34-85 – czołg średni konstrukcji radzieckiej z okresu II wojny światowej.\r\nW 1943 roku pojawił się problem niewystarczającego uzbrojenia głównego czołgu Armii Czerwonej – T-34. Niemcy wprowadzili w tym czasie do akcji nowe typy czołgów. Były to głównie wozy typu Panther i Tiger z nowymi armatami kal. 75 i 88 mm. Także popularny na froncie czołg Panzerkampfwagen IV, otrzymał nową długolufową armatę kal. 75 mm. Dowództwo radzieckie doszło do wniosku, że także T-34 należy wyposażyć w działo o większej sile ognia. Rozpatrywano przede wszystkim uzbrojenie czołgu w armatę o większym kalibrze. Rozpoczęto pracę nad uzbrojeniem wozu w działo o kalibrze 85 mm. Nad jego konstrukcją pracowało kilka zespołów konstruktorów.', 't3485.jpg', 't3485_tn.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(150) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'Czołgi polskie'),
(2, 'Czołgi obce'),
(3, 'Prototypy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'dawid', '$2y$10$lhNdYpzjN49hCoilJRg/1.4Dn6qL3buoFTaVIwnQNMslSp2PeGZHG', '2020-11-11 16:02:05'),
(2, 'dawid1', '$2y$10$mDSqgn4MpDgPXXHaDFsht.P6Pmdt8Yn9MFAbh/8.UD6wJ3zVsYefK', '2020-11-11 16:03:36'),
(7, 'dawid2', '$2y$10$0XiPsscONCqBLc5BwlnGIOxyJyfJu4CwZF9JOuBFBNoXDAlhCUXna', '2020-11-11 16:06:26'),
(8, 'dawid3', '$2y$10$JNQc0BRh2Ykizc2YQWpL3OpBsE5PFf6hjtWcEt0JUsSDgg.f4FCyC', '2020-12-14 09:33:44'),
(9, 'dawid12', '$2y$10$bh2MCzuCCbN/XYR1T2VxFefuMf0/diAu8P75KyLc5.PjtQaHsInkW', '2020-12-14 09:34:22'),
(10, 'Andrzej', '$2y$10$.275GyBwI38L2xLGAJ6ln.WUt0opCep1DldM4QxKgcTbD7Vk/HUcy', '2020-12-14 10:20:03');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `elementy`
--
ALTER TABLE `elementy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoria_id` (`kategoria_id`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `elementy`
--
ALTER TABLE `elementy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
