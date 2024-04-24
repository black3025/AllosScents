@extends('layout.layout')
@section('mainContent')

<!-- SHOP NOW Button -->
<a href="http://127.0.0.1:8000/shop"
    style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 1000; background-color: #000000; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-size: 16px;">SHOP
    NOW</a>


<!-- start Carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ URL('images/summersale1.jpg') }}" class="d-block mx-auto w-100" alt="..."
                style="max-width: 100%; height: 500px; object-fit: contain;">
        </div>
        <style>
            @media (max-width: 768px) {
                .carousel-item img {
                    height: 500px;
                }
            }
        </style>
        <div class="carousel-item">
            <img src="{{ URL('images/bg2.jpg') }}" class="d-block mx-auto w-100" alt="..."
                style="max-height: 500px; max-width: 100%; object-fit: contain;">
        </div>
        <div class="carousel-item">
            <img src="{{ URL('images/bg.jpg') }}" class="d-block mx-auto w-100" alt="..."
                style="max-width: 100%; height: 500px; object-fit: contain;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- end Carousel -->

{{-- start of the category --}}
<br>
<br>
<div class="d-flex justify-content-center">
    <h5>Categories</h5>
</div>
<div class="card-container d-flex flex-row flex-wrap justify-content-center mt-3">
    <div class="card mb-3 mx-2 border-0" style="width: 20%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category1.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

    <div class="card mb-3 mx-2 border-0" style="width: 19%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category2.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

    <div class="card mb-3 mx-2 border-0" style="width: 20%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category3.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

    <div class="card mb-3 mx-2 border-0" style="width: 16%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category4.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

    <div class="card mb-3 mx-2 border-0" style="width: 19%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category5.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

    <div class="card mb-3 mx-2 border-0" style="width: 17%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category6.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>


    <div class="card mb-3 mx-2 border-0" style="width: 20%;">
        <div class="card-body p-0">
            <a href="#" class="btn image-zoom"><img src="{{ URL('images/category7.png') }}"
                    class="d-block mx-auto w-100" alt="..."></a>
        </div>
    </div>

</div>

<div class="d-flex justify-content-center mt-3">
    <div class="navigation-buttons">
        <button onclick="showPrevious()" class="btn btn-primary mr-2">Back</button>
        <button onclick="showNext()" class="btn btn-primary">Next</button>
    </div>
</div>

<script>
    var currentIndex = 0;
    var cards = document.querySelectorAll('.card-container .card');

    function showNext() {
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.display = 'none';
        }
        for (var i = 0; i < 3; i++) {
            var index = (currentIndex + i) % cards.length;
            cards[index].style.display = 'block';
        }
        currentIndex = (currentIndex + 3) % cards.length;
    }

    function showPrevious() {
        currentIndex = currentIndex - 3 < 0 ? cards.length - 3 : currentIndex - 3;
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.display = 'none';
        }
        for (var i = 0; i < 3; i++) {
            var index = (currentIndex + i) % cards.length;
            cards[index].style.display = 'block';
        }
    }

    showNext();
</script>
{{-- end of the category --}}

<style>
    .image-zoom img {
        transition: transform 0.3s ease;
    }

    .image-zoom:hover img {
        transform: scale(1.1);
    }
</style>
{{-- end of the category --}}

{{-- start of users --}}
<br>
<br>
<div class="container">
    <div class="d-flex justify-content-center">
    </div>
    <div class="card-container d-flex justify-content-center mt-3" id="users">
        <div class="card mx-1 border-1">
            <div class="card-body p-0 overflow-hidden">
                <a href="#" class="btn image-zoom"><img src="{{ URL('images/male category.jpeg') }}"
                        class="d-block mx-auto w-100 rounded" alt="..."></a>
            </div>
        </div>

        <div class="card mx-1 border-1">
            <div class="card-body p-0 overflow-hidden">
                <a href="http://127.0.0.1:8000/shop" class="btn image-zoom" style="margin-top: 50%"><img
                        src="{{ URL('images/home-logo.png') }}" class="d-block mx-auto w-100" alt="..."></a>
            </div>
        </div>

        <div class="card mx-1 border-1">
            <div class="card-body p-0 overflow-hidden">
                <a href="#" class="btn image-zoom"><img src="{{ URL('images/female category.jpeg') }}"
                        class="d-block mx-auto w-100 rounded" alt="..."></a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $('body').scrollspy({
        target: '#navbar'
    });


    $(window).on('activate.bs.scrollspy', function(e, obj) {
        var id = $(obj.relatedTarget).attr('href');
        $(id).find('.card').addClass('animated');
    });
</script>

<style>
    .card {
        transition: transform 0.3s ease;
    }

    .image-zoom:hover .card {
        transform: scale(1.8);
    }
</style>
{{-- end of users --}}



{{-- start of Best sellers --}}
<br>
<br>
<br>
<div class="d-flex justify-content-center">
    <h5>Best seller</h5>
</div>
<div class="carousel-container" style="overflow-x: scroll; white-space: nowrap; width: 100%;">
    <div class="carousel" style="display: inline-block; transition: transform 0.5s ease; white-space: nowrap;">
        <div class="card-container">
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end of Best sellers --}}



{{-- start of new arrival --}}
<br>
<br>
<br>
<br>
<div class="d-flex justify-content-center">
    <h3>New Arrival</h3>
</div>
<div class="button-collage">
    <a href="#" class="btn btn-primary btn-lg">
        <div class="button-img" style="padding-top: 100%;">
            <img src="image1.jpg" alt="Button 1">
        </div>
    </a>
    <a href="#" class="btn btn-primary">
        <div class="button-img" style="padding-top: 75%;">
            <img src="image2.jpg" alt="Button 2">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>
    <a href="#" class="btn btn-primary btn-sm">
        <div class="button-img" style="padding-top: 50%;">
            <img src="image3.jpg" alt="Button 3">
        </div>
    </a>

</div>

<style>
    .button-collage {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 10px;
    }

    .button-collage a {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .button-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .button-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .button-collage a:hover .button-img img {
        transform: scale(1.1);
    }
</style>
{{-- end of new arrival --}}

@endsection
