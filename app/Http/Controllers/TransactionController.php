<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Client;
use App\Models\Expense;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Provider;
use App\Models\Sale;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class TransactionController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    function stats(){
        $today = Carbon::now();
        // dd($today->subDay()->endOfMonth());
        $transactions = Transaction::all();

        $stats = [];

        $stats['today'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->count(),
            'income'=> Payment::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->sum('amount'),
            'expense'=> Expense::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->sum('amount'),
            'balance'=> Sale::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->sum('balance'),
        ];

        $stats['yesterday'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->subDay()->startOfDay(), Carbon::now()->subDay()->endOfDay()])->count(),
            'income'=> Payment::whereBetween('created_at', [Carbon::now()->subDay()->startOfDay(), Carbon::now()->subDay()->endOfDay()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->subDay()->startOfDay(), Carbon::now()->subDay()->endOfDay()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->subDay()->startOfDay(), Carbon::now()->subDay()->endOfDay()])->sum('balance'),
        ];

        $stats['this week'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->startOfWeek()->startOfDay(), Carbon::now()->endOfWeek()->endOfDay()])->count(),
            'income' => Payment::whereBetween('created_at', [Carbon::now()->startOfWeek()->startOfDay(), Carbon::now()->endOfWeek()->endOfDay()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->startOfWeek()->startOfDay(), Carbon::now()->endOfWeek()->endOfDay()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->startOfWeek()->startOfDay(), Carbon::now()->endOfWeek()->endOfDay()])->sum('balance'),
        ];

        $stats['last week'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek()->startOfDay(), Carbon::now()->subWeek()->startOfWeek()->StartOfDay()])->count(),
            'income' => Payment::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek()->startOfDay(), Carbon::now()->subWeek()->startOfWeek()->StartOfDay()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek()->startOfDay(), Carbon::now()->subWeek()->startOfWeek()->StartOfDay()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek()->startOfDay(), Carbon::now()->subWeek()->startOfWeek()->StartOfDay()])->sum('balance'),
        ];

        $stats['this month'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count(),
            'income' => Payment::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('balance'),
        ];
        $stats['last month'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->count(),
            'income' => Payment::whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->sum('balance'),
        ];
        $stats['this year'] = [
            'transactions' => $transactions->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count(),
            'income' => Payment::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('amount'),
            'expense' => Expense::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('amount'),
            'balance' => Sale::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('balance'),
        ];

        $sales = Sale::all()->where('status', 'unbalanced');

        $paymentMethods = PaymentMethod::all();

        // dd($stats);
        return view('transaction.stats', compact('stats', 'sales', 'paymentMethods'));
    }

    function index(){
        $transactions = Transaction::latest()->paginate(25);
        $paymentMethods = PaymentMethod::all();
        $clients = Client::all();
        $providers = Provider::all();

        return view('transaction.index', compact('transactions', 'paymentMethods', 'clients', 'providers'));
    }


    function expenses(){
        $expenses = Expense::paginate(10);
        return view('transaction.expenses.index', compact('expenses'));
    }

    function test(){
        $expenses = Expense::all();
        $sale = Sale::all();
        $payments = Payment::all();

        $merge = [];

        array_push($merge, $expenses);
        array_push($merge, $sale);
        array_push($merge, $payments);

        dd($merge);
    }
}
