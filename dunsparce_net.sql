-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2019 at 03:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunsparce.net`
--

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `dex_num` int(11) DEFAULT NULL,
  `counterBossDex` int(11) DEFAULT NULL,
  `fast` varchar(100) DEFAULT NULL,
  `fast_type` varchar(20) DEFAULT NULL,
  `charged` varchar(100) DEFAULT NULL,
  `charged_type` varchar(20) DEFAULT NULL,
  `description` text,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `name`, `img`, `dex_num`, `counterBossDex`, `fast`, `fast_type`, `charged`, `charged_type`, `description`, `priority`) VALUES
(1, 'Mewtwo', 'https://cdn.bulbagarden.net/upload/thumb/7/78/150Mewtwo.png/1200px-150Mewtwo.png', 150, 488, 'Confusion', 'Psychic', 'Shadow Ball', 'Ghost', 'An all around great counter if you have the coveted legacy move, Shadow Ball. Mewtwo has the well rounded stats to make it a great generalist and a hard hitter against Cresselia', 2),
(2, 'Giratina (Origin)', 'https://cdn.bulbagarden.net/upload/2/2b/487Giratina-Origin.png', 487, 488, 'Shadow Claw', 'Ghost', 'Shadow Ball', 'Ghost', 'Origin Form Giratina is the best when it comes to fighting Cresselia. Its impressive bulk and high attack allow it to survive in battle much longer than glass cannons like Gengar', 1),
(4, 'Gengar', 'https://cdn.bulbagarden.net/upload/c/c6/094Gengar.png', 94, 488, 'Shadow Claw/Lick', 'Ghost', 'Shadow Ball', 'Ghost', 'The super fast, super powerful glass cannon makes a return to the raid meta scene as one of the highest DPS counters for Cresselia. However, only use Gengar if you have the coveted fast move Shadow Claw, or its Raid Day exclusive move Lick.', 3),
(5, 'Giratina (Origin)', 'https://cdn.bulbagarden.net/upload/2/2b/487Giratina-Origin.png', 487, 386, 'Shadow Claw', 'Ghost', 'Shadow Ball', 'Ghost', 'If it\'s weak to Ghost, your best bet will be Giratina Origin. Shadow Claw/Shadow Ball makes Giratina Origin like a bulky Gengar. It is the supreme Ghost type counter.', 1),
(6, 'Gengar', 'https://cdn.bulbagarden.net/upload/c/c6/094Gengar.png', 94, 386, 'Shadow Claw/Lick', 'Ghost', 'Shadow Ball', 'Ghost', 'If it\'s weak to Ghost, and you don\'t have a team of high IV Giratina Origin, then Gengar is your next best bet. A high DPS glass cannon with the coveted legacy/event moveset, Gengar makes quick work of this bulky boss.', 2),
(7, 'Mewtwo', 'https://cdn.bulbagarden.net/upload/thumb/7/78/150Mewtwo.png/1200px-150Mewtwo.png', 150, 386, 'Confusion/Psycho Cut', 'Psychic', 'Shadow Ball', 'Ghost', 'An all around great counter if you have the coveted legacy move, Shadow Ball. Mewtwo has the well rounded stats to make it a great generalist and a hard hitter against Deoxys', 3),
(8, 'Weavile', 'https://cdn.bulbagarden.net/upload/d/d2/461Weavile.png', 461, 386, 'Feint Attack', 'Dark', 'Foul Play', 'Dark', 'Weavile is like a less powerful, more bulky Gengar, that happens to be a Dark type. A hard hitter and decent option if you don\'t have access to the aforementioned Legendaries or exclusive-move Gengar', 4),
(14, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 105, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The King of the Sea makes a triumphant entrance into any battle where the boss is weak to Water.', 1),
(15, 'Giratina (Origin)', 'https://cdn.bulbagarden.net/upload/2/2b/487Giratina-Origin.png', 487, 105, 'Shadow Claw', 'Ghost', 'Shadow Ball', 'Ghost', 'If it\'s weak to Ghost, your best bet will be Giratina Origin. Shadow Claw/Shadow Ball makes Giratina Origin like a bulky Gengar. It is the supreme Ghost type counter.', 3),
(16, 'Tyranitar', 'https://cdn.bulbagarden.net/upload/thumb/8/82/248Tyranitar.png/500px-248Tyranitar.png', 248, 105, 'Bite', 'Dark', 'Crunch', 'Dark', 'An all around generalist that sports two incredible movesets against Alolan Marowak - not listed is Smack Down/Stone Edge, due to the fact that people may not have the exclusive move.', 4),
(17, 'Houndoom', 'https://cdn.bulbagarden.net/upload/thumb/5/51/229Houndoom.png/500px-229Houndoom.png', 229, 105, 'Snarl', 'Dark', 'Foul Play', 'Dark', 'A less bulky Tyranitar that sports a powerful Dark-type moveset, but is not as fast as Weavile. The three Dark-type attackers can really be interchanged depending how many people are in your lobby\r\n', 5),
(18, 'Gyarados', 'https://cdn.bulbagarden.net/upload/thumb/4/41/130Gyarados.png/500px-130Gyarados.png', 130, 105, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The budget Kyogre. Use this aquatic menace if you didn\'t secure a Kyogre when it was in rotation', 2),
(19, 'Gyarados', 'https://cdn.bulbagarden.net/upload/thumb/4/41/130Gyarados.png/500px-130Gyarados.png', 130, 112, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The budget Kyogre. Use this aquatic menace if you didn\'t secure a Kyogre when it was in rotation', 2),
(20, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 112, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The King of the Sea makes a triumphant entrance into any battle where the boss is weak to Water.', 1),
(21, 'Roserade', 'https://cdn.bulbagarden.net/upload/thumb/0/05/407Roserade.png/500px-407Roserade.png', 407, 112, 'Razor Leaf', 'Grass', 'Grass Knot', 'Grass', 'With the new inclusion of Grass Knot in Roserade\'s movepool, Roserade has primed itself to be a prominent Grass attacker in the meta', 3),
(22, 'Feraligatr', 'https://cdn.bulbagarden.net/upload/thumb/d/d5/160Feraligatr.png/500px-160Feraligatr.png', 160, 112, 'Water Gun', 'Water', 'Hydro Cannon', 'Water', 'Community Day treated Feraligatr very well. A high DPS attack like Hydro Cannon boosted this baddie way up the ranks', 4),
(23, 'Machamp', 'https://cdn.bulbagarden.net/upload/thumb/8/8f/068Machamp.png/500px-068Machamp.png', 68, 248, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Machamp has been the *supreme* Fighting-type counter, and will likely remain that way even with the fighting trio from Unova. Load up your teams with high IV and level Machamp and you\'ll clear out a Tyranitar in no time', 1),
(24, 'Hariyama', 'https://cdn.bulbagarden.net/upload/thumb/6/6f/297Hariyama.png/500px-297Hariyama.png', 297, 248, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Basically its a budget Machamp with slightly lower damage output. But only slightly.', 2),
(25, 'Breloom', 'https://cdn.bulbagarden.net/upload/thumb/d/de/286Breloom.png/500px-286Breloom.png', 286, 248, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'A versatile but less frequently used counter, Breloom has its potential with its lower overall TTW. A bit more frail, though, so stock up on potions!', 3),
(26, 'Machamp', 'https://cdn.bulbagarden.net/upload/thumb/8/8f/068Machamp.png/500px-068Machamp.png', 68, 306, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Aggron is 4x weak to Fighting. As is Tyranitar. If Machamp is being used as the #1 counter for Tyranitar, you can bet your bottom dollar he\'ll wind up on this list.', 1),
(27, 'Hariyama', 'https://cdn.bulbagarden.net/upload/thumb/6/6f/297Hariyama.png/500px-297Hariyama.png', 297, 306, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Budget Machamp makes a return as #2 counter for Aggron. Why? Because he\'s basically Machamp. Thats why.', 2),
(28, 'Groudon', 'https://cdn.bulbagarden.net/upload/thumb/7/70/383Groudon.png/500px-383Groudon.png', 383, 306, 'Mud Shot', 'Ground', 'Earthquake', 'Ground', 'Groudon is the go to Ground attacker. Aggron is 4x weak to Ground-types. Groudon has the lowest death count out of all counters, and if survivability is your main concern, go with Groudon.', 3),
(29, 'Breloom', 'https://cdn.bulbagarden.net/upload/thumb/d/de/286Breloom.png/500px-286Breloom.png', 286, 306, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'A versatile but less frequently used counter, Breloom has its potential with its lower overall TTW. A bit more frail, though, so stock up on potions!', 4),
(30, 'Machamp', 'https://cdn.bulbagarden.net/upload/thumb/8/8f/068Machamp.png/500px-068Machamp.png', 68, 359, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'If it\'s weak to Fighting, Machamp will rise to the occasion. Which he always does. Who else but Machamp?', 1),
(31, 'Hariyama', 'https://cdn.bulbagarden.net/upload/thumb/6/6f/297Hariyama.png/500px-297Hariyama.png', 297, 359, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Budget Machamp makes a return as #2 counter for Absol. Why? Because he\'s basically Machamp. Thats why.', 2),
(32, 'Breloom', 'https://cdn.bulbagarden.net/upload/thumb/d/de/286Breloom.png/500px-286Breloom.png', 286, 359, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'A versatile but less frequently used counter, Breloom has its potential with its lower overall TTW. A bit more frail, though, so stock up on potions!', 4),
(33, 'Toxicroak', 'https://cdn.bulbagarden.net/upload/thumb/8/8b/454Toxicroak.png/500px-454Toxicroak.png', 454, 359, 'Counter', 'Fighting', 'Dynamic Punch', 'Fighting', 'Toxicroak is a new addition to the Fighting-type raid meta. Soup to nuts, if it can sport the best Fighting-type moveset, which Toxicroak does, then he\'ll make any Fighting counter list.', 4),
(34, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 95, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The King of the Sea makes a triumphant entrance into any battle where the boss is weak to Water.', 1),
(35, 'Gyarados', 'https://cdn.bulbagarden.net/upload/thumb/4/41/130Gyarados.png/500px-130Gyarados.png', 130, 95, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The budget Kyogre. Use this aquatic menace if you didn\'t secure a Kyogre when it was in rotation', 2),
(36, 'Roserade', 'https://cdn.bulbagarden.net/upload/thumb/0/05/407Roserade.png/500px-407Roserade.png', 407, 95, 'Razor Leaf', 'Grass', 'Grass Knot', 'Grass', 'With the new inclusion of Grass Knot in Roserade\'s movepool, Roserade has primed itself to be a prominent Grass attacker in the meta', 3),
(37, 'Feraligatr', 'https://cdn.bulbagarden.net/upload/thumb/d/d5/160Feraligatr.png/500px-160Feraligatr.png', 160, 95, 'Water Gun', 'Water', 'Hydro Cannon', 'Water', 'Community Day treated Feraligatr very well. A high DPS attack like Hydro Cannon boosted this baddie way up the ranks', 4),
(38, 'Metagross', 'https://cdn.bulbagarden.net/upload/thumb/0/05/376Metagross.png/500px-376Metagross.png', 376, 142, 'Bullet Punch', 'Steel', 'Meteor Mash', 'Steel', 'Metagross is the... meta... for steel types. His Community Day move, Meteor Mash, is a must have to use against bosses weak to Steel-types.', 1),
(39, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 142, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'If it\'s weak to Water, Kyogre will almost always be in the top counters without a doubt.', 2),
(41, 'Electivire', 'https://cdn.bulbagarden.net/upload/thumb/2/23/466Electivire.png/500px-466Electivire.png', 466, 142, 'Thunder Shock', 'Electric', 'Wild Charge', 'Electric', 'The reason why Electivire is taking the #3 spot and not Raikou or Zapdos is because Electivire and Raikou are about equal in power, but Raikou is harder to obtain, being a legendary. Additionally, Zapdos is weak to Rock-types, which Aerodactyl is, and therefore poses a graver threat to Zapdos than Electivire', 3),
(42, 'Dialga', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/483Dialga.png/500px-483Dialga.png', 483, 142, 'Metal Claw', 'Steel', 'Iron Head', 'Steel', 'Dialga is like Metagross, though with a slightly lower bulk so its TTW is just a tad higher. Go with a dual Steel-type moveset to take on Aerodactyl', 4),
(43, 'Rampardos', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/409Rampardos.png/500px-409Rampardos.png', 409, 142, 'Smack Down', 'Rock', 'Rock Slide', 'Rock', 'Rampardos has dethroned the previous king of Rock-types: Tyranitar. Boasting an attack stat that rivals Mewtwo, this Rock-type beast is sure to slay any boss that dares stand in its way.', 5),
(44, 'Metagross', 'https://cdn.bulbagarden.net/upload/thumb/0/05/376Metagross.png/500px-376Metagross.png', 376, 213, 'Bullet Punch', 'Steel', 'Meteor Mash', 'Steel', 'Despite being the #1 counter for Shuckle, Metagross takes an awful long time to kill this stubborn turtle. It\'s a gentle reminder that one simply cannot fuckle with the Shuckle', 1),
(45, 'Dialga', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/483Dialga.png/500px-483Dialga.png', 483, 213, 'Metal Claw', 'Steel', 'Iron Head', 'Steel', 'Even Dialga, the God of Time, cannot crush this puny, rocky bug turtle. That says something about Shuckle. He\'s even more powerful than the poke-gods.', 2),
(46, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 213, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'The King of the Sea makes a triumphant entrance into any battle where the boss is weak to Water. And Shuckle laughed.', 3),
(47, 'Rampardos', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/409Rampardos.png/500px-409Rampardos.png', 409, 213, 'Smack Down', 'Rock', 'Rock Slide', 'Rock', 'Ok, now we\'re just getting ridiculous. If the gods of time and the sea can\'t take down a turtle, why do you think an ancient rock dinosaur can?', 4),
(48, 'Metagross', 'https://cdn.bulbagarden.net/upload/thumb/0/05/376Metagross.png/500px-376Metagross.png', 376, 337, 'Bullet Punch', 'Steel', 'Meteor Mash', 'Steel', 'Metagross is the... meta... for steel types. His Community Day move, Meteor Mash, is a must have to use against bosses weak to Steel-types.', 1),
(49, 'Dialga', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/483Dialga.png/500px-483Dialga.png', 483, 337, 'Metal Claw', 'Steel', 'Iron Head', 'Steel', 'Dialga is a safe bet for battling Lunatone, sporting high attack and powerful Steel type moveset, as well as a resistance to Psychic types', 2),
(50, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 337, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'If it\'s weak to Water, Kyogre will almost always be in the top counters without a doubt.', 3),
(51, 'Giratina (Origin)', 'https://cdn.bulbagarden.net/upload/2/2b/487Giratina-Origin.png', 487, 337, 'Shadow Claw', 'Ghost', 'Shadow Ball', 'Ghost', 'If it\'s weak to Ghost, your best bet will be Giratina Origin. Shadow Claw/Shadow Ball makes Giratina Origin like a bulky Gengar. It is the supreme Ghost type counter.', 4),
(52, 'Gengar', 'https://cdn.bulbagarden.net/upload/c/c6/094Gengar.png', 94, 337, 'Shadow Claw/Lick', 'Ghost', 'Shadow Ball', 'Ghost', 'Only use Gengar if you have the coveted fast move Shadow Claw, or its Raid Day exclusive move Lick. Giratina Origin is a much better Ghost type attacker', 5),
(53, 'Metagross', 'https://cdn.bulbagarden.net/upload/thumb/0/05/376Metagross.png/500px-376Metagross.png', 376, 338, 'Bullet Punch', 'Steel', 'Meteor Mash', 'Steel', 'Metagross is the... meta... for steel types. His Community Day move, Meteor Mash, is a must have to use against bosses weak to Steel-types.', 1),
(54, 'Dialga', 'https://cdn.bulbagarden.net/upload/thumb/8/8a/483Dialga.png/500px-483Dialga.png', 483, 338, 'Metal Claw', 'Steel', 'Iron Head', 'Steel', 'Dialga is a safe bet for battling Solrock, sporting high attack and powerful Steel type moveset, as well as a resistance to Solrock\'s Solar Beam', 2),
(55, 'Giratina (Origin)', 'https://cdn.bulbagarden.net/upload/2/2b/487Giratina-Origin.png', 487, 338, 'Shadow Claw', 'Ghost', 'Shadow Ball', 'Ghost', 'Giratina Origin takes the #3 spot instead of Kyogre simply because Solrock has access to Solar Beam. Know what moveset you\'re going up against when choosing counters. However, as repeated before, if it\'s weak to Ghost, your best bet will be Giratina Origin. Shadow Claw/Shadow Ball makes Giratina Origin like a bulky Gengar. It is the supreme Ghost type counter.', 3),
(56, 'Kyogre', 'https://cdn.bulbagarden.net/upload/thumb/4/41/382Kyogre.png/500px-382Kyogre.png', 382, 338, 'Waterfall', 'Water', 'Hydro Pump', 'Water', 'When Solrock doesn\'t have Solar Beam as it\'s raid battle move, feel free to use the King of the Sea, Kyogre.', 4),
(57, 'Tyranitar', 'https://cdn.bulbagarden.net/upload/thumb/8/82/248Tyranitar.png/500px-248Tyranitar.png', 248, 338, 'Bite', 'Dark', 'Crunch', 'Dark', 'Tyranitar really serves most of its purpose these days as a Dark-type generalist. Solrock is weak to Dark, so use Tyranitar when you don\'t really have other options.', 4),
(58, 'Tyranitar', 'https://cdn.bulbagarden.net/upload/thumb/8/82/248Tyranitar.png/500px-248Tyranitar.png', 248, 386, 'Bite', 'Dark', 'Crunch', 'Dark', 'Tyranitar really serves most of its purpose these days as a Dark-type generalist. Deoxys is weak to Dark, so use Tyranitar when you don\'t really have other options. He can be used \r\ninterchangeably with Weavile.', 5),
(59, 'Tyranitar', 'https://cdn.bulbagarden.net/upload/thumb/8/82/248Tyranitar.png/500px-248Tyranitar.png', 248, 488, 'Bite', 'Dark', 'Crunch', 'Dark', 'Tyranitar really serves most of its purpose these days as a Dark-type generalist. Cresselia is weak to Dark, so use Tyranitar when you don\'t really have other options. He can be used interchangeably with Weavile.', 4),
(60, 'Scizor', 'https://cdn.bulbagarden.net/upload/thumb/5/55/212Scizor.png/500px-212Scizor.png', 212, 488, 'Fury Cutter', 'Bug', 'X-Scissor', 'Bug', 'Scizor is the best all around Bug-type attacker right now. If you have a lot of people in your raid lobby, and TTW is not of concern, it\'s safe to use Scizor. There are better counters, so just keep that in mind.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE `eggs` (
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dex_num` int(11) NOT NULL,
  `img` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `min_cp` int(11) DEFAULT NULL,
  `max_cp` int(11) DEFAULT NULL,
  `egg_dist` int(2) NOT NULL,
  `baby` tinyint(1) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `shiny` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`name`, `dex_num`, `img`, `min_cp`, `max_cp`, `egg_dist`, `baby`, `isActive`, `shiny`) VALUES
('Bulbasaur', 1, 'https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/500px-001Bulbasaur.png', 590, 637, 2, 0, 1, 1),
('Charmander', 4, 'https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/500px-004Charmander.png', 516, 560, 2, 0, 1, 1),
('Squirtle', 7, 'https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/500px-007Squirtle.png', 497, 540, 2, 0, 1, 1),
('Sandshrew', 27, 'https://cdn.bulbagarden.net/upload/thumb/9/9e/027Sandshrew.png/500px-027Sandshrew.png', 670, 720, 5, 0, 1, 1),
('Sandshrew-A', 27, 'https://cdn.bulbagarden.net/upload/thumb/c/c9/027Sandshrew-Alola.png/1200px-027Sandshrew-Alola.png', 688, 739, 7, 0, 1, 0),
('Vulpix-A', 37, 'https://cdn.bulbagarden.net/upload/thumb/3/35/037Vulpix-Alola.png/220px-037Vulpix-Alola.png', 463, 504, 7, 0, 1, 0),
('Diglett-A', 50, 'https://cdn.bulbagarden.net/upload/thumb/1/10/050Diglett-Alola.png/220px-050Diglett-Alola.png', 352, 389, 7, 0, 1, 0),
('Meowth-A', 52, 'https://cdn.bulbagarden.net/upload/thumb/e/e3/052Meowth-Alola.png/1200px-052Meowth-Alola.png', 416, 455, 7, 0, 1, 0),
('Psyduck', 54, 'https://cdn.bulbagarden.net/upload/thumb/5/53/054Psyduck.png/500px-054Psyduck.png', 585, 632, 5, 0, 1, 1),
('Growlithe', 58, 'https://cdn.bulbagarden.net/upload/thumb/3/3d/058Growlithe.png/500px-058Growlithe.png', 660, 710, 5, 0, 1, 1),
('Abra', 63, 'https://cdn.bulbagarden.net/upload/thumb/6/62/063Abra.png/500px-063Abra.png', 712, 767, 2, 0, 1, 0),
('Machop', 66, 'https://cdn.bulbagarden.net/upload/thumb/8/85/066Machop.png/500px-066Machop.png', 678, 730, 2, 0, 1, 1),
('Geodude', 74, 'https://cdn.bulbagarden.net/upload/9/98/074Geodude.png', 688, 739, 2, 0, 1, 1),
('Geodude-A', 74, 'https://cdn.bulbagarden.net/upload/4/43/074Geodude-Alola.png', 688, 739, 7, 0, 1, 0),
('Ponyta', 77, 'https://cdn.bulbagarden.net/upload/3/3b/077Ponyta.png', 911, 969, 5, 0, 1, 1),
('Magnemite', 81, 'https://cdn.bulbagarden.net/upload/thumb/6/6c/081Magnemite.png/500px-081Magnemite.png', 725, 778, 5, 0, 1, 1),
('Seel', 86, 'https://cdn.bulbagarden.net/upload/thumb/1/1f/086Seel.png/500px-086Seel.png', 510, 555, 5, 0, 1, 1),
('Grimer-A', 88, 'https://cdn.bulbagarden.net/upload/thumb/e/e0/088Grimer-Alola.png/1200px-088Grimer-Alola.png', 731, 785, 7, 0, 1, 0),
('Shellder', 90, 'https://cdn.bulbagarden.net/upload/thumb/4/40/090Shellder.png/500px-090Shellder.png', 571, 617, 2, 0, 1, 1),
('Gastly', 92, 'https://cdn.bulbagarden.net/upload/thumb/c/ca/092Gastly.png/500px-092Gastly.png', 649, 702, 2, 0, 1, 1),
('Onix', 95, 'https://cdn.bulbagarden.net/upload/thumb/9/9a/095Onix.png/500px-095Onix.png', 580, 629, 2, 0, 1, 1),
('Krabby', 98, 'https://cdn.bulbagarden.net/upload/thumb/a/a7/098Krabby.png/500px-098Krabby.png', 835, 892, 2, 0, 1, 1),
('Cubone', 104, 'https://cdn.bulbagarden.net/upload/thumb/2/2a/104Cubone.png/500px-104Cubone.png', 536, 582, 5, 0, 1, 1),
('Lickitung', 108, 'https://cdn.bulbagarden.net/upload/thumb/0/00/108Lickitung.png/500px-108Lickitung.png', 752, 806, 5, 0, 1, 0),
('Rhyhorn', 111, 'https://cdn.bulbagarden.net/upload/thumb/9/9b/111Rhyhorn.png/500px-111Rhyhorn.png', 886, 943, 2, 0, 1, 0),
('Tangela', 114, 'https://cdn.bulbagarden.net/upload/thumb/3/3e/114Tangela.png/500px-114Tangela.png', 1212, 1278, 5, 0, 1, 0),
('Horsea', 116, 'https://cdn.bulbagarden.net/upload/thumb/5/5a/116Horsea.png/500px-116Horsea.png', 558, 603, 5, 0, 1, 0),
('Scyther', 123, 'https://cdn.bulbagarden.net/upload/thumb/b/ba/123Scyther.png/500px-123Scyther.png', 1472, 1546, 5, 0, 1, 1),
('Magikarp', 129, 'https://cdn.bulbagarden.net/upload/thumb/0/02/129Magikarp.png/500px-129Magikarp.png', 132, 157, 2, 0, 1, 1),
('Lapras', 131, 'https://cdn.bulbagarden.net/upload/thumb/a/ab/131Lapras.png/500px-131Lapras.png', 1435, 1509, 10, 0, 1, 1),
('Eevee', 133, 'https://cdn.bulbagarden.net/upload/thumb/e/e2/133Eevee.png/500px-133Eevee.png', 565, 612, 5, 0, 1, 1),
('Porygon', 137, 'https://cdn.bulbagarden.net/upload/thumb/6/6b/137Porygon.png/500px-137Porygon.png', 924, 982, 10, 0, 1, 0),
('Omanyte', 138, 'https://cdn.bulbagarden.net/upload/thumb/7/79/138Omanyte.png/500px-138Omanyte.png', 826, 882, 2, 0, 1, 1),
('Kabuto', 140, 'https://cdn.bulbagarden.net/upload/thumb/f/f9/140Kabuto.png/500px-140Kabuto.png', 730, 783, 2, 0, 1, 1),
('Aerodactyl', 142, 'https://cdn.bulbagarden.net/upload/thumb/e/e8/142Aerodactyl.png/500px-142Aerodactyl.png', 1515, 1590, 2, 0, 1, 1),
('Dratini', 147, 'https://cdn.bulbagarden.net/upload/thumb/c/cc/147Dratini.png/500px-147Dratini.png', 529, 574, 10, 0, 1, 1),
('Chikorita', 152, 'https://cdn.bulbagarden.net/upload/thumb/b/bf/152Chikorita.png/500px-152Chikorita.png', 491, 534, 2, 0, 1, 1),
('Cyndaquil', 155, 'https://cdn.bulbagarden.net/upload/thumb/9/9b/155Cyndaquil.png/500px-155Cyndaquil.png', 516, 560, 2, 0, 1, 1),
('Totodile', 158, 'https://cdn.bulbagarden.net/upload/thumb/d/df/158Totodile.png/500px-158Totodile.png', 599, 646, 2, 0, 1, 1),
('Pichu', 172, 'https://cdn.bulbagarden.net/upload/thumb/b/b9/172Pichu.png/500px-172Pichu.png', 240, 270, 2, 1, 1, 1),
('Cleffa', 173, 'https://cdn.bulbagarden.net/upload/thumb/e/e4/173Cleffa.png/500px-173Cleffa.png', 346, 383, 2, 1, 1, 1),
('Igglybuff', 174, 'https://cdn.bulbagarden.net/upload/thumb/4/4d/174Igglybuff.png/500px-174Igglybuff.png', 269, 306, 2, 1, 1, 1),
('Togepi', 175, 'https://cdn.bulbagarden.net/upload/thumb/6/6b/175Togepi.png/500px-175Togepi.png', 339, 375, 2, 1, 1, 1),
('Mareep', 179, 'https://cdn.bulbagarden.net/upload/thumb/6/6b/179Mareep.png/500px-179Mareep.png', 521, 566, 5, 0, 1, 1),
('Yanma', 193, 'https://cdn.bulbagarden.net/upload/thumb/d/dd/193Yanma.png/500px-193Yanma.png', 785, 840, 5, 0, 1, 0),
('Misdreavus', 200, 'https://cdn.bulbagarden.net/upload/thumb/b/be/200Misdreavus.png/500px-200Misdreavus.png', 1039, 1100, 2, 0, 1, 1),
('Pineco', 204, 'https://cdn.bulbagarden.net/upload/thumb/0/0b/204Pineco.png/500px-204Pineco.png', 586, 633, 5, 0, 1, 1),
('Gligar', 207, 'https://cdn.bulbagarden.net/upload/thumb/0/04/207Gligar.png/500px-207Gligar.png', 1000, 1061, 5, 0, 1, 0),
('Shuckle', 213, 'https://cdn.bulbagarden.net/upload/thumb/c/c7/213Shuckle.png/500px-213Shuckle.png', 189, 231, 2, 0, 1, 1),
('Sneasel', 215, 'https://cdn.bulbagarden.net/upload/thumb/7/71/215Sneasel.png/500px-215Sneasel.png', 1107, 1172, 5, 0, 1, 0),
('Swinub', 220, 'https://cdn.bulbagarden.net/upload/thumb/b/b5/220Swinub.png/500px-220Swinub.png', 384, 423, 2, 0, 1, 1),
('Skarmory', 227, 'https://cdn.bulbagarden.net/upload/thumb/3/35/227Skarmory.png/500px-227Skarmory.png', 1139, 1204, 5, 0, 1, 0),
('Houndour', 228, 'https://cdn.bulbagarden.net/upload/thumb/5/53/228Houndour.png/500px-228Houndour.png', 654, 705, 5, 0, 1, 1),
('Tyrogue', 236, 'https://cdn.bulbagarden.net/upload/thumb/c/c7/236Tyrogue.png/500px-236Tyrogue.png', 249, 281, 5, 1, 1, 0),
('Smoochum', 238, 'https://cdn.bulbagarden.net/upload/thumb/0/0e/238Smoochum.png/500px-238Smoochum.png', 686, 738, 5, 1, 1, 1),
('Elekid', 239, 'https://cdn.bulbagarden.net/upload/thumb/5/5d/239Elekid.png/500px-239Elekid.png', 640, 689, 5, 1, 1, 1),
('Magby', 240, 'https://cdn.bulbagarden.net/upload/thumb/c/cb/240Magby.png/500px-240Magby.png', 704, 756, 5, 1, 1, 1),
('Larvitar', 246, 'https://cdn.bulbagarden.net/upload/thumb/7/70/246Larvitar.png/500px-246Larvitar.png', 548, 594, 2, 0, 1, 1),
('Treecko', 252, 'https://cdn.bulbagarden.net/upload/thumb/2/2c/252Treecko.png/500px-252Treecko.png', 556, 601, 2, 0, 1, 1),
('Torchic', 255, 'https://cdn.bulbagarden.net/upload/thumb/9/91/255Torchic.png/500px-255Torchic.png', 578, 624, 2, 0, 1, 1),
('Mudkip', 258, 'https://cdn.bulbagarden.net/upload/thumb/6/60/258Mudkip.png/500px-258Mudkip.png', 597, 644, 2, 0, 1, 0),
('Lotad', 270, 'https://cdn.bulbagarden.net/upload/thumb/e/ee/270Lotad.png/500px-270Lotad.png', 307, 342, 5, 0, 1, 1),
('Ralts', 280, 'https://cdn.bulbagarden.net/upload/thumb/e/e1/280Ralts.png/500px-280Ralts.png', 275, 308, 10, 0, 1, 0),
('Slakoth', 287, 'https://cdn.bulbagarden.net/upload/thumb/d/d2/287Slakoth.png/500px-287Slakoth.png', 527, 572, 10, 0, 1, 1),
('Nincada', 290, 'https://cdn.bulbagarden.net/upload/thumb/9/90/290Nincada.png/500px-290Nincada.png', 399, 439, 10, 0, 1, 0),
('Makuhita', 296, 'https://cdn.bulbagarden.net/upload/thumb/b/b6/296Makuhita.png/500px-296Makuhita.png', 424, 467, 2, 0, 1, 1),
('Azurill', 298, 'https://cdn.bulbagarden.net/upload/thumb/a/ac/298Azurill.png/500px-298Azurill.png', 179, 208, 5, 1, 1, 1),
('Nosepass', 299, 'https://cdn.bulbagarden.net/upload/thumb/8/89/299Nosepass.png/500px-299Nosepass.png', 521, 567, 2, 0, 1, 0),
('Sableye', 302, 'https://cdn.bulbagarden.net/upload/thumb/d/d3/302Sableye.png/500px-302Sableye.png', 789, 843, 10, 0, 1, 1),
('Mawile', 303, 'https://cdn.bulbagarden.net/upload/thumb/c/c0/303Mawile.png/500px-303Mawile.png', 877, 934, 10, 0, 1, 1),
('Aron', 304, 'https://cdn.bulbagarden.net/upload/thumb/b/bb/304Aron.png/500px-304Aron.png', 696, 747, 2, 0, 1, 1),
('Meditite', 307, 'https://cdn.bulbagarden.net/upload/thumb/7/71/307Meditite.png/500px-307Meditite.png', 359, 396, 2, 0, 1, 1),
('Carvanha', 318, 'https://cdn.bulbagarden.net/upload/thumb/9/98/318Carvanha.png/500px-318Carvanha.png', 531, 583, 5, 0, 1, 0),
('Wailmer', 320, 'https://cdn.bulbagarden.net/upload/thumb/7/71/320Wailmer.png/500px-320Wailmer.png', 779, 838, 2, 0, 1, 1),
('Spoink', 325, 'https://cdn.bulbagarden.net/upload/thumb/9/9e/325Spoink.png/500px-325Spoink.png', 711, 762, 2, 0, 1, 1),
('Trapinch', 328, 'https://cdn.bulbagarden.net/upload/thumb/7/76/328Trapinch.png/500px-328Trapinch.png', 676, 728, 5, 0, 1, 0),
('Cacnea', 331, 'https://cdn.bulbagarden.net/upload/thumb/1/12/331Cacnea.png/500px-331Cacnea.png', 658, 709, 5, 0, 1, 0),
('Swablu', 333, 'https://cdn.bulbagarden.net/upload/thumb/9/99/333Swablu.png/500px-333Swablu.png', 429, 470, 2, 0, 1, 1),
('Lileep', 345, 'https://cdn.bulbagarden.net/upload/thumb/3/34/345Lileep.png/500px-345Lileep.png', 686, 738, 2, 0, 1, 1),
('Anorith', 347, 'https://cdn.bulbagarden.net/upload/thumb/4/45/347Anorith.png/500px-347Anorith.png', 817, 874, 2, 0, 1, 1),
('Feebas', 349, 'https://cdn.bulbagarden.net/upload/thumb/4/4b/349Feebas.png/500px-349Feebas.png', 132, 157, 10, 0, 1, 1),
('Shuppet', 353, 'https://cdn.bulbagarden.net/upload/thumb/4/4b/353Shuppet.png/500px-353Shuppet.png', 535, 581, 5, 0, 1, 1),
('Duskull', 355, 'https://cdn.bulbagarden.net/upload/thumb/e/e2/355Duskull.png/500px-355Duskull.png', 364, 403, 5, 0, 1, 1),
('Absol', 359, 'https://cdn.bulbagarden.net/upload/thumb/0/00/359Absol.png/500px-359Absol.png', 1370, 1443, 10, 0, 1, 1),
('Wynaut', 360, 'https://cdn.bulbagarden.net/upload/thumb/d/d0/360Wynaut.png/500px-360Wynaut.png', 268, 305, 5, 1, 1, 1),
('Snorunt', 361, 'https://cdn.bulbagarden.net/upload/thumb/6/6b/361Snorunt.png/500px-361Snorunt.png', 465, 507, 5, 0, 1, 1),
('Clamperl', 366, 'https://cdn.bulbagarden.net/upload/thumb/1/11/366Clamperl.png/500px-366Clamperl.png', 675, 726, 5, 0, 1, 1),
('Luvdisc', 370, 'https://cdn.bulbagarden.net/upload/thumb/1/1d/370Luvdisc.png/500px-370Luvdisc.png', 443, 484, 2, 0, 1, 1),
('Bagon', 371, 'https://cdn.bulbagarden.net/upload/thumb/d/d2/371Bagon.png/500px-371Bagon.png', 612, 660, 10, 0, 1, 1),
('Beldum', 374, 'https://cdn.bulbagarden.net/upload/thumb/d/d4/374Beldum.png/500px-374Beldum.png', 513, 558, 10, 0, 1, 1),
('Turtwig', 387, 'https://cdn.bulbagarden.net/upload/thumb/5/5c/387Turtwig.png/500px-387Turtwig.png', 629, 678, 2, 0, 1, 0),
('Chimchar', 390, 'https://cdn.bulbagarden.net/upload/thumb/7/76/390Chimchar.png/500px-390Chimchar.png', 503, 547, 2, 0, 1, 0),
('Piplup', 393, 'https://cdn.bulbagarden.net/upload/thumb/b/b1/393Piplup.png/500px-393Piplup.png', 568, 614, 2, 0, 1, 0),
('Kricketot', 401, 'https://cdn.bulbagarden.net/upload/thumb/3/33/401Kricketot.png/500px-401Kricketot.png', 200, 229, 2, 0, 1, 0),
('Shinx', 403, 'https://cdn.bulbagarden.net/upload/thumb/3/32/403Shinx.png/500px-403Shinx.png', 458, 500, 10, 0, 1, 1),
('Budew', 406, 'https://cdn.bulbagarden.net/upload/thumb/d/d3/406Budew.png/500px-406Budew.png', 448, 489, 5, 1, 1, 1),
('Cranidos', 408, 'https://cdn.bulbagarden.net/upload/thumb/c/cd/408Cranidos.png/500px-408Cranidos.png', 974, 1040, 2, 0, 1, 0),
('Shieldon', 410, 'https://cdn.bulbagarden.net/upload/thumb/e/e2/410Shieldon.png/500px-410Shieldon.png', 465, 509, 2, 0, 1, 0),
('Combee', 415, 'https://cdn.bulbagarden.net/upload/thumb/b/b6/415Combee.png/500px-415Combee.png', 251, 282, 5, 0, 1, 0),
('Buizel', 418, 'https://cdn.bulbagarden.net/upload/thumb/8/83/418Buizel.png/500px-418Buizel.png', 555, 602, 5, 0, 1, 0),
('Cherubi', 420, 'https://cdn.bulbagarden.net/upload/thumb/a/a7/420Cherubi.png/500px-420Cherubi.png', 499, 542, 5, 0, 1, 0),
('Drifloon', 425, 'https://cdn.bulbagarden.net/upload/thumb/e/eb/425Drifloon.png/500px-425Drifloon.png', 633, 684, 5, 0, 1, 1),
('Buneary', 427, 'https://cdn.bulbagarden.net/upload/thumb/a/a7/427Buneary.png/500px-427Buneary.png', 669, 719, 5, 0, 1, 1),
('Glameow', 431, 'https://cdn.bulbagarden.net/upload/thumb/2/26/431Glameow.png/500px-431Glameow.png', 490, 533, 5, 0, 1, 0),
('Chingling', 433, 'https://cdn.bulbagarden.net/upload/thumb/e/ed/433Chingling.png/500px-433Chingling.png', 530, 574, 10, 1, 1, 0),
('Stunky', 434, 'https://cdn.bulbagarden.net/upload/thumb/7/75/434Stunky.png/500px-434Stunky.png', 609, 657, 5, 0, 1, 0),
('Bronzor', 436, 'https://cdn.bulbagarden.net/upload/thumb/c/c1/436Bronzor.png/500px-436Bronzor.png', 305, 344, 5, 0, 1, 1),
('Bonsly', 438, 'https://cdn.bulbagarden.net/upload/thumb/e/e2/438Bonsly.png/500px-438Bonsly.png', 693, 744, 2, 1, 1, 0),
('Happiny', 440, 'https://cdn.bulbagarden.net/upload/thumb/2/27/440Happiny.png/500px-440Happiny.png', 178, 212, 10, 1, 1, 0),
('Gible', 443, 'https://cdn.bulbagarden.net/upload/thumb/6/68/443Gible.png/500px-443Gible.png', 588, 635, 10, 0, 1, 0),
('Munchlax', 446, 'https://cdn.bulbagarden.net/upload/thumb/b/b2/446Munchlax.png/500px-446Munchlax.png', 1017, 1081, 10, 1, 1, 0),
('Riolu', 447, 'https://cdn.bulbagarden.net/upload/a/a2/447Riolu.png', 522, 567, 10, 1, 1, 0),
('Hippopotas', 449, 'https://cdn.bulbagarden.net/upload/thumb/a/ab/449Hippopotas.png/500px-449Hippopotas.png', 723, 776, 5, 0, 1, 0),
('Skorupi', 451, 'https://cdn.bulbagarden.net/upload/thumb/4/47/451Skorupi.png/500px-451Skorupi.png', 531, 576, 5, 0, 1, 0),
('Croagunk', 453, 'https://cdn.bulbagarden.net/upload/thumb/f/fa/453Croagunk.png/500px-453Croagunk.png', 500, 544, 5, 0, 1, 0),
('Finneon', 456, 'https://cdn.bulbagarden.net/upload/thumb/4/45/456Finneon.png/500px-456Finneon.png', 511, 555, 5, 0, 1, 0),
('Mantyke', 458, 'https://cdn.bulbagarden.net/upload/thumb/b/bc/458Mantyke.png/500px-458Mantyke.png', 662, 713, 5, 1, 1, 0),
('Snover', 459, 'https://cdn.bulbagarden.net/upload/thumb/d/d2/459Snover.png/500px-459Snover.png', 614, 662, 5, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raids`
--

CREATE TABLE `raids` (
  `name` varchar(100) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `dex_num` int(11) DEFAULT NULL,
  `main` varchar(20) DEFAULT NULL,
  `secondary` varchar(20) DEFAULT NULL,
  `absMaxCP` int(11) DEFAULT NULL,
  `atk` int(11) DEFAULT NULL,
  `def` int(11) DEFAULT NULL,
  `sta` int(11) DEFAULT NULL,
  `raid_cp` int(11) DEFAULT NULL,
  `max_cp` int(11) DEFAULT NULL,
  `max_wb` int(11) DEFAULT NULL,
  `min_cp` int(11) DEFAULT NULL,
  `min_wb` int(11) DEFAULT NULL,
  `tier` int(1) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `weaknesses` text,
  `resistances` text,
  `fastMoveList` text,
  `chargedMoveList` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raids`
--

INSERT INTO `raids` (`name`, `img`, `dex_num`, `main`, `secondary`, `absMaxCP`, `atk`, `def`, `sta`, `raid_cp`, `max_cp`, `max_wb`, `min_cp`, `min_wb`, `tier`, `isActive`, `weaknesses`, `resistances`, `fastMoveList`, `chargedMoveList`) VALUES
('Cresselia', 'https://cdn.bulbagarden.net/upload/thumb/4/4a/488Cresselia.png/1200px-488Cresselia.png', 488, 'Psychic', NULL, 2857, 152, 258, 160, 33794, 1633, 2041, 1555, 1944, 5, 1, 'Bug, Ghost, Dark', 'Fighting, Psychic', 'Confusion, Psychic, Psycho-Cut, Psychic', 'Futuresight, Psychic, Moonblast, Fairy, Aurora Beam, Ice'),
('Deoxys (Def)', 'https://cdn.bulbagarden.net/upload/thumb/c/cc/386Deoxys-Defense.png/220px-386Deoxys-Defense.png', 386, 'Psychic', NULL, 2274, 144, 330, 137, 36170, 1299, 1624, 1228, 1535, 5, 1, 'Bug, Ghost, Dark', 'Fighting, Psychic', 'Zen Headbutt, Psychic, Counter, Fighting', 'Thunderbolt, Electric, Rock Slide, Rock, Psycho Boost, Psychic'),
('Geodude', 'https://cdn.bulbagarden.net/upload/thumb/9/98/074Geodude.png/500px-074Geodude.png', 74, 'Rock', 'Ground', 1293, 132, 132, 120, 4365, 739, 923, 688, 860, 1, 1, 'Fighting, Grass 2x, Ground, Ice, Steel, Water 2x', 'Electric 0.5x, Poison 0.5x, Fire, Flying, Normal, Rock', 'Tackle, Normal, Rock Throw, Rock', 'Rock Slide, Rock, Rock Tomb, Rock, Dig, Ground'),
('Omanyte', 'https://cdn.bulbagarden.net/upload/thumb/7/79/138Omanyte.png/500px-138Omanyte.png', 138, 'Rock', 'Water', 1544, 155, 153, 111, 5397, 882, 1103, 826, 1033, 1, 1, 'Electric, Fighting, Grass 2x, Ground', 'Fire 0.5x, Flying, Ice, Normal, Poison', 'Mud Shot, Ground, Water Gun, Water', 'Rock Blast, Rock, Bubble Beam, Water, Ancient Power, Rock'),
('Kabuto', 'https://cdn.bulbagarden.net/upload/thumb/f/f9/140Kabuto.png/500px-140Kabuto.png', 140, 'Rock', 'Water', 1370, 148, 140, 102, 4970, 783, 979, 730, 913, 1, 1, 'Electric, Fighting, Grass 2x, Ground', 'Fire 0.5x, Flying, Ice, Normal, Poison', 'Mud Shot, Ground, Scratch, Normal', 'Rock Tomb, Rock, Ancient Power, Rock, Aqua Jet, Water'),
('Lileep', 'https://cdn.bulbagarden.net/upload/thumb/3/34/345Lileep.png/500px-345Lileep.png', 345, 'Rock', 'Grass', 1291, 105, 150, 165, 3775, 738, 922, 686, 858, 1, 1, 'Bug, Fighting, Ice, Steel', 'Electric, Normal', 'Infestation, Bug, Acid, Poison', 'Grass Knot, Grass, Mirror Coat, Psychic, Ancient Power, Rock'),
('Anorith', 'https://cdn.bulbagarden.net/upload/thumb/4/45/347Anorith.png/500px-347Anorith.png', 347, 'Rock', 'Bug', 1529, 176, 100, 128, 5017, 874, 1092, 817, 1022, 1, 1, 'Rock, Steel, Water', 'Normal, Poison', 'Struggle Bug, Bug, Scratch, Normal', 'Cross Poison, Poison, Ancient Power, Rock, Aqua Jet, Water'),
('Onix', 'https://cdn.bulbagarden.net/upload/thumb/9/9a/095Onix.png/500px-095Onix.png', 95, 'Rock', 'Ground', 1101, 85, 232, 111, 9429, 629, 787, 580, 725, 3, 1, 'Fighting, Grass 2x, Ground, Ice, Steel, Water 2x', 'Electric 0.5x, Poison 0.5x, Fire, Flying, Normal, Rock', 'Tackle, Normal, Rock Throw, Rock', 'Stone Edge, Rock, Heavy Slam, Steel, Sand Tomb, Ground'),
('Sudowoodo', 'https://cdn.bulbagarden.net/upload/thumb/1/1e/185Sudowoodo.png/500px-185Sudowoodo.png', 185, 'Rock', NULL, 2148, 167, 176, 172, 10671, 1227, 1534, 1162, 1452, 2, 1, 'Fighting, Grass, Ground, Steel, Water', 'Fire, Flying, Normal, Poison', 'Counter, Fighting, Rock Throw, Rock', 'Stone Edge, Rock, Earthquake, Ground, Rock Slide, Rock'),
('Magcargo', 'https://cdn.bulbagarden.net/upload/thumb/6/65/219Magcargo.png/500px-219Magcargo.png', 219, 'Fire', 'Rock', 1702, 139, 191, 137, 9377, 972, 1215, 914, 1142, 2, 1, 'Fighting, Ground 2x, Rock, Water 2x', 'Fire 0.5x, Bug, Fairy, Flying, Ice, Normal, Poison', 'Ember, Fire, Rock Throw, Rock', 'Stone Edge, Rock, Overheat, Fire, Heat Wave, Fire'),
('Nosepass', 'https://cdn.bulbagarden.net/upload/thumb/8/89/299Nosepass.png/500px-299Nosepass.png', 299, 'Rock', NULL, 993, 82, 215, 102, 6241, 567, 709, 521, 651, 2, 1, 'Fighting, Grass, Ground, Steel, Water', 'Fire, Flying, Normal, Poison', 'Spark, Electric, Rock Throw, Rock', 'Thunderbolt, Electric, Rock Slide, Rock, Rock Blast, Rock'),
('Mawile', 'https://cdn.bulbagarden.net/upload/thumb/c/c0/303Mawile.png/500px-303Mawile.png', 303, 'Steel', 'Fairy', 1634, 155, 141, 137, 9008, 934, 1167, 887, 1096, 2, 1, 'Fire, Ground', 'Dragon 0.25x, Bug 0.5, Dark, Fairy, Flying, Grass, Ice, Normal, Poison, Psychic, Rock', 'Astonish, Ghost, Bite, Dark', 'Iron Head, Steel, Play Rough, Fairy, Vice Grip, Normal'),
('Aerodactyl', 'https://cdn.bulbagarden.net/upload/thumb/e/e8/142Aerodactyl.png/500px-142Aerodactyl.png', 142, 'Rock', 'Flying', 2783, 221, 159, 190, 18678, 1590, 1988, 1515, 1894, 3, 1, 'Electric, Ice, Rock, Steel, Water', 'Bug, Fire, Flying, Ground, Normal, Poison', 'Bite, Dark, Steel Wing, Steel', 'Hyper Beam, Normal, Iron Head, Steel, Rock Slide, Rock, Earth Power, Ground, Ancient Power, Rock'),
('Shuckle', 'https://cdn.bulbagarden.net/upload/thumb/c/c7/213Shuckle.png/500px-213Shuckle.png', 213, 'Bug', 'Rock', 405, 17, 396, 85, 3892, 231, 289, 189, 236, 3, 1, 'Rock, Steel, Water', 'Normal, Poison', 'Struggle Bug, Bug, Rock Throw, Rock', 'Stone Edge, Rock, Gyro Ball, Steel, Rock Blast, Rock'),
('Lunatone', 'https://cdn.bulbagarden.net/upload/thumb/e/eb/337Lunatone.png/500px-337Lunatone.png', 337, 'Rock', 'Psychic', 2327, 178, 153, 207, 15009, 1330, 1662, 1261, 1557, 3, 1, 'Bug, Dark, Ghost, Grass, Ground, Steel, Water', 'Fire, Flying, Normal, Poison, Psychic', 'Rock Throw, Rock, Confusion, Psychic', 'Rock Slide, Rock, Psychic, Psychic, Moonblast, Fairy'),
('Solrock', 'https://cdn.bulbagarden.net/upload/thumb/9/90/338Solrock.png/500px-338Solrock.png', 338, 'Rock', 'Psychic', 2327, 178, 153, 207, 15009, 1330, 1662, 1261, 1577, 3, 1, 'Bug, Dark, Ghost, Grass, Ground, Steel, Water', 'Fire, Flying, Normal, Poison, Psychic', 'Confusion, Psychic, Rock Throw, Rock', 'Solar Beam, Grass, Psychic, Psychic, Rock Slide, Rock'),
('Marowak (Alolan)', 'https://cdn.bulbagarden.net/upload/thumb/0/06/105Marowak-Alola.png/1200px-105Marowak-Alola.png', 105, 'Fire', 'Ghost', 1835, 144, 186, 155, 21385, 1048, 1311, 988, 1235, 4, 1, 'Dark, Ghost, Ground, Rock, Water', 'Bug 0.5x, Fighting 0.5x, Normal 0.5x, Fairy, Fire, Grass, Ice, Poison, Steel', 'Hex, Ghost, Rock Smash, Fighting', 'Shadow Ball, Ghost, Fire Blast, Fire, Bone Club, Ground'),
('Rhydon', 'https://cdn.bulbagarden.net/upload/4/47/112Rhydon.png', 112, 'Ground', 'Rock', 3179, 222, 171, 233, 30663, 1816, 2270, 1736, 2170, 4, 1, 'Fighting, Grass 2x, Ground, Ice, Steel, Water 2x', 'Electric 0.5x, Poison 0.5x, Fire, Flying, Normal, Rock', 'Mud Slap, Ground, Rock Smash, Fighting', 'Stone Edge, Rock, Surf, Water, Earthquake, Ground'),
('Tyranitar', 'https://cdn.bulbagarden.net/upload/thumb/8/82/248Tyranitar.png/500px-248Tyranitar.png', 248, 'Rock', 'Dark', 3834, 251, 207, 225, 37599, 2191, 2739, 2103, 2629, 4, 1, 'Bug, Fairy, Fighting 2x, Grass, Ground, Steel, Water', 'Psychic 0.5x, Dark, Fire, Flying, Ghost, Normal, Poison', 'Bite, Dark, Smack Down (ex), Rock, Iron Tail, Steel', 'Stone Edge, Rock, Fire Blast, Fire, Crunch, Dark'),
('Aggron', 'https://cdn.bulbagarden.net/upload/thumb/6/6d/306Aggron.png/500px-306Aggron.png', 306, 'Steel', 'Rock', 3000, 198, 257, 172, 33326, 1714, 2143, 1636, 2045, 4, 1, 'Fighting 2x, Ground 2x, Water', 'Poison 0.25x, Flying 0.5x, Normal 0.5x, Bug, Dragon, Fairy, Ice, Psychic, Rock', 'Dragon Tail, Dragon, Iron Tail, Steel', 'Stone Edge, Rock, Thunder, Electric, Heavy Slam, Steel'),
('Absol', 'https://cdn.bulbagarden.net/upload/thumb/0/00/359Absol.png/500px-359Absol.png', 359, 'Dark', NULL, 2526, 246, 120, 163, 28769, 1443, 1805, 1370, 1712, 4, 1, 'Bug, Fairy, Fighting', 'Psychic 0.5x, Dark, Ghost', 'Psycho Cut, Psychic, Snarl, Dark', 'Thunder, Electric, Megahorn, Bug, Dark Pulse, Dark');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `posted` date DEFAULT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `posted`, `dateStart`, `dateEnd`, `category`, `text`) VALUES
(1, 'Adventure Week 2019', '2019-06-03', '2019-06-04', '2019-06-11', 'In-Game Event', 'Adventure Week 2019 is here! Rock-type Pokemon will appear more frequently in the wild during the event. Hatch Rock-type Pokemon such as Onix, Larvitar, Lileep, Anorith, and Shieldon from 2 km Eggs. Challenge Onix and other Rock-types in raids, and if you\'re lucky, you may encounter a Shiny Onix, Lileep, or Anorith!\r\n\r\nBonuses: \r\n- Earn 4X Buddy Candy\r\n- New PokeStop swipes earn 10X XP\r\n- Adventure Sync rewards for walking 50km will earn 50,000 Stardust and 15 Rare Candies'),
(2, 'Slakoth Community Day (June 2019)', '2019-06-06', '2019-06-08', '2019-06-09', 'Community Day', 'Slakoth\'s community day has arrived! Evolve a Vigoroth during the event window and get a Slaking that knows Body Slam. Also you have the chance to find a shiny Slakoth during your travels!'),
(3, 'Pokemon Go Fest Chicago 2019', '2019-06-06', '2019-06-13', '2019-06-16', 'In-Life', 'Explore PokÃ©mon habitats within Chicago\'s iconic Grant Park with thousands of Trainers from around the world'),
(4, 'Website enters BETA!!', '2019-06-06', '0000-00-00', '0000-00-00', 'Site News', 'This info website has finally entered what I consider to be Beta. The interfacing could use a bit polishing, but it works and displays information accordingly. To date, every page has been completed except the Research page. That is a work in progress. For now, game events, raids, and eggs are all reported and accurate. I will continue to flesh out the design of the web app, and hope to expand this into an informative and reliable, yet concise, news source'),
(5, 'Jirachi Discovered in GameMaster', '2019-06-06', '0000-00-00', '0000-00-00', 'Game Update', 'That\'s right! Jirachi\'s code has been discovered in the Game Master APK. Could this mean the mythical Wishmaker Pokemon finally makes a debut during this year\'s GOFest? Only time will tell!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counterToBoss` (`counterBossDex`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
  ADD PRIMARY KEY (`dex_num`,`egg_dist`);

--
-- Indexes for table `raids`
--
ALTER TABLE `raids`
  ADD UNIQUE KEY `dex_num` (`dex_num`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counters`
--
ALTER TABLE `counters`
  ADD CONSTRAINT `counterToBoss` FOREIGN KEY (`counterBossDex`) REFERENCES `raids` (`dex_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
