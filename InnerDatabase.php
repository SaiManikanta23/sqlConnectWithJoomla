<div><h1>Calling the database that we are using presently </h1></div>
<?php

$db = JFactory::getDbo();   //get a database connection

//Query Object
$query = $db->getQuery(true);

//Make column selection; replace column_name with required column & dbName with database
$query->select($db->quoteName('Column_Name'));
$query->from($db->quoteName('dbName'));

//Result set and printing results
$db->setQuery($query);
$result = $db->loadRow();
print_r($result);

?>
