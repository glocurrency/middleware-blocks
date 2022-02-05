<?php

namespace GloCurrency\MiddlewareBlocks\Tests\Enums;

use GloCurrency\MiddlewareBlocks\Tests\TestCase;
use GloCurrency\MiddlewareBlocks\Enums\SenderStateEnum;
use GloCurrency\MiddlewareBlocks\Enums\SenderStateCodeEnum;

class SenderStateCodeTest extends TestCase
{
    /** @test */
    public function it_can_return_sender_state_from_all_values()
    {
        foreach (SenderStateCodeEnum::cases() as $value) {
            $this->assertInstanceOf(SenderStateEnum::class, $value->getSenderState());
        }
    }
}
