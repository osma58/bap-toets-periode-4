DROP TABLE IF EXISTS `phones`;
CREATE TABLE `phones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(128) DEFAULT NULL,
  `model` varchar(64) DEFAULT NULL,
  `color` varchar(32) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `phones` (`id`, `brand`, `model`, `color`, `description`, `image`, `price`) VALUES ('1', 'Samsung', 'Galaxy Note 9', 'Black', 'The best smartphone overall. If you can afford it, get the Note 9', '1.jpg', '646.60'),
('2', 'Huawei', 'P20 Pro', 'Nighthawk Black', 'Our runner up best smartphone is a top option for tighter budgets', '2.jpg', '10.00'),
('3', 'Honor', 'Play', 'Blue', 'A 6.3-inch smartphone for around the £200/$200-mark should ring alarm bells – it must be terribly slow to use, have awful cameras or at least be downright ugly, right? Wrong, actually, and the Honor Play is proof. Notionally intended for gamers, that massive Full HD+ display and HiSilicon Kirin 970 chipset mean that it comes close to matching some of the world\'s best smartphones in those areas. ', '3.jpg', '400.00'),
('4', 'Samsung', 'Galayx 9+', 'Dark Black', 'If photography\'s your thing and you like the look of Samsung\'s superb smartphones, look no further than the Samsung Galaxy S9 Plus. Just a cursory read of some of the specs on board this camera phone will give you an indication, starting with the 12MP cameras with adjustable f/1.5 aperture on the rear of the handset.', '4.jpg', '99.00'),
('5', 'Nokia', '6310', 'Steel Gray', 'Oldschool retro phone. You can call and also send SMS text messages and play snake!', '5.jpg', '5.00'),
('6', 'Profoon', 'Cam\'ron', 'Dark Black', 'Easy to use, big buttons, bright colors. For your everyday 65+ granddad or garndma. Great gift!', '6.jpg', '777.00'),
('7', 'Motorola ', 'DynaTAC 8000X ', 'Cream White', 'The first mobile phone ever. 4 kilograms pure state of the art technology. No one had this phone, so you couldn\'t call anyone. Fashion statement.', '7.jpg', '99995.50'),
('8', 'Motorola', 'MicroTAC ', 'Gray', 'Straight from the late eighties, back to the future. Small, lightweight and with real buttons to press. Nice!', '8.jpg', '1221.00'),
('9', 'Ericsson', 'GF 768', 'Yellow / Black', 'First phone with a flipping and flopping front part. Very small screen, so you don\'t get distracted when you are making a phone call', '9.jpg', '499.00');
