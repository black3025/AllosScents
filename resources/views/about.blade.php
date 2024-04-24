@extends('layout.layout')
@section('mainContent')

<style>
    .about-section {
        padding: 50px 0;
        text-align: center;
    }

    .about-heading {
        font-size: 36px;
        margin-bottom: 30px;
        color: #333; /* Adjust color as needed */
    }

    .about-content {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 30px;
        color: #555; /* Adjust color as needed */
    }

    .about-images {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }

    .about-images img {
        width: 200px; /* Adjust image width as needed */
        margin: 0 10px;
        border-radius: 10px;
    }

    /* Adjust carousel styles */
    .carousel {
        width: 60%; /* Adjust carousel width */
        margin: auto;
    }
</style>

<div class="about-section">
    <h1 class="about-heading">About Us</h1>
    <p class="about-content">
        Welcome to our shop! We are passionate about providing high-quality products and exceptional service to our customers.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, tortor nec pharetra ultricies, purus libero
        tempor neque, id condimentum odio est nec enim. In hac habitasse platea dictumst.
        <br><br>
        Our team is dedicated to ensuring your shopping experience is enjoyable and stress-free. Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Sed gravida, tortor nec pharetra ultricies, purus libero tempor neque, id condimentum
        odio est nec enim. In hac habitasse platea dictumst.
    </p>
    <div class="about-images">
        <img src="{{ URL('images/person1.jpg') }}" alt="Image 1">
        <img src="{{ URL('images/person2.jpg') }}" alt="Image 2">
        <img src="{{ URL('images/person4.jpg') }}" alt="Image 3">
    </div>

    {{-- carousel --}}
    <br><br>
    <h2>Reviews</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review1.jpg') }}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review2.png') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review3.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review4.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review5.png') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review6.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review7.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review8.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review9.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review10.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-image-container">
              <img src="{{ URL('images/review11.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <style>
        .carousel-image-container {
            width: 300px; /* Increase width */
            height: 300px; /* Increase height */
            margin: 10px; /* Adjust margin as needed */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0; /* Optional: Add a background color */
        }

        .carousel-image-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
    </style>



@endsection
