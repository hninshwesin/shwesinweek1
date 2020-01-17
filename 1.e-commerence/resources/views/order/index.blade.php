@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
            <div style="text-align: center; padding-top: 70px"><img src="{{ url('tick.png') }}" width="100px"></div>
            <div class="box">
                <h3>Thank you for your purchase!</h3>
                <div class="plan-selection">
                    <div class="plan-data">
                        <p class="plan-text">Your order # is: 0000000005.</p>
                        <p class="plan-text">We'll email you an order confimation with details and tracking info</p>
                        <a href="#" class="btn btn-primary btn-lg mb30">Continue Shopping</a>
                    </div>
                </div>
                <div class="plan-selection">
                    <h3>Create account for next time</h3>
                    <div class="plan-data">
                        <p class="plan-text">You can track your order status by creating an account.</p>
                        <p class="plan-text">Email Address: test@tm.com</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg mb30">Create an Account</a>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-4 col-sm-5 col-xs-12">

            <div class="p-border">
                <h4 class="widget-title">Product List</h4>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped" style="text-align: right">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$orderDetail->product->name}}</td>
                                <td>${{$orderDetail->product->price}}</td>
                                <td>{{$orderDetail->qty}}</td>
                                <td>${{$orderDetail->cost}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.col -->
                <div class="widget">
                    <div class="summary-block">
                        <div class="summary-content">
                            <div class="summary-head"><h5 class="summary-title">Subtotal</h5></div>
                            <div class="summary-price">
                                <p class="summary-text">${{$subTotal}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="summary-block">
                        <div class="summary-content">
                            <div class="summary-head"><h5 class="summary-title">Shipping & Handling</h5></div>
                            <div class="summary-price">
                                <p class="summary-text">$5.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="summary-block">
                        <div class="summary-content">
                            <div class="summary-head"><h5 class="summary-title">Grand Total</h5></div>
                            <div class="summary-price">
                                <p class="summary-text">${{$subTotal + 5}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-border">
                <h6>Order Date: October 5, 2017</h6>
                <h2>Order Information</h2>
                <div class="table-responsive">
                    <table class="table table-striped" style="text-align: right;">
                        <thead>
                        <tr>
                            <th>Shipping Address</th>
                            <th>Shipping Method</th>
                            <th>Billing Address</th>
                            <th>Payment Method</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>test tm addr 1 Paris, Paris, 100005 France T: 111-22-33</td>
                            <td>Flat Rate - Fixed</td>
                            <td>test tm addr 1 Paris, Paris, 100005 France T: 111-22-33</td>
                            <td>Check / Money</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
@endsection
