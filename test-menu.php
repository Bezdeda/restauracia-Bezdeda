<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'classes/MenuItem.php';

$menuItem = new MenuItem();
$items = $menuItem->getAll();

echo '<pre>';
print_r($items);
echo '</pre>';