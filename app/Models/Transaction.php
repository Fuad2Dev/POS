<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =['type', 'sale_id', 'payment_id', 'expense_id', 'amount'];

    function expense(){
        return $this->belongsTo(Expense::class);
    }

    // function expenseMethod(){
    //     return $this->hasOneThrough(PaymentMethod::class, Expense::class, 'payment_Method_id');
    // }

    function sale(){
        return $this->belongsTo(Sale::class);
    }

    function payment(){
        return $this->belongsTo(Payment::class);
    }

    // function paymentMethod(){
    //     return $this->hasOneThrough(PaymentMethod::class, Payment::class, 'payment_Method_id', 'id');
    // }




}
