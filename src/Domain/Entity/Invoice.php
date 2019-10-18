<?php


namespace CleanPhp\Invoicer\Domain\Entity;


use DateTimeInterface;

class Invoice
{
    /** @var Order */
    protected $order;
    /** @var DateTimeInterface */
    protected $invoiceDate;
    /** @var float */
    protected $total;

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return Invoice
     */
    public function setOrder(Order $order): Invoice
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getInvoiceDate(): DateTimeInterface
    {
        return $this->invoiceDate;
    }

    /**
     * @param DateTimeInterface $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate(DateTimeInterface $invoiceDate): Invoice
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return Invoice
     */
    public function setTotal($total): Invoice
    {
        $this->total = $total;
        return $this;
    }
}