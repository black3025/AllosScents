@extends('layout.layout')

@section('mainContent')

    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%">Controls</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id=>$details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{$id}}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{asset('images')}}//{{$details['cover']}}" width="100" height="100"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{$details['product_name']}}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">₱ {{ number_format($details['price'],2 )}}</td>
                        <td data-th="Quantity"> {{$details['quantity']}}</td>
                        <td data-th="Subtotal" class="text-center">₱ {{ number_format(($details['price'] * $details['quantity']),2 )}}</td>
                        <td data-th="" class="actions">
                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total: ₱ {{ number_format($total,2 )}}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <button class="btn btn-success"><i class="fa fa-money"></i>  Checkout</button>
                    </td>
                </tr>
        <table>
    </div>

@endsection
