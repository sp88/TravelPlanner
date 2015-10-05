-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 08:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_planner1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_cat`
--

CREATE TABLE IF NOT EXISTS `activity_cat` (
  `activity_cat_id` varchar(10) NOT NULL,
  `activity_cat_name` varchar(100) NOT NULL,
  PRIMARY KEY (`activity_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_cat`
--

INSERT INTO `activity_cat` (`activity_cat_id`, `activity_cat_name`) VALUES
('ACTCAT001', 'Water Activity \r\n'),
('ACTCAT002', 'Shopping\r\n'),
('ACTCAT003', 'Theater & Concerts\r\n'),
('ACTCAT004', 'Spas & Wellness\r\n'),
('ACTCAT005', 'Night Life\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `attr_id` varchar(10) NOT NULL,
  `fk_dest_id` varchar(10) NOT NULL,
  `attr_name` varchar(100) NOT NULL,
  `wiki_name` varchar(150) NOT NULL,
  `attr_description` varchar(500) DEFAULT NULL,
  `attr_address` varchar(255) DEFAULT NULL,
  `attr_lat` varchar(50) NOT NULL,
  `attr_lng` varchar(50) NOT NULL,
  `attr_image` varchar(100) NOT NULL,
  PRIMARY KEY (`attr_id`),
  KEY `fk_dest_id` (`fk_dest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`attr_id`, `fk_dest_id`, `attr_name`, `wiki_name`, `attr_description`, `attr_address`, `attr_lat`, `attr_lng`, `attr_image`) VALUES
('ATTR001', 'DEST001', 'Beira Lake', 'Beira_Lake', NULL, 'Beira Lake, Colombo', '6.930542', '79.8541', 'colombo_Beira Lake.jpg'),
('ATTR002', 'DEST001', 'Colombo National Museum', 'National_Museum_of_Colombo', NULL, 'Sir Marcus Fernando Mawatha, Colombo', '6.911099', '79.86149', 'colombo_Colombo National Museum.jpg'),
('ATTR003', 'DEST001', 'Dutch Period Museum', 'Colombo_Dutch_Museum', NULL, 'Colombo 11, Colombo', '6.936404', '79.851539', 'colombo_Dutch Period Museum.jpg'),
('ATTR004', 'DEST001', 'The Colombo Lighthouse', 'Colombo_Lighthouse', NULL, '\nColombo Lighthouse, Chaithya Rd, Colombo', '6.936555', '79.840789', 'colombo_The Colombo Lighthouse.jpg'),
('ATTR005', 'DEST001', 'St Lucia''s Cathedral', 'St._Lucia''s_Cathedral', NULL, 'Colombo 13, Colombo', '6.94861', '79.86406', 'colombo_St Lucia''s Cathedral.jpg'),
('ATTR006', 'DEST001', 'Kelaniya Raja Maha Vihara', 'Kelaniya_Raja_Maha_Vihara', NULL, 'Kelaniya, Colombo', '6.95229', '79.918506', 'colombo_Kelaniya Raja Maha Vihara.jpg'),
('ATTR007', 'DEST001', 'Gangaramaya Buddhist Temple', 'Gangaramaya_Temple', NULL, '61 Sri Jinarathana Rd, Colombo ', '6.916878', '79.856565', 'colombo_Gangaramaya Buddhist Temple.jpg'),
('ATTR008', 'DEST001', 'Isipathanaramaya Buddhist Temple', 'Isipathanaramaya_Temple', NULL, 'Isipathana Road, Colombo', '6.889134', '79.865526', 'colombo_Isipathanaramaya Buddhist Temple.jpg'),
('ATTR009', 'DEST001', 'Mount Lavinia', 'Dehiwala-Mount_Lavinia', NULL, 'Dehiwala-Mount Lavinia', '6.8397', '79.8758', 'colombo_Mount Lavinia.jpg'),
('ATTR010', 'DEST001', 'Galle Face Green', 'Galle_Face_Green', NULL, 'A2, Colombo', '6.92416', '79.844866', 'colombo_Galle Face Green.jpg'),
('ATTR011', 'DEST001', 'National Zoological Gardens ', 'National_Zoological_Gardens_of_Sri_Lanka', NULL, 'Anagarika Dharmapala Mawatha, Dehiwala', '6.857401', '79.873773', 'colombo_National Zoological Gardens .jpg'),
('ATTR012', 'DEST001', 'Viharamahadevi Park', 'Viharamahadevi_Park', NULL, 'Colombo 07, Colombo', '6.91395', '79.861133', 'colombo_Viharamahadevi Park.jpg'),
('ATTR013', 'DEST002', 'Bogambara Prison', 'Bogambara_Prison', NULL, 'Pallekele', '7.29135', '80.635055', 'kandy_Bogambara Prison.jpg'),
('ATTR014', 'DEST002', 'Kandy Lake', 'Kandy_Lake', NULL, 'Bogambara Lake, Kandy', '7.29152', '80.642063', 'kandy_Kandy Lake.jpg'),
('ATTR015', 'DEST002', 'Royal Palace of Kandy', 'Royal_Palace_of_Kandy', NULL, 'Royal Palace, Kandy', '7.295101', '80.641069', 'kandy_Royal Palace of Kandy.jpg'),
('ATTR016', 'DEST002', 'International Buddhist Museum', 'International_Buddhist_Museum', NULL, 'Temple of the Tooth, Kandy', '7.294034', '80.641914', 'kandy_International Buddhist Museum.jpg'),
('ATTR017', 'DEST002', 'National Museum Kandy', 'National_Museum_of_Kandy', NULL, 'Kandy', '7.293633', '80.64209', 'kandy_National Museum Kandy.jpg'),
('ATTR018', 'DEST002', 'Kandy War Cemetery', 'Kandy_War_Cemetery', NULL, 'Deveni Rajasinghe Mawatha\nKandy', '7.281597', '80.608487', 'kandy_Kandy War Cemetery.jpg'),
('ATTR019', 'DEST002', 'Kandy Garrison Cemetery', 'British_Garrison_Cemetery', NULL, '7/11, Anagarika Dharmapala Mawatha, Kandy', '7.293086', '80.642605', 'kandy_Kandy Garrison Cemetery.jpg'),
('ATTR020', 'DEST002', 'Temple of the Tooth', 'Temple_of_the_Tooth', NULL, 'Sri Dalada Veediya, Kandy', '7.294247', '80.641263', 'kandy_Temple of the Tooth.jpg'),
('ATTR021', 'DEST002', 'Natha Devale', 'Natha_Devale,_Kandy', NULL, 'Temple Square, Kandy', '7.294342', '80.640495', 'kandy_Natha Devale.jpg'),
('ATTR022', 'DEST002', 'Udawattekele Sanctuary', 'Udawatta_Kele_Sanctuary', NULL, 'Buwelikada, Kandy', '7.299181', '80.642425', 'kandy_Udawattekele Sanctuary.jpg'),
('ATTR023', 'DEST002', 'Royal Botanical Gardens', 'Royal_Botanical_Gardens,_Peradeniya', NULL, 'A1, Peradeniya', '7.271541', '80.595221', 'kandy_Royal Botanical Gardens.jpg'),
('ATTR024', 'DEST003', 'Galle Fort', 'Galle_Fort', NULL, 'Galle', '6.030375', '80.216936', 'galle_Galle Fort.jpg'),
('ATTR025', 'DEST003', 'Maritime Archeology Museum', 'National_Maritime_Museum_(Galle)', NULL, 'Queens St, Matara', '6.028472', '80.218336', 'galle_Maritime Archeology Museum.jpg'),
('ATTR026', 'DEST003', 'Galle Fort Lighthouse', 'Galle_Lighthouse', NULL, 'Fort, Galle', '6.02498', '80.219397', 'galle_Galle Fort Lighthouse.jpg'),
('ATTR027', 'DEST003', 'All Saints Anglican Church', 'All_Saints''_Church,_Galle', NULL, 'Church St, Matara', '6.027806', '80.217448', 'galle_All Saints Anglican Church.jpg'),
('ATTR028', 'DEST003', 'Seenigama Muhudu Viharaya', 'Seenigama', NULL, 'Asian Highway 43, Galle', '6.195838', '80.092565', 'galle_Seenigama Muhudu Viharaya.jpg'),
('ATTR029', 'DEST003', 'Hikkaduwa National Park', 'Hikkaduwa_National_Park', NULL, 'Hikkaduwa Coral Reef', '6.134602', '80.098561', 'galle_Hikkaduwa National Park.jpg'),
('ATTR030', 'DEST003', 'Sinharaja Forest Reserve', 'Sinharaja_Forest_Reserve', NULL, 'Ratnapura', '6.390026', '80.501346', 'galle_Sinharaja Forest Reserve.jpg'),
('ATTR031', 'DEST003', 'Kanneliya Rain Forest Reserve', 'Kanneliya-Dediyagala-Nakiyadeniya', NULL, 'Kanneliya, Galle', '6.249064', '80.33364', 'galle_Kanneliya Rain Forest Reserve.jpg'),
('ATTR032', 'DEST003', 'Unawatuna Beach', 'Unawatuna', NULL, 'Galle', '6.0183', '80.2525', 'galle_Unawatuna Beach.jpg'),
('ATTR033', 'DEST003', 'Hikkaduwa Beach', 'Hikkaduwa', NULL, 'Galle', '6.1472', '80.1103', 'galle_Hikkaduwa Beach.jpg'),
('ATTR034', 'DEST003', 'Koggala', 'Koggala', NULL, NULL, '5.9903', '80.3225', 'galle_Koggala.jpg'),
('ATTR035', 'DEST003', 'Tangalle', 'Tangalle', NULL, NULL, '6.0167', '80.7833', 'galle_Tangalle.jpg'),
('ATTR036', 'DEST004', 'World''s End', 'World''s_End,_Sri_Lanka', NULL, NULL, '6.808822', '80.794874', 'nuwaraEliya_World''s End.jpg'),
('ATTR037', 'DEST004', 'Sita Amman Temple', 'Seetha_Amman_Temple', NULL, NULL, '6.933225', '80.810514', 'nuwaraEliya_Sita Amman Temple.jpg'),
('ATTR038', 'DEST004', 'Baker''s Falls', 'Baker''s_Falls', NULL, NULL, '6.792698', '80.789415', 'nuwaraEliya_Baker''s Falls.jpg'),
('ATTR039', 'DEST004', 'Ramboda Waterfall', 'Ramboda_Falls', NULL, NULL, '7.067124', '80.699895', 'nuwaraEliya_Ramboda Waterfall.jpg'),
('ATTR040', 'DEST004', 'Devon Falls', 'Devon_Falls', NULL, NULL, '6.95141', '80.630013', 'nuwaraEliya_Devon Falls.jpg'),
('ATTR041', 'DEST004', 'St Clair''s Falls', 'St._Clair''s_Falls', NULL, NULL, '6.951213', '80.647858', 'nuwaraEliya_St Clair''s Falls.jpg'),
('ATTR042', 'DEST004', 'Aberdeen Falls', 'Aberdeen_Falls', NULL, NULL, '6.95104', '80.499722', 'nuwaraEliya_Aberdeen Falls.jpg'),
('ATTR043', 'DEST004', 'Laxapana Falls', 'Laxapana_Falls', NULL, NULL, '6.900091', '80.499979', 'nuwaraEliya_Laxapana Falls.jpg'),
('ATTR044', 'DEST004', 'Pidurutalagala', 'Pidurutalagala', NULL, NULL, '7.00086', '80.773312', 'nuwaraEliya_Pidurutalagala.jpg'),
('ATTR045', 'DEST004', 'Ambewela Farms', 'Ambewela', NULL, NULL, '6.8981', '80.8022', 'nuwaraEliya_Ambewela Farms.jpg'),
('ATTR046', 'DEST004', 'Horton Plains National Park', 'Horton_Plains_National_Park', NULL, NULL, '6.811343', '80.78793', 'nuwaraEliya_Horton Plains National Park.jpg'),
('ATTR047', 'DEST004', 'Hakgala Botanic Gardens', 'Hakgala_Botanical_Garden', NULL, NULL, '6.925299', '80.82184', 'nuwaraEliya_Hakgala Botanic Gardens.jpg'),
('ATTR048', 'DEST004', 'Victoria Park of Nuwara Eliya', 'Victoria_Park,_Nuwara_Eliya', NULL, NULL, '6.969072', '80.768194', 'nuwaraEliya_Victoria Park of Nuwara Eliya.jpg'),
('ATTR049', 'DEST005', 'Ranmasu Uyana', 'Ranmasu_Uyana', NULL, NULL, '8.338108', '80.389851', 'anuradhapura_Ranmasu Uyana.jpg'),
('ATTR050', 'DEST005', 'Ruwanwelisseya Dagoba', 'Ruwanwelisaya', NULL, NULL, '8.349858', '80.396401', 'anuradhapura_Ruwanwelisseya Dagoba.jpg'),
('ATTR051', 'DEST005', 'Isurumuniya Rock Temple', 'Isurumuniya', NULL, NULL, '8.33462', '80.390481', 'anuradhapura_Isurumuniya Rock Temple.jpg'),
('ATTR052', 'DEST005', 'Sri Maha Boodhi Temple', 'Jaya_Sri_Maha_Bodhi', NULL, NULL, '8.344928', '80.397352', 'anuradhapura_Sri Maha Boodhi Temple.jpg'),
('ATTR053', 'DEST005', 'Lovamahapaya', 'Lovamahapaya', NULL, NULL, '8.345964', '80.39805', 'anuradhapura_Lovamahapaya.jpg'),
('ATTR054', 'DEST005', 'Mihintale', 'Mihintale', NULL, NULL, '8.3506', '80.5169', 'anuradhapura_Mihintale.jpg'),
('ATTR055', 'DEST005', 'Jethawanaramaya Stupa', 'Jetavanaramaya', NULL, NULL, '8.351988', '80.403723', 'anuradhapura_Jethawanaramaya Stupa.jpg'),
('ATTR056', 'DEST005', 'Mirisaveti Stupa', 'Mirisawetiya_Vihara', NULL, NULL, '8.345074', '80.389024', 'anuradhapura_Mirisaveti Stupa.jpg'),
('ATTR057', 'DEST005', 'Lankarama Sthupa', 'Lankarama', NULL, NULL, '8.365463', '80.391474', 'anuradhapura_Lankarama Sthupa.jpg'),
('ATTR058', 'DEST005', 'Kuttam Pokuna', 'Kuttam_Pokuna', NULL, NULL, '8.371137', '?80.401635', 'anuradhapura_Kuttam Pokuna.jpg'),
('ATTR059', 'DEST005', 'Dagoba of Thuparama', 'Thuparamaya', NULL, NULL, '8.355244', '80.396395', 'anuradhapura_Dagoba of Thuparama.jpg'),
('ATTR060', 'DEST005', 'Samadhi Statue', 'Samadhi_Statue', NULL, NULL, '8.369904', '80.398196', 'anuradhapura_Samadhi Statue.jpg'),
('ATTR061', 'DEST005', 'Abhayagiri Dagoba', 'Abhayagiri_vih?ra', NULL, NULL, '8.371107', '80.39516', 'anuradhapura_Abhayagiri Dagoba.jpg'),
('ATTR062', 'DEST005', 'Minneriya National Park', 'Minneriya_National_Park', NULL, NULL, '8.008', '80.838821', 'anuradhapura_Minneriya National Park.jpg'),
('ATTR063', 'DEST005', 'Wilpaththu National Park', 'Wilpattu_National_Park', NULL, NULL, '8.41055', '80.051122', 'anuradhapura_Wilpaththu National Park.jpg'),
('ATTR064', 'DEST006', 'Parakrama Samudra', 'Parakrama_Samudra', NULL, NULL, '7.899878', '80.970052', 'polonnaruwa_Parakrama Samudra.jpg'),
('ATTR065', 'DEST006', 'Somawathiya Chaitya', 'Somawathiya_Chaitya', NULL, NULL, '8.167006', '81.216412', 'polonnaruwa_Somawathiya Chaitya.jpg'),
('ATTR066', 'DEST006', 'Dimbulagala Monastery', 'Dimbulagala_Raja_Maha_Vihara', NULL, NULL, '7.861147', '81.117468', 'polonnaruwa_Dimbulagala Monastery.jpg'),
('ATTR067', 'DEST006', 'Gal Vihara', 'Gal_Vihara', NULL, NULL, '7.965077', '81.005459', 'polonnaruwa_Gal Vihara.jpg'),
('ATTR068', 'DEST006', 'Rankoth Vehera', 'Rankoth_Vehera', NULL, NULL, '7.958382', '81.0031642', 'polonnaruwa_Rankoth Vehera.jpg'),
('ATTR069', 'DEST006', 'Kiri Vehera', 'Kiri_Vehera', NULL, NULL, '7.963408', '81.00339', 'polonnaruwa_Kiri Vehera.jpg'),
('ATTR070', 'DEST006', 'Polonnaruwa Vatadage', 'Polonnaruwa_Vatadage', NULL, NULL, '7.947549', '81.001151', 'polonnaruwa_Polonnaruwa Vatadage.jpg'),
('ATTR071', 'DEST006', 'Nissanka Latha Mandapaya', 'Nissanka_Latha_Mandapaya', NULL, NULL, '7.947589', '81.000937', 'polonnaruwa_Nissanka Latha Mandapaya.jpg'),
('ATTR072', 'DEST006', 'Hatadage', 'Hatadage', NULL, NULL, '7.947897', '81.00091', 'polonnaruwa_Hatadage.jpg'),
('ATTR073', 'DEST006', 'Sandakada Pahana', 'Sandakada_pahana', NULL, NULL, '8.368905', '80.387217', 'polonnaruwa_Sandakada Pahana.jpg'),
('ATTR074', 'DEST006', 'Statue of Parakramabahu I', 'Statue_of_Parakramabahu_I', NULL, NULL, '7.925817', '80.994733', 'polonnaruwa_Statue of Parakramabahu I.jpg'),
('ATTR075', 'DEST006', 'Angammedilla National Park', 'Angammedilla_National_Park', NULL, NULL, '7.925461', '80.920784', 'polonnaruwa_Angammedilla National Park.jpg'),
('ATTR076', 'DEST007', 'Fort Frederick', 'Fort_Fredrick', NULL, NULL, '8.577304', '81.243257', 'trincomalee_Fort Frederick.jpg'),
('ATTR077', 'DEST007', 'Kanniya Hot Springs', 'Kanniya_Hot_water_spring', NULL, NULL, '8.604525', '81.171235', 'trincomalee_Kanniya Hot Springs.jpg'),
('ATTR078', 'DEST007', 'Hoods Tower Museum', 'Hoods_Tower_Museum', NULL, NULL, '8.569218', '81.232867', 'trincomalee_Hoods Tower Museum.jpg'),
('ATTR079', 'DEST007', 'Trincomalee War Cemetery', 'Trincomalee_British_War_Cemetery', NULL, NULL, '8.615643', '81.213765', 'trincomalee_Trincomalee War Cemetery.jpg'),
('ATTR080', 'DEST007', 'Koneswaram Temple', 'Koneswaram_temple', NULL, NULL, '8.582633', '81.245333', 'trincomalee_Koneswaram Temple.jpg'),
('ATTR081', 'DEST007', 'Seruwila Mangala Raja Maha Vihara', 'Seruvila_Mangala_Raja_Maha_Viharaya', NULL, NULL, '8.370795', '81.319258', 'trincomalee_Seruwila Mangala Raja Maha Vihara.jpg'),
('ATTR082', 'DEST007', 'Pigeon Island National Park', 'Pigeon_Island_National_Park', NULL, NULL, '8.722084', '81.205387', 'trincomalee_Pigeon Island National Park.jpg'),
('ATTR083', 'DEST007', 'Nilaveli Beach', 'Nilaveli', NULL, NULL, '8.705284', '81.189217', 'trincomalee_Nilaveli Beach.jpg'),
('ATTR084', 'DEST008', 'Bogoda Brdge', 'Bogoda_Wooden_Bridge', NULL, NULL, '7.00803', '80.996323', 'badulla_Bogoda Brdge.jpg'),
('ATTR085', 'DEST008', 'Dhowa Rock Temple', 'Dhowa_rock_temple', NULL, NULL, '6.856307', '81.022163', 'badulla_Dhowa Rock Temple.jpg'),
('ATTR086', 'DEST008', 'Muthiyangana Raja Maha Viharaya', 'Muthiyangana_Raja_Maha_Vihara', NULL, NULL, '6.984149', '81.061356', 'badulla_Muthiyangana Raja Maha Viharaya.jpg'),
('ATTR087', 'DEST008', 'Dunhinda Falls', 'Dunhinda_Falls', NULL, NULL, '7.017102', '81.063727', 'badulla_Dunhinda Falls.jpg'),
('ATTR088', 'DEST008', 'Bambarakanda Falls', 'Bambarakanda_Falls', NULL, NULL, '6.773201', '80.831326', 'badulla_Bambarakanda Falls.jpg'),
('ATTR089', 'DEST008', 'Ravana Ella Falls', 'Ravana_Falls', NULL, NULL, '6.840769', '81.054187', 'badulla_Ravana Ella Falls.jpg'),
('ATTR090', 'DEST008', 'Diyaluma Falls', 'Diyaluma_Falls', NULL, NULL, '6.733131', '81.031407', 'badulla_Diyaluma Falls.jpg'),
('ATTR091', 'DEST009', 'Elephant Pass', 'Elephant_Pass', NULL, NULL, '9.547377', '80.408759', 'jaffna_Elephant Pass.jpg'),
('ATTR092', 'DEST009', 'Jaffna Fort', 'Jaffna_Fort', NULL, NULL, '9.662025', '80.008404', 'jaffna_Jaffna Fort.jpg'),
('ATTR093', 'DEST009', 'Port of Dambakola Patuna', 'Port_of_Jambukola', NULL, NULL, '9.786485', '79.943578', 'jaffna_Port of Dambakola Patuna.jpg'),
('ATTR094', 'DEST009', 'Kandarodai Viharaya', 'Kandarodai', NULL, NULL, '9.746507', '80.006293', 'jaffna_Kandarodai Viharaya.jpg'),
('ATTR095', 'DEST009', 'Nallur Kovil', 'Nallur_Kandaswamy_temple', NULL, NULL, '9.674554', '80.029762', 'jaffna_Nallur Kovil.jpg'),
('ATTR096', 'DEST009', 'Naga Pooshani Ambal Kovil', 'Nainativu_Nagapooshani_Amman_Temple', NULL, NULL, '9.619148', '79.774222', 'jaffna_Naga Pooshani Ambal Kovil.jpg'),
('ATTR097', 'DEST009', 'Nagadeepa Purana Viharaya', 'Nagadeepa_Purana_Viharaya', NULL, NULL, '9.612772', '79.773999', 'jaffna_Nagadeepa Purana Viharaya.jpg'),
('ATTR098', 'DEST009', 'Naguleswaram Temple', 'Naguleswaram_temple', NULL, NULL, '9.813471', '80.012116', 'jaffna_Naguleswaram Temple.jpg'),
('ATTR099', 'DEST009', 'Neduntheevu (Delft Island)', 'Neduntheevu', NULL, NULL, '9.514455', '79.683333', 'jaffna_Neduntheevu (Delft Island).jpg'),
('ATTR100', 'DEST009', 'Casuarina Beach', 'Casuarina_Beach', NULL, NULL, '9.763303', '79.887804', 'jaffna_Casuarina Beach.jpg'),
('ATTR101', 'DEST010', 'Batticaloa Fort', 'Batticaloa_fort', NULL, NULL, '7.712466', '81.702422', 'batticaloa_Batticaloa Fort.jpg'),
('ATTR102', 'DEST010', 'Batticaloa Lighthouse', 'Batticaloa_Lighthouse', NULL, NULL, '7.75484', '81.685379', 'batticaloa_Batticaloa Lighthouse.jpg'),
('ATTR103', 'DEST010', 'St. Mary''s Cathedral', 'St._Mary''s_Cathedral,_Batticaloa', NULL, NULL, '7.71235', '81.696069', 'batticaloa_St. Mary''s Cathedral.jpg'),
('ATTR104', 'DEST010', 'Kallady Beach', 'Kalladi_(Batticaloa)', NULL, NULL, '7.707604', '81.71581', 'batticaloa_Kallady Beach.jpg'),
('ATTR105', 'DEST010', 'Passikudah Beach', 'Pasikudah', NULL, NULL, '7.9283', '81.5617', 'batticaloa_Passikudah Beach.jpg'),
('ATTR106', 'DEST010', 'Kalkudah', 'Kalkudah', NULL, NULL, '8.1167', '79.7167', 'batticaloa_Kalkudah.jpg'),
('ATTR107', 'DEST011', 'Sigiriya', 'Sigiriya', NULL, NULL, '7.955117', '80.759792', 'matale_Sigiriya.jpg'),
('ATTR108', 'DEST011', 'Dambulla Golden Cave Temple', 'Dambulla_cave_temple', NULL, NULL, '7.854246', '80.651431', 'matale_Dambulla Golden Cave Temple.jpg'),
('ATTR109', 'DEST011', 'Aluvihara Rock Cave Temple', 'Aluvihare_Rock_Temple', NULL, NULL, '7.497553', '80.621841', 'matale_Aluvihara Rock Cave Temple.jpg'),
('ATTR110', 'DEST011', 'Nalanda Gedige', 'Nalanda_Gedige', NULL, NULL, '7.669898', '80.646066', 'matale_Nalanda Gedige.jpg'),
('ATTR111', 'DEST011', 'Hunnas Falls', 'Hunnas_Falls', NULL, NULL, '7.403686', '80.693259', 'matale_Hunnas Falls.jpg'),
('ATTR112', 'DEST011', 'Knuckles Mountain Range', 'Knuckles_Mountain_Range', NULL, NULL, '7.400764', '80.800172', 'matale_Knuckles Mountain Range.jpg'),
('ATTR113', 'DEST011', 'Pitawala Pathana', 'Pitawala_Pathana', NULL, NULL, '7.54529', '80.73251', 'matale_Pitawala Pathana.jpg'),
('ATTR114', 'DEST012', 'Thanthirimale', 'Thanthirimale', NULL, NULL, '8.35', '80.3833', 'mannar_Thanthirimale.jpg'),
('ATTR115', 'DEST012', 'Arippu Fort', 'Arippu_fort', NULL, NULL, '8.792661', '79.929599', 'mannar_Arippu Fort.jpg'),
('ATTR116', 'DEST012', 'Mannar Fort', 'Mannar_fort', NULL, NULL, '8.975861', '79.916963', 'mannar_Mannar Fort.jpg'),
('ATTR117', 'DEST012', 'Ketheeswaram Kovil', 'Ketheeswaram_temple', NULL, NULL, '8.944486', '79.958046', 'mannar_Ketheeswaram Kovil.jpg'),
('ATTR118', 'DEST012', 'Shrine of Our Lady of Madhu', 'Shrine_of_Our_Lady_of_Madhu', NULL, NULL, '8.854321', '80.20493', 'mannar_Shrine of Our Lady of Madhu.jpg'),
('ATTR119', 'DEST012', 'Adam''s Bridge', 'Adam''s_Bridge', NULL, NULL, '9.073405', '79.663196', 'mannar_Adam''s Bridge.jpg'),
('ATTR120', 'DEST012', 'Mannar Island', 'Mannar_Island', NULL, NULL, '9.058303', '79.81662', 'mannar_Mannar Island.jpg'),
('ATTR121', 'DEST013', 'Mulkirigala Rock Monastery', 'Mulkirigala_Raja_Maha_Vihara', NULL, NULL, '6.122289', '80.737045', 'hambantota_Mulkirigala Rock Monastery.jpg'),
('ATTR122', 'DEST013', 'Bundala National Park', 'Bundala_National_Park', NULL, NULL, '6.175198', '81.196764', 'hambantota_Bundala National Park.jpg'),
('ATTR123', 'DEST013', 'Kumana National Park', 'Kumana_National_Park', NULL, NULL, '6.572939', '81.669253', 'hambantota_Kumana National Park.jpg'),
('ATTR124', 'DEST013', 'Yala National Park', 'Yala_National_Park', NULL, NULL, '6.263454', '81.368785', 'hambantota_Yala National Park.jpg'),
('ATTR125', 'DEST013', 'Mirijjawila Botanic Gardens', 'Mirijjawila_Botanical_Garden', NULL, NULL, '6.149415', '81.067176', 'hambantota_Mirijjawila Botanic Gardens.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `attraction_intypes`
--

CREATE TABLE IF NOT EXISTS `attraction_intypes` (
  `fk_attr_id` varchar(10) NOT NULL,
  `fk_attr_type_id` varchar(10) NOT NULL,
  KEY `fk_attr_id` (`fk_attr_id`,`fk_attr_type_id`),
  KEY `fk_attr_type_id` (`fk_attr_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction_intypes`
--

INSERT INTO `attraction_intypes` (`fk_attr_id`, `fk_attr_type_id`) VALUES
('ATTR001', 'AT001'),
('ATTR002', 'AT002'),
('ATTR003', 'AT002'),
('ATTR004', 'AT001'),
('ATTR004', 'AT003'),
('ATTR005', 'AT004'),
('ATTR006', 'AT008'),
('ATTR007', 'AT008'),
('ATTR008', 'AT008'),
('ATTR009', 'AT019'),
('ATTR010', 'AT019'),
('ATTR011', 'AT020'),
('ATTR012', 'AT023'),
('ATTR013', 'AT001'),
('ATTR014', 'AT001'),
('ATTR015', 'AT001'),
('ATTR016', 'AT002'),
('ATTR017', 'AT002'),
('ATTR018', 'AT006'),
('ATTR019', 'AT006'),
('ATTR020', 'AT008'),
('ATTR020', 'AT010'),
('ATTR021', 'AT008'),
('ATTR022', 'AT018'),
('ATTR023', 'AT022'),
('ATTR024', 'AT001'),
('ATTR025', 'AT002'),
('ATTR026', 'AT001'),
('ATTR026', 'AT003'),
('ATTR027', 'AT004'),
('ATTR028', 'AT008'),
('ATTR029', 'AT015'),
('ATTR030', 'AT018'),
('ATTR031', 'AT018'),
('ATTR032', 'AT019'),
('ATTR033', 'AT019'),
('ATTR034', 'AT019'),
('ATTR035', 'AT019'),
('ATTR036', 'AT001'),
('ATTR037', 'AT008'),
('ATTR038', 'AT012'),
('ATTR039', 'AT012'),
('ATTR040', 'AT012'),
('ATTR041', 'AT012'),
('ATTR042', 'AT012'),
('ATTR043', 'AT012'),
('ATTR044', 'AT001'),
('ATTR044', 'AT013'),
('ATTR045', 'AT014'),
('ATTR046', 'AT015'),
('ATTR047', 'AT022'),
('ATTR048', 'AT023'),
('ATTR049', 'AT009'),
('ATTR049', 'AT010'),
('ATTR050', 'AT008'),
('ATTR050', 'AT010'),
('ATTR051', 'AT008'),
('ATTR051', 'AT010'),
('ATTR052', 'AT008'),
('ATTR052', 'AT010'),
('ATTR053', 'AT009'),
('ATTR053', 'AT010'),
('ATTR054', 'AT008'),
('ATTR054', 'AT010'),
('ATTR055', 'AT008'),
('ATTR055', 'AT010'),
('ATTR056', 'AT008'),
('ATTR056', 'AT010'),
('ATTR057', 'AT008'),
('ATTR057', 'AT010'),
('ATTR058', 'AT010'),
('ATTR059', 'AT008'),
('ATTR059', 'AT010'),
('ATTR060', 'AT008'),
('ATTR060', 'AT010'),
('ATTR060', 'AT011'),
('ATTR061', 'AT008'),
('ATTR061', 'AT010'),
('ATTR061', 'AT011'),
('ATTR062', 'AT015'),
('ATTR063', 'AT015'),
('ATTR064', 'AT001'),
('ATTR065', 'AT008'),
('ATTR066', 'AT008'),
('ATTR066', 'AT010'),
('ATTR067', 'AT008'),
('ATTR067', 'AT011'),
('ATTR068', 'AT008'),
('ATTR068', 'AT010'),
('ATTR069', 'AT008'),
('ATTR069', 'AT010'),
('ATTR070', 'AT008'),
('ATTR070', 'AT009'),
('ATTR070', 'AT010'),
('ATTR071', 'AT009'),
('ATTR071', 'AT010'),
('ATTR072', 'AT008'),
('ATTR072', 'AT009'),
('ATTR072', 'AT010'),
('ATTR073', 'AT010'),
('ATTR074', 'AT011'),
('ATTR075', 'AT015'),
('ATTR076', 'AT001'),
('ATTR077', 'AT001'),
('ATTR078', 'AT002'),
('ATTR079', 'AT006'),
('ATTR080', 'AT008'),
('ATTR081', 'AT008'),
('ATTR082', 'AT015'),
('ATTR083', 'AT019'),
('ATTR084', 'AT001'),
('ATTR084', 'AT007'),
('ATTR085', 'AT008'),
('ATTR085', 'AT011'),
('ATTR086', 'AT008'),
('ATTR087', 'AT012'),
('ATTR088', 'AT012'),
('ATTR089', 'AT012'),
('ATTR090', 'AT012'),
('ATTR091', 'AT001'),
('ATTR092', 'AT001'),
('ATTR093', 'AT001'),
('ATTR094', 'AT001'),
('ATTR094', 'AT009'),
('ATTR095', 'AT008'),
('ATTR096', 'AT008'),
('ATTR097', 'AT008'),
('ATTR098', 'AT008'),
('ATTR099', 'AT001'),
('ATTR099', 'AT016'),
('ATTR100', 'AT019'),
('ATTR101', 'AT001'),
('ATTR102', 'AT001'),
('ATTR102', 'AT003'),
('ATTR103', 'AT004'),
('ATTR104', 'AT019'),
('ATTR105', 'AT019'),
('ATTR106', 'AT019'),
('ATTR107', 'AT001'),
('ATTR107', 'AT010'),
('ATTR108', 'AT005'),
('ATTR108', 'AT008'),
('ATTR108', 'AT010'),
('ATTR109', 'AT005'),
('ATTR109', 'AT008'),
('ATTR109', 'AT010'),
('ATTR110', 'AT009'),
('ATTR110', 'AT010'),
('ATTR111', 'AT012'),
('ATTR112', 'AT013'),
('ATTR113', 'AT001'),
('ATTR113', 'AT013'),
('ATTR114', 'AT001'),
('ATTR115', 'AT001'),
('ATTR116', 'AT001'),
('ATTR117', 'AT008'),
('ATTR118', 'AT004'),
('ATTR119', 'AT001'),
('ATTR119', 'AT007'),
('ATTR120', 'AT001'),
('ATTR120', 'AT016'),
('ATTR121', 'AT008'),
('ATTR122', 'AT015'),
('ATTR123', 'AT015'),
('ATTR124', 'AT015'),
('ATTR125', 'AT022');

-- --------------------------------------------------------

--
-- Table structure for table `attraction_ratings`
--

CREATE TABLE IF NOT EXISTS `attraction_ratings` (
  `attr_rating_id` varchar(255) NOT NULL,
  `fk_attr_id` varchar(10) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`attr_rating_id`),
  KEY `fk_attr_id_2` (`fk_attr_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction_ratings`
--

INSERT INTO `attraction_ratings` (`attr_rating_id`, `fk_attr_id`, `fk_user_id`, `user_ip`, `rating`, `timestamp`) VALUES
('R1441278496', 'ATTR013', '1428861473', '::1', '2.0', '2015-09-06 17:01:41'),
('R1441278506', 'ATTR014', '1428861473', '::1', '3.0', '2015-09-05 09:28:52'),
('R1441278515', 'ATTR016', '1428861473', '127.0.0.1', '4.0', '2015-09-03 11:08:35'),
('R1441278519', 'ATTR015', '1428861473', '::1', '4.0', '2015-09-05 09:28:59'),
('R1441278534', 'ATTR020', '1428861473', '127.0.0.1', '4.0', '2015-09-03 11:08:54'),
('R1441278540', 'ATTR023', '1428861473', '127.0.0.1', '4.0', '2015-09-03 11:09:00'),
('R1441304716', 'ATTR084', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:25:16'),
('R1441304727', 'ATTR087', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:25:27'),
('R1441304731', 'ATTR088', '1428861473', '127.0.0.1', '5.0', '2015-09-03 18:25:31'),
('R1441304736', 'ATTR089', '1428861473', '127.0.0.1', '5.0', '2015-09-03 18:25:36'),
('R1441304742', 'ATTR090', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:25:42'),
('R1441304747', 'ATTR086', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:25:47'),
('R1441304752', 'ATTR085', '1428861473', '127.0.0.1', '2.0', '2015-09-03 18:25:55'),
('R1441304780', 'ATTR107', '1428861473', '127.0.0.1', '5.0', '2015-09-03 18:26:22'),
('R1441304785', 'ATTR109', '1428861473', '127.0.0.1', '2.0', '2015-09-03 18:26:25'),
('R1441304788', 'ATTR108', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:26:28'),
('R1441304792', 'ATTR111', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:26:32'),
('R1441304796', 'ATTR110', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:26:36'),
('R1441304800', 'ATTR112', '1428861473', '127.0.0.1', '5.0', '2015-09-03 18:26:40'),
('R1441304804', 'ATTR113', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:26:44'),
('R1441304809', 'ATTR036', '1428861473', '127.0.0.1', '1.0', '2015-09-03 18:26:49'),
('R1441304814', 'ATTR037', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:26:54'),
('R1441304817', 'ATTR038', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:26:57'),
('R1441304821', 'ATTR040', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:27:01'),
('R1441304825', 'ATTR042', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:27:05'),
('R1441304828', 'ATTR041', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:27:08'),
('R1441304832', 'ATTR044', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:27:13'),
('R1441304837', 'ATTR043', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:27:17'),
('R1441304841', 'ATTR045', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:27:21'),
('R1441304848', 'ATTR048', '1428861473', '127.0.0.1', '3.0', '2015-09-03 18:27:28'),
('R1441304851', 'ATTR047', '1428861473', '127.0.0.1', '4.0', '2015-09-03 18:27:31'),
('R1441304877', 'ATTR084', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:28:39'),
('R1441304881', 'ATTR087', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:28:20'),
('R1441304891', 'ATTR089', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:28:11'),
('R1441304896', 'ATTR090', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:28:16'),
('R1441304906', 'ATTR086', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:28:26'),
('R1441304912', 'ATTR085', '1428894921', '127.0.0.1', '1.0', '2015-09-03 18:28:34'),
('R1441304937', 'ATTR088', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:28:57'),
('R1441304950', 'ATTR107', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:29:10'),
('R1441304954', 'ATTR111', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:29:14'),
('R1441304959', 'ATTR109', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:29:19'),
('R1441304964', 'ATTR113', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:29:24'),
('R1441304968', 'ATTR110', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:29:28'),
('R1441304974', 'ATTR108', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:29:34'),
('R1441304981', 'ATTR037', '1428894921', '127.0.0.1', '1.0', '2015-09-03 18:29:41'),
('R1441304985', 'ATTR036', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:29:49'),
('R1441304992', 'ATTR039', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:29:52'),
('R1441304997', 'ATTR040', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:29:57'),
('R1441305002', 'ATTR042', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:30:02'),
('R1441305007', 'ATTR045', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:30:07'),
('R1441305011', 'ATTR047', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:30:11'),
('R1441305016', 'ATTR048', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:30:16'),
('R1441305020', 'ATTR046', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:30:20'),
('R1441305056', 'ATTR014', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:30:56'),
('R1441305064', 'ATTR020', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:31:04'),
('R1441305068', 'ATTR021', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:31:08'),
('R1441305075', 'ATTR023', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:31:15'),
('R1441305082', 'ATTR019', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:31:22'),
('R1441305125', 'ATTR051', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:32:05'),
('R1441305129', 'ATTR050', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:32:09'),
('R1441305133', 'ATTR049', '1428894921', '127.0.0.1', '1.0', '2015-09-03 18:32:13'),
('R1441305137', 'ATTR052', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:32:17'),
('R1441305143', 'ATTR053', '1428894921', '127.0.0.1', '3.0', '2015-09-03 18:32:23'),
('R1441305203', 'ATTR055', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:33:23'),
('R1441305210', 'ATTR059', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:33:32'),
('R1441305218', 'ATTR060', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:33:40'),
('R1441305226', 'ATTR063', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:33:46'),
('R1441305231', 'ATTR061', '1428894921', '127.0.0.1', '2.0', '2015-09-03 18:33:51'),
('R1441305247', 'ATTR058', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:34:09'),
('R1441305256', 'ATTR067', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:34:16'),
('R1441305261', 'ATTR070', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:34:21'),
('R1441305265', 'ATTR071', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:34:25'),
('R1441305269', 'ATTR072', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:34:29'),
('R1441305273', 'ATTR073', '1428894921', '127.0.0.1', '4.0', '2015-09-03 18:34:33'),
('R1441305277', 'ATTR074', '1428894921', '127.0.0.1', '5.0', '2015-09-03 18:34:37'),
('R1441305366', 'ATTR050', '1437328729', '127.0.0.1', '3.0', '2015-09-03 18:36:06'),
('R1441305372', 'ATTR052', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:36:12'),
('R1441305384', 'ATTR055', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:36:24'),
('R1441305388', 'ATTR057', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:36:28'),
('R1441305393', 'ATTR058', '1437328729', '127.0.0.1', '3.0', '2015-09-03 18:36:33'),
('R1441305397', 'ATTR060', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:36:37'),
('R1441305402', 'ATTR059', '1437328729', '127.0.0.1', '2.0', '2015-09-03 18:36:42'),
('R1441305410', 'ATTR054', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:06'),
('R1441305432', 'ATTR014', '1437328729', '127.0.0.1', '3.0', '2015-09-03 18:37:12'),
('R1441305437', 'ATTR016', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:17'),
('R1441305442', 'ATTR019', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:22'),
('R1441305446', 'ATTR020', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:37:26'),
('R1441305452', 'ATTR021', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:37:32'),
('R1441305456', 'ATTR022', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:37:36'),
('R1441305460', 'ATTR023', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:37:40'),
('R1441305468', 'ATTR107', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:48'),
('R1441305472', 'ATTR108', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:52'),
('R1441305476', 'ATTR110', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:37:56'),
('R1441305483', 'ATTR113', '1437328729', '127.0.0.1', '3.0', '2015-09-03 18:38:03'),
('R1441305512', 'ATTR084', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:38:33'),
('R1441305517', 'ATTR085', '1437328729', '127.0.0.1', '1.0', '2015-09-03 18:38:37'),
('R1441305522', 'ATTR089', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:38:42'),
('R1441305526', 'ATTR090', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:38:46'),
('R1441305531', 'ATTR087', '1437328729', '127.0.0.1', '5.0', '2015-09-03 18:38:51'),
('R1441305539', 'ATTR086', '1437328729', '127.0.0.1', '4.0', '2015-09-03 18:38:59'),
('R1441558928', 'ATTR017', '1428861473', '::1', '2.0', '2015-09-06 17:02:08'),
('R1441558951', 'ATTR018', '1428861473', '::1', '1.0', '2015-09-06 17:02:33'),
('R1441558969', 'ATTR019', '1428861473', '::1', '1.0', '2015-09-06 17:02:49'),
('R1441808276', 'ATTR077', '1428861473', '::1', '4.0', '2015-09-09 14:17:58'),
('R1441808283', 'ATTR078', '1428861473', '::1', '3.0', '2015-09-09 14:18:03'),
('R1441808289', 'ATTR080', '1428861473', '::1', '5.0', '2015-09-09 14:18:09'),
('R1441808300', 'ATTR082', '1428861473', '::1', '3.0', '2015-09-09 14:18:20'),
('R1441932728', 'ATTR001', '1428861473', '::1', '3.0', '2015-09-11 00:52:08'),
('R1441932736', 'ATTR002', '1428861473', '::1', '4.0', '2015-09-11 00:52:16'),
('R1441932742', 'ATTR006', '1428861473', '::1', '5.0', '2015-09-11 00:52:22'),
('R1441932748', 'ATTR007', '1428861473', '::1', '5.0', '2015-09-11 00:52:28'),
('R1441932753', 'ATTR009', '1428861473', '::1', '4.0', '2015-09-11 00:52:33'),
('R1441932760', 'ATTR011', '1428861473', '::1', '4.0', '2015-09-11 00:52:40'),
('R1441932767', 'ATTR012', '1428861473', '::1', '5.0', '2015-09-11 00:52:47'),
('R1441932771', 'ATTR010', '1428861473', '::1', '5.0', '2015-09-11 00:52:51'),
('R1441932812', 'ATTR001', '1428894921', '::1', '3.0', '2015-09-11 00:53:32'),
('R1441932817', 'ATTR002', '1428894921', '::1', '2.0', '2015-09-11 00:53:37'),
('R1441932821', 'ATTR004', '1428894921', '::1', '3.0', '2015-09-11 00:53:41'),
('R1441932827', 'ATTR003', '1428894921', '::1', '2.0', '2015-09-11 00:53:47'),
('R1441932831', 'ATTR006', '1428894921', '::1', '4.0', '2015-09-11 00:53:51'),
('R1441932836', 'ATTR007', '1428894921', '::1', '5.0', '2015-09-11 00:53:56'),
('R1441932842', 'ATTR010', '1428894921', '::1', '4.0', '2015-09-11 00:54:02'),
('R1441932846', 'ATTR011', '1428894921', '::1', '3.0', '2015-09-11 00:54:06'),
('R1441932850', 'ATTR012', '1428894921', '::1', '4.0', '2015-09-11 00:54:10'),
('R1441932858', 'ATTR008', '1428894921', '::1', '2.0', '2015-09-11 00:54:18'),
('R1441932889', 'ATTR001', '1437328729', '::1', '5.0', '2015-09-11 00:54:49'),
('R1441932893', 'ATTR002', '1437328729', '::1', '3.0', '2015-09-11 00:54:53'),
('R1441932898', 'ATTR004', '1437328729', '::1', '3.0', '2015-09-11 00:54:58'),
('R1441932903', 'ATTR006', '1437328729', '::1', '5.0', '2015-09-11 00:55:03'),
('R1441932908', 'ATTR007', '1437328729', '::1', '4.0', '2015-09-11 00:55:08'),
('R1441932912', 'ATTR009', '1437328729', '::1', '3.0', '2015-09-11 00:55:12'),
('R1441932916', 'ATTR010', '1437328729', '::1', '5.0', '2015-09-11 00:55:16'),
('R1441932921', 'ATTR011', '1437328729', '::1', '5.0', '2015-09-11 00:55:21'),
('R1441932924', 'ATTR012', '1437328729', '::1', '5.0', '2015-09-11 00:55:24'),
('R1441932930', 'ATTR008', '1437328729', '::1', '2.0', '2015-09-11 00:55:30'),
('R1443453626', 'ATTR066', '1428861473', '::1', '3.0', '2015-09-28 15:20:26'),
('R1443453631', 'ATTR065', '1428861473', '::1', '3.0', '2015-09-28 15:23:29'),
('R1443453660', 'ATTR064', '1428861473', '::1', '5.0', '2015-09-28 15:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `attraction_types`
--

CREATE TABLE IF NOT EXISTS `attraction_types` (
  `attr_type_id` varchar(10) NOT NULL,
  `attr_type` varchar(100) NOT NULL,
  PRIMARY KEY (`attr_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction_types`
--

INSERT INTO `attraction_types` (`attr_type_id`, `attr_type`) VALUES
('AT001', 'Points of Interest'),
('AT002', 'Specialty Museums'),
('AT003', 'Lighthouses'),
('AT004', 'Churches & Cathedrals'),
('AT005', 'Caverns & Caves'),
('AT006', 'Cemetery'),
('AT007', 'Bridge'),
('AT008', 'Religious Sites'),
('AT009', 'Ancient Ruins'),
('AT010', 'Historic Sites'),
('AT011', 'Monuments & Statues'),
('AT012', 'Waterfalls'),
('AT013', 'Mountains'),
('AT014', 'Farms'),
('AT015', 'National?Parks'),
('AT016', 'Islands'),
('AT017', 'Wildlife Areas'),
('AT018', 'Forests'),
('AT019', 'Beaches'),
('AT020', 'Zoos & Aquarium'),
('AT021', 'Arts & Culture /Galleries'),
('AT022', 'Gardens'),
('AT023', 'Parks');

-- --------------------------------------------------------

--
-- Table structure for table `attraction_types_cat`
--

CREATE TABLE IF NOT EXISTS `attraction_types_cat` (
  `category` varchar(100) NOT NULL,
  `fk_attr_type_id` varchar(10) NOT NULL,
  KEY `fk_attr_type_id` (`fk_attr_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction_types_cat`
--

INSERT INTO `attraction_types_cat` (`category`, `fk_attr_type_id`) VALUES
('Sights & Landmarks', 'AT001'),
('Sights & Landmarks', 'AT002'),
('Sights & Landmarks', 'AT003'),
('Sights & Landmarks', 'AT004'),
('Sights & Landmarks', 'AT005'),
('Sights & Landmarks', 'AT006'),
('Sights & Landmarks', 'AT007'),
('Heritage Sites', 'AT008'),
('Heritage Sites', 'AT009'),
('Heritage Sites', 'AT010'),
('Heritage Sites', 'AT011'),
('Nature', 'AT012'),
('Nature', 'AT013'),
('Nature', 'AT014'),
('Nature', 'AT015'),
('Nature', 'AT016'),
('Nature', 'AT017'),
('Nature', 'AT018'),
('Leisure', 'AT019'),
('Leisure', 'AT020'),
('Leisure', 'AT021'),
('Leisure', 'AT022'),
('Leisure', 'AT023');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('990878abd12e47626da3ef4e6ae1f629', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.99 Safari/537.36', 1443464706, '');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `dest_id` varchar(10) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `wiki_name` varchar(100) NOT NULL,
  `dest_description` varchar(500) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `dest_lat` decimal(6,4) NOT NULL,
  `dest_lng` decimal(6,4) NOT NULL,
  `dest_ratings` decimal(2,1) NOT NULL,
  `dest_image` varchar(100) NOT NULL,
  UNIQUE KEY `dest_id` (`dest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `dest_name`, `wiki_name`, `dest_description`, `province`, `district`, `dest_lat`, `dest_lng`, `dest_ratings`, `dest_image`) VALUES
('DEST001', 'Colombo', 'Colombo', 'Colombo, the capital of Sri Lanka, is a bustling city and a hopping-off point for beaches in the island nation''s south. It has a long history as a port on ancient east-west trade routes, ruled successively by the Portuguese, Dutch and British. That heritage is reflected in its spicy cuisine as well as its architecture, mixing colonial buildings with high-rises and shopping malls.', 'Western Province', 'Colombo District', '6.9344', '79.8428', '4.4', 'Colombo2.jpg'),
('DEST002', 'Kandy', 'Kandy', 'Kandy is a major city in Sri Lanka, located in the Central Province, Sri Lanka. It is the second largest city in the country after Colombo. It was the last capital of the ancient kings'' era of Sri Lanka.', 'Central Province', 'Kandy District', '7.2964', '80.6350', '3.9', 'Kandy.jpg'),
('DEST003', 'Galle', 'Galle', 'Galle is a major city in Sri Lanka, situated on the southwestern tip of Sri Lanka, 119 km from Colombo. Galle is the administrative capital of Southern Province, Sri Lanka and is the district capital of Galle District.', 'Southern Province', 'Galle District ', '6.0536', '80.2117', '3.1', 'Galle.jpg'),
('DEST004', 'Nuwara Eliya', 'Nuwara_Eliya', 'Nuwara Eliya is a city, in the hill country of the Central Province, Sri Lanka. The city name meaning is "city on the plain" or "city of light".', 'Central Province', 'Nuwara Eliya District ', '6.9667', '80.7667', '3.0', 'NuwaraEliya.jpg'),
('DEST005', 'Anuradhapura', 'Anuradhapura', 'Anuradhapura is a major city in Sri Lanka. It is the capital city of North Central Province, Sri Lanka and the capital of Anuradhapura District.', 'North Central Province', 'Anuradhapura District', '8.3500', '80.3853', '3.0', 'Anuradhapura.jpg'),
('DEST006', 'Polonnaruwa', 'Polonnaruwa', 'Polonnaruwa is the main town of Polonnaruwa District in North Central Province, Sri Lanka. Kaduruwela area is the Polonnaruwa New Town and the other part of Polonnaruwa remains as the royal ancient city of the Kingdom of Polonnaruwa.', 'North Central Province', 'Polonnaruwa District', '7.9333', '81.0000', '2.4', 'Polonnaruwa.jpg'),
('DEST007', 'Trincomalee', 'Trincomalee', 'Trincomalee is the administrative headquarters of the Trincomalee District and major resort port city of Eastern Province, Sri Lanka.', 'Eastern Province', 'Trincomalee District', '8.5667', '81.2333', '4.6', 'Trincomalee.jpg'),
('DEST008', 'Badulla', 'Badulla', '', 'Uva Province', 'Badulla District', '6.9847', '81.0564', '4.1', 'Badulla.jpg'),
('DEST009', 'Jaffna', 'Jaffna', 'Jaffna is the capital city of the Northern Province of Sri Lanka. It is the administrative headquarters of the Jaffna district located on a peninsula of the same name. With a population of 88,138, Jaffna is Sri Lanka''s 12th largest city.', 'Northern Province', 'Jaffna District ', '9.6667', '80.0000', '3.8', 'Jaffna.jpg'),
('DEST010', 'Batticaloa', 'Batticaloa', 'Batticaloa is a major city in the Eastern Province, Sri Lanka, and its former capital. It is the administrative capital of the Batticaloa District. The city is the seat of the Eastern University of Sri Lanka and is a major commercial city.', 'Eastern Province', 'Batticaloa District', '7.7167', '81.7000', '2.1', 'Batticaloa.jpg'),
('DEST011', 'Matale', 'Matale', '', 'Central Province', 'Matale District ', '7.4667', '80.6167', '3.3', 'Matale.jpg'),
('DEST012', 'Mannar', 'Mannar,_Sri_Lanka', '', 'Northern Province', 'Mannar District', '8.8667', '80.0667', '3.4', 'Mannar.jpg'),
('DEST013', 'Hambantota', 'Hambantota', '', 'Southern Province', 'Hambantota District', '6.1244', '81.1225', '4.5', 'Hambantota.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destination_activities`
--

CREATE TABLE IF NOT EXISTS `destination_activities` (
  `activity_id` varchar(10) NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `fk_dest_id` varchar(10) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `fk_activity_cat_id` varchar(10) NOT NULL,
  PRIMARY KEY (`activity_id`),
  KEY `fk_dest_id` (`fk_dest_id`,`fk_activity_cat_id`),
  KEY `fk_activity_cat_id` (`fk_activity_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination_activities`
--

INSERT INTO `destination_activities` (`activity_id`, `activity_name`, `fk_dest_id`, `description`, `image`, `fk_activity_cat_id`) VALUES
('ACT001', 'Island Scuba', 'DEST001', 'Island Scuba is a PADI Dive Resort (S-23463) located on Mount Lavinia beach. Our partner restaurant La Voile Blanche is the perfect place to grab lunch or sip a post dive cocktail while logging your dive and talking to our team. On site accommodation is available at Mount Bay Hotel with 06 comfortable AC rooms with hot water, right behind our dive base. We offer daily dive trips and PADI courses taught by experienced full time instructors.', 'Island Scuba.jpg', 'ACTCAT001'),
('ACT002', 'Dehiwala-Mount Lavinia Colombo Divers', 'DEST001', 'Colombo Divers?was established in year 2009 at Mount Lavinia which is one of the touristy places in Sri Lanka. It has now spared throughout the country with another two complete dive centers at Negombo and Trincomalee .The main dive center of Colombo divers which is at Mount Lavinia is located just 100 meters away from Mount Lavinia beach hotel and it?s just one and half hour drive from the Bandaranayaka International Air Port. Mount Lavinia is the ideal place in Sri Lanka for wreck diving. Sinc', 'colombo-divers.jpg', 'ACTCAT001'),
('ACT003', 'Sri Lanka Navy - Diyawanna Boat Rides', 'DEST001', 'Sri Lanka is known as the pearl of the Indian Ocean. It was known as Tambapanni, Ceylan, Ceylon and ultimately Sri Lanka. In this remarkable country has a very long history which dates back to 650B.C. Climates of Sri Lanka favorable to everyone. This is remarkable place for Heritage ,Culture, Wild Life , Nature ,Adventure & Beaches. Kanota Tours provides customized packages for travelers.', 'Diyawanna Boat Rides.jpg', 'ACTCAT001'),
('ACT004', 'Best of Lanka - Day Tours', 'DEST001', 'Null', 'Null', 'ACTCAT001'),
('ACT005', ' Stone ''N'' String', 'DEST001', 'There is a Money Back Guarantee on all Purchases .International Travelers have a wide choice of Fashion and semiprecious jewelry and specialized Sri Lankan Souvenirs, the latest of which is Chewy Cinnamon. It is the Ideal Souvenir from Sri Lanka,Ceylon Cinnamon being the World''s Best.. It''s 30 years since its pioneering effort, and having won the Presidential Export Award and sold on 6 International Airlines, the Company specializes in Duty Free , Corporate Gifts, Bridal Jewelry etc. The Company', 'Stone ''N'' String.jpg', 'ACTCAT002'),
('ACT006', 'Anarva Ayurveda Spa ', 'DEST001', 'As part of its vision to popularize authentic Sri Lankan Ayurveda and promote healthy lifestyles to stressed up executives and busy housewives, Siddhalepa Ayurveda Hospital at Mount Lavinia, the pioneer private Ayurveda Hospital in Sri Lanka, opened the new Ayurveda Spa wing under the brand name ''Anarva" in 2006 . Anarva Ayurveda Spa provides short duration (20 to 90 minutes) as well as full day and half day Spa Rituals for toning of skin, stress relief and slimming among other treatments.', 'Anarva Ayurveda Day Spa.jpg', 'ACTCAT004'),
('ACT007', 'Angsana City Club & Spa Crescat City', 'DEST001', 'Conceptualised as a "city within a city", Crescat City is a modern lifestyle leisure complex spanning 10 acres in the heart of Colombo''s latest shopping and residential destination. It is linked to The Boulevard, an upscale retail mall; luxury five-star hotel Cinnamon Grand, and many other residencies. Harmonising this eclectic mix of urban luxuries is our 470 square metres premier, upmarket day spa equipped with seven single treatment rooms and four signature treatment suites. Additional facili', 'Angsana City Club.jpg', 'ACTCAT004'),
('ACT008', 'Body Zone Spa ', 'DEST001', 'Null', 'body-zone-spa.jpg', 'ACTCAT004'),
('ACT009', 'Jasmin Villa Ayurvedic Resort - Day Spa ', 'DEST001', 'Jasmin villa Ayurveda Resort is situated at Daluwakotuwa , just 10 kilometers away from Bandaranayaka? International Air Port. A perfect place for pampering and soul searching, this retreat offers you a range of Ayurveda treatments.?Air-conditioned rooms are available at?Jasmine Villa Ayurveda resort with A/C, Fan , H/C water, Mini Bar, TV, I.D.D. calls, Internet. The Salon/Spa offers a variety of Beauty and Wellness treatments. With the focus being on quality professional treatments from Beauty', 'Jasmin villa ayurveda resort.jpg', 'ACTCAT004'),
('ACT010', ' Playtrix Sports Bar and Caf?', 'DEST001', 'Playtrix is a sports bar and restaurant with a difference. We are open from 11am onwards and have a full service menu throughout the day, 7 days a week. We have a well stocked bar, which includes 49 varieties of Belgian Beer. These beers are exclusively available at Playtrix. One standout feature of our venue is that we have over a dozen 55 inch HDTV''s with a state of the art video and audio distribution system. Any channel can be shown on any TV in true HD. We also have personal audio boxes for', 'playtrix-sports-bar.jpg', 'ACTCAT005'),
('ACT011', 'ON14 Rooftop Bar & Lounge', 'DEST001', 'At OZO Colombo Sri Lanka, we?ve designed an entire hotel experience to help you do it all. To make sure that when it?s time to check-out, you?ve been able to tick off that entire list, maybe with a few added extras. Our services and facilities ensure it.', 'Hotel OZO Colombo.jpg', 'ACTCAT005'),
('ACT012', 'Kama Colombo', 'DEST001', 'Kama is a unique Nightclub located in the heart of Colombo in Srilanka. We strive to provide our customers with a unique and unforgettable experience in pleasuring the senses.', 'Kama-Colombo.jpg', 'ACTCAT005'),
('ACT013', 'In on the Green ', 'DEST001', 'Null', 'Null', 'ACTCAT005'),
('ACT014', 'Skky Bar Colombo', 'DEST001', 'SKKY BAR is a chic haven based in the heart of Colombo where cocktails and cuisine strike the perfect balance. At SKKY we make every attempt to provide our guest with a distinct experience upon every visit, boasting a wide range of entertainment for our guest to savor.', 'Skky Bar Colombo.jpg', 'ACTCAT005'),
('ACT015', ' W Lounge Bar', 'DEST001', 'Null', 'Null', 'ACTCAT005'),
('ACT016', 'Silk ', 'DEST001', 'Null', 'Null', 'ACTCAT005'),
('ACT017', 'Sopranos Music Lounge & Bar', 'DEST001', 'Null', 'Null', 'ACTCAT005'),
('ACT018', 'Jayamali Batiks Studio', 'DEST002', 'My shop is situated inside the Kandy Central Market which is opposite the Kandy Clock Tower and it is not difficult to find as it is a well known local market in Kandy. The shop is open from 9.00am to 6.00pm every day. In case if the shop is closed, please call me or get a free call from the next shop as it is a pleasure to open my store for you within 20 minutes............... Jayamali Batiks Studio, one of the most famous batik studios in Kandy, was founded in 1979 by Jayakody. He discovered h', 'Jayamali Batiks Studio.jpg', 'ACTCAT002'),
('ACT019', 'Kandyan Dance Performance', 'DEST002', 'Null', 'Null', 'ACTCAT003'),
('ACT020', 'Yoga Reiki Meditation', 'DEST002', 'Yoga meditation lessons and Reiki healing.', 'Yoga Reiki Meditation.jpg', 'ACTCAT004'),
('ACT021', 'Ahikava Surf School', 'DEST003', 'Without a question, the historical Galle town in the south coast of Sri Lanka is one of the most visited place to all the travelers. Not only because of the ancient Dutch Fort. Also for its golden sandy beaches. Ahikava Surf School we are a registered company under Sri Lanka Tourism, Ruhunu Tourist Bureau. We are located in Galle on the bay of Bonovosta. Commonly called as Dewata Sahana surfing beach. It is just 10 minutes drive from Galle towards Matara. If you are coming on a tuk tuk just tell', 'Ahikava Surf School.jpg', 'ACTCAT001'),
('ACT022', 'Sunset Juice Bar & Surf School', 'DEST003', 'Welcome to Sunset Juice Bar & Surf School Our Services :- Fresh Fruit Juice Surf Board Rental Surf Lessons * Surf Point Dewata* Location : South Coast Wave type : Regional - Beach Break Wave Power : Fun Experience : beginner Come and Join Our Pure Paradise !!', 'Sunset Juice Bar & Surf School.jpg', 'ACTCAT001'),
('ACT023', 'MSP Surf School', 'DEST003', 'We provide quality surfboards for all wave conditions and skill levels.From the 6''0'''' shortboard to the 9''2'''' longboard. For the surf lessons we use 8''4'''' and 9''2'''' softboards, the best equipment to catch white water waves and the first small green waves for beginners.', 'msp-surf-school.jpg', 'ACTCAT001'),
('ACT024', 'Hikkaduwa   Lanka Surf Trips', 'DEST003', 'Null', 'Null', 'ACTCAT001'),
('ACT025', 'Poseidon Diving Sri Lanka', 'DEST003', '?PADI 5 star IDC center, diving in Hikkaduwa and Trincomalee since 1973', 'Poseidon Diving Sri Lanka.jpg', 'ACTCAT001'),
('ACT026', 'Dive Seenigama Dive Lanka', 'DEST003', 'Dive Seenigama, Dive Lanka is not just a water sports centre. It''s part of the business branch of the Foundation of Goodness, a post-Tsunami relief organization based in Seenigama, and it trains local youth in occupational diving and swimming skills, generating jobs in those industries. Any money you spend diving with us goes directly toward the charity and allows it to continue to train all of the recruits it takes every year. Enjoy your dive while making a difference in our community! Come joi', 'Dive Seenigama Dive Lanka.jpg', 'ACTCAT001'),
('ACT027', 'Blue Deep Dive Centre', 'DEST003', 'Blue Deep Dive Center is located on?Sri Lanka`s? tranquil west coast in?Hikkaduwa, a typically small Lankan fishing village with gorgeous sand beaches, where coral reef protect the small bay from the surfing waives. ?Fortunately, the best?dive sites of Indian Ocean are on our front doorstep. It is our ambition to make your SCUBA diving holiday as special, enjoyable and as safe as possible, therefore we prefer to dive in small groups (maximum 4 divers per Dive Master or Diving Instructor). This i', 'blue-deep-dive-centre.jpg', 'ACTCAT001'),
('ACT028', 'International Diving School', 'DEST003', 'International Diving School is the premier diving centre in Sri Lanka for past 30 years upto now. Dive with very friendly and professional dive masters who are fully certified with PADI & CMAS. We are operating from October-April in Coral Sands Hotel, Hikkaduwa (South Coast) and May-September in Pigeon Island Beach Resort, Nilaveli (East Coast).', 'International Diving School.jpg', 'ACTCAT001'),
('ACT029', 'Brracuda Diving Center', 'DEST003', 'Null', 'Null', 'ACTCAT001'),
('ACT030', 'Submarine Diving School', 'DEST003', 'An exotic diving location, located off the coast of Unawatuna. It lies just south of Galle, 125km from Colombo. It is a highly sought-after bay on Sri Lanka''s less-developed South coast. Cheery, modestly-sized and enduring in popularity. It is a haven for those who crave a beautiful beach and entertaining evenings. This small bay is graced with golden sands and a calm turquoise sea.', 'Null', 'ACTCAT001'),
('ACT031', 'Unawatuna Diving Centre', 'DEST003', 'The official page for UNAWATUNA DIVING CENTRE, PADI 5 Star Dive Resort, Unawatuna and Sri Lanka''s premier PADI Resort, S-36133, and your gateway to the excitement and adventure of the underwater world! UNAWATUNA DIVING CENTRE is a fully aoutorized PADI 5 Star Dive Resort located on beautiful Unawatuna Beach, in the Indian Ocean. German ownership, European managed, we conduct all levels of PADI courses from DSD through to Divemaster Level and also run snorkel tours.We teach in English and German.', 'Unawatuna Diving Centre.jpg', 'ACTCAT001'),
('ACT032', 'Pearl Divers', 'DEST003', 'We are Unawatunas friendliest, most professional & fully equipped diving center. We have recently opened our authorized PADI Resort S-23613 and have re branded to Pearl Divers so come and have a look at out new Pearl Divers website. Our team of ex navy and international dive instructors are waiting to greet you with big smiles and lots of great dive sites to visit.', 'Null', 'ACTCAT001'),
('ACT033', 'Unawatuna Ocean Dive Centre', 'DEST003', 'With our small, friendly dive school right at the wonderful Unawatuna-beach you will feel at ease, have fun and enjoy great dives in a friendly unhurried environment. Our manager Dinesh Tushara Koralage can arrange all desired trips, will organise your acommodation & getting there, so that your stay in SriLanka will be just perfect!', 'Unawatuna Ocean Dive Centre.jpg', 'ACTCAT001'),
('ACT034', 'Sea Horse Divers', 'DEST003', 'Diving in Sri Lanka is part of the whole experience, watching Turtles manoeuvre their bulky bodies with such grace, can only be experienced in their environment, under the water.', 'Sea Horse Divers.jpg', 'ACTCAT001'),
('ACT035', 'Sun Diving SriLanka', 'DEST003', 'We are situated in Unawatuna beach. Owner Is ranjith Nanayakkara the guy who start Diving in Unawatuna as a Colourfull sea Fish collector for International Aquariums. After 35 Years experience of Diving he started the SUN DIVING School. When you plan to travel in Unawatuna If you interested In diving you will Easily Find us. Our staff is very Friendly and You will feel safe when you Dive With Us.', 'Sun Diving SriLanka.jpg', 'ACTCAT001'),
('ACT036', 'Divers Land Dive Club', 'DEST003', 'Null', 'Null', 'ACTCAT001'),
('ACT037', 'Chatter Tour Box', 'DEST003', 'Null', 'Null', 'ACTCAT001'),
('ACT038', 'Jetwing Whale and Dolphin Centre', 'DEST003', 'Galle and Mirissa in Southern Sri Lanka has now established itself as the world''s top spot for watching the Blue Whale, the largest creature to have inhabited our planet. During the season, Blue Whales can be seen virtually everyday at a strike rate of over 95% just a few nautical miles from the shore, which is unprecedented when compared to sightings of these animals in other parts of the world. Sperm Whales too may be seen occasionally in pods numbering as much as 50 individuals, and on a ''goo', 'Jetwing Whale and Dolphin Centre.jpg', 'ACTCAT001'),
('ACT039', 'Mangrove Boat Tour-Day Tours', 'DEST003', 'Mangroves are essential for protecting Sri Lanka?s coast and coastal livelihoods ? but they are also highly threatened. With only 0.5% of the forests remaining, Rainforest Rescue International are committed to conserving and restoring these vital habitats.Come along any time for a tour', 'Mangrove Boat Tour-Day Tours.jpg', 'ACTCAT001'),
('ACT040', 'Yoga in Niyagama House ', 'DEST003', 'Do something good for your body, mind & soul: Niyagama House offers its yoga classes also for walk-in guests. Do a complimentary sunrise meditation at 6.30am on the roof terrace or take a 90 min. class before breakfast or dinner (7.30 - 9am & 5.30 - 7pm). The style is a mix of sun salutations, vinyasa flow, yin yoga and classical hatha yoga. Level: beginners to intermediate.', 'yoga-in-niyagama-house.jpg', 'ACTCAT004'),
('ACT041', 'Swastha Ayurveda', 'DEST003', 'The Ayurvedic treatments we practice at our Hikkaduwa Ayurveda aim to bring harmony to the body, mind and spirit-giving you the necessary for a long and healthy life.', 'swastha_ayurveda_hikkaduwa.jpg', 'ACTCAT004'),
('ACT042', ' Kailash Yoga Studio', 'DEST003', 'Null', 'kailash-yoga-studio.jpg', 'ACTCAT004'),
('ACT043', 'Yoga with Asiri', 'DEST003', 'Asiri is fomer Sri Lankan Triple Jumper who is practicing Yoga since 1998 and teaching since 2008.He is motivating students and giving valuable tips to improve their abilities.', 'Yoga with Asiri.jpg', 'ACTCAT004'),
('ACT044', 'The Sanctuary Spa ', 'DEST003', 'A massage spa offering relaxing treatments e.g. Swedish massage, Ayurvedic massage, Face massage, Shirodara treatment, Herbal steam bath etc set in a tranquil lush tropical garden down a small lane off the beach road. Please book with Ranga to avoid disappointment.', 'the-sanctuary-spa.jpg', 'ACTCAT004'),
('ACT045', 'Bentota Ayurveda Center', 'DEST003', 'This is not the place for you if you''re looking for all the frills of fancy, expensive Ayurveda massages. This is Sri Lanka PURE - which is what makes the experience so special. You will be efficiently picked up by a tuk tuk and taken through tiny streets winding through forests of palm trees and banana plants. Our massage rooms are located in a small, quaint guest house which specializes in Ayurvedic holidays', 'Bentota Ayurveda Center.jpg', 'ACTCAT004'),
('ACT046', 'Samadhi Yoga Ashramaya ', 'DEST003', 'AYUBOWAN Samadhi Yoga Ashramaya is a homely Yoga Center situated in beautiful Bentota, Sri Lanka - in the midst of a rich environment surrounded by trees, greenery and Bentota River. Indulge the lush green and enjoy the serenity of this relaxing Ashramaya in Bentota, while benefiting your body and soul. You can Learn and practice Asana, Pranayama (Breathing Exercises), Bandana and Shudhikriya with a qualified and highly experienced yoga teacher. We offer daily or weekly yoga classes: - Daily pla', 'samadhi-yoga-ashramaya.jpg', 'ACTCAT004'),
('ACT047', 'Taphouse by RnR', 'DEST003', 'Null', 'Taphouse by RnR.jpg', 'ACTCAT005'),
('ACT048', ' Luna Terrace', 'DEST003', 'Luna Terrace embraces the southern flank of the Closenberg Peninsula, providing a magnificent vista of the mythic Rumassala mountain, Galle Bay and Indian Ocean flowing beyond.The terrace is a celebration of moonscapes and underwater worlds featuringa crescent shaped 180? infinity pool with an underwater sound system, a deep sea cocktail bar and rustic japanese kitchen.', ' Luna Terrace.jpg', 'ACTCAT005'),
('ACT049', 'Blue Note Bar ', 'DEST003', '?A special place for blues enthusiasts to spend an evening.', 'Blue Note.jpg', 'ACTCAT005'),
('ACT050', 'Koha Surf Lounge', 'DEST003', 'Null', 'koha-surf-lounge.jpg', 'ACTCAT005'),
('ACT051', '680 Blu', 'DEST003', 'Null', '680 Blu.jpg', 'ACTCAT005'),
('ACT052', ' Lounge Bar at saman Villas', 'DEST003', 'Saman Villas, an exquisite boutique hotel located on the west coast of the island is the perfect romantic escape. Only 92 kilometers away from the International Airport, Saman Villas is a place for you to relax, unwind and rejuvenate your senses.This luxurious hideaway is perched on a rocky promontory dividing two long seemingly endless, surf swept, pristine beaches of golden sand backed by the luscious greenery of coconut plantations, in the quite, sleepy fishing village of Aturuwella in Bentot', ' Lounge Bar at saman Villa.jpg', 'ACTCAT005'),
('ACT053', 'Sambar ', 'DEST004', 'Null', 'Null', 'ACTCAT005'),
('ACT054', 'Nilaveli Diving Centre', 'DEST007', 'The East Coast of Sri Lanka is rated as one of Asia''s top dive sites and offers outstanding experiences for all skill levels. As the island essentially sits atop a huge sandbank that drops 1500m into deep ocean you''ll usually find shallow sand or rock bottoms, but you can also dive on walls and drop-offs. Because you''re seldom far from deep water, opportunities for encounters with pelagics, sharks and other inhabitants of the open ocean abound.', 'nilaveli-diving-centre.jpg', 'ACTCAT001'),
('ACT055', 'Ypsylon Diving', 'DEST007', 'Null', 'Ypsylon Diving.jpg', 'ACTCAT001'),
('ACT056', 'AquaCreed Scuba Dive Centre', 'DEST007', 'Diving & PADI Courses PADI Authorized Dive Centre, Fishing Charters & Tours trolling for tuna and billfish , Dolphin & Whale Watching & Sunset Cruises. AquaCreed Scuba & Leisure experience to provide high quality outdoor leisure activities in Nilaveli , Trincomalee , Sri Lanka - Asia', 'Null', 'ACTCAT001'),
('ACT057', 'Suvek Spa', 'DEST007', 'Null', 'Null', 'ACTCAT005'),
('ACT058', 'Lanka Grand Herbal Spa ', 'DEST008', 'Local Spa Treatments in Lanka Grand Herbal Spa Enjoy the ancient ayurveda secrets of health, beauty & relaxation', 'lanka-grand-herbal-spa.jpg', 'ACTCAT004'),
('ACT059', 'Nature''s Secret Ayurvedic', 'DEST008', 'Null', 'Null', 'ACTCAT004'),
('ACT060', 'Sail Lanka Charter Passikudah - Private Trips', 'DEST010', 'Yacht Charter Catamaran based in Passikudah, Sri Lanka ; We offer day-trips, sailing experiences, eco-friendly cruises along the shoreline to learn how to sail, enjoy the landscape, visit Elephant Rocks, Vandalous Bay, discover unspoiled reefs with snorkeling equipment & have fun on the stand-up paddle board !', 'Sail Lanka Charter Passikudah.jpg', 'ACTCAT001'),
('ACT061', ' Sail Lanka Charter Passikudah - Private Trips', 'DEST010', 'Null', 'Null', 'ACTCAT001'),
('ACT062', ' Bandula Surfing School', 'DEST013', 'The surfing experience is going to be something exciting and mind blowing despite the age and performance level of the surfers. We organize private surfing lessons with a VIP service. Surf guiding for intermediate and professional surfers and kids surf lessons for any age levels with all equipment will be available for ultimate satisfaction of all our guests. Guests will be accompanied to the suitable surfing locations depending on their performance levels. The beaches we take for the surfing ad', 'Bandula Surfing School.jpg', 'ACTCAT001'),
('ACT063', 'Eden Reverie Spa and Cabanas', 'DEST013', 'Eden Reverie Cabanas and Spa located right near the serene Goyambokka beach in Tangalle, Sri Lanka.At Eden Reverie Spa, our mission is to provide our clients with professional, enjoyable services in relaxing and ethical manner. It is a family owned and operated business. Our therapists have extensive training and are nationally certified.', 'Eden Reverie Spa and Cabanas.jpg', 'ACTCAT004');

-- --------------------------------------------------------

--
-- Table structure for table `destination_reviews`
--

CREATE TABLE IF NOT EXISTS `destination_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_dest_id` varchar(10) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `ratings` decimal(2,1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`),
  KEY `fk_dest_id` (`fk_dest_id`,`fk_user_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `destination_reviews`
--

INSERT INTO `destination_reviews` (`review_id`, `fk_dest_id`, `fk_user_id`, `name`, `email`, `review`, `ratings`, `timestamp`) VALUES
(1, 'DEST001', '1428894921', 'Chinthy', 'imeshajay93@gmail.com', 'Colombo is the largest and the second capital of Sri Lanka. It is the most happening place in the country which offers high end shopping, night life, restaurants, hotels etc.. Can get very crowded...', '3.0', '2015-09-28 17:34:03'),
(2, 'DEST002', '1428894921', 'Chinthy', 'asd@asd.asd', 'This is the big question in Kandy - if you are planning for a big night drinking party session you can reconsider as everything closes early here and The Pub is one of the few places that actually...', '4.0', '2015-09-28 17:35:57'),
(3, 'DEST005', '1428894921', 'Chinthy', 'asd@asd.asd', 'Anuradhapura is one of the ancient cities that make up the cultural triangle. While a day of sightseeing here is certainly worthwhile, there are several other sights in the triangle that I would rate...', '3.0', '2015-09-28 17:36:52'),
(4, 'DEST001', '1428861473', 'Lakindu', 'lakindu93@gmail.com', 'Unless you are flying into the new airport at Hambantota (a vanity project for President Rajapaksa to impress Commonwealth heads of Government at a recent summit) in the South of the island, then you...', '3.0', '2015-09-28 17:33:54'),
(5, 'DEST002', '1428861473', 'Lakindu', 'asd@asd.asd', 'Kandy is the capital of the hill country,its built around a stunning 18th century lake,its regarded as the most beautiful town in Sri Lanka.Visit the Temple of the tooth where the sacred tooth relic...', '4.0', '2015-09-28 17:36:01'),
(6, 'DEST005', '1428861473', 'Lakindu', 'asd@asd.asd', 'Anuradhapura was established around a cutting from the ''tree of enlightenment'', the Buddha''s fig tree, brought there in the 3rd century B.C. by Sanghamitta, the founder of an order of Buddhist nuns....', '2.0', '2015-09-28 17:36:57'),
(7, 'DEST001', '1437328729', 'Sewmi', 'binusew@gmail.com', 'Hi! My friends As you know I live in Colombo, I would like to say few words on my city. I like to begin with normal information like others do. And also by going away form the odds I like to say more...', '5.0', '2015-09-28 21:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `onto_user_ids`
--

CREATE TABLE IF NOT EXISTS `onto_user_ids` (
  `fk_user_id` varchar(255) NOT NULL,
  `onto_user_id` varchar(10) NOT NULL,
  UNIQUE KEY `fk_user_id_2` (`fk_user_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onto_user_ids`
--

INSERT INTO `onto_user_ids` (`fk_user_id`, `onto_user_id`) VALUES
('1428861473', 'T0002'),
('1428894921', 'T0003'),
('1437328729', 'T0001'),
('1441271820', 'T0004');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'default_profile_pic.png',
  `about_me` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  UNIQUE KEY `user_id_2` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `profile_pic`, `about_me`, `mobile`) VALUES
('1428861473', 'default_profile_pic.png', NULL, NULL),
('1428894921', 'default_profile_pic.png', NULL, NULL),
('1437328729', 'default_profile_pic.png', NULL, NULL),
('1441271820', 'default_profile_pic.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `res_id` varchar(10) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_description` varchar(500) DEFAULT NULL,
  `cuisines_type` varchar(100) DEFAULT NULL,
  `facilities` varchar(300) DEFAULT NULL,
  `fk_dest_id` varchar(10) NOT NULL,
  `res_address` varchar(200) DEFAULT NULL,
  `res_lat` varchar(50) DEFAULT NULL,
  `res_lng` varchar(50) DEFAULT NULL,
  `website` int(100) DEFAULT NULL,
  `tele` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `res_image` varchar(100) NOT NULL,
  PRIMARY KEY (`res_id`),
  KEY `fk_dest_id` (`fk_dest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`res_id`, `res_name`, `res_description`, `cuisines_type`, `facilities`, `fk_dest_id`, `res_address`, `res_lat`, `res_lng`, `website`, `tele`, `email`, `res_image`) VALUES
('RES001', 'Coco Veranda', 'This place has a really nice range of drinks and the food is also quite nice. The cakes are very tempting and you can choose to sit inside with AC or out in the paved area just outside. It''s usually quite busy but orders come quickly and freshly made.', 'Coffee Shops, Desserts And SweetsLounge', 'Dine-In, Wifi Internet, Airconditioned, Credit-Cards, Parking Area', 'DEST001', '32, Ward Place, Cinnamon Gardens, (Colombo 07), Colombo', '6.916275', '79.869666', 0, '(011) 763-5635', 'hello@cocoveranda.com', 'colombo_Coco Veranda.jpg'),
('RES002', 'Bars Cafe', 'This is owned by one of Sri Lanka''s pioneer, most famous bakery and catering companies, Perera and Sons. Good value food served in a decent patisserie-style ambiance. Facing Duplication Road, with limited parking in front and on Deal Place. The menu includes Bars Burger, Arabic cheese sandwich, Godamba Roti wraps, Baked Crab Pot (a favourite), Beef kebab with wasabi mash, pancake stacks, waffles topped up with hot butter and country syrup, chocolate decadent, hell''s chicken, seafood salad, chick', 'Coffee Shops, Ice Cream, Semi Fine Dining, Desserts And Sweets, Multicuisine, Cafes', 'Dine-In, Serves Halal Food, Outdoor Dining, Smoking Area, Airconditioned, Credit-Cards, Delivery Available', 'DEST001', '24, Deal Place, Kollupitiya, (Colombo 03), Colombo', '6.906444', '79.853138', 0, '(011) 257-5157', 'info@thebarscafe.com', 'colombo_Bars Cafe.jpg'),
('RES003', 'The Sizzle', 'Sizzlers are a recent ''inno-vention'' that consists of an entire meal being served on a cast iron platter, which is in turn placed on a wooden base and served sizzling to your table. They are open 365 days of the year from 11am until midnight which is quite a bonus! The Sizzle is conveniently located in a quiet street in Central Colombo, housed in an old converted house on Walukarama Road in Kollupitiya, Colombo 03. Turn Right immediately after Moolchand Lights on the land side of the Galle Road ', 'Semi Fine Dining, Multicuisine, Mongolian', 'Serves Halal Food, Outdoor Dining, Smoking Area, Wifi Internet, Dine-In, Credit-Cards, Take-Away, Family Friendly, Delivery Available, Parking Area, Airconditioned', 'DEST001', '32, Walukarama Road, Kollupitiya, (Colombo 03), Colombo', '6.904568', '79.8529', 0, '(071) 688-8777', 'info@thesizzle.org', 'colombo_The Sizzle.jpg'),
('RES004', 'Urban Kitchen', 'The Urban Kitchen brings a unique concept of dining to Sri Lanka. It is part restaurant and part food court. The owners refer to the concept as the "food factory concept". The facility is large and can seat 250, 180 of the seats indoors in air-conditioned comfort. The indoor area is very bright, very comfortable and tastefully decorated.', 'Multicuisine', 'Outdoor Dining, Wifi Internet, Dine-In, Credit-Cards, Parking Area, Take-Away, Delivery Available', 'DEST001', '69, Hyde Park, Union Place, (Colombo 02), Colombo', '6.917523', '79.861008', 0, '(011) 573-2732', 'urban.kitchen@hotmail.com', 'colombo_Urban Kitchen.jpg'),
('RES005', 'Cioconat Lounge', 'Cioconat Lounge is a franchise originating in Dubai, owned by Natfood Srl of Italy. The best italian restaurant in town. There is food on the menu as well, including pizza, pasta and sandwiches. There are a number of cakes. The tiramisu listed is a drink, and not a dessert. The pick of the menu are the speciality hot chocolate, for which the sachets are directly imported from Italy. The ambiance is bright, open and modern, with even the chairs and tables according to the specified design of Natf', 'Italian,?Multicuisine,?International,?Arabian', 'Outdoor Dining, Wifi Internet, Dine-In, Credit-Cards, Parking Area, Take-Away, Delivery Available, Happy Hours, Serves Halal Food, Smoking Area, Airconditioned', 'DEST001', '107, Barnes Place, Cinnamon Gardens, (Colombo 07), Colombo', '6.912678', '79.87522', 0, '(011) 267-9292', 'info@bararifoods.com', 'colombo_Cioconat Lounge.jpg'),
('RES006', 'Elite Restaurant', 'There is a patisserie and pastry shop outside the Indian restaurant. This was a rather plain looking Sri Lankan ''eatery'', called ''''saivara kade'''' before being upgraded to a spotlessly clean restaurant complex, with a decent carpark to top it off. The menu is essentially North Indian, with some decent value Parathas, Naans, Rottis and Biriyani. It is not a very big menu, with a few dishes each of beef (unusual for an Indian restaurant), fish and mutton.', 'North Indian, Indian', 'Serves Halal Food, Dine-In, Credit-Cards, Parking Area, Take-Away, Delivery Available, Airconditioned', 'DEST001', '124, Bauddhaloka Mawatha, Bambalapitiya, (Colombo 04), Colombo', '6.896085', '79.857828', NULL, '(011) 255-2882', NULL, 'colombo_Elite Restaurant?.jpg'),
('RES007', 'The Cafe On The 5th', 'The restaurant of Tasty Caterers, which opened on December 1 2004. It serves short eats patisserie-style, and also serving pasta,?Mongolian barbecue, Sri Lankan favourites, lunch packets and a very limited a la carte menu.', '?Patisserie,?Cafes', 'Outdoor Dining, Dine-In, Parking Area, Take-Away', 'DEST001', '108, 5th Lane, Kollupitiya, (Colombo 03), Colombo', '6.905304', '79.857199', NULL, '(011) 257-3765', NULL, 'colombo_The Cafe On The 5th.jpg'),
('RES008', 'Sugar Bistro & Wine Bar', 'Sugar Bistro , a lively and exciting new restaurant and bar from the team behind Lemon Bar & Kitchen and Silk is now open. It?s home to a relaxed dining experience and underpinned by great service and a menu that includes hearty dishes from around the globe including the infamous Sugar burger. The aim is to deliver a great experience whatever time you choose.', '?Bars & Pubs,?Burgers,?Cafes,?Lounge', 'Outdoor Dining, Wifi Internet, Dine-In, Parking Area, Take-Away, Smoking Area, Airconditioned, Bar Available, Family Friendly', 'DEST001', '89,?Crescat Boulevard Food Court, Galle Road, Kollupitiya, (Colombo 03), Colombo', '6.917088', '79.848478', 0, '(011) 244-6229', 'sugarbistroandwinebar@gmail.com', 'colombo_Sugar Bistro & Wine Bar.jpg'),
('RES009', 'White House Restaurant', 'White House is a unique, concept restaurant in the heart of Kandy, a beautiful heritage city in the hills of the Central region of Sri Lanka. White House is a Bakery, Caf? and Restaurant all in one. The caf? is modern & trendy compared to the laid back, cosy, wooden themed first floor restaurant. White House serves up a multi cuisine menu including some of the best steaks in town. We also have a real Tandoor to delight all those who love their meats char grilled. What?s more, the fresh bakery & ', 'Chinese,?Indian,?Cafes', 'Dine-In', 'DEST002', '21, Sri Dalada Veediya, Kandy', '7.292937', '80.635985', 0, '(081) 223-2765', 'info@whitehouse.lk', 'kandy_White House Restaurant.jpg'),
('RES010', 'Pizza Hut', 'The first known pizza shop in Sri Lanka, opened in 1830 and is still open today. They currently have 24+ Pizza Hut stores throughout the Sri Lanka. Made up of dine-in restaurants and their delivery and takeaway ''delco'' stores. Nearly everyone anywhere can enjoy a most tasteful Pizza Hut pizza! All stores work under one call center.', 'Fast Food', 'Serves Halal Food, Dine-In', 'DEST002', '06, D.S. Senanayake Veediya, Kandy', '7.293623', '80.638556', 0, '(011) 272-9729', 'pizzahutsrilanka@gmail.com', 'kandy_Pizza Hut.jpg'),
('RES011', 'The Kandy Garden Club & Cafe', 'The Kandy Garden Club houses an Asian restaurant known for sumptuous helpings of great food at very affordable rates. It also offers temporary membership to visitors who want to use the bar, play sports and dine in.', 'Asian,?Cafes', 'Dine-In', 'DEST002', '09, Sangaraja Mawatha, Kandy', '7.28695', '80.647433', NULL, '(081) 222-2675', NULL, 'kandy_The Kandy Garden Club & Cafe.jpg'),
('RES012', 'Devon Restaurant', 'Devon Restaurant enjoys popularity among visitors and locals alike and offers a wide range of Chinese, Western and Sri Lankan dishes. The place is usually crowded on weekends so try and go over there on the weekdays.', 'Multicuisine', 'Dine-In', 'DEST002', 'Sri Dalada Veediya, Kandy', '7.292957', '80.636542', NULL, '(081) 222-4537', NULL, 'kandy_Devon Restaurant.jpg'),
('RES013', 'Kevins Lake View', 'Kevins Lake View is located in front of the famous Kandy lake. It is only a ten minute walk from the Kandy town center Owner of the Kevins lake view is a well known hotelier with over 20 years of experience in the hotel field in Italy. You are able to order various types of traditional Sri Lankan, Italian and Chinese foods.', 'Italian', 'Outdoor Dining, Wifi Internet, Dine-In, Parking Area, Take-Away, Smoking Area, Family Friendly', 'DEST002', '34k, Sangaraja Mawatha, Kandy', '7.289933', '80.642233', 0, '(081) 454-5207', 'info@kevinslakeview.com', 'kandy_Kevins Lake View.jpg'),
('RES014', 'Far Pavillion - Earl''s Regency Hotel', 'On the second floor of the Earl''s Regency, a Tourist Board 5* Aitken Spence group hotel. It is on two levels, overlooking the Mahaweli river. There is an a la carte menu, as well as themed dinner buffets each night. It serves 180 covers at a time, so when the hotel is full, there can be a lack of places.', 'Coffee Shops', 'Dine-In', 'DEST002', 'Earl''s Regency Hotel, Tennekumbura, Kandy', '7.281931', '80.669507', 0, '0812422122~6', 'res@earlsregency.lk', 'kandy_Far Pavillion - Earl''s Regency Hotel.jpg'),
('RES015', 'Flower Song Restaurant', NULL, 'Chinese', 'Dine-In, Serves Halal Food, Outdoor Dining, Smoking Area, Bar Available, Credit-Cards, Delivery Available, Parking Area, Take-Away', 'DEST002', '281, D.S Senanayake, Veediya Kandy', '7.300208', '80.636307', 0, '(081) 448-1650', 'flower_drum@aol.com', 'kandy_Flower Song Restaurant.jpg'),
('RES016', 'Paiva''s Food Court', NULL, 'Chinese,?North Indian,?Sri Lankan,?European,?Beverages', 'Dine-In, Serves Halal Food, Smoking Area, Family Friendly, Take-Away, Wifi Internet', 'DEST002', '37, Yatinuwara Veediya, Kandy', '7.293845', '80.635849', 0, '(081) 222-0002', 'fnb@kandycityhotel.lk', 'kandy_Paiva''s Food Court.jpg'),
('RES017', 'Restaurant Refresh', 'Simple beachside restaurant, with some fancy prices and quite large dishes. The best value for money dish is the Nasi Goreng. The specialist dishes are the seafood platters, which carry a high price. There are many fresh juices and soft drinks to choose from too. This is probably the best independent A-grade restaurant in Hikkaduwa, outside the many tourist hotels.', ' Bars & Pubs, Ice Cream, Sea Food, Beverages', 'Dine-In', 'DEST003', '384, Galle Road, Hikkaduwa, Galle', '6.130163', '80.102654', 0, '(091) 227-5783', 'refreshr@sltnet.lk', 'galle_Restaurant Refresh.jpg'),
('RES018', 'Kingfisher', 'Welcome to the Kingfisher restaurant! Welcome to the only restaurant in Unawatuna where there?s something for everybody! From cuttlefish and crabs to Tiger and Jumbo prawns, our Asian fusion cuisine has a become the favorite with locals, holidaymakers and expats all the same and they return time to time again to taste our dishes. It has been one of the many reasons of how Kingfisher Restaurant is included in the list of ''No 25 of 101 best restaurants in Asia has to be named also here in order to', 'Sea Food, Multicuisine', 'Outdoor Dining, Bar Available, Dine-In, Parking Area, Wifi Internet, Smoking Area', 'DEST003', 'Dewala Road, Unawatuna, Galle', '6.008525', '80.24427', 0, '(077) 340-8404', 'info@kingfisherunawatuna.com', 'galle_Kingfisher.jpg'),
('RES019', 'Mamas Restaurant', 'Welcome to Mamas Coral Beach Hotel & Restaurant, built in 1971, the first beach hotel & restaurant, set in a prime & convenient location of Hikkaduwa and perfectly positioned in the pristine & golden beach, puts everything the city has to offer just outside your doorstep, the perfect & excellent choice for any traveler or beachcomber', ' Sri Lankan', 'Serves Halal Food, Buffet, Outdoor Dining, Live Performances, Wifi Internet, Smoking Area, Dine-In, Credit-Cards, Family Friendly, Parking Area, Bar Available, Delivery Available, Airconditioned, Take-Away', 'DEST003', '338, Galle Road, Hikkaduwa, Galle', '6.1390966', '80.0996133', NULL, '(091) 576-7724', NULL, 'galle_Mamas Restaurant.jpg'),
('RES020', 'Crepe-ology', NULL, 'Fine Dining, European', 'Dine-In, Serves Halal Food, Airconditioned, Family Friendly, Take-Away,  Wifi Internet', 'DEST003', '53, Leyn Baan Street, Galle Fort, Galle', '6.026006', '80.218964', 0, '(091) 223-4777', 'info@crepe-ology.lk', 'galle_Crepe-ology.jpg'),
('RES021', 'Happy Banana', NULL, ' Asian', 'Dine-In, Outdoor Dining, Bar Available, Smoking Area, Take-Away,  Parking Area', 'DEST003', 'Yaddehimulla Road, Unawatuna, Galle', '6.009659', '80.247833', 0, '(091) 225-0252', 'happybananahotel@yahoo.com', 'galle_Happy Banana.jpg'),
('RES022', 'Spaghetti & Co', NULL, 'Italian', 'Dine-In, Take-Away', 'DEST003', 'South End, Hikkaduwa, Galle', '6.12695', '80.112801', NULL, '(091) 227-7042', NULL, 'galle_Spaghetti & Co.jpg'),
('RES023', 'Pizza Hut, Kaluwella', 'The first known pizza shop in Sri Lanka, opened in 1830 and is still open today. They currently have 24+ Pizza Hut stores throughout the Sri Lanka. Made up of dine-in restaurants and their delivery and takeaway ''delco'' stores. Nearly everyone anywhere can enjoy a most tasteful Pizza Hut pizza! All stores work under one call center.', 'Pizza', 'Serves Halal, Food Dine-In', 'DEST003', '70A, Galle Road, Kaluwella, Galle', '6.0351862', '80.2081833', 0, '(011) 272-9729', 'pizzahutsrilanka@gmail.com', 'galle_Pizza Hut Kaluwella.jpg'),
('RES024', 'The Heritage Cafe', NULL, ' Cafes, European', 'Dine-In', 'DEST003', '53, Light House Street, Galle Fort, Galle', '6.026006', '80.217087', NULL, '(077) 697-3218', NULL, 'galle_The Heritage Cafe.jpg'),
('RES025', 'Milano Restaurant', 'This eatery is at the top of lonely planets list. It serves good halal Indian and Chinese food. It is so popular that that it''s two floors are mostly full.', ' Chinese, Coffee Shops, Sea Food, Sri Lankan, Biryani, Beverages', 'Dine-In, Serves Halal, Food Family, Friendly, Credit-Cards, Parking Area', 'DEST004', '24, New Bazaar Street, Nuwara Eliya', '6.97314', '80.76664', NULL, '(052) 222-2763', 'info@foodlandsgroup.com', 'NuwarElliya_Milano Restaurant.jpg'),
('RES026', 'St. Andrew''s Hotel, St Andrew''s Drives', NULL, 'Hotel', ' Dine-In', 'DEST004', '10, St Andrew''s Drives, Nuwara Eliya', '6.9959345', '80.753938', 0, '(052) 222-3031', NULL, 'NuwaraElliya_StAndrewsHotel.jpg'),
('RES027', 'Restaurant Two', NULL, 'Fast Food, Sri Lankan, Biryani', ' Dine-In, Outdoor, Dining,Parking, Area, Family Friendly, Take-Away,  Wifi Internet', 'DEST004', 'No 1, Grand Hotel Rd, Nuwara Eliya', '6.967516', '80.767014', 0, '(052) 493-0007', 'darshanasamarasinghe111@gmail.com', 'NuwarElliya_Restaurant Two.jpg'),
('RES028', 'Grand Indian Restaurant - Grand Hotel Nuwara Eliya', NULL, 'North Indian', ' Dine-In', 'DEST004', 'Grand Hotel Nuwara Eliya, Grand Hotel Rd, Nuwara Eliya', '6.968448', '80.764641', NULL, NULL, NULL, 'NuwaraEliya_Grand Indian Restaurant.jpg'),
('RES029', 'Queenswood Restaurant', NULL, ' Fast Food, Sri Lankan, Pizza', ' Serves Halal, Food Outdoor, Dining, Wifi Internet, Dine-In', 'DEST004', '124/1, Nuwara Eliya - Badulla Road, Nuwara Eliya', '6.965082', '80.767105', 0, '(052) 222-3351', 'queenswoodcottage@gmail.com', 'NuwaraEliya_Queenswood Restaurant.jpg'),
('RES030', 'Old Course Restaurant', NULL, 'International', NULL, 'DEST004', '10 St Andrew''s Dr, Nuwara Eliya, Sri Lanka', '6.979564', '80.763857', 0, '94522223031', NULL, 'NuwaraEliya_Old Course Restaurant.jpg'),
('RES031', 'Q Restaurant', NULL, 'Indian, European, Asian, Sri Lankan', NULL, 'DEST004', '124/1 Badulla Road, Nuwara Eliya 22200, Sri Lanka', '6.965079', '80.7649783', 0, '(94)522223351', NULL, 'NuwaraEliya_Q Restaurant.jpg'),
('RES032', 'Lake View Pub', NULL, 'International', NULL, 'DEST004', 'Alpine Hotel, #4, Haddon Hill Road, | Opposite the Racecourse & Lake, Nuwara Eliya, Sri Lanka', '6.9625818', '80.7315781', NULL, '524907171', NULL, 'NuwaraEliya_Lake View Pub.jpg'),
('RES033', 'Pizza Hut, New Town', NULL, ' Fast Food, Pizza', 'Airconditioned, Dine-In, Take-Away,  Delivery Available', 'DEST005', 'No.561/1, Main Street, New Town, Anuradhapura', '8.324185', '80.404053', 0, '(011) 272-9729', 'pizzahutsrilanka@gmail.com', 'Anuradhapura_Pizza Hut.jpg'),
('RES034', 'Nilketha Villa Eco Hotel', NULL, 'Sri Lankan, Multicuisine', ' Serves Halal, Food, Buffet, Outdoor, Dining, Smoking Area', 'DEST005', '139, Jethawanarama Road, Anuradhapura', '8.354041', '80.411453', 0, '(075) 690-9540', 'nilkethavilla@gmail.com', 'Anuradhapura_Nilketha Villa Eco Hotel.jpg'),
('RES035', 'Hotel Alakamanda', NULL, 'Sri Lankan', 'Dine-In Parking Area Family Friendly Take-Away', 'DEST005', '11, Nagasena Mawatha, Anuradhapura', '8.309007', '80.417389', 0, '(025) 562-0277', 'info@hotelalakamanda.com', 'Anuradhapura_Hotel Alakamanda.jpg'),
('RES036', 'Mango Mango', 'Mango Mango is the first Authentic North & South Indian Restaurant In Anuradhapura. Mango Mango Opened its doors to food lovers on 4th April 2014.', 'Chinese Indian Asian Mongolian Sri Lankan', NULL, 'DEST005', 'Mango Mango, Jayanthi Mawatha Anuradhapura, Anuradhapura 50000, Sri Lanka', '8.3207124', '80.3126803', NULL, '94 25 2 227501', NULL, 'Anuradhapura_Mango Mango.jpg'),
('RES037', 'Seedevi Family Restaurant', NULL, 'Indian, Asian, Sri Lankan', 'Late Night, Breakfast, Dinner, Lunch', 'DEST005', 'No 562/B/1, Jayanthi Mawatha, Anuradhapura, Sri Lanka', '8.3250131', '80.3641062', NULL, '252225509', NULL, 'Anuradhapura_Seedevi Family Restaurant.jpg'),
('RES038', 'Milano Tourist Rest Restaurant', NULL, 'Chinese, Seafood, International', 'Lunch, Dinner', 'DEST005', '596 /40 , Stage 01, Anuradhapura, Sri Lanka', '8.3250185', '80.3827891', NULL, '94 25 2222364', NULL, 'Anuradhapura_Milano Tourist Rest Restaurant.jpg'),
('RES039', 'Ceylan Lodge Restaurant', NULL, NULL, NULL, 'DEST005', 'No: 4-c 2  Harishchandra Mawatha, Anuradhapura 10100, Sri Lanka', '8.3340105', '80.3814261', NULL, '94 25 2235114', NULL, 'Anuradhapura_Ceylan Lodge Restaurant.jpg'),
('RES040', 'Water Garden Restaurant', NULL, 'Chinese, Indian, Seafood, Asian, Sri Lankan', '', 'DEST005', 'No 519/8 | Jayanthi Mawatha, Anuradhapura 50000, Sri Lanka', '8.3264227', '80.3974437', NULL, '(94)0774198483', NULL, 'Anuradhapura_Water Garden Restaurant.jpg'),
('RES041', 'Jaga Food', 'We providing the best foods through the all places in this area, with our helpness and friendly service. And the open kitchen will show you how we preparing the foods for you. Our restaurant placed bitween the Minneriya National Park and Polonnaruwa Ancient City. No more long about 7kms. If you have our foods, Sri Lankan taste will kept on your memory forever. Finally our vision is your satisfied.', 'Asian, Sri Lanka', 'Lunch', 'DEST006', '22 Junction, Jayanthipura, Polonnaruwa 51024, Sri Lanka', '0', '0', 0, '94776652048', NULL, 'Polonnaruwa_Jaga Food.jpg'),
('RES042', 'Maha Kithula', NULL, 'Indian, Asian, Sri Lankan', 'Lunch', 'DEST006', 'Bandiwewa, Polonnaruwa, Sri Lanka', '7.9640531', '80.9499', NULL, '716973355', NULL, 'Polonnaruwa_Maha Kithula.jpg'),
('RES043', 'Priyamali Gedara', NULL, 'Sri Lankan', 'Dine-In Parking Area Family Friendly Take-Away', 'DEST006', '1595 Bandiwewa | Jayanthipura, Polonnaruwa, Sri Lanka', '0', '0', NULL, '071-721-648', NULL, 'Polonnaruwa_Priyamali Gedara.jpg'),
('RES044', 'Ariya Rest House', NULL, 'European, Asian, Central European, Sri Lanka', 'Dinner, Lunch', 'DEST006', 'Side street facing Open University Bediwewa | Polonnaruwa to Jayanthipura main road, Polonnaruwa, Sri Lanka', '7.9641883', '80.9843907', NULL, '272222727', NULL, 'Polonnaruwa_Ariya Rest House.jpg'),
('RES045', 'Polonnaruwa Rest House Dining Room', NULL, 'Multicuisine', 'Lunch', 'DEST006', 'Potgul Mawatha, Polonnaruwa, Sri Lanka', '7.9300444', '80.9769199', NULL, '(027) 222 2299', NULL, 'Polonnaruwa_Polonnaruwa Rest House Dining Room.jpg'),
('RES046', 'The Lake Restaurant', NULL, 'Multicuisine', 'Dinner, Lunch', 'DEST006', 'Pothgul Vihara, New Town | The Lake Hotel, Polonnaruwa 51000, Sri Lanka', '7.9243536', '80.9582801', NULL, '272222411', NULL, 'Polonnaruwa_The Lake Restaurant.jpg'),
('RES047', 'Lake Front Hotel And Restaurant', NULL, 'Chinese, Indian, Seafood, International, Asian, Sri Lankan', 'Dinner, Lunch', 'DEST006', 'No 52, Girithale, Polonnaruwa 51026, Sri Lanka', '8.0029352', '80.881537', NULL, '(94)0275718999', NULL, 'Polonnaruwa_Lake Front Hotel And Restaurant.jpg'),
('RES048', 'Hotel Mahanuge', NULL, 'Indian, International, Asian, Vegetarian, Middle Eastern, Vegan', 'Dinner, Lunch', 'DEST006', '25th Mile Post | Bendiwewa, Polonnaruwa, Sri Lanka', '7.9577041', '80.9964989', NULL, NULL, NULL, 'Polonnaruwa_Hotel Mahanuge.jpg'),
('RES049', 'Park Restaurant', 'Claiming to be perhaps the ''Best Restaurant'' in town, the Park Restaurant offers affordable and good quality food.', 'Chinese,?Fast Food,?Ice Cream', '?Outdoor Dining,Serves Halal Food, Dine-In,  Take-Away, Parking Area', 'DEST007', 'Dockyard Road, Trincomalee', '8.5719453', '81.2365017', NULL, '(026) 720-0102', 'emm.thil@gmail.com ', 'Trincomalee_park_resturant.jpg'),
('RES050', 'Sober Island Resort', 'The Sober Island, located within environs of the magnificent Trincomalee harbour is part of a selected band of properties in Sri Lanka which is home to an island resort. The Sober Island encompasses an envious pedigree with a tapestry woven around a rich history and nostalgia.', 'Multicuisine', 'Dine-In,Wifi Internet, Airconditioned', 'DEST007', 'Trincomalee', '8.5423716', '81.2087488', 0, '011 3 818214', 'soberislandresort@gmail.com', 'Trincomalee_sober_island.jpg'),
('RES051', 'Dutch Bank Cafe', 'Sri Lankan Restaurants in Trincomalee,?Sri Lankan Restaurants in Inner Harbour Road, Trincomalee,Restaurants in Inner Harbour Road,?Restaurants in Trincomalee?Restaurants in Trincomalee, Trincomalee Restaurants,', 'Sri Lankan', '?Outdoor Dining, Dine-In, Parking Area', 'DEST007', '88, Inner Harbour Rd, Trincomalee', '8.5655922', '81.2330217', NULL, '077 269 0600', 'dutchbankcafe@gmail.com', 'Trincomalee_Dutch_Bank_cafe.jpg'),
('RES052', 'Trinco Rest', 'Offering a restaurant, Trinco Rest House is located in Trincomalee. The Koneswaran Beach is 800 metres away. Free WiFi access is available in the public areas of the property.', 'Sri Lankan', 'Dine-In', 'DEST007', 'Central Rd, Trincomalee', '8.5706437', '81.2370096', NULL, '026 2 227545', NULL, 'Trincomalee_Rest_House.jpg'),
('RES053', 'Golf Link Hotel', 'Golf Link Hotel is located at picturesque location of the Trincomalee flanked by a breathtaking view of Indian Ocean. A clean and natural beauty provides visitors unforgettable glimpse of touching life time experience. Sandy bay beach provides the perfect environment for a host of water sports and beach activities.', '', 'Dine-In', 'DEST007', 'Sandy Bay Rd, Trincomalee', '8.5596015', '81.243572', 0, '026 3 202169', 'golflinkhotel@gmail.com', 'Trincomalee_Golf_Link_Hotel.jpg'),
('RES054', 'Ella Flower Garden Resort', 'Flower Garden Resort is a well-known traveler?s stop in Ella because of many reasons. The panoramic mountain view of Ella Rock is the most interesting sight you going to have here. It?s unbelievable and it could be the most beautiful thing you going to experience in your vacation in Sri Lanka. We are located just?65km away from Mattala International Airport.', 'Mulitcuisine', 'Dine-In', 'DEST008', '3rd Mile Post, Passara Rd, Ella', '6.870942', '81.056595', 0, '+94 57 2050 480', 'info@ella-resort.com', 'Badulla_Flower_Garden_Resort.jpg'),
('RES055', 'Dunhinda Falls Inn', 'Situated in a Residential area over looking Namunukula Hill Range, Tea Plantations/Factories & on the way to Dunhinda Water Falls', 'Rice and Curry, Drinks', 'Dine-In', 'DEST008', '35/10, Bandaranayake Mawatha,Badulla', '6.9967125', '81.0555705', 0, '?+94 55 2223028', 'dunhundafallsin@yahoo.com', 'Badulla_Dunhinda_Falls_Inn.jpg'),
('RES056', 'Nestline Holiday Resort', 'modern facilities and situated two kilometers far away from the Badulla Railway', 'Sea Food. Night snaks ', 'Dine-In', 'DEST008', '317/A,Kanupelalla Road Wewalhinna - Kadana Road,Badulla', '6.9707152', '81.0653402', 0, '055 2 225840', 'info@nestline.com', 'Badulla_Nestline_Holiday_Resort.jpg'),
('RES057', '98 Acres Resort & Spa', 'Experience the beauty and serenity of Sri Lanka?s scenic hill country within the luxurious comforts of a boutique hotel par excellence. 98 Acres Resort and Spa is an elegant, chic hotel that stands on a scenic 98 acre tea estate, surrounded by a stunning landscape.', 'Sri Lankan, Continental,Far Eastern', 'Dine-In', 'DEST008', 'Greenland Estate, Ella - Passara Rd, Ella', '6.871147', '81.062417', 0, '057 2 050050', 'info@resort98acres.com', 'Badulla_98_Acres.jpg'),
('RES058', 'Cafe Chill', 'Caf? Chill??A uniquely cool place in Batti to meet friends and family over hot and cold drinks, snack and ice creams. A place to visit, relax and enjoy your time with mouth watering treats suitable for all ages.Great venue for Parties, dinners, functions or business meetings ? You name it we do it ? you just relax and Enjoy.', 'Asian,?Cafes', 'Dine-In', 'DEST008', 'Wellawaya-Ella-Kumbalwela Highway, Ella', '6.8740743', '81.0486706', NULL, '077 180 4020', NULL, 'Badulla_Cafe_Chill.jpg'),
('RES059', 'jade Green (tea center & restaurant)', NULL, 'Tea, Snaks ', 'Dine-In', 'DEST008', 'Wellawaya-Ella-Kumbalwela Highway, Ella', '6.8732946', '81.0488248', NULL, NULL, NULL, 'Badulla_jade-green-tea-centre.jpg'),
('RES060', 'Dulsara', 'Sri Lankan Restaurants ', 'Rice and Curry, Drinks', 'Dine-In, Take away', 'DEST008', 'Cocowatte Road, Badulla', '6.9850278', '81.058875', NULL, NULL, NULL, 'Badulla_Dulsara.jpg'),
('RES061', 'Ella Village Inn', 'Family-friendly chain serving homestyle American classics such as chicken-fried steak & pot pie.', 'Sri lankan, western', 'Dine-In', 'DEST008', 'No.10, Main Street, Ella', '6.8751183', '81.0469151', NULL, '072 465 6292', NULL, 'Badulla_Ella_Village_Inn.jpg'),
('RES062', 'Mangos Indian Veg', 'A pure vegetarian North & South Indian restaurant, cafe and bakery, Mangos is one of those famous Jaffna joints that warrants a visit and a mention.', 'Indian foods', 'Dine-In', 'DEST009', '359/3, Temple Road, Jaffna', '9.6761403', '80.0287981', NULL, '077 766 1083', '?info@mangos.lk', 'Jaffna_Mangos_resturant.jpg'),
('RES063', 'Old Park Restaurant', 'Although it?s a bit like eating in someone?s front room, the Old Park offers some of Jaffna?s tastiest cuisine and is paradise for garlic lovers. Its small garden is pleasant for a cold beer.', 'Indian foods,Sri Lankan Foods', 'Dine-In', 'DEST009', 'Kandy - Jaffna Hwy, Jaffna', '9.6603095', '80.0275647', NULL, NULL, NULL, 'Jaffna_Old Park Restaurant.jpg'),
('RES064', 'Yal''s Town Inn Hotel & Restaurant', 'Yal''s Town Inn?delivers accommodation for those who are accustomed to high standards in style and taste. The location is utterly unrivalled - the hotel looks out upon one of the busiest, most sought after neighbourhoods in Jaffna city.', 'Indian foods,Sri Lankan Foods', 'Dine-In', 'DEST009', '57/48, Stanley Road, Jaffna', '9.669731', '80.0127786', 0, '+ 94 21 221 7000', 'info@yalstowninn.com?', 'Jaffna_Yal''s Town Inn Hotel & Restaurant.jpg'),
('RES065', 'VishnuBavan', 'Pure vegetarian restaurant, vow to excellence, customer service, hygiene is one of the premier restaurants in Jaffna. Traditional Vegetarian dishes are are given a Soulful and spirited workout!.', '?Pure vegetarian', 'Dine-In, Take away', 'DEST009', 'No. 350, K.K.S Road, Jaffna', '9.671031', '80.010632', NULL, '077 740 4089', NULL, 'Jaffna_VishnuBavan.jpg'),
('RES066', 'Lovusi Hotel and Restaurant', 'Lovusi Hotel?&?Restaurant?(Pvt) Ltd. Since the end of the war period, the highest?number of tourists visiting?Jaffna?from South of Sri Lanka and abroad.', 'Indian foods', 'Dine-in ', 'DEST009', 'No. 584 Hospital Rd, Jaffna', '9.66484', '80.015793', 0, '021 2 221326', NULL, 'Jaffna_lovusi hotel.jpg'),
('RES067', 'Lingan Cream House', 'Regional variations don''t seem to exist in Sri Lanka any more: it seems too small now to have anything that''s uniquely from an area. You can eat Chilaw Crab curry anywhere in the country and no one - not even the cook - even knows it''s from there. Wherever you go, the improvements in roads and the spread of supermarkets means that everyone makes everything pretty much the same way.', 'Ice cream', 'Dine-In, Take away', 'DEST009', 'AB20, Jaffna', '9.6685253', '80.0151979', NULL, '011 2 683090', NULL, 'Jaffna_Lingan Cream House.jpg'),
('RES068', 'Chelva Restaurant', 'Hotel and Resturant ', 'Chinese', 'Dine-In', 'DEST009', '1229, Jaffna-Kankesanturai Rd, Jaffna', '9.6916044', '80.0136107', 0, '021 2 219779', NULL, 'Jaffna_Chelva Restaurant.jpg'),
('RES069', 'Gnanams Hotel', 'Offering standard services to travellers exploring the Northern peninsula, the Gnanams Hotel is located in the town centre of Jaffna. Whether you are visiting on business or leisure, the hotel offers air-conditioned accommodation units which are well equipped. The restaurant is a fine venue to enjoy some of the best Jaffna cuisine while the hotel also boasts of conference facilities and a hall that can accommodate up to 300 guests. Due to its perfect location, there are many places that you can ', 'Mulitcuisine', 'Dine-In', 'DEST009', 'C Ponnampalam Rd, Jaffna', '9.667299', '80.014243', 0, '4.48456E+11', NULL, 'Jaffna_ganasam hotel.jpg'),
('RES070', 'Sunshine Fast', 'As Sri Lanka?s foremost baker and caterer with over 10 Years of tradition behind them, Sunshine Fast pride in producing every great tasting item of food on its list with care, and with a strong commitment to quality. One of the most revealing insights into how the bakery operates is a remark made by its manager who said, ?We have maintained the quality of our products as a tribute to our customers who have always believed in us, and it is this relationship that has been the driving force behind ', 'Sri Lankan,?Bakery', 'Dine-In, Buffet, Take-Away, Parking Area', 'DEST010', '315,Trinco Road, Batticaloa', '7.7586727', '81.6371821', 0, '065 2225159', 'sunshine.batticaloa@gmail.com', 'Batticaloa_Sun shine fast.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `travel_styles`
--

CREATE TABLE IF NOT EXISTS `travel_styles` (
  `travel_style_id` int(11) NOT NULL AUTO_INCREMENT,
  `travel_style` varchar(100) NOT NULL,
  PRIMARY KEY (`travel_style_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `travel_styles`
--

INSERT INTO `travel_styles` (`travel_style_id`, `travel_style`) VALUES
(1, 'Nature Lover'),
(2, 'Like a Local'),
(3, 'Peace and Quiet Seeker'),
(4, 'Eco-tourist'),
(5, 'Vegetarian'),
(6, 'Family Vacationer'),
(7, '60+ Traveler'),
(8, 'Nightlife Seeker'),
(9, 'Trendsetter'),
(10, 'Urban Explorer'),
(11, 'Shopping Fantastic'),
(12, 'Thrill Seeker'),
(13, 'History Buff'),
(14, 'Foodie'),
(15, 'Backpacker'),
(16, 'Beach Goer'),
(17, 'Luxury Traveler'),
(18, 'Art and Architecture Lover'),
(19, 'Thrifty Traveler');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `gender`, `country`, `email`, `password`, `reg_time`, `user_status`) VALUES
('1428861473', 'Lakindu', 'Jayasena', 'male', 'Sri Lanka', 'lakindu93@gmail.com', '70e6814e5022e8302d6bb0e5426a64dfe2073a2c', '2015-04-12 17:57:53', 1),
('1428894921', 'Chinthaka', 'Wijerathna', 'male', 'Sri Lanka', 'chinthakawgcg@gmail.com', '70e6814e5022e8302d6bb0e5426a64dfe2073a2c', '2015-04-13 03:15:21', 1),
('1437328729', 'Sewmi', 'Rajapaksha', 'female', 'Sri Lanka', 'binusew@gmail.com', '70e6814e5022e8302d6bb0e5426a64dfe2073a2c', '2015-07-19 17:58:49', 1),
('1441271820', 'Kithsiri', 'Bandara', 'male', 'Sri Lanka', 'kithsiribs@gmail.com', '70e6814e5022e8302d6bb0e5426a64dfe2073a2c', '2015-09-03 09:17:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_travel_styles`
--

CREATE TABLE IF NOT EXISTS `users_travel_styles` (
  `user_id` varchar(255) NOT NULL,
  `travel_style_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`,`travel_style_id`),
  KEY `travel_style_id` (`travel_style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attractions`
--
ALTER TABLE `attractions`
  ADD CONSTRAINT `attractions_ibfk_1` FOREIGN KEY (`fk_dest_id`) REFERENCES `destinations` (`dest_id`);

--
-- Constraints for table `attraction_intypes`
--
ALTER TABLE `attraction_intypes`
  ADD CONSTRAINT `attraction_intypes_ibfk_1` FOREIGN KEY (`fk_attr_id`) REFERENCES `attractions` (`attr_id`),
  ADD CONSTRAINT `attraction_intypes_ibfk_2` FOREIGN KEY (`fk_attr_type_id`) REFERENCES `attraction_types` (`attr_type_id`);

--
-- Constraints for table `attraction_ratings`
--
ALTER TABLE `attraction_ratings`
  ADD CONSTRAINT `attraction_ratings_ibfk_1` FOREIGN KEY (`fk_attr_id`) REFERENCES `attractions` (`attr_id`),
  ADD CONSTRAINT `attraction_ratings_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `attraction_types_cat`
--
ALTER TABLE `attraction_types_cat`
  ADD CONSTRAINT `attraction_types_cat_ibfk_1` FOREIGN KEY (`fk_attr_type_id`) REFERENCES `attraction_types` (`attr_type_id`);

--
-- Constraints for table `destination_activities`
--
ALTER TABLE `destination_activities`
  ADD CONSTRAINT `destination_activities_ibfk_1` FOREIGN KEY (`fk_dest_id`) REFERENCES `destinations` (`dest_id`),
  ADD CONSTRAINT `destination_activities_ibfk_2` FOREIGN KEY (`fk_activity_cat_id`) REFERENCES `activity_cat` (`activity_cat_id`);

--
-- Constraints for table `destination_reviews`
--
ALTER TABLE `destination_reviews`
  ADD CONSTRAINT `destination_reviews_ibfk_1` FOREIGN KEY (`fk_dest_id`) REFERENCES `destinations` (`dest_id`),
  ADD CONSTRAINT `destination_reviews_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `onto_user_ids`
--
ALTER TABLE `onto_user_ids`
  ADD CONSTRAINT `onto_user_ids_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`fk_dest_id`) REFERENCES `destinations` (`dest_id`);

--
-- Constraints for table `users_travel_styles`
--
ALTER TABLE `users_travel_styles`
  ADD CONSTRAINT `users_travel_styles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_travel_styles_ibfk_2` FOREIGN KEY (`travel_style_id`) REFERENCES `travel_styles` (`travel_style_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
