<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionRefill extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'phone',
        'email',
        'rx_numbers',
        'delivery_method',
        'delivery_address',
        'notes',
        'status',
    ];
}
