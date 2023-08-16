<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['expense_category', 'date', 'amount', 'description', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
