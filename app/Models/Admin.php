<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motors;
class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = "admins";

    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function Motors()
    {
        return $this->hasMany(Motors::class);
    }
}
