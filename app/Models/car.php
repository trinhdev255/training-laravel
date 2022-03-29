<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "cars";

    protected $fillable = [
        'userId',
        'name',
    ];

    public $timestamps = true;
    
    public function scopeSearch($q)
    {
        dump(request()->searh_key);
        return empty(request()->searh_key) ? $q : $q->where('name', 'like', '%'.request()->searh_key.'%');
    }
}
