<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $table = 'courier';

    protected $fillable = [
        'company_name',
        'company_logo',
        'website_link',
        'email',
        'contact_number',
    ];
}
