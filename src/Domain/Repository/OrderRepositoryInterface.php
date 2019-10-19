<?php


namespace CleanPhp\Invoicer\Domain\Repository;


interface OrderRepositoryInterface extends Repositoryinterface
{
    public function getUnInvoicedOrders();
}