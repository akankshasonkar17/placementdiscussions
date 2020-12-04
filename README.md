# plzed
placement discussion web app

Packet manager used : NPM

Link : https://akankshasonkar17.github.io/plzed/

To use the SQL dump. 

	1. Go to your localhost/phpmyadmin 
	2. Go to Import
	3. Select the file dump.sql
	4. Click Go

Make a file called "dbAction.php" and type this into it:

	<?php

	    $servername ="[your host location]"; //windows: localhost
	    $dbUser="root";  //windows:root
	    $dbPassword="root";  //windows:don't put anything between quotes
	    $db="plzdb";


	    $conn = mysqli_connect($servername ,$dbUser, $dbPassword, $db);
	    if(!$conn){
		die("Connection failed ".mysqli_connect_error());
	    }
	    //mysql_select_db($db);
	?>
