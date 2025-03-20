<x-layout>
    <style>
        .hero {
            background: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }
        .welcome {
            padding: 80px 0;
            text-align: center;
            background: #e9ecef;
            height: 100vh;
        }
        .welcome img {
            max-width: 400px; 
            height: auto; 
            border-radius: 20px;
            display: block;
            margin: 20px auto; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        }
        .welcome p {
            max-width: 600px;
            margin: 20px auto;
            font-size: 18px;
            color: #333;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">RecipeRadar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   <!--future lists here-->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section id="welcome" class="welcome">
        <div class="container">
            <h2 class="font-italic">Your Ultimate Recipe Explorer</h2>
            <img src="{{ asset('build/assets/img/1.jpg') }}" alt="Welcome Image">
            <p>RecipeRadar helps you discover delicious recipes with ease. Search, save, and cook your favorite meals with step-by-step guides and ingredient lists. Whether you're a beginner or a pro, find the perfect dish for any occasion!</p>
            <a href="/register" class="btn btn-success" id="register">Register</a>
            <a href="/login" class="btn btn-secondary" id="login">Login</a>
        </div>
        <br><br><br> <br>
        <hr>
    </section>

    <script>
        // Smooth scrolling
        $(document).ready(function(){
            $("a.nav-link, a.btn").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 800);
                }
            });
        });
    </script>
</x-layout>
