<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Sale;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('destroy');
    }
    
    function index(){
        $sales = Sale::all();
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients', 'sales'));
    }

    function create(){
        return view('clients.create');
    }

    function store(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    function edit(int $i)
    {
        $client = Client::find($i);
        return view('clients.edit', compact('client'));
    }

    function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    function show($id){
        $client = Client::find($id);
        $sales = Sale::all();
        $paymentMethods = PaymentMethod::all();
        return view('clients.show', compact('client', 'sales', 'paymentMethods'));
    }

    function destroy($id){
        Client::find($id)->delete();
        return redirect()->route('clients.index');
    }


}
