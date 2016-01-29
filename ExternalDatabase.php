
<div>External Database</div>

<?php

$option = array();
$option['driver']='mysql';
$option['host']='localhost';
$option['user']='dbUsername';
$option['password']='dbPass_word';
$option['database']='Database_Name';
$option['prefix']='prefix_Name';
$db = JDatabaseDriver::getInstance($option);
$query = $db->getQuery(true);
$query->select($db->quoteName('Column_Name'));
$query->from($db->quoteName('Table_Name'));
$db->setQuery($query);
$result = $db->loadRow();
print_r($result);

?>
