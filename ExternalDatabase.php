
<div>External Database</div>

<?php

$option = array();
$option['driver']='mysql';           //mysql database connection
$option['host']='localhost';            // specify your host
$option['user']='dbUsername';          //databse connection parameters; database username
$option['password']='dbPass_word';     //password of the database user
$option['database']='Database_Name';   //databse that you want to connect
$option['prefix']='prefix_Name';       // prefix name if exists
$db = JDatabaseDriver::getInstance($option);     //database driver instance connection
$query = $db->getQuery(true);                 //query object
$query->select($db->quoteName('Column_Name'));         //colunmn name that you want to retirieve
$query->from($db->quoteName('Table_Name'));           //table name that which you want to retrieve the column details; above specified column table
$db->setQuery($query);   //set the query
$result = $db->loadRow();   //load the results in row set of arrays
print_r($result);  //print the result set

?>
