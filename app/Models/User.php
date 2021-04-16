<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    const ADMIN_USER = 'admin';
    const MEMBER_USER = 'member';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 取得該使用者的所有任務。
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function animals()
    {
        return $this->hasMany('App\Models\Animal', 'user_id', 'id');
    }

    public function likes()
    {
        return $this->belongsToMany('App\Models\Animal', 'animal_user_likes')
                    ->withTimestamps();
    }

    public function isAdmin()
    {
        return $this->permission === User::ADMIN_USER;
    }
}
