<?php


namespace CleanPhp\Invoicer\Domain\Repository;


use CleanPhp\Invoicer\Domain\Entity\Order;

/**
 * Interface OrderRepositoryInterface
 * @package CleanPhp\Invoicer\Domain\Repository
 */
interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * Get all orders without any invoices.
     *
     * @return array
     */
    public function getUnInvoicedOrders();
}