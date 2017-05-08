<?php
	        define("DB_SERVER", "sql9.freemysqlhosting.net");
	        define("DB_USER", "sql9173381");
	        define("DB_PASS", "R99eCtjt8h");
	        define("DB_NAME", "sql9173381");
	
	  // 1. Create a database connection
	  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	  // Test if connection succeeded
	  if(mysqli_connect_errno()) {
	    die("Database connection failed: " . 
	         mysqli_connect_error() . 
	         " (" . mysqli_connect_errno() . ")"
	    );
	  } 
	  
	 
	
	?>