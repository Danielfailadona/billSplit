<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'bill_name',
        'invitation_code',
        'host_user_id',
        'status',
    ];

    // Relationships
    public function host()
    {
        return $this->belongsTo(User::class, 'host_user_id');
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'bill_participants');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}