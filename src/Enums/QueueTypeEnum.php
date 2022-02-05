<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum QueueTypeEnum: string
{
    case DEFAULT = 'default';
    case TRANSACTIONS = 'transactions';
    case SOURCES = 'sources';
    case SERVICES = 'services';
    case WEBHOOKS = 'webhooks';
    case ONE_TIME_PASSWORDS = 'one_time_passwords';
    case NOTIFICATIONS = 'notifications';
}
