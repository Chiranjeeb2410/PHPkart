CREATE TABLE `products` (
`id` int(11) NOT NULL,
`p_name` varchar(255) NOT NULL,
`image` varchar(255) NOT NULL,
`price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`id`, `p_name`, `image`, `price`) VALUES
(1, 'Apple iPhone 6s', 'apple_6s.png', 649.00),
(2, 'Apple Watch', 'apple_watch.jpg', 640.00),
(3, 'iPad', 'ipad.jpg', 599.00),
(4, 'Macbook Pro', 'macbook_pro.jpg', 1299.00);


ALTER TABLE `products`
ADD PRIMARY KEY (`id`);