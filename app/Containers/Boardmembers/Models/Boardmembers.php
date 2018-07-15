<?php

namespace App\Containers\Boardmembers\Models;

use App\Ship\Parents\Models\Model;

class Boardmembers extends Model
{
    protected $fillable = [
        'fname', 'sname','lname', 'email', 'phone_no', 'department'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'boardmembers';
}
