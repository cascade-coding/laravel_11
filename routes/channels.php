<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('online', function () {
    return ['id' => 'xyz', 'name' => 'david'];
});

Broadcast::channel('channel_for_everyone', function ($user) {
    return true;
});