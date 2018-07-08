<?php 

include 'coureirInterface.php';


# User's Class containing two main methods as per the task's request 
class Client()
{
    private $wayBill
    # $orderID is a variable i assumed would be needed to complete the creation and tracking process
    private $orderID
    private $trackingDetails

    # dependency injection of the middleware between the service created and the user's class
    public function __construct(CourierInterface $courierInterface) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $courierInterface->createShipmentAndGetWayBill()
        return $wayBill
    }

    public function getTrackingDetails()
    {
        $trackingDetails = $courierInterface->getTrackingDetails($orderID)
        return $trackingDetails
    }
}


?>