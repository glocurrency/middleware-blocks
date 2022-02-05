<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum IdentificationTypeEnum: string
{
    case PASSPORT = 'passport';
    case CHEQUE_BOOK = 'cheque_book';
    case DRIVING_LICENSE = 'driving_license';
    case NATIONAL_ID = 'national_id';
    case UTILITY_BILL = 'utility_bill';
    case VOTING_CARD = 'voting_card';
    case OTHER = 'other';
}
