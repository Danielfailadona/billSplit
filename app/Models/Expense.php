<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['bill_id', 'expense_name', 'amount', 'paid_by_user_id'];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function paidBy()
    {
        return $this->belongsTo(User::class, 'paid_by_user_id');
    }
}