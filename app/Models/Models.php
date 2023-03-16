<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motors;
class Models extends Model
{
    use HasFactory;
    protected $table='models';
    protected $guarded=[];

    
    public function Motors()
    {
        return $this->hasMany(Motors::class);
    }
}
