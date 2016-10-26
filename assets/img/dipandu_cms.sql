-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 07:52 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dipandu_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(150) NOT NULL,
  `views` int(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `post_date` date NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `slug`, `category`, `views`, `user`, `post_date`, `last_update`) VALUES
(1, 'Test News 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec suscipit tellus. Etiam non arcu in arcu sodales sagittis. Sed ipsum libero, accumsan non massa non, placerat congue dolor. Duis diam neque, cursus id purus sed, bibendum luctus neque. Donec libero purus, malesuada ut metus at, commodo ultrices libero. Donec viverra bibendum justo id interdum. Praesent a facilisis sapien. In in mi orci. Duis metus felis, scelerisque quis blandit sed, posuere ac est. Ut massa sem, suscipit a dapibus in, sodales nec nisl. Nullam in odio tristique, semper metus non, egestas nisi. Etiam pulvinar orci vehicula, ornare magna viverra, vulputate elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Sed faucibus sollicitudin mi, consectetur semper odio interdum nec. Cras arcu arcu, interdum vitae tempus a, mollis sit amet massa. Integer eu scelerisque leo. Proin fermentum nisi nec dolor pharetra, eget fermentum massa scelerisque. Donec lobortis orci in dui mollis, non volutpat orci sagittis. Aliquam blandit elementum suscipit. Quisque eleifend rutrum dolor, vitae accumsan nisi. Quisque placerat turpis nec bibendum dapibus. Nullam mollis euismod tortor. Etiam id neque vel libero feugiat euismod eget id elit. Curabitur mauris diam, posuere sollicitudin egestas id, consectetur vel tellus. Nulla facilisi. Quisque rhoncus id diam et fermentum. Cras efficitur mattis ultrices. Duis auctor quam ac leo imperdiet hendrerit et sed nisl.</p>\r\n\r\n<p>Ut tristique elementum turpis non ornare. Vestibulum ultricies tellus eu eros hendrerit, id aliquam turpis gravida. Cras id iaculis libero. Aenean molestie dictum ex, vel egestas mauris luctus eget. Suspendisse eu libero volutpat, viverra odio quis, aliquet purus. Fusce at dapibus nunc. Praesent pretium arcu molestie placerat vulputate. Vivamus porta, leo faucibus tristique tincidunt, lorem leo eleifend diam, blandit lacinia leo sapien id nibh. Suspendisse feugiat, purus et tristique sollicitudin, urna ligula pellentesque diam, nec placerat libero odio quis felis.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'learning-dummy.png', 'Test-News-1', 'Test', 10, '0001', '2016-10-14', '2016-10-14 11:15:50'),
(2, 'Test News 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec suscipit tellus. Etiam non arcu in arcu sodales sagittis. Sed ipsum libero, accumsan non massa non, placerat congue dolor. Duis diam neque, cursus id purus sed, bibendum luctus neque. Donec libero purus, malesuada ut metus at, commodo ultrices libero. Donec viverra bibendum justo id interdum. Praesent a facilisis sapien. In in mi orci. Duis metus felis, scelerisque quis blandit sed, posuere ac est. Ut massa sem, suscipit a dapibus in, sodales nec nisl. Nullam in odio tristique, semper metus non, egestas nisi. Etiam pulvinar orci vehicula, ornare magna viverra, vulputate elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Sed faucibus sollicitudin mi, consectetur semper odio interdum nec. Cras arcu arcu, interdum vitae tempus a, mollis sit amet massa. Integer eu scelerisque leo. Proin fermentum nisi nec dolor pharetra, eget fermentum massa scelerisque. Donec lobortis orci in dui mollis, non volutpat orci sagittis. Aliquam blandit elementum suscipit. Quisque eleifend rutrum dolor, vitae accumsan nisi. Quisque placerat turpis nec bibendum dapibus. Nullam mollis euismod tortor. Etiam id neque vel libero feugiat euismod eget id elit. Curabitur mauris diam, posuere sollicitudin egestas id, consectetur vel tellus. Nulla facilisi. Quisque rhoncus id diam et fermentum. Cras efficitur mattis ultrices. Duis auctor quam ac leo imperdiet hendrerit et sed nisl.</p>\r\n\r\n<p>Ut tristique elementum turpis non ornare. Vestibulum ultricies tellus eu eros hendrerit, id aliquam turpis gravida. Cras id iaculis libero. Aenean molestie dictum ex, vel egestas mauris luctus eget. Suspendisse eu libero volutpat, viverra odio quis, aliquet purus. Fusce at dapibus nunc. Praesent pretium arcu molestie placerat vulputate. Vivamus porta, leo faucibus tristique tincidunt, lorem leo eleifend diam, blandit lacinia leo sapien id nibh. Suspendisse feugiat, purus et tristique sollicitudin, urna ligula pellentesque diam, nec placerat libero odio quis felis.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'learning-dummy1.jpg', 'Test-News-2', 'Test', 13, '0001', '2016-10-13', '2016-10-15 05:15:44'),
(3, 'Test News 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec suscipit tellus. Etiam non arcu in arcu sodales sagittis. Sed ipsum libero, accumsan non massa non, placerat congue dolor. Duis diam neque, cursus id purus sed, bibendum luctus neque. Donec libero purus, malesuada ut metus at, commodo ultrices libero. Donec viverra bibendum justo id interdum. Praesent a facilisis sapien. In in mi orci. Duis metus felis, scelerisque quis blandit sed, posuere ac est. Ut massa sem, suscipit a dapibus in, sodales nec nisl. Nullam in odio tristique, semper metus non, egestas nisi. Etiam pulvinar orci vehicula, ornare magna viverra, vulputate elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Sed faucibus sollicitudin mi, consectetur semper odio interdum nec. Cras arcu arcu, interdum vitae tempus a, mollis sit amet massa. Integer eu scelerisque leo. Proin fermentum nisi nec dolor pharetra, eget fermentum massa scelerisque. Donec lobortis orci in dui mollis, non volutpat orci sagittis. Aliquam blandit elementum suscipit. Quisque eleifend rutrum dolor, vitae accumsan nisi. Quisque placerat turpis nec bibendum dapibus. Nullam mollis euismod tortor. Etiam id neque vel libero feugiat euismod eget id elit. Curabitur mauris diam, posuere sollicitudin egestas id, consectetur vel tellus. Nulla facilisi. Quisque rhoncus id diam et fermentum. Cras efficitur mattis ultrices. Duis auctor quam ac leo imperdiet hendrerit et sed nisl.</p>\r\n\r\n<p>Ut tristique elementum turpis non ornare. Vestibulum ultricies tellus eu eros hendrerit, id aliquam turpis gravida. Cras id iaculis libero. Aenean molestie dictum ex, vel egestas mauris luctus eget. Suspendisse eu libero volutpat, viverra odio quis, aliquet purus. Fusce at dapibus nunc. Praesent pretium arcu molestie placerat vulputate. Vivamus porta, leo faucibus tristique tincidunt, lorem leo eleifend diam, blandit lacinia leo sapien id nibh. Suspendisse feugiat, purus et tristique sollicitudin, urna ligula pellentesque diam, nec placerat libero odio quis felis.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'learning-dummy2.png', 'Test-News-3', 'Test', 21, '0001', '2016-10-12', '2016-10-15 05:15:49'),
(4, 'Test News 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec suscipit tellus. Etiam non arcu in arcu sodales sagittis. Sed ipsum libero, accumsan non massa non, placerat congue dolor. Duis diam neque, cursus id purus sed, bibendum luctus neque. Donec libero purus, malesuada ut metus at, commodo ultrices libero. Donec viverra bibendum justo id interdum. Praesent a facilisis sapien. In in mi orci. Duis metus felis, scelerisque quis blandit sed, posuere ac est. Ut massa sem, suscipit a dapibus in, sodales nec nisl. Nullam in odio tristique, semper metus non, egestas nisi. Etiam pulvinar orci vehicula, ornare magna viverra, vulputate elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Sed faucibus sollicitudin mi, consectetur semper odio interdum nec. Cras arcu arcu, interdum vitae tempus a, mollis sit amet massa. Integer eu scelerisque leo. Proin fermentum nisi nec dolor pharetra, eget fermentum massa scelerisque. Donec lobortis orci in dui mollis, non volutpat orci sagittis. Aliquam blandit elementum suscipit. Quisque eleifend rutrum dolor, vitae accumsan nisi. Quisque placerat turpis nec bibendum dapibus. Nullam mollis euismod tortor. Etiam id neque vel libero feugiat euismod eget id elit. Curabitur mauris diam, posuere sollicitudin egestas id, consectetur vel tellus. Nulla facilisi. Quisque rhoncus id diam et fermentum. Cras efficitur mattis ultrices. Duis auctor quam ac leo imperdiet hendrerit et sed nisl.</p>\r\n\r\n<p>Ut tristique elementum turpis non ornare. Vestibulum ultricies tellus eu eros hendrerit, id aliquam turpis gravida. Cras id iaculis libero. Aenean molestie dictum ex, vel egestas mauris luctus eget. Suspendisse eu libero volutpat, viverra odio quis, aliquet purus. Fusce at dapibus nunc. Praesent pretium arcu molestie placerat vulputate. Vivamus porta, leo faucibus tristique tincidunt, lorem leo eleifend diam, blandit lacinia leo sapien id nibh. Suspendisse feugiat, purus et tristique sollicitudin, urna ligula pellentesque diam, nec placerat libero odio quis felis.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'learning-dummy1.jpg', 'Test-News-5', 'Test', 12, '0001', '2016-10-17', '2016-10-15 05:15:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
