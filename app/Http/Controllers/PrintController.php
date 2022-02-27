<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use charlieuki\ReceiptPrinter\ReceiptPrinter;
use Mike42\Escpos\EscposImage;

class PrintController extends Controller
{
    public static function test(array $items, Transaction $transaction, float $balance ,float $amount_paid = 0, $is_Sale = false)
    {

        // // Set params
        $mid = '123123456';
        $store_name = "ROSSIE'S COLLECTION";
        $store_address = 'Abeka Total';
        $store_phone = '1234567890';
        $store_email = 'boutique@email.com';
        $store_website = 'RossiesCollection.com';
        $tax_percentage = 0;
        $transaction_id = 'TX123A';
        $currency = 'GHC';
        $receipt_type = $transaction->type;
        // $image_path = public_path('img/logo/logo.png');

        
        // dd($items);

        // Init printer
        $printer = new ReceiptPrinter;
        $printer->init(
            config('receiptprinter.connector_type'),
            config('receiptprinter.connector_descriptor')
        );

        // Set store info
        $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

        // Set recceipt type
        // $printer->setReceiptType($receipt_type);

        // Set currency
        $printer->setCurrency($currency);

        // Add items
        foreach ($items as $item) {
            $printer->addItem(
                $item['name'],
                $item['qty'],
                $item['price']
            );
        }
        // Set tax
        $printer->setTax($tax_percentage);

        // Calculate total
        $printer->calculateSubTotal();
        $printer->calculateGrandTotal();

        // Set transaction ID
        $printer->setTransactionID($transaction_id);

        // Set logo
        // Uncomment the line below if $image_path is defined
        // $printer->setLogo($image_path);

        // Set QR code
        $printer->setQRcode($transaction_id);

        // Print receipt
        $printer->printReceipt($balance, $amount_paid, );
        // return redirect()->route('sales.index');
    }
}
