<?php

namespace Barchart\Laravel\RememberAll;

use Illuminate\Database\Eloquent\Model;

class RememberToken extends Model
{
    protected $fillable = [
        'token', 'user_id', 'expires_at', 'agent', 'ip'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
