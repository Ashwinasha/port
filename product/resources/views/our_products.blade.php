<!-- resources/views/pages/our_products.blade.php -->
@extends('layouts.app')

@section('title', 'Our Products')

@section('content')

<section class="hero-section text-center bg-light py-5 w-100">
    <div class="container">
        <!-- Subheading -->
        <h6 class="text-muted">Our Products</h6>

        <!-- Main Heading -->
        <h2 class="fw-bold display-5">Here are some visions that turned<br> into remarkable successes!</h2>

        <!-- Subtitle -->
        <p class="lead mx-auto" style="max-width: 700px;">
            Discover our latest endeavors to get a glimpse of our cutting-edge work and creative breakthroughs.
        </p>
    </div>
</section>

<section>
    <div class="container py-5 mb-5">
        <div class="row gy-5">
            <!-- First Section: Image on the left, text on the right -->
            <div class="col-lg-12">
                <div class="row align-items-center g-5">
                    <!-- Image on the left -->
                    <div class="col-md-6">
                        <div class="bg-secondary w-100 ratio ratio-16x9 rounded"></div>
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Website Design for SCFC Canada</h5>
                        <p class="mb-3">Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario.</p>
                        <a href="#" class="btn gradient-btn text-uppercase fw-bold">Visit Website</a>
                    </div>
                </div>
            </div>

            <!-- Second Section: Text on the left, image on the right -->
            <div class="col-lg-12">
                <div class="row align-items-center g-5">
                    <!-- Text on the left -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Website Design for SCFC Canada</h5>
                        <p class="mb-3">Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario.</p>
                        <a href="#" class="btn gradient-btn text-uppercase fw-bold">Visit Website</a>
                    </div>
                    <!-- Image on the right -->
                    <div class="col-md-6">
                        <div class="bg-secondary w-100 ratio ratio-16x9 rounded"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 mt-4">
            <!-- First Section: Image on the left, text on the right -->
            <div class="col-lg-12">
                <div class="row align-items-center g-5">
                    <!-- Image on the left -->
                    <div class="col-md-6">
                        <div class="bg-secondary w-100 ratio ratio-16x9 rounded"></div>
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Website Design for SCFC Canada</h5>
                        <p class="mb-3">Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario.</p>
                        <a href="#" class="btn gradient-btn text-uppercase fw-bold">Visit Website</a>
                    </div>
                </div>
            </div>

            <!-- Second Section: Text on the left, image on the right -->
            <div class="col-lg-12">
                <div class="row align-items-center g-5">
                    <!-- Text on the left -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Website Design for SCFC Canada</h5>
                        <p class="mb-3">Born out of a vision, a single-minded objective that puts service before anything else, Swift Clearance and Forwarding Corp. surging forth to deliver the best services in the shipping and logistics scenario.</p>
                        <a href="#" class="btn gradient-btn text-uppercase fw-bold">Visit Website</a>
                    </div>
                    <!-- Image on the right -->
                    <div class="col-md-6">
                        <div class="bg-secondary w-100 ratio ratio-16x9 rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


<style>

.gradient-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.25rem;
    color: transparent; /* Text color will be handled by background-clip */
    background: transparent; /* Button background remains transparent */
    border: 2px solid transparent; /* Border will be filled with the gradient */
    background-image: linear-gradient(to right, #f00, #ff9900); /* Gradient for border and text */
    background-clip: border-box; /* Ensures the gradient fills the border */
    border-image: linear-gradient(to right, #f00, #ff9900) 1; /* Applies gradient to border */
    border-radius: 10px; /* Rounded border for pill shape */
    
    /* Text gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}



</style>
