<?php
require_once ('../vendor/autoload.php');

use CleanPhp\Invoicer\Domain\Entity\Order;

$order = new Order();
$order->setOrderNumber("orderNumber");
var_dump($order->getOrderNumber());