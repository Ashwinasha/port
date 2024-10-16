@extends('layouts.app')

@section('title', 'Our Products')

@section('content')

<section class="hero-section text-center bg-light py-5 w-100">
    <div class="container">
        <!-- Subheading -->
        <h6 class="text-muted">Our Packages</h6>

        <!-- Main Heading -->
        <h2 class="fw-bold display-5">Premium solutions at affordable prices for<br> Your Business website, unlike any other.</h2>

        <!-- Subtitle -->
        <p class="lead mx-auto" style="max-width: 700px;">
            Transforming lives globally through innovative software and advanced technologies.
        </p>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row text-center justify-content-center align-items-center g-5"> <!-- Changed to g-5 for better gap -->
            <!-- Basic Package -->
            <div class="col-md-4 col-12">
                <div class="card text-center shadow rounded mx-auto" style="max-width: 100%;"> <!-- Added mx-auto and max-width -->
                    <img src="https://via.placeholder.com/60" alt="Package Icon" class="mx-auto my-3 mt-5 rounded-circle">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Basic Package</h5>
                        <ul class="text-start">
                            <li>Up to 5 Pages Website</li>
                            <li>Basic SEO Optimization</li>
                            <li>Contact Form Integration</li>
                            <li>Social Media Integration</li>
                            <li>24/7 Customer Support</li>
                            <li>2 Email Accounts</li>
                        </ul>
                        
                        <button class="btn shadow-sm text-white" style="background: linear-gradient(100.42deg, rgba(254, 189, 89, 0.88) 17.25%, rgba(255, 87, 87, 0.88) 47.41%);">choose package</button>
                        
                    </div>
                </div>
            </div>

            <!-- Business Package -->
            <div class="col-md-4 col-12">
                <div class="card text-center shadow rounded mx-auto" style="max-width: 100%;"> <!-- Added mx-auto and max-width -->
                    <img src="https://via.placeholder.com/60" alt="Package Icon" class="mx-auto my-3 mt-5 rounded-circle">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Business Package</h5>
                        <ul class="text-start">
                            <li>Unlimited Pages Website</li>
                            <li>E-commerce Integration</li>
                            <li>Advanced SEO Strategies</li>
                            <li>Custom Web Development</li>
                            <li>Social Media Marketing</li>
                            <li>Comprehensive Digital Marketing</li>
                            <li>Mobile App Development</li>
                            <li>24/7 Priority Support</li>
                            <li>Unlimited Email Accounts</li>
                        </ul>
                        <a class="btn btn-outline-danger text-uppercase fw-bold" href="#">Choose Package</a>
                    </div>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="col-md-4 col-12">
                <div class="card text-center shadow rounded mx-auto" style="max-width: 100%;"> <!-- Added mx-auto and max-width -->
                    <img src="https://via.placeholder.com/60" alt="Package Icon" class="mx-auto my-3 mt-5 rounded-circle">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Premium Package</h5>
                        <ul class="text-start">
                            <li>Up to 10 Pages Website</li>
                            <li>Advanced SEO Optimization</li>
                            <li>Blog Setup and Integration</li>
                            <li>Social Media Marketing</li>
                            <li>24/7 Customer Support</li>
                            <li>5 Email Accounts</li>
                        </ul>
                        <a class="btn btn-outline-danger text-uppercase fw-bold" href="#">Choose Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row m-0">
        <div class="col-md-6 d-flex justify-content-center align-items-center text-center bg-warning p-5">
            <div class="container my-5">
                <h3>Our Vision</h3>
                <h5>Expand worldwide, ensure exceptional quality,<br> build strong client relationships,<br> innovate, always reach higher.</h5>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center text-center bg-danger p-5">
            <div class="container my-5">
                <h3>Our Mission</h3>
                <h5>Global leader, unmatched quality, deep client connections,<br> everywhere in the world.</h5>
            </div>
        </div>
    </div>
</section>

<section class="container py-5 text-start">
    <h5 class="text-muted text-center">Why Choose Us</h5>
    <h2 class="fw-bold mb-5 text-center">Benefit Of Working With Us</h2>

    <div class="row g-5">
        <div class="col-md-6 d-flex">
            <div class="benefit-card shadow p-4 bg-white w-100 rounded text-start mx-auto">
                <img src="https://via.placeholder.com/60" alt="icon" class="mb-3 rounded-circle">
                <h5 class="fw-bold">Ontime meeting with experts</h5>
                <p>Schedule on-time meetings with our expert team to discuss your project needs.</p>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <div class="benefit-card shadow p-4 bg-white w-100 rounded text-start mx-auto">
                <img src="https://via.placeholder.com/60" alt="icon" class="mb-3 rounded-circle">
                <h5 class="fw-bold">Detailed report submission</h5>
                <p>Submit detailed reports to keep track of project progress and milestones.</p>
            </div>
        </div>
    </div>

    <div class="row g-5 mt-4">
        <div class="col-md-6 d-flex">
            <div class="benefit-card shadow p-4 bg-white w-100 rounded text-start mx-auto">
                <img src="https://via.placeholder.com/60" alt="icon" class="mb-3 rounded-circle">
                <h5 class="fw-bold">Quality check by expert members</h5>
                <p>Ensure top-notch quality with thorough checks conducted by our expert team members.</p>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <div class="benefit-card shadow p-4 bg-white w-100 rounded text-start mx-auto">
                <img src="https://via.placeholder.com/60" alt="icon" class="mb-3 rounded-circle">
                <h5 class="fw-bold">Filtering projects for mass tax</h5>
                <p>Efficiently filter projects for mass taxation with our streamlined system.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .benefit-card, .card {
        max-width: 100%; /* Ensures cards take up full width on smaller screens */
    }
    ul {
        line-height: 1.8; /* Adjust the line spacing for readability */
    }
</style>

@endsection
