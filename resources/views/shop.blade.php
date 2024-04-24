@extends('layout.layout')
@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Categories
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'all']) }}">All Products</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'alcohol']) }}">Alcohol</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'essential_oil']) }}">Essential oil</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'candle']) }}">Candle</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'perfume']) }}">Perfume</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'inhaler']) }}">Inhaler</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'disinfectant']) }}">Disinfectant</a></li>
                        <li class="list-group-item category-item" data-aos="fade-right"><a href="{{ route('shop', ['category' => 'diffuser']) }}">Diffuser</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($products as $product)
                        <div class="col position-relative">
                            <div class="card h-100">
                                <img src={{ URL('images/'.$product->cover) }} class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-gender">{{ $product->gender }}</p>
                                    <p class="card-price">{{ $product->price }}</p>
                                    <a href="#" class="btn btn-primary btn-sm position-absolute bottom-0 start-50 translate-middle-x">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
