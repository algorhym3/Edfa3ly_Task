<?php 

class Client()
{
    private $wayBill
    private $orderID

    public function __construct(CourierInterface $courierInterface) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $courierInterface->createShipmentAndGetWayBill()
    }

    public function getTrackingDetails()
    {
        $wayBill = $courierInterface->getTrackingDetails($orderID)
    }
}


?>