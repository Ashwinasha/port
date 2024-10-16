<nav class="navbar navbar-expand-lg navbar-light bg-black">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img style=" height:68px;" src="{{ asset('/img/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4 text-white" href="#">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-white" href="#">Services</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4 text-white" href="#">Projects</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-white" href="#">Packages</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-white" href="#">Our Products</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-white" href="#">Blog</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-white" href="#">Careers</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn gradient-btn fs-4" href="#">Let's Talk</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


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