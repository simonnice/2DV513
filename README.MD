
HOW TO CREATE THE DATABASE
--------------------------

Make a config.php file that looks like this and that matches your credentials:

~~~~
<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'wiolethstaffan1');
define('DB_NAME', 'moviesdb');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/movieDB');
// Site Name
define('SITENAME', 'MovieDB');
// App Version
define('APPVERSION', '1.0.0');
~~~~

actor	CREATE TABLE `actor` (
  `act_id` int(11) NOT NULL,
  `act_gender` varchar(10) NOT NULL,
  `act_fn` varchar(50) NOT NULL,
  `act_ln` varchar(50) NOT NULL,
  `act_birth` int(12) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
