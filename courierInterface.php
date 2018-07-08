<?php

class courierInterface 
{
    private $wayBill
    private $orderID

    public function __construct(courierService $courierService) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $courierService->createShipmentAndGetWayBill()
    }

    public function getOrderID()
    {
        $orderID = $courierService->getOrderID()
    }

    public function getTrackingDetails()
    {
        $wayBill = $courierService->getTrackingDetails($orderID)
    }
}

?>