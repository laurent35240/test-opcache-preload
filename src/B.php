<?php

namespace Laurent35240\OpcachePreload;

class B
{
    public function __toString()
    {
        return 'Hello from ' . self::class;
    }
}
