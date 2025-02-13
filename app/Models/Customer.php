<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'phone',
        'fax',
        'email_verified_at',
        'password',
        'remember_token',
        'cart',
        'wishlist',
        'ip',
        'status',
        'country',
        'city',
        'address',
        'zip_code',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
