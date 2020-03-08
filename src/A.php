<?php

namespace Laurent35240\OpcachePreload;

class A
{
    public function getChildOfB() {
        return new class () extends B {};
    }
}
