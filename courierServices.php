<?php 

/*
This file contains a service class created to handle the specific methods within the interface of each company's
API , iam assuming here that each if the $interfaceX , $interfaceY , $interfaceZ and $interfaceL classes 
contain the details of how to send requests to the requested API for example a function with might have a post request
to a certain URL as per a Restful API Design 
*/


# this is a service class containing related functions to perform the main methods for companyX
class companyX_courierService()
{
    private $wayBill
    private $orderID
    private $trackingDetails

    # $interfaceX is the class containing the API calls 
    public function __construct(Interface $interfaceX) {}
    
    # contains related methods to create a shipment
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $interfaceX->createShipmentAndGetWayBill()
        $orderID = $interfaceX->orderID
        return $wayBill
    }
    # contains related methods to track a shipment 
    public function getTrackingDetails()
    {
        $trackingDetails = $interfaceX->getTrackingDetails($orderID)
        return $trackingDetails
    }

    #returns private orderID
    public function getOrderID()
    {
        return $orderID
    }
}

# Contains related methods to companyY , each of the following classes contains identical member method titles
#changes between them occur in how each company's interface react to the main method or request.
class companyY_courierService()
{
    private $wayBill
    private $orderID
    private $trackingDetails

    public function __construct(Interface $interfaceY) {}
    
    public function createShipmentAndGetWayBill()
    {
        $interfaceY->createShipmentInfo()
        $interfaceY->createShipmentInstructions()
        $wayBill = $interfaceY->getShipmentWayBill()
        $orderID = $interfaceY->orderID
        return $wayBill
    }

    public function getTrackingDetails()
    {
        $trackingDetails = $interfaceY->getTrackingDetails($orderID)
        return $trackingDetails
    }

    public function getOrderID()
    {
        return $orderID
    }
}


class companyY_courierService()
{
    private $wayBill
    private $orderID
    private $trackingDetails

    public function __construct(Interface $interfaceZ) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $interfaceZ->createShipmentAndGetWayBill()
        $orderID = $interfaceZ->orderID
    }

    public function getTrackingDetails()
    {
        $interfaceZ->registerNumberToGetTrackingDetails($orderID)
        $trackingDetails = $interfaceZ->getTrackingDetails($orderID)
        return $trackingDetails
    }

    public function getOrderID()
    {
        return $orderID
    }
}

class courierServiceL()
{
    private $wayBill
    private $orderID
    private $trackingDetails

    public function __construct(Interface $interfaceX) {}
    
        public function createShipmentAndGetWayBill()
        {
            $interfaceL->createShipmentInfo()
            $interfaceL->createShipmentInstructions()
            $wayBill = $interfaceL->getShipmentWayBill()
            $orderID = $interfaceL->orderID
            return $wayBill
        }
    public function getTrackingDetails()
    {
        $interfaceL->registerNumberToGetTrackingDetails($orderID)
        $trackingDetails = $interfaceL->getTrackingDetails($orderID)
        return $trackingDetails
    }


    public function getOrderID()
    {
        return $orderID
    }
}



?>