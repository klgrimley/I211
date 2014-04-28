-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2014 at 12:53 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musictime`
--
CREATE DATABASE IF NOT EXISTS `musictime` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musictime`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(25) NOT NULL,
  `artist` varchar(25) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_title`, `artist`, `release_date`, `genre`, `image`, `description`) VALUES
(1, 'American Beauty', 'Grateful Dead', '1970-11-01', 'Psychedelia', 'american_beauty.jpg', 'The Grateful Dead was an American psychedelia-influenced rock band. Formed in 1965 in San Francisco from the remnants of another band, "Mother McCree''s Uptown Jug Champions," the Grateful Dead were known for their unique and eclectic songwriting style - which fused elements of rock, folk music, bluegrass, blues, country, and jazz - and for live performances of long modal jams.'),
(2, 'Workingman''s Dead', 'Grateful Dead', '1970-06-14', 'Psychedelia', 'workingmans_dead.jpg', 'The Grateful Dead was an American psychedelia-influenced rock band. Formed in 1965 in San Francisco from the remnants of another band, "Mother McCree''s Uptown Jug Champions," the Grateful Dead were known for their unique and eclectic songwriting style - which fused elements of rock, folk music, bluegrass, blues, country, and jazz - and for live performances of long modal jams.'),
(3, 'Flood', 'They Might Be Giants', '1990-01-05', 'Alternative Rock', 'flood.jpg', 'They Might Be Giants is an original band from Brooklyn, New York founded by John Flansburgh and John Linnell. TMBG writes, records and tours continuously, has been involved in numerous television and film projects. They have an on-going audio and sometimes video podcast that is free. They have won two Grammys. The Johns are frequently joined by Dan Miller on guitar, Danny Weinkauf on bass, and Marty Beller on drums.'),
(4, 'The Else', 'They Might Be Giants', '2007-05-15', 'Alternative Rock', 'the_else.jpg', 'They Might Be Giants is an original band from Brooklyn, New York founded by John Flansburgh and John Linnell. TMBG writes, records and tours continuously, has been involved in numerous television and film projects. They have an on-going audio and sometimes video podcast that is free. They have won two Grammys. The Johns are frequently joined by Dan Miller on guitar, Danny Weinkauf on bass, and Marty Beller on drums.'),
(5, 'Rage Aganist The Machine', 'Rage Aganist The Machine', '1992-11-03', 'Hard Rock', 'rage.jpg', 'Rage Against the Machine is an American rap metal band from Los Angeles, California. Formed in 1991, the group consists of vocalist Zack de la Rocha, bassist and backing vocalist Tim Commerford, guitarist Tom Morello and drummer Brad Wilk. They draw inspiration from early heavy metal instrumentation, as well as rap acts such as Afrika Bambaataa, Public Enemy, the Beastie Boys and Dutch crossover band Urban Dance Squad. Rage Against the Machine is best known for its leftist political views, which are expressed in many of its songs. As of 2010, they have sold over 16 million records worldwide.');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `song_id` int(10) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(50) NOT NULL,
  `album` varchar(25) NOT NULL,
  `audio` varchar(50) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `album`, `audio`) VALUES
(1, 'Box of Rain', '1', 'grateful_dead/american_beauty/01.box_of_rain.mp3'),
(2, 'Friend Of The Devil', '1', 'grateful_dead/american_beauty/02.friend_of_the_dev'),
(3, 'Sugar Magnolia', '1', 'grateful_dead/american_beauty/03.sugar_magmolis.mp'),
(4, 'Operator', '1', 'grateful_dead/american_beauty/04.operator.mp3'),
(5, 'Candyman', '1', 'grateful_dead/american_beauty/05.candyman.mp3'),
(6, 'Ripple', '1', 'grateful_dead/american_beauty/06.ripple.mp3'),
(7, 'Brokedown Palace', '1', 'grateful_dead/american_beauty/07.brokedown_palace.'),
(8, 'Till The Morning Comes', '1', 'grateful_dead/american_beauty/08.till_the_morning_'),
(9, 'Attics Of My Life', '1', 'grateful_dead/american_beauty/09.attics_of_my_life'),
(10, 'Truckin', '1', 'grateful_dead/american_beauty/10.truckin.mp3'),
(11, 'Uncle John''s Band', '2', 'grateful_dead/workingmans_dead/01.uncle_johns_band'),
(12, 'High Time', '2', 'grateful_dead/workingmans_dead/02.high_time.mp3'),
(13, 'Dire Wolf', '2', 'grateful_dead/workingmans_dead/03.dire_wolf.mp3'),
(14, 'New Speedway Boogie', '2', 'grateful_dead/workingmans_dead/04.new_speedway_boo'),
(15, 'Cumberland Blues', '2', 'grateful_dead/workingmans_dead/05.cumberland_blues'),
(16, 'Black Peter', '2', 'grateful_dead/workingmans_dead/06.black_peter.mp3'),
(17, 'Easy Wind', '2', 'grateful_dead/workingmans_dead/07.easy_wind.mp3'),
(18, 'Casey Jones', '2', 'grateful_dead/workingmans_dead/08.casey_jones.mp3'),
(19, 'Theme From Flood', '3', 'they_might_be_giants/flood/01.theme_from_flood.mp3'),
(20, 'Birdhouse In Your Soul', '3', 'they_might_be_giants/flood/02.birdhouse_in_your_so'),
(21, 'Lucky Ball And Chain', '3', 'they_might_be_giants/flood/03.lucky_ball_and_chain'),
(23, 'Istanbul Not Constantinople', '3', 'they_might_be_giants/flood/04.instanbul_not_consta'),
(24, 'Dead', '3', 'they_might_be_giants/flood/03.dead.mp3'),
(25, 'Your Racist Friend', '3', 'they_might_be_giants/flood/06.your_racist_friend.m'),
(26, 'Particle Man', '3', 'they_might_be_giants/flood/07.particle_man.mp3'),
(27, 'Twisting', '3', 'they_might_be_giants/flood/08.twisting.mp3'),
(28, 'We Want A Rock', '3', 'they_might_be_giants/flood/09.we_want_a_rock.mp3'),
(29, 'Someone Keeps Moving My Chair', '3', 'they_might_be_giants/flood/10.someone_keeps_moving'),
(30, 'Hearing Aid', '3', 'they_might_be_giants/flood/11.hearing_aid.mp3'),
(31, 'Minimum Wage', '3', 'they_might_be_giants/flood/12.minimum_wage.mp3'),
(32, 'Letterbox', '3', 'they_might_be_giants/flood/13.letterbox.mp3'),
(33, 'Whistling In The Dark', '3', 'they_might_be_giants/flood/14.whistling_in_the_dar'),
(34, 'Hot Cha', '3', 'they_might_be_giants/flood/15.hot_cha.mp3'),
(35, 'Women And Men', '3', 'they_might_be_giants/flood/16.women_and_men.mp3'),
(36, 'Sapphire Bullets Of Pure Love', '3', 'they_might_be_giants/flood/17.sapphire_bullets_of_'),
(37, 'They Might Be Giants', '3', 'they_might_be_giants/flood/18.they_might_be_giants'),
(38, 'Roag Movie To Berlin', '3', 'they_might_be_giants/flood/19.road_movie_to_berlin'),
(39, 'I''m Impressed', '4', 'they_might_be_giants/the_else/01.im_impressed.mp3'),
(40, 'Take Out The Trash', '4', 'they_might_be_giants/the_else/02.take_out_the_tras'),
(41, 'Upside Down Frown', '4', 'they_might_be_giants/the_else/03.upside_down_frown'),
(42, 'Climbing The Walls', '4', 'they_might_be_giants/the_else/04.climbing_the_wall'),
(43, 'Careful What You Pack', '4', 'they_might_be_giants/the_else/05.careful_what_you_'),
(44, 'The Cap''m', '4', 'they_might_be_giants/the_else/06.the_capm.mp3'),
(45, 'With The Dark', '4', 'they_might_be_giants/the_else/07.with_the_dark.mp3'),
(46, 'The Shadow Government', '4', 'they_might_be_giants/the_else/08.the_shadow_govern'),
(47, 'Bee The Bird Of The Moth', '4', 'they_might_be_giants/the_else/09.bee_the_bird_of_t'),
(48, 'Withered Hope', '4', 'they_might_be_giants/the_else/10.withered_hope.mp3'),
(49, 'Contrecoup', '4', 'they_might_be_giants/the_else/11.contrecoup.mp3'),
(50, 'Feign Amnesia', '4', 'they_might_be_giants/the_else/12.feign_amnesia.mp3'),
(51, 'The Mesopetamians', '4', 'they_might_be_giants/the_else/13.the_mesopetamians'),
(52, 'Bombtrack', '5', 'rage_aganist_the_machine/01.bombtrack.mp3'),
(53, 'Killing In The Name Of', '5', 'rage_aganist_the_machine/02.killing_in_the_name_of'),
(54, 'Take The Power Back', '5', 'rage_aganist_the_machine/03.take_the_power_back.mp'),
(55, 'Settle For Nothing', '5', 'rage_aganist_the_machine/04.settle_for_nothing.mp3'),
(56, 'Bullet In The Head', '5', 'rage_aganist_the_machine/05.bullet_in_the_head.mp3'),
(57, 'Know Your Enemy', '5', 'rage_aganist_the_machine/06.know_your_enemy.mp3'),
(58, 'Wake Up', '5', 'rage_aganist_the_machine/07.wake_up.mp3'),
(59, 'Fistful Of Steal', '5', 'rage_aganist_the_machine/08.fistful_of_steal.mp3'),
(60, 'Township Rebellion', '5', 'rage_aganist_the_machine/09.township_rebellion.mp3'),
(61, 'Freedom', '5', 'rage_aganist_the_machine/10.freedom.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'klgrimley', 'Kevin', 'Grimley', 'klgrimley@hotmail.com', '12345678', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
