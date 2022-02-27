<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Provider;
use App\Models\ExpenseType;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class ExpensesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::latest()->paginate(10);
        return view('transaction.expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expenseTypes = Expense::select('expense_type')->distinct()->get();
        $paymentMethods = PaymentMethod::all();
        $providers = Provider::all();
        // dd($providers->first()->name);
        return view('transaction.expenses.create', compact('expenseTypes', 'paymentMethods', 'providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'amount' => 'required',
            'expense_type' => 'required',
            'payment_method_id' => 'required'
        ]);
        // find or create provider
        $record = [];
        // if provider is set
        if (isset($request->provider)) {
            // find or create provider id
            $provider = Provider::firstOrCreate( ['name' => $request->provider] );
            $provider_id = $provider->id;

            // set provider id
            unset($request['provider']);
            $request->merge(compact('provider_id'));
        }else {
            unset($request['provider']);
        }
        
        $expense = Expense::create($request->all());

        Transaction::create([
            'type' => 'expense',
            'amount' => $request->amount,
            'expense_id' => $expense->id
        ]);

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        $expenseTypes = Expense::select('expense_type')->distinct()->get();
        $paymentMethods = PaymentMethod::all();
        $providers = Provider::all();
        return view('transaction.expenses.edit', compact('expense', 'expenseTypes', 'paymentMethods', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'amount' => 'required',
            'expense_type' => 'required',
            'payment_method_id' => 'required'
        ]);

        Expense::find($id)->update($request->all());

        return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        return redirect()->route('expenses.index');
    }
}
