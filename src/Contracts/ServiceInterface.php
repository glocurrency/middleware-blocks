<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface ServiceInterface
{
    public function getId(): string;
    public function getName(): string;
    public function getCodename(): string;
}
