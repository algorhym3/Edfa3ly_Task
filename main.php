<?php 
/*
This file contains a demonstration of how the objects in the previous files are used in 
a manner that follows the SOLID desing priciples as closely as i could based on my understanding 
*/


include 'Client.php';
include 'coureirInterface.php';
include 'courierServices.php';

// example 1 : Client class which uses companyL's interface  assuming interfaceL is available 

# creating service from company L 
$companyLService = new courierService($interfaceL)

# creating middleware interface and injecting service to the Middleware Interface for the client
$MiddlewareInterface = new courierInterface($companyLService)

# Creating the main client Object and injecting the middleware 
$Client1 = new Client($MiddlewareInterface)

# creating a new shipment example
$client1->createShipmentAndGetWayBill()




// example 2 : Client class which uses companyZ's interface  assuming interfaceL is available 

# creating service from company L 
$companyZService = new courierService($interfaceZ)

# creating middleware interface and injecting service to the Middleware Interface for the client
$MiddlewareInterface = new courierInterface($companyZService)

# Creating the main client Object and injecting the middleware 
$Client2 = new Client($MiddlewareInterface)

# creating a new shipment example
$client2->createShipmentAndGetWayBill()

# tracking a shipment
$client2->getTrackingDetails()

?>