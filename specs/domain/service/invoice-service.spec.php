<?php

use CleanPhp\Invoicer\Domain\Entity\Invoice;
use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Factory\InvoiceFactory\InvoiceFactory;
use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use CleanPhp\Invoicer\Domain\Service\InvoicingService;
use Peridot\Core\Suite;

describe('InvoicingService', function () {
    describe('->generateInvoices()', function () {
        beforeEach(function () {
            $repositoryClass = OrderRepositoryInterface::class;
            $invoiceClass = InvoiceFactory::class;
            $orders = [(new Order())->setTotal(400.00)];
            $invoices = [(new Invoice())->setTotal(400.00)];

            $this->repository = $this->getProphet()->prophesize($repositoryClass);
            $this->factory = $this->getProphet()->prophesize($invoiceClass);

            $this->repository->getUnInvoicedOrders()->willReturn($orders);
            $this->factory->createFromOrder($orders[0])->willReturn($invoices[0]);
        });
        it('should query the repository for unInvoiced Order', function () {
            $this->repository->getUnInvoicedOrders()->shouldBeCalled();

            $service = new InvoicingService(
                $this->repository->reveal(),
                $this->factory->reveal()
            );

            $service->generateInvoices();

        });
        it('should return an invoice for each unInvoiced Order', function () {
            $service = new InvoicingService(
                $this->repository->reveal(),
                $this->factory->reveal()
            );
            $result = $service->generateInvoices();

            $orders = [(new Order())->setTotal(400.00)];

            expect($result)->to->be->a('array');
            expect($result)->to->have->length(count($orders));

        });
        afterEach(function () {
            $this->getProphet()->checkPredictions();
        });
    });
});
