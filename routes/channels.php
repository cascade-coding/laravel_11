<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('online', function () {
    return ['id' => 'xfsdf', 'name' => 'david'];
});
