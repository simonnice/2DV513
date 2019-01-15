
HOW TO CREATE THE DATABASE
--------------------------

Make a config.php file that looks like this and that matches your credentials:
<br>

~~~~
<?php
// DB Params
define('DB_HOST', 'YOUR_DB_HOST');
define('DB_USER', 'YOUR_DB_USER');
define('DB_PASS', 'YOUR_DB_PASS');
define('DB_NAME', 'YOUR_DB_NAME');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'YOUR_URL_ROOT');
// Site Name
define('SITENAME', 'YOUR_SITE_NAME');
// App Version
define('APPVERSION', '1.0.0');
~~~~

Create these tables in the database:
<br>
ACTOR TABLE
~~~~
actor	CREATE TABLE `actor` (
  `act_id` int(11) NOT NULL,
  `act_gender` varchar(10) NOT NULL,
  `act_fn` varchar(50) NOT NULL,
  `act_ln` varchar(50) NOT NULL,
  `act_birth` int(12) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
~~~~
<br>
MOVIE TABLE 

~~~~
CREATE TABLE `movie` (
  `mov_id` int(11) NOT NULL,
  `mov_title` varchar(50) NOT NULL,
  `mov_length` int(11) NOT NULL,
  `mov_year` int(11) NOT NULL,
  `mov_lang` varchar(50) NOT NULL,
  PRIMARY KEY (`mov_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
~~~~

GENRE TABLE

~~~~
CREATE TABLE `genre` (
  `gen_id` int(11) NOT NULL,
  `gen_title` varchar(50) NOT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
~~~~

MOVIE_CAST TABLE

~~~~
CREATE TABLE `movie_cast` (
  `act_id` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
AULT CHARSET=latin1	
~~~~

MOVIE_GENRES TABLE

~~~~
CREATE TABLE `movie_genres` (
  `mov_id` int(11) NOT NULL,
  `gen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1	
~~~~

