<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\Transaction;
use App\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->check()) {

            $customer = auth()->user();
            $current_cart = $customer->active_cart;

            $transaction = new \App\Transaction();
            $transaction->cart_id =  auth()->user()->active_cart->id;
            $transaction->customer_id = $current_cart->customer_id;
            $transaction->total_cost = $request->total_price;
            $transaction->save();

            $transaction = $transaction->id;


            foreach ($current_cart->items as $item) {

                $transactionDetail = new \App\TransactionDetail();
                $transactionDetail->transaction_id = $transaction;
                $transactionDetail->product_id = $item->product_id;
                $transactionDetail->qty = $item->qty;
                $transactionDetail->cost = $item->product->price;
                $transactionDetail->save();

            }

            $cart = Cart::where('id', auth()->user()->active_cart->id)
                ->update(['completed_at' => Carbon::Now()]);


            $cartItem = CartItem::where('cart_id', auth()->user()->active_cart->id)
                ->update(['completed_at' => Carbon::Now()]);

            $subTotal = $request->total_price;
            $orderDetails = TransactionDetail::where('transaction_id', $transaction)->get();

            return view('order.index', compact(['orderDetails', 'subTotal']));

        } else {
            dd("Need to redriect to the login page");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
