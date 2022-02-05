<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum TransactionTypeEnum: string
{
    /**
     * Bank transfer.
     */
    case BANK = 'bank';

    /**
     * Cash collection.
     */
    case CASH = 'cash';

    /**
     * Mobile money.
     */
    case MOBILE = 'mobile';

    /**
     * Card transfer.
     */
    case CARD = 'card';

    /**
     * Mobile topup.
     */
    case TOPUP = 'topup';
}
