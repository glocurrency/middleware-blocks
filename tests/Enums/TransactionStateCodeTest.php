<?php

namespace GloCurrency\MiddlewareBlocks\Tests\Enums;

use GloCurrency\MiddlewareBlocks\Tests\TestCase;
use GloCurrency\MiddlewareBlocks\Enums\TransactionStateEnum;
use GloCurrency\MiddlewareBlocks\Enums\TransactionStateCodeEnum;

class TransactionStateCodeTest extends TestCase
{
    /** @test */
    public function it_can_return_transaction_state_from_all_values()
    {
        foreach (TransactionStateCodeEnum::cases() as $value) {
            $this->assertInstanceOf(TransactionStateEnum::class, $value->getTransactionState());
        }
    }

    /** @test */
    public function it_can_return_transaction_state_reason_from_all_values()
    {
        foreach (TransactionStateCodeEnum::cases() as $value) {
            $this->assertIsString($value->getTransactionStateReason());
        }
    }
}
