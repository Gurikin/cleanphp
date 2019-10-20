<?php


namespace CleanPhp\Invoicer\Domain\Service;


use ArrayObject;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory\InvoiceFactory;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use Exception;

class InvoicingService
{
    protected $orderRepository;
    protected $invoiceFactory;

    public function __construct(OrderRepositoryInterface $orderRepository, InvoiceFactory $invoiceFactory)
    {
        $this->orderRepository = $orderRepository;
        $this->invoiceFactory = $invoiceFactory;
    }

    /**
     * @throws Exception
     */
    public function generateInvoices()
    {
        $orders = $this->orderRepository->getUnInvoicedOrders();

        $invoices = [];

        foreach ($orders as $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }

        return $invoices;
    }

}