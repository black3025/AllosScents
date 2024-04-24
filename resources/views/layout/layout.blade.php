<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALo's SCENTS♦SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .offcanvas-body {
            padding: 20px;
        }

        .offcanvas-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .offcanvas-title {
            color: #212529;
            font-size: 1.5rem;
        }

        .list-unstyled {
            padding-left: 0;
        }

        .list-unstyled li {
            margin-bottom: 10px;
        }

        .list-unstyled li a {
            color: #212529;
        }

        hr {
            margin: 10px 0;
        }

        .shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .site-footer {
            background-color: #26272b;
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5;
        }

        .site-footer hr.small {
            margin: 20px 0;
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px;
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none;
        }

        .footer-links li {
            display: block;
        }

        .footer-links a {
            color: #737373;
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block;
        }

        .site-footer .social-icons {
            text-align: right;
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d;
        }

        .copyright-text {
            margin: 0;
        }

        @media (max-width: 991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .site-footer {
                padding-bottom: 0;
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center;
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px;
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px;
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear;
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe;
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px;
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998;
        }

        .social-icons a.twitter:hover {
            background-color: #00aced;
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6;
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89;
        }

        @media (max-width: 767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600;
            }
        }
    </style>
</head>

<body>

    {{-- navbar start --}}
    <nav class="navbar navbar-expand-lg text-light bg-white p-3 shadow" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: rgb(0, 0, 0);">ALo's SCENTS♦SHOP</a>
            <button class="btn btn-outline-dark text-dark btn-light d-lg-none" data-bs-toggle="offcanvas"
                href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse btn-light me-2 navbar-collapse d-lg-flex justify-content-end"
                id="navbarSupportedContent">
                {{-- search form --}}
                <div class="container mt-3 mb-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form class="d-flex" action="{{ route('shop') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search">
                                <button class="btn btn-outline-primary" type="submit">🔍</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- end of search form --}}
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/" style="color: rgb(0, 0, 0);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about" style="color: rgb(0, 0, 0);">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact" style="color: rgb(0, 0, 0);">Contact</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="terms" style="color: rgb(0, 0, 0);">Terms</a></li>
                    <li class="nav-item">
                        <button class="btn  " data-bs-toggle="modal" data-bs-target="#exampleModal">🛒</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn">♥</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn" data-bs-toggle="offcanvas" href="#offcanvas2" role="button"
                            aria-controls="offcanvas2">👤</button>
                    </li>

                    <li class="nav-item d-lg-none">
                        <button class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- navbar end --}}

    {{-- off canvas start --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">ALo's SCENTS♦SHOP</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <div class="container mt-3 mb-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form class="d-flex" action="{{ route('shop') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <li><a href="/" style="color: rgb(0, 0, 0);">Home</a></li>
                <li><a href="about" style="color: rgb(0, 0, 0);">About</a></li>
                <li><a href="contact" style="color: rgb(0, 0, 0);">Contact</a></li>
                <li><a href="terms" style="color: rgb(0, 0, 0);">Terms</a></li>
                <hr style="margin: 10px 0; border: none; height: 2px; background-color: black;">
                <li><a href="profile"><img
                            src="https://banner2.cleanpng.com/20180516/zq/kisspng-computer-icons-google-account-icon-design-login-5afc02dab4a218.0950785215264652427399.jpg"
                            alt="loginicon" style="width: 25px; height: 25px;">My Account</a></li>
                <li><a href="#"><img
                            src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-heart-outline-512.png"
                            alt="wishlisticon" style="width: 25px; height: 25px;">My Wishlist</a></li>
                <li><a href="login"><img
                            src="https://cdn3.iconfinder.com/data/icons/thin-outline-ui-part-2-of-4/100/pack3-06-512.png"
                            alt="signinicon" style="width: 25px; height: 25px;">Sign In</a></li>
                <li><a href="register"><img
                            src="https://cdn0.iconfinder.com/data/icons/aami-web-internet/64/simple-27-512.png"
                            alt="createicon" style="width: 25px; height: 25px;">register</a></li>
            </ul>
        </div>
    </div>

    {{-- off canvas 2 start --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvas2Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvas2Label">User Options</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                @if(Auth::User())
                <li><a href="profile"><img
                            src="https://banner2.cleanpng.com/20180516/zq/kisspng-computer-icons-google-account-icon-design-login-5afc02dab4a218.0950785215264652427399.jpg"
                            alt="loginicon" style="width: 25px; height: 25px;">My Account</a></li>
                @endif
                <li><a href="#"><img
                            src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-heart-outline-512.png"
                            alt="wishlisticon" style="width: 25px; height: 25px;">My Wishlist</a></li>
                @if(Auth::User())
                    <li><a href="logout"><img
                                src="https://cdn3.iconfinder.com/data/icons/thin-outline-ui-part-2-of-4/100/pack3-06-512.png"
                                alt="signinicon" style="width: 25px; height: 25px;">logout</a></li>
                @else
                    <li><a href="login"><img
                                src="https://cdn3.iconfinder.com/data/icons/thin-outline-ui-part-2-of-4/100/pack3-06-512.png"
                                alt="signinicon" style="width: 25px; height: 25px;">Sign In</a></li>
                    <li><a href="register"><img
                                src="https://cdn0.iconfinder.com/data/icons/aami-web-internet/64/simple-27-512.png"
                                alt="createicon" style="width: 25px; height: 25px;">register</a></li>
                @endif
            </ul>
        </div>
    </div>
    {{-- off canvas 2 end --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add to Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or content for adding items to cart here -->
                    <p>Add item to cart form goes here...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div style="border: 0px solid #ccc; padding: 30px; position: relative;">

        {{-- end of modal --}}

        @yield('mainContent')

 {{-- footer --}}
<footer class="site-footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>About Us</h6>
                <p class="text-justify">Welcome to ALo's Scents Shop, your premier destination for all things
                    perfume-related! We're committed to providing a seamless shopping experience, offering an
                    extensive range of exquisite fragrances to suit every taste and occasion. Whether you're a
                    perfume connoisseur or just starting to explore the world of scents, we're here to enhance
                    your olfactory journey with our carefully curated selection and expert guidance.</p>
            </div>
            <div class="col-md-3">
                <h6>Explore</h6>
                <ul class="footer-links" style="list-style-type: none;"> <!-- Removed bullet points -->
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Contact Us</h6>
                <ul class="footer-links" style="list-style-type: none;"> <!-- Removed bullet points -->
                    <li>Phone: <a href="tel:09925885731">09925885731</a></li>
                    <li>Email: <a href="mailto:alosscentsshop@gmail.com">alosscentsshop@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <hr class="mt-0">
        <div class="row">
            <div class="col-md-6">
                <p class="copyright-text">© 2024 ALo's Scents Shop. All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <ul class="d-flex justify-content-end" style="list-style-type: none;"> <!-- Removed bullet points -->
                    <li><a class="facebook" href="https://www.facebook.com"><img
                                src="/images/icons8-facebook-48.png" alt="Facebook"></a></li>
                    <li><a class="instagram" href="https://www.instagram.com"><img
                                src="/images/icons8-instagram-48.png" alt="Instagram"></a></li>
                    <li><a class="twitter" href="https://www.twitter.com"><img
                                src="/images/icons8-twitterx-50.png" alt="Twitter"></a></li>
                    <li><a class="whatsapp" href="https://www.whatsapp.com"><img
                                src="/images/icons8-whatsapp-48.png" alt="WhatsApp"></a></li>
                    <li><a class="tiktok" href="https://www.tiktok.com"><img
                                src="/images/icons8-tiktok-48.png" alt="TikTok"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>
