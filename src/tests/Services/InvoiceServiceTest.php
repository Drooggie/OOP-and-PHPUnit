<?php

declare(strict_types=1);

use App\Services\EmailService;
use App\Services\InvoiceService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;
use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{
    private $taxServiceMock;
    private $paymentServiceMock;
    private $emailServiceMock;
    private $customer;
    private $amount;

    protected function setUp(): void
    {
        parent::setUp();

        $this->taxServiceMock = $this->createMock(SalesTaxService::class);
        $this->paymentServiceMock = $this->createMock(PaymentGatewayService::class);
        $this->emailServiceMock = $this->createMock(EmailService::class);

        $this->paymentServiceMock->method('charge')->willReturn(true);

        $this->customer = ['name' => 'Jhon'];
        $this->amount = 150;
    }

    /** @test */
    public function resourse_is_working(): void
    {
        $obj = new InvoiceService(
            $this->taxServiceMock,
            $this->paymentServiceMock,
            $this->emailServiceMock
        );

        $result = $obj->process($this->customer, $this->amount);

        $this->assertTrue($result);
    }

    /** @test */
    public function email_is_working(): void
    {
        $obj = new InvoiceService(
            $this->taxServiceMock,
            $this->paymentServiceMock,
            $this->emailServiceMock
        );

        $this->emailServiceMock->expects($this->once())->method('send')->with(['name' => 'Jhon'], 'receipt');

        $result = $obj->process($this->customer, $this->amount);

        $this->assertTrue($result);
    }
}
