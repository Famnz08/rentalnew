<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin;
use App\Models\Models;
use App\Models\Categories;
class Motors extends Model
{
    use HasFactory;
    protected $table='motors';
    protected $guarded=[];
    
    public function Admins()
    {
        return $this->belongsto(Admin::class,'admin_id');
    }
    public function Categories()
    {
        return $this->belongsto(Categories::class,'category_id');
    }
    public function Models()
    {
        return $this->belongsto(Models::class,'model_id');
    }
    public function Transactions()
    {
        return $this->hasMany(User::class);
    }
}
