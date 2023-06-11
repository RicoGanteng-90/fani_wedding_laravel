<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Claims\Custom;

class cart extends Model
{
    use HasFactory;

    /**
     * Get the user that ow
     *
     * @return \Illuminate\Database\EloquentTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
