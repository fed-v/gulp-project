<?php
	
	//	ALWAYS BRING YOUR FUNCTIONS
	require_once('includes/functions.php');
	
	
	/******************************************************/
	/***	       USING MY SIMPLE FUNCTION             ***/
	/******************************************************/
	
	$myResult = connectToDataBase('SELECT * FROM users ORDER BY id DESC');
	
	print_r($myResult);
	
	
	/******************************************************/
	/***	       USING THE  ez_sql CLASS              ***/
	/******************************************************/
	
	// Get the Class
	require_once "includes/ez_sql_core.php";
	require_once "includes/ez_sql_mysql.php";
	
	
	// Establish connection and save it in a variable
	$db = ezSQL_connect();
	
	
	
	
	
    // In order to insert, delete or most generally, run any kind of query to the database, 
	// we have to use the query method. In case of a data insertion, the method will return 
	// the insert id.	
	
	$db->query("INSERT INTO users (id, name, email) VALUES (NULL,'The Cat','cat@google.com')");
	
	$db->query("UPDATE users SET name = 'Patrick' WHERE id = 4");
	
	
	
	
	
	// The get_row method is great if you just need to select a row from your database. 
	// The example below executes a simple select query and displays the results.
	
	$user = $db->get_row("SELECT name, email FROM users WHERE id = 4");

	echo $user->name;
	echo $user->email;
	
	
	
	
	// If you only need a variable, the get_var method is here to help. 
	// Using it is extremely simple as shown below.
	
	$var = $db->get_var("SELECT count(*) FROM users");

	echo $var;
	
	
	
	
	// Although the methods documented above are quite useful, most of the time 
	// you’ll need to get various rows of data from your database. 
	// The method called get_results will get various data from your database. 
	// To output the data, a simple foreach() loop is all you need.

	$results = $db->get_results("SELECT name, email FROM users");

	foreach ( $results as $user ) {
		echo $user->name;
		echo $user->email;
	}
	
	
	
	
	
	// If you need to get a column, you can use the get_col method. 
	// The second parameter is the column offset.
	
	foreach ( $db->get_col("SELECT name,email FROM users",0) as $name ) 
	{   
		echo $name;
	}
	

	
	
	
	// When something doesn’t work as expected, ezSQL has a great method to perform some debugging. 
	// Not surprising, the method is called debug. When called, the method will display 
	// the last query performed and its associated results.

	$db->debug();
	
	
	
	
	
	