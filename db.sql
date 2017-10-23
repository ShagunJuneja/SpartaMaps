CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ojasprof` (
  `id` int(50) NOT NULL,
  `deslon` double DEFAULT NULL,
  `deslat` double DEFAULT NULL,
  `starlon` double DEFAULT NULL,
  `starlat` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ojasprof`
--

INSERT INTO `ojasprof` (`id`, `deslon`, `deslat`, `starlon`, `starlat`) VALUES
(1, -121.883805, 37.3329, -121.877506, 37.335937),
(2, -121.883627, 37.336965, -121.881563, 37.335682),
(3, -121.886, 37.335833, -121.876498, 37.334588),
(4, -121.879714, 37.338906, -121.886061, 37.33919);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ojasprof`
--
ALTER TABLE `ojasprof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
CREATE TABLE IF NOT EXISTS `gallery` (
  `G_id` int(11) NOT NULL PRIMARY KEY,
  `id` int(50),
    `image` blob,
   FOREIGN KEY (id) REFERENCES user(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
