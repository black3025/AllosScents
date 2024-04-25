@extends('layout.layout')

@section('mainContent')
    <!-- info if the product has been added -->
    @if(session('success'))
        <div class ="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        Categories
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="{{ route('shop', ['category' => 'all']) }}"
                            class="list-group-item list-group-item-action category-item">All Products</a>
                        <a href="{{ route('shop', ['category' => 'alcohol']) }}"
                            class="list-group-item list-group-item-action category-item">Alcohol</a>
                        <a href="{{ route('shop', ['category' => 'essential_oil']) }}"
                            class="list-group-item list-group-item-action category-item">Essential oil</a>
                        <a href="{{ route('shop', ['category' => 'candle']) }}"
                            class="list-group-item list-group-item-action category-item">Candle</a>
                        <a href="{{ route('shop', ['category' => 'perfume']) }}"
                            class="list-group-item list-group-item-action category-item">Perfume</a>
                        <a href="{{ route('shop', ['category' => 'inhaler']) }}"
                            class="list-group-item list-group-item-action category-item">Inhaler</a>
                        <a href="{{ route('shop', ['category' => 'disinfectant']) }}"
                            class="list-group-item list-group-item-action category-item">Disinfectant</a>
                        <a href="{{ route('shop', ['category' => 'diffuser']) }}"
                            class="list-group-item list-group-item-action category-item">Diffuser</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card h-100 shadow">
                                <img src="{{ URL('images/' . $product->cover) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->gender }}</p>
                                    <p class="card-text">₱ {{ number_format($product->price,2 )}}</p>
                                    <!-- added link for add to cart -->
                                    <a href="{{ route('addToCart',$product->id) }}" class="btn btn-primary btn-sm">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Pagination -->


            </div>
        </div>
    </div>
@endsection
