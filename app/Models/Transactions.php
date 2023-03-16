<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table='transactions';
    protected $guarded=[];

    
    public function Users()
    {
        return $this->belongsto(User::class,'user_id');
    }
    public function Motors()
    {
        return $this->belongsto(Motors::class,'motor_id');
    }
}
