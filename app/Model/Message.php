<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];

    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];
}
