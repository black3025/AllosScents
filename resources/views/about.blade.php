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
        flex-wrap: wrap; /* Allow images to wrap on smaller screens */
    }

    .about-images img {
        width: 200px; /* Adjust image width as needed */
        margin: 0 10px;
        border-radius: 10px;
    }

    /* Adjust carousel styles */
    .carousel {
        width: 80%; /* Adjust carousel width */
        margin: auto;
    }

    .carousel-image-container {
        width: 200px; /* Adjust width */
        height: 200px; /* Adjust height */
        margin: 10px; /* Adjust margin */
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

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .about-heading {
            font-size: 28px; /* Decrease font size for smaller screens */
        }

        .about-content {
            font-size: 16px; /* Decrease font size for smaller screens */
        }

        .about-images img {
            width: 150px; /* Decrease image width for smaller screens */
        }
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


@endsection
