<?php

use App\Models\Notification;


function newNotification($name, $message, $type,$user_id, $team_id)
{
    Notification::create([[
        'name' => $name,
        'message' => $message,
        'type' => $type,
        'user_id' => $user_id,
        'team_id' => $team_id,
    ]]);
    return true;
}
