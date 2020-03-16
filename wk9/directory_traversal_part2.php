<?php
// shouldn't be able to view files before html directory
// shouldn't attempt to look at folders that don't exists
// optionally, do not allow user to pass a filename

ini_set('display_errors',1);

ini_set('display_startup_errors',1);

error_reporting(E_ALL);

$path=isset($_GET['q'])?$_GET['q']:'.';
$hidden = basename($path, ".php")

print "<pre>";
//print_r(scandir($path));
print_r(scandir($hidden));
print "</pre>";

?>

