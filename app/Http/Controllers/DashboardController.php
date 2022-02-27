<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Expense;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $today = Carbon::now();
        // dd($today->day);
        // dd(Sale::whereMonth('created_at', Carbon::now()->month)->get());
        $annualSales = $this->getAnnualSales();
        $annualExpenses = $this->getAnnualExpense();
        return view('dashboard.index', compact('annualSales', 'annualExpenses'));
    }

    function getAnnualSales(){
        $sales = [];

        foreach (range(1,12) as $month) {
            $monthlySaleCount = Sale::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', $month)->count();
            array_push($sales, $monthlySaleCount);
        }

        return "[" . implode(',', $sales) . "]";
    }

    function getAnnualExpense(){
        $expenses = [];

        foreach (range(1,12) as $month) {
            $monthlyExpenseCount = Expense::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', $month)->count();
            array_push($expenses, $monthlyExpenseCount);
        }

        return "[" . implode(',', $expenses) . "]";
    }
}
