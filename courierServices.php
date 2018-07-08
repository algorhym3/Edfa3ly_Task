<?php 

class companyX_courierService()
{
    private $wayBill
    private $orderID
    private $trackingDetails

    public function __construct(Interface $interfaceX) {}
    
    public function createShipmentAndGetWayBill()
    {
        $wayBill = $interfaceX->createShipmentAndGetWayBill()
        $orderID = $interfaceX->orderID
        return $wayBill
    }

    public function getTrackingDetails()
    {
        $trackingDetails = $interfaceX->getTrackingDetails($orderID)
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