<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'user_id', 'total_amount', 'balance', 'status', 'is_checked_out'
    ];
    public function client() {
        return $this->belongsTo(Client::class);
    }
    // public function transactions() {
    //     return $this->hasMany(Transaction::class);
    // }
    // public function products() {
    //     return $this->hasMany('App\SoldProduct');
    // }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(SoldProduct::class);
    }

    public function transactions(){
        return $this->hasMany(Payment::class);
    }
}
