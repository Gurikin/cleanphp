<?php


namespace CleanPhp\Invoicer\Domain\Factory\InvoiceFactory;


use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Repository\InvoiceRepositoryInterface;
use DateTime;
use Exception;

class InvoiceFactory
{

    /**
     * InvoiceFactory constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param Order $order
     * @return Invoice
     * @throws Exception
     */
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTime());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }
}