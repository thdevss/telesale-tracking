<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = 'campaign';
    protected $keyType = 'uuid';

    public $incrementing = false;

    // public function event()
    // {
    //     return $this->belongsTo(CustomerEvent::class);
    // }

}
