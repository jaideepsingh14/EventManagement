<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$id = $_POST['id'];
$locationName = $_POST['Name'];
$locationAddress = $_POST['Address'];
$managerFName = $_POST['ManagerFName'];
$managerLName = $_POST['ManagerLName'];
$managerEmail = $_POST['ManagerEmail'];
$about = $_POST['About'];
$locationMaxCap = $_POST['MaxCapacity'];

$location = new Location($id, $locationName, $locationAddress, $managerFName, $managerLName,  $managerEmail, $about, $locationMaxCap);

$connection = Connection::getInstance();

$gateway = new LocationTableGateway($connection);

$id = $gateway->update($location);

header('Location: viewLocations.php');
