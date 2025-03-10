<x-layout>
   
     <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #f8f9fa;
            padding: 50px;
        }
        .btn-custom {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #b02a37;
        }
    </style>

    <body>
    
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Yummy<span class="text-danger">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="#" class="btn btn-danger ms-3">Book a Table</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1>Enjoy Your Healthy <br> Delicious Food</h1>
                    <p>We are a team of talented chefs making fresh and tasty meals.</p>
                    <div>
                        <a href="#book" class="btn btn-custom">Book a Table</a>
                        <a href="#" class="btn btn-outline-dark ms-2"><i class="fas fa-play"></i> Watch Video</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.immediate.co.uk/production/volatile/sites/30/2020/08/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg?resize=768,574" class="img-fluid rounded shadow-lg" alt="Delicious Food">
                </div>
            </div>
        </div>
    </section>
    
   
</body>
</x-layout>