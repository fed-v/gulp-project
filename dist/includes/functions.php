<?php
	
	
	
	/**********************************************************/
	/***  											     	***/			
	/***		FOR TINY WEBSITES WITH ONLY ONE             ***/
	/***		DATABASE CALL AT A TIME PER PAGE            ***/
	/***                                                    ***/
	/**********************************************************/
	
	//CONNECT TO DATABASE
	function connect()
	{

		//info needed to connect to database
		include ("connect.inc.php");
	
		//connection to the database
		$connect = mysql_connect($host, $user, $password, $database) or die ("Could not connect to database because: ". mysql_error());
	
		//select a database to work with
		$selected = mysql_select_db("db_member",$connect) or die("Could not select database because: ". mysql_error());

	}

	
	//MYSQL FUNCTION
	function connectToDataBase($query)
	{
	 
		connect();	
		
		$connect = mysql_query($query) or die(mysql_error());
		
		if(stristr($query , 'SELECT')) 
		{
		 
			$result = mysql_fetch_assoc($connect) or die(mysql_error());
		
			return $result;

		}

		mysql_free_result($connect);
		mysql_close();
		
	}

	
	
	
	
	
	
	/**********************************************************/
	/***  											     	***/			
	/***	   FOR OTHER WEBSITES USING ez_sql CLASS        ***/
	/***		   *REMEMBER TO INCLUDE THE CLASS           ***/
	/***                                                    ***/
	/**********************************************************/
	
	function ezSQL_connect()
	{
		$connection = new ezSQL_mysql('db_user','db_password','db_name','db_host');
		return $connection;
	}
	
	
	
	
	
	
	/**********************************************************/
	/***	       USEFULL FUNCTIONS AND STUFF              ***/
	/**********************************************************/
	
	// CREATE A CUSTOM GUID
	function getGUID(){
		if (function_exists('com_create_guid')){
			return com_create_guid();
		}else{
			mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
			$charid = strtoupper(md5(uniqid(rand(), true)));
			$hyphen = chr(45);// "-"
			$uuid = 
				substr($charid, 0, 8).$hyphen
				.substr($charid, 8, 4).$hyphen
				.substr($charid,12, 4).$hyphen
				.substr($charid,16, 4).$hyphen
				.substr($charid,20,12);
				
			return $uuid;
		}
	}
	

	// CREATE A FOLDER IN SERVER
	function makeDir($path)
	{
	   return is_dir($path) || mkdir($path);
	}

	
	
	// DELETE FILES FROM SERVER, THEN DELETE FOLDER
	function rrmdir($dir) {
   
	   foreach(glob($dir . '/*') as $file) {
			if(is_dir($file))
				rrmdir($file);
			else
				unlink($file);
		}
		
			rmdir($dir);
	}
	
	


