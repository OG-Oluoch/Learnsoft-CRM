<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    public $table = 'clients';

    public $fillable = [
        'first_name',
        'second_name',
        'phone_numbers',
        'customer_email',
        'location',
        'company_name'
    ];

    protected $casts = [
        'first_name' => 'string',
        'second_name' => 'string',
        'phone_numbers' => 'string',
        'customer_email' => 'string',
        'location' => 'string',
        'company_name' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'required',
        'second_name' => 'required',
        'phone_numbers' => 'required',
        'customer_email' => 'email'
    ];

    
}
