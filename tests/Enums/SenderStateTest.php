<?php

namespace GloCurrency\MiddlewareBlocks\Tests\Enums;

use GloCurrency\MiddlewareBlocks\Tests\TestCase;
use GloCurrency\MiddlewareBlocks\Enums\WebhookEventEnum;
use GloCurrency\MiddlewareBlocks\Enums\SenderStateEnum;

class SenderStateTest extends TestCase
{
    /** @test */
    public function it_can_return_webhook_event_from_all_values()
    {
        foreach (SenderStateEnum::cases() as $value) {
            $this->assertInstanceOf(WebhookEventEnum::class, $value->getWebhookEvent());
        }
    }
}
