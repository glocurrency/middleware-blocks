<?php

namespace GloCurrency\MiddlewareBlocks\Tests\Enums;

use GloCurrency\MiddlewareBlocks\Tests\TestCase;
use GloCurrency\MiddlewareBlocks\Enums\RecipientStateEnum;
use GloCurrency\MiddlewareBlocks\Enums\RecipientStateCodeEnum;

class RecipientStateCodeTest extends TestCase
{
    /** @test */
    public function it_can_return_sender_state_from_all_values()
    {
        foreach (RecipientStateCodeEnum::cases() as $value) {
            $this->assertInstanceOf(RecipientStateEnum::class, $value->getRecipientState());
        }
    }
}
