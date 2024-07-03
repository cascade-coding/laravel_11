<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('online', function () {
    return ['id' => 'xyz', 'name' => 'david'];
});
