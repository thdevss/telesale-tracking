<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $keyType = 'uuid';

    public $incrementing = false;
    protected $fillable = ['full_name', 'nick_name', 'telephone_number', 'remark', 'is_active'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(), Uuid::uuid4());
            $model->setAttribute('is_active', 1);

        });
    }
    
    // public function event() 
    // {
    //     return $this->hasMany(CustomerEvent::class);
    // }
}
