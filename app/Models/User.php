<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "User";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'age',
        'gender'
    ];
    protected $hidden = [
        'id',
        'location_id'
    ];
    function getLocation()
    {
        return $this->hasOne('App\Models\Location', 'location_id');
    }
}
