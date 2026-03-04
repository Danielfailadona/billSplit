<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['bill_id', 'email', 'invitation_code', 'status'];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}