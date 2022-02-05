<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ModelEventInterface
{
    public function getItem(): Model;
}
