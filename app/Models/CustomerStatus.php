<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    use HasFactory;
    protected $table = 'customer_status';

    // public function events() 
    // {
    //     return $this->hasMany(CustomerEvent::class);
    // }
}
