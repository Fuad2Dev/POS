<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['expense_type', 'amount', 'reference', 'payment_method_id', 'client_id', 'sale_id', 'provider_id', 'user_id'];

    public function expenseType(){
        return $this->belongsTo(ExpenseType::class);
    }

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
