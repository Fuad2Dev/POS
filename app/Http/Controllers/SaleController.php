<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\SoldProduct;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
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
        $sales = Sale::latest()->paginate(10);
        return view('transaction.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('transaction.sales.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required'
        // ]);
        // TODO: add search by phone
        // if ($request->name == null) {
        //     $user_id = Auth()->user()->id;
        //     $request->merge(compact('user_id'));
        //     $sale = Sale::create($request->all());
        // } else {
        $client = Client::where('name', $request->name)->get();
        if ($client->count() > 0) {
            $user_id = Auth::id();
            $client_id = $client[0]->id;

            $request->merge(compact('user_id', 'client_id'));
            $sale = Sale::create($request->all());
        } else {
            $client_id = Client::create($request->all())->id;
            $user_id = Auth::id();

            $sale = Sale::create(compact('client_id', 'user_id'));
        }
        // }



        return redirect()
            ->route('sales.show', $sale->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('transaction.sales.show', ['sale' => Sale::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::all();
        $sale = Sale::find($id);
        return view('transaction.sales.edit', compact('sale', 'clients'));
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
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user_id = Auth::id();
        $name = trim($request->name);
        $client_id = Client::firstOrCreate(compact('name'))->id;

        $sale = Sale::find($id)->update(compact('user_id', 'name', 'client_id'));

        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::find($id)->delete();

        return redirect()->route('sales.index');
    }

    public function createProduct($id)
    {
        $products = Product::all();
        $sale = Sale::find($id);
        return view('transaction.sales.products.add', compact('sale', 'products'));
    }

    public function storeProduct(Request $request, int $id)
    {
        dd($request);
        if (Product::where('barcode', $request->barcode)->count() == 0) {
            return redirect()->route('sales.show', $id)->with('error', 'code not registered with any products');
        }
        // dd($price = Product::where('barcode', $request->barcode)->first()->price);
        $price = Product::where('barcode', $request->barcode)->first()->price;
        if ($price == null) {
            return redirect()->route('sales.show', $id)->with('error', 'product price is not set');
        }

        // if (!isset($request->price)) {
        //     return redirect()->route('sales.show', $id)->with('error', 'product price is not set');
        // }

        // getting product
        $product = Product::where('barcode', $request->barcode)->first();



        if ($product->stock > 0) {
            $pro_obj = SoldProduct::where('sale_id', $id)->where('product_id', $product->id);
            //check if product record exist
            if ($pro_obj->count() > 0) {
                $this->addProduct($id, $pro_obj->get()[0]->id);
            } else {
                SoldProduct::create([
                    'sale_id' => $id,
                    'product_id' => $product->id,
                    'qty' => 1,
                    'price' => $product->price,
                    'total_amount' => $product->price
                ]);

                $product->stock -= 1;
                $product->save();

                $sale = Sale::find($id);
                $total_amount = $sale->total_amount + $product->price;
                $sale->update(compact('total_amount'));
            }
        } else {
            return redirect()->route('sales.show', $id)->with('error', 'product is out of stock');
        }

        return redirect()->route('sales.show', $id)->with('success', 'product added successfully');
    }

    public function storeProductManually(Request $request, int $id)
    {
        // dd($request);
        $price = Product::find($request->product_id)->price;
        if ($price == null) {
            return redirect()->route('sales.show', $id)->with('error', 'product price is not set');
        }

        // reduce product stock
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $stock = $product->stock - $request->qty;
        $product->update(compact('stock'));

        // add product to sale

        $sale_id = $id;
        $qty = $request->qty;
        $price = $product->price;
        $total_amount = $price * $qty;

        //update qty or add new
        $soldProduct = SoldProduct::where(compact('sale_id', 'product_id'))->first();

        if ($soldProduct === null) {
            $soldProduct = SoldProduct::create(compact('sale_id', 'product_id', 'qty', 'price', 'total_amount'));
        } else {
            $qty = $soldProduct->qty + $request->qty;
            $soldProduct->update(compact('qty'));
        }


        // update sale amount
        $sale = Sale::find($id);
        $total_amount = $sale->total_amount + $soldProduct->total_amount;
        $sale->update(['total_amount' => $total_amount]);

        $sale = Sale::find($sale_id);
        if ($sale->status ==  'try out') {
            $transaction = Transaction::create([
                'type' => 'try out (a product was sent)',
                'amount' => null,
                'sale_id' => $sale->id
            ]);
        }




        // redirect
        return redirect()->route('sales.show', $id)->with('success', 'product added successfully');
    }

    function addProduct(int $sale_id, int $sold_id)
    {

        $soldProduct = SoldProduct::find($sold_id);
        $soldProduct->qty += 1;
        $soldProduct->total_amount = ($soldProduct->qty) * ($soldProduct->price);
        $soldProduct->save();

        $product = Product::find($soldProduct->product_id);
        $product->update([
            'stock' => $product->stock - 1,
        ]);

        $sale = Sale::find($sale_id);
        if ($sale->status ==  'try out') {
            $transaction = Transaction::create([
                'type' => 'try out (a product was sent)',
                'amount' => null,
                'sale_id' => $sale_id
            ]);
        }

        

        return redirect()->route('sales.show', $sale_id)->with('success', 'product added successfully');
    }

    function removeProduct($sale_id, $sold_id)
    {
        $soldProduct = SoldProduct::find($sold_id);
        $soldProduct->qty -= 1;
        $soldProduct->total_amount = ($soldProduct->qty) * ($soldProduct->price);
        $soldProduct->save();

        $product = Product::find($soldProduct->product_id);
        $product->update([
            'stock' => $product->stock + 1,
        ]);

        $transaction = Transaction::create([
            'type' => 'try out (a product was returned)',
            'amount' => null,
            'sale_id' => $sale_id
        ]);

        return redirect()->route('sales.show', $sale_id)->with('success', 'product removed successfully');
    }

    function deleteProduct($sale_id, $sold_id)
    {
        $soldProduct = SoldProduct::find($sold_id);

        $product = Product::find($soldProduct->product_id);
        $product->update([
            'stock' => $product->stock + $soldProduct->qty,
        ]);

        $soldProduct->delete();

        return redirect()->route('sales.show', $sale_id)->with('success', 'product deleted successfully');
    }

    function checkout(Request $request, $id)
    {
        $sale = Sale::find($id);
        //checkout sale
        $status = 'unbalanced';
        $balance = $sale->total_amount;
        $sale->update(compact('status', 'balance'));

        $transaction = Transaction::create([
            'type' => 'sale (unpaid)',
            'amount' => null,
            'sale_id' => $sale->id
        ]);

        $items = [];
        $soldProducts = SoldProduct::where('sale_id', $sale->id)->get();

        foreach ($soldProducts as $soldProduct) {
            $name = $soldProduct->product->name;
            $qty = $soldProduct->qty;
            $price = $soldProduct->price;

            array_push($items, compact('name', 'qty', 'price'));
        }

        // dd($items);
        PrintController::test($items, $transaction, $sale->balance);


        return redirect()->route('sales.index');
    }

    function checkoutWithPayment(Request $request, $id)
    {
        $sale = Sale::find($id);
        //checkout sale
        $balance = $sale->total_amount;
        $sale->update(compact('balance'));

        return redirect()->route('sales.payments.create', $id)->with('is_sale' . true);
    }

    function tryout(Request $request, $sale_id)
    {
        $sale = Sale::find($sale_id);
        //checkout sale
        $status = 'try out';
        $balance = $sale->total_amount;
        $sale->update(compact('status', 'balance'));

        $numProducts = 0;
        foreach ($sale->products as $product) {
            $numProducts += $product->qty;
        }
        $transaction = Transaction::create([
            'type' => 'try out (' . $numProducts . ' products were sent)',
            'amount' => null,
            'sale_id' => $sale->id
        ]);

        return redirect()->route('sales.index');
    }


    function payments($sale_id)
    {
        $payments = Payment::where('sale_id', $sale_id)->get();
        // dd($payments->get());
        if ($payments == null) {
            $payments = [];
        }
        return view('transaction.sales.payments.index', compact('sale_id', 'payments'));
    }

    function createPayments($sale_id)
    {
        $paymentMethods = PaymentMethod::all();
        $sale = Sale::find($sale_id);
        return view('transaction.sales.payments.create', compact('sale_id', 'paymentMethods', 'sale'));
    }

    function storePayments(Request $request, $sale_id)
    {

        // dd(Sale::find($sale_id));
        $this->validate($request, [
            'amount' => 'required'
        ]);
        // update sale balance
        $sale = Sale::find($sale_id);

        $balance = $sale->balance - $request->amount;
        $status = ($balance == 0.00) ? 'balanced' : 'unbalanced';

        // register payment
        $user_id = Auth()->user()->id;
        $request->merge(compact('sale_id', 'user_id', 'balance'));

        $payment = Payment::create($request->all());

        $payments = Payment::where('sale_id', $sale_id)->get();
        if ($payments == null) {
            $payments = [];
        }

        //register transaction
        // dd($sale);
        if ($sale->status == 'open') {
            if ($status == 'balanced') {
                $transaction = Transaction::create([
                    'type' => 'sale (full payment)',
                    'amount' => $request->amount,
                    'payment_id' => $payment->id,
                ]);
            } else {
                $transaction = Transaction::create([
                    'type' => 'sale (partial payment)',
                    'amount' => $request->amount,
                    'payment_id' => $payment->id,
                ]);
            }
        } else {
            if ($status == 'balanced') {
                $transaction = Transaction::create([
                    'type' => 'balance payment (full)',
                    'amount' => $request->amount,
                    'payment_id' => $payment->id,
                ]);
            } else {
                $transaction = Transaction::create([
                    'type' => 'balance payment (partial)',
                    'amount' => $request->amount,
                    'payment_id' => $payment->id,
                ]);
            }
        }




        $sale->update(compact('balance', 'status'));



        //print receipt
        $items = [];
        $soldProducts = SoldProduct::where('sale_id', $sale_id)->get();

        foreach ($soldProducts as $soldProduct) {
            $name = $soldProduct->product->name;
            $qty = $soldProduct->qty;
            $price = $soldProduct->price;

            array_push($items, compact('name', 'qty', 'price'));
        }
        // dd($items);
        if ($transaction->type == 'balance payment (full)' || $transaction->type == 'sale (full payment)') {
            # code...
            PrintController::test($items, $transaction, $sale->balance, $payment->amount);
        }

        // return redirect()->route('print.test', compact('sale_id'));
        if ($payments->count() == 0 || $payments->last()->balance != 0) {
            return redirect()->route('sales.payments.index', compact('sale_id', 'payments'));
        }
        return redirect()->route('sales.payments.index', compact('sale_id', 'payments'))->with('success', 'sale closed');
    }

    function finalize($sale_id)
    {
        Sale::find($sale_id)->update(['status' => 'unbalanced']);

        return redirect()->route('sales.show', $sale_id);
    }
}
