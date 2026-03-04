<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'user_type',
        'first_name',
        'last_name',
        'email',
        'nickname',
        'username',
        'password',
    ];

    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['password' => 'hashed'];

    // Relationships
    public function hostedBills()
    {
        return $this->hasMany(Bill::class, 'host_user_id');
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bill_participants');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'paid_by_user_id');
    }
}