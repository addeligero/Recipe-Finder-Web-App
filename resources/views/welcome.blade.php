<x-layout>
       <style>
        .hero {
            background: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }
        .welcome {
            padding: 100px 0;
            text-align: center;
            background: #e9ecef;
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
                    <li class="nav-item"><a class="nav-link" href="#welcome">Welcome</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="loginBtn">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="registerBtn">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Welcome Section -->
    <section id="welcome" class="welcome">
        <div class="container">
            <h2>Welcome to Our Platform</h2>
            <p>Register or Login to get started.</p>
            <a href="#" class="btn btn-success" id="register">Register</a>
            <a href="#" class="btn btn-secondary" id="login">Login</a>
        </div>
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