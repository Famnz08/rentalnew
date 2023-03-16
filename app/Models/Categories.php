<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motors;
class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded=[];
    
    
    public function Motors()
    {
        return $this->hasMany(Motors::class);
    }
}
