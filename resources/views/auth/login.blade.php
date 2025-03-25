<x-layout>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="col-md-5 col-sm-8 col-10">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header text-white text-center" style="background: #008080;">
                    <h3 class="mb-0">Welcome Back</h3>
                    <p class="mb-0 small">Find your favorite recipes easily!</p>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" 
                                value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" 
                                name="password" required placeholder="Enter your password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <a href="#" class="text-decoration-none text-primary small">Forgot Password?</a>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="btn w-100 mt-3 text-white" style="background: #008080;">
                            Login
                        </button>
                        <p class="text-center mt-3">New here? 
                            <a href="{{ route('register') }}" class="text-primary text-decoration-none">
                                Create an account
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
