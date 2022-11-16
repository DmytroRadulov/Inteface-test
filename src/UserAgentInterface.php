<?php

namespace Package\Interface\Test;

interface UserAgentInterface
{
    public function setUserAgent($userAgent = null): ?string;

    public function getBrowser(): ?string;

    public function getPlatform(): ?string;
}