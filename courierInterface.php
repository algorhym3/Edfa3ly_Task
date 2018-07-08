<?php


#  a middleware class between the service and the user's class
class courierInterface 
{
    private $wayBill
    private $orderID
    private $trackingDetails
    
    # object command is used to recieve any object type , its available starting from 7.2 
    public function __construct(object $courierService) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $courierService->createShipmentAndGetWayBill()
        return $wayBill
    }

    public function getTrackingDetails()
    {
        $trackingDetails = $courierService->getTrackingDetails($orderID)
        return $trackingDetails
    }
    # method to obtain the order id from the courier service class
    public function getOrderID()
    {
        $orderID = $courierService->getOrderID()
    }

  
}

?>