<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['income_category', 'date', 'amount', 'description', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
