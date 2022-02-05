<?php

namespace GloCurrency\MiddlewareBlocks\Tests\Enums;

use GloCurrency\MiddlewareBlocks\Tests\TestCase;
use GloCurrency\MiddlewareBlocks\Enums\TransactionStateCodeEnum;
use GloCurrency\MiddlewareBlocks\Enums\ProcessingItemStateEnum;
use GloCurrency\MiddlewareBlocks\Enums\ProcessingItemStateCodeEnum;

class ProcessingItemStateCodeTest extends TestCase
{
    /** @test */
    public function it_can_return_processing_item_state_from_all_values()
    {
        foreach (ProcessingItemStateCodeEnum::cases() as $value) {
            $this->assertInstanceOf(ProcessingItemStateEnum::class, $value->getProcessingItemState());
        }
    }

    /** @test */
    public function it_can_return_transaction_state_code_from_all_values()
    {
        foreach (ProcessingItemStateCodeEnum::cases() as $value) {
            $this->assertInstanceOf(TransactionStateCodeEnum::class, $value->getTransactionStateCode());
        }
    }
}
