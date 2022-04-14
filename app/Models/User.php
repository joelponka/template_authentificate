<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'active',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function setAvatarAttribute($photo)
    {
        $toStore = $this->attributes['name'] . '.' .$photo->getClientOriginalExtension();
        // $photo->storeAs('public/users/images', $toStore);
        $photo->move(public_path("users/images"), $toStore);
        $this->attributes['avatar'] = $toStore;
        $this->attributes['active'] = '1';
    }

    public function setPasswordAttribute($value='')
    {
        $this->attributes['password'] =  Hash::make($value);
    }
    
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    
}
